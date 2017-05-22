// Classe de gestion de l'editeur de mailing
var editor =
{
	// Variable contenant les informations nécéssaire lors du Drag d'une image
	drag_elem:		null,
	
	// Variable contenant l'element en cours de configuration
	config_elem:	null,
	
	// Fonction permettant l'initialisation de l'editeur
	init: function ( )
	{
		// Liste des blocs
		var blocs = document.getElementById ( 'sortable' ).getElementsByClassName ( 'elem' );
		
		for ( var i = 0 ; blocs.length > i ; i++ )
		{
			// Ajout du menu lors du survol du bloc
			editor.add_menu ( blocs[i] );
		}
		
		// Ajout des évenements
		document.getElementById ( 'sortable' ).addEventListener ( 'dragover', editor.dragover );
		document.getElementById ( 'sortable' ).addEventListener ( 'drop', editor.drop );
		document.getElementById ( 'work_area' ).addEventListener ( 'click', editor.click );
		
		// Active sortable de jQuery
		$( '#sortable' ).sortable (
		{
			placeholder:			'ui-state-highlight',
			forcePlaceholderSize:	true,
			handle:					'.move',
			cancel:					'[contenteditable]'
		} );
		
		// Désactive la selection
		$( '#sortable' ).disableSelection ( );
	},
	
	/**************************************************************************
	* Menu au survol d'un bloc
	**************************************************************************/

	// Fonction permettant d'ajouter les fonctionnalités de gestion du bloc (position, dupplication, parametres et suppression)
	add_menu: function ( elem )
	{
		// Configuration du bloc lorsqu'on click dessus
		elem.addEventListener ( 'click', editor.parametres );
		
		// Menu de survol
		var div       = document.createElement ( 'div' );
		div.className = 'elemenu';
		
		elem.appendChild ( div );
		
		// Bouton deplacer
		var dep       = document.createElement ( 'img' );
		dep.src       = 'images/editor/move.png';
		dep.className = 'move';
		dep.title     = 'Déplacer le bloc de contenu';
		
		div.appendChild ( dep );
		
		// Bouton copier
		var cop       = document.createElement ( 'img' );
		cop.src       = 'images/editor/copy.png';
		cop.className = 'copy';
		cop.title     = 'Dupliquer le bloc de contenu';
		
		cop.addEventListener ( 'click', editor.copy, true );
		
		div.appendChild ( cop );
		
		// Bouton supprimer
		var del       = document.createElement ( 'img' );
		del.src       = 'images/editor/close.png';
		del.className = 'delete';
		del.title     = 'Supprimer le bloc de contenu';
		
		del.addEventListener ( 'click', editor.delete );
		
		div.appendChild ( del );
	},
	
	// Fonction pour duppliquer un bloc
	copy: function ( event )
	{
		// Duplique le noeud
		var add    = event.target.parentNode.parentNode.cloneNode ( true );
		
		// Recherche le noeud suivant
		var next   = event.target.parentNode.parentNode.nextSibling;
		
		// Recherche le noeud parent
		var parent = event.target.parentNode.parentNode.parentNode;
		
		// Insert le nouveau noeud avant le noeud suivant (en gros, en dessous de celui qu'on a voulu dupliquer)
		parent.insertBefore ( add, next );
		
		// Remplace les évenements sur les boutons de survol
		add.getElementsByClassName ( 'copy' )[0].removeEventListener ( 'click', editor.copy );
		add.getElementsByClassName ( 'delete' )[0].removeEventListener ( 'click', editor.delete );
		add.getElementsByClassName ( 'copy' )[0].addEventListener ( 'click', editor.copy );
		add.getElementsByClassName ( 'delete' )[0].addEventListener ( 'click', editor.delete );

		// Remplace l'évenement click car lorsqu'on clone le noeud l'évenement est toujours rattaché au noeud source
		add.removeEventListener ( 'click', editor.parametres );
		add.addEventListener ( 'click', editor.parametres );
	},
	
	// Fonction permettant de supprimer un bloc
	delete: function ( event )
	{
		if ( confirm ( "Etes vous sure de vouloir supprimer ce bloc?" ) )
		{
			var del    = event.target.parentNode.parentNode;
			var parent = event.target.parentNode.parentNode.parentNode;
		
			parent.removeChild ( del );
		}
	},
	
	// Fonction permettant d'ouvrir le panneau de configuration d'un bloc
	parametres: function ( event )
	{
		var type = editor.get_type_bloc ( event.target );
		var elem = editor.get_bloc ( event.target );
		
		editor.show_options ( elem, 'blk_' + type );
	},
	
	// Fonction permettant de recuperer le type de bloc
	get_type_bloc: function ( elem )
	{
		if ( elem.id == 'sortable' )
			return false;
		else if ( elem.classList.contains ( 'elem' ) )
			return elem.className.replace ( /^elem /, '' );
		else
			return editor.get_type_bloc ( elem.parentNode );
	},
	
	// Fonction permettant de récuperer le bloc
	get_bloc: function ( elem )
	{
		if ( elem.classList.contains ( 'elem' ) )
			return elem;
		else
			return editor.get_bloc ( elem.parentNode );
	},
	
	
	/**************************************************************************
	* Drag'n'Drop image
	**************************************************************************/

	// Fonction permettant d'indiquer au navigateur qu'on autorise le DROP
	dragover: function ( event )
	{
		if ( event.target.nodeName == 'IMG' && event.target.classList.contains ( 'imdrop' ) )
			event.preventDefault ( );
	},
	
	// Fonction permettant de modifier le SRC d'une image lorsqu'on DROP une autre image dessus
	drop: function ( event )
	{
		event.preventDefault ( );
		
		if ( event.target.nodeName == 'IMG' && editor.drag_elem != null && editor.drag_elem.tagName == 'IMG' )
			event.target.src = editor.drag_elem.src;
		else
			alert ( "Elements incompatibles entre eux" );
		
		editor.drag_elem = null;
	},
	
	
	/**************************************************************************
	* Parametrage des blocs
	**************************************************************************/
	
	// Fonction permettant de mapper les clics fait sur l'espace de travail
	click: function ( event )
	{
		/******************************************************************************************
		* Zone de texte
		******************************************************************************************/

		// Si on edite avec CKE
		if ( event.target.classList.contains ( 'fulleditor' ) )
		{
			if (window.ps_editor_last_element != event.target) {
				window.ps_editor_last_element = event.target;
				// Chargement de CKE
				event.target.contentEditable = true;
	
				var ed = CKEDITOR.inline ( event.target );
				
				CKEDITOR.config.basicEntities = false;
				CKEDITOR.config.forcePasteAsPlainText = true;
				ed.on('paste', function(evt) { 
				    evt.data.dataValue = evt.data.dataValue.replace(/&nbsp;/g,'');
				    evt.data.dataValue = evt.data.dataValue.replace(/<p><\/p>/g,'');
				}, null, null, 9);
				event.target.focus();
			}
		}
		
		/******************************************************************************************
		* Options des blocs
		******************************************************************************************/
		if ( event.target.hasAttribute ( 'CONFTYPE' ) ) 
			editor.show_options ( event.target );
		else if ( ! editor.get_type_bloc ( event.target ) )
			nav.show_menu ( 'general' );
	
		editor.get_conf_ariane ( event.target );
	},
	
	get_conf_ariane: function ( elem )
	{
		return;
		
		/*var ariane = new Array ( );
		var cur_el = elem;
		
		while ( cur_el.id != 'sortable' )
		{
			if ( cur_el.hasAttribute ( 'conftype' ) )
				ariane[ariane.length] = cur_el;
			
			cur_el = cur_el.parentNode;
		}
		
		var left = '<ul>';
		left    += '	<li>G&#233;n&#233;ral</li>';
		
		
		for ( var i = ( ariane.length - 1 ) ; i >= 0 ; i-- )
		{
			left += "<li>";
			
			if ( ariane[i].classList.contains ( 'elem' ) )
				left += "Bloc";
			else
				left += "Element";
			
			left += "</li>";
		}
		
		left += '</ul>';
		
		// Vide le menu de gauche
		document.getElementById ( 'm_l_content' ).innerHTML = left;
		
		// Affiche le menu de gauche si il ne l'est pas deja
		if ( ! document.getElementById ( 'menu_left' ).classList.contains ( 'menu_left_deplier' ) )
			document.getElementById ( 'menu_left' ).classList.add ( 'menu_left_deplier' );*/

	},
	
	// Fonction permettant de generer le formulaire de configuration des blocs et elements
	show_options: function ( elem, type )
	{		
		// Afficher l'onglet général
		document.getElementById ( 'm_l_content' ).innerHTML = '';
		
		if ( elem.hasAttribute ( 'conftype' ) )
		{
			if ( elem.getAttribute ( 'conftype' ) == '_herite_' )
				return editor.show_options ( elem.parentNode );

			var conf_type = elem.getAttribute ( 'conftype' ).split ( /,/ );
			
			for ( var i = 0 ; conf_type.length > i ; i++ )
			{
				if ( conf_type[i].match ( /.[^:]+:\d+/ ) )
				{
					var t     = conf_type[i].split ( /:/ )[0];
					var level = conf_type[i].split ( /:/ )[1];
				}
				else
				{
					var t     = conf_type[i];
					var level = 0;
				}
				
				if ( level == 0 )
					var el = elem;
				else
					var el = elem.getElementsByTagName ( '*' )[( level - 1 )];
			
				// Vérifie si le type de formulaire éxiste
				if ( typeof ( form_type[t] ) != 'undefined' )
				{
					// Indique sur quel élément il faut agir
					form_type[t]._elem = el;
					
					// Vérifie si un label éxiste
					if ( typeof ( form_type[t].label ) != 'undefined' && form_type[t].label != '' )
					{
						var label       = document.createElement ( 'h4' );
						label.className = 'label_editor';
						label.innerHTML = form_type[t].label + ' :';
						
						document.getElementById ( 'm_l_content' ).appendChild ( label );
					}
					
					// Insertion du formulaire
					var input       = document.createElement ( 'div' );
					input.className = 'input';
					input.innerHTML = form_type[t].form;
					
					$("#editor_tabs .ui-tabs-nav li").last().show();
					document.getElementById ( 'm_l_content' ).appendChild ( input );
					
					// Si défini, on appel la fonction de chargement des données dans le formulaire
					if ( typeof ( form_type[t].load ) )
						form_type[t].load ( );
					
					$("#editor_tabs").tabs("option", "active", 3);
				}
			}
		}
	},
	
	// Fonction permettant de declencher l'enregistrement
	save: function ( )
	{
		var toSave = 
		{
			'general':		
			{
				'background':		editor.rgb2hex ( document.getElementById ( 'sortable' ).style.backgroundColor ),
				'preheader':		document.getElementById ( 'preheader' ).value
			},
			'blocs':				[]
		};
		
		var libelle = document.getElementById ( 'libelle' ).value;
		var objet = document.getElementById ( 'objet' ).value;	
		
		// Conteneur
		var cont = document.getElementById ( 'sortable' );
		
		// Recuperation des blocs
		var blk  = cont.getElementsByClassName ( 'elem' );
		
		for ( var i = 0 ; blk.length > i ; i++ )
		{
			var copy = blk[i].cloneNode ( true );
			
			copy.removeChild ( copy.getElementsByClassName ( 'elemenu' )[0] );
			
			var blk_config = {
					'blk_type':		editor.get_type_bloc ( copy ),
					'configs':		editor.get_elem_config ( copy )
			};
			
			toSave.blocs[toSave.blocs.length] = blk_config;
		}
		
		if ( libelle && objet) {
			var rawJson = JSON.stringify ( toSave );
			var rawJson = rawJson.replace('&nbsp;',' ');
			var urlJson = encodeURIComponent(rawJson);
			var toSaveJson = 'json=' + urlJson + '&libelle=' + document.getElementById ( 'libelle' ).value + '&objet=' + document.getElementById ( 'objet' ).value + '&mail_link_tracking=' + document.getElementById ( 'mail_link_tracking' ).checked + '&mail_url_mirror=' + document.getElementById ( 'mail_url_mirror' ).checked + '&max_width=' + document.getElementById ( 'form_pageWidth' ).value+ '&custom_header=' + document.getElementById ( 'custom_header_t' ).value+ '&custom_footer=' + document.getElementById ( 'custom_footer_t' ).value;
			ajax (
			{
				url:		'ajax/templates/liste_mail_add_wizard.php?save&tid=' + nav.toOpen,
				method:		'POST',
				post:		toSaveJson,
				onComplete:	function ( retour )
				{
					if ( isNaN(retour) )
						alert ( "Erreur lors de l'enregistrement." );
					else {
						alert ( 'Enregistrement effectué' );
						nav.toOpen = retour;
					}
				}
			} );
		} else {
			if ( libelle )
				alert ( "Merci de renseigner le champ Objet." );
			else
				alert ( "Merci de renseigner le champ Libellé." );
		}
	},
	
	// Fonction permettant de recuperer la configuration d'un element
	get_elem_config: function ( elem )
	{
		if ( elem.contentEditable == 'true' || ( elem.classList && elem.classList.contains ( 'fulleditor' )) ) {
			var txt = elem.innerHTML.trim ( );
			var txt = txt.replace("/&(?!([a-zA-Z0-9]+);)/g", "&amp;");
			
		}
		else
			var txt = null;
		
		if ( elem.hasAttribute && elem.hasAttribute ( 'alt' ) )
			var alt = elem.getAttribute ( 'alt' );
		else
			var alt = null;
		
		if ( elem.hasAttribute && elem.hasAttribute ( 'src' ) )
			var src = elem.getAttribute ( 'src' );
		else
			var src = null;
		
		if ( elem.hasAttribute && elem.hasAttribute ( 'url' ) )  {
			var href = elem.getAttribute ( 'url' );	
			var link = elem.getAttribute ( 'link' );	
		}
		else if ( elem.hasAttribute && elem.hasAttribute ( 'link' ) ){
			var link = elem.getAttribute ( 'link' );
		var href = elem.getAttribute ( 'url' );	
		}
		else if ( elem.hasAttribute && elem.hasAttribute ( 'href' ) ){
			var link = elem.getAttribute ( 'href' );
		var href = elem.getAttribute ( 'url' );	
		}
		else
			var link = null;
		
		if (elem.style && elem.style.cssText)
		    var elemstyle = elem.style.cssText;
		else
		    var elemstyle = "";
		        
        if (elem.className && elem.className)
            var elemclass = elem.className;
        else
            var elemclass = "";
		
		var blk_config = 
		{
			'type':		elem.nodeName,
			'style':	elemstyle,
			'text':		txt,
			'alt':		alt,
			'src':		src,
			'href':		href,
			'link':		link,
			'class':     elemclass,
			'childs':	[]
		}
		
		if ( elem.hasChildNodes ( ) )
		{
			var childs = elem.childNodes;

			for ( var i = 0 ; childs.length > i ; i++ ) 
			{
				if ( childs[i].nodeName != '#text' )
					blk_config.childs[blk_config.childs.length] = editor.get_elem_config ( childs[i] );
			}
		}

		return blk_config;
	},
	
	// Fonction permettant de convertir une couleur au format rgb() ou rgba() en hexadecimal
	rgb2hex: function ( rgb )
	{
		rgb = rgb.match ( /^rgba?\((\d+),\s*(\d+),\s*(\d+)(?:,\s*(\d+))?\)$/ );
		
		function hex ( x )
		{
			return ( '0' + parseInt ( x ).toString ( 16 ) ).slice ( -2 );
		}
		
		return '#' + hex ( rgb[1] ) + hex ( rgb[2] ) + hex ( rgb[3] );
	}
}
