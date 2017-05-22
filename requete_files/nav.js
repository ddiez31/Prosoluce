var nav =
{
	type:	null,
	etape:	1,
	uId:	0,
	mod:	null,
	mixed:	null,
	baseUrl: '',
	toOpen: null,
	
	dragIMG: function ( elem )
	{
		if ( elem.tagName == 'IMG' )
			nav.mixed = elem;
	},
	
	select: function ( type )
	{
		if ( document.getElementById ( type ) )
		{
			nav.type = type;
			
			var elts = document.getElementsByClassName ( 'cadre' );
			
			for ( var i = 0 ; elts.length > i ; i++ )
				elts[i].classList.remove ( 'type_actif' );
			
			document.getElementById ( type ).classList.add ( 'type_actif' );
		}
	},
	
	select_m: function ( modele )
	{
		if ( document.getElementById ( modele ) )
		{
			nav.mod  = modele;
			
			var elts = document.getElementsByClassName ( 'cadre' );
			
			for ( var i = 0 ; elts.length > i ; i++ )
				elts[i].classList.remove ( 'type_actif' );

			document.getElementById ( modele ).classList.add ( 'type_actif' );
		}
	},
	
	show_menu: function ( type )
	{
		if ( typeof ( type ) == 'undefined' )
		{
			$("#editor_tabs").tabs("option", "active", 0);
		}
		else
		{
			if ( type == 'general' )
				$("#editor_tabs").tabs("option", "active", 0);
			else if ( type == 'bloc' )
				$("#editor_tabs").tabs("option", "active", 1);
			else
				$("#editor_tabs").tabs("option", "active", 2);
			ajax (
			{
				url:	nav.baseUrl + '?get_menu=' + type + "&open=" + window.tid + "&basedon=" + window.basedon,
				onComplete:	function ( retour )
				{
					document.getElementById ( 'm_l_content' ).innerHTML = retour;
					
					var scr = document.getElementById ( 'm_l_content' ).getElementsByTagName ( 'script' );
					
					for ( var i = 0 ; scr.length > i ; i++ )
						eval ( scr[i].innerHTML );
				}
			} );
		}
	},
	
	go: function ( )
	{
		if ( isNaN ( nav.etape ) )
			return;
		
		if ( isNaN ( nav.uId ) )
			return;
		
		if ( nav.type != 'a' && nav.type != 'm' && nav.type != 'i' )
			return;

		nav.load ( true );
		
		ajax (
		{
			url:			nav.baseUrl + '?etape=' + nav.etape + '&type=' + nav.type + '&uId=' + nav.uId + '&m=' + nav.mod + '&open=' + nav.toOpen+ '&duplicate=' + nav.duplicate,
			onComplete:		function ( retour )
			{
				
				var content = JSON.parse ( retour );
				
				document.getElementById ( 'etape' ).innerHTML = content['content'];
				document.getElementById ( 'etape' ).className = 'etape' + nav.etape;
				document.getElementById ( 'top' ).innerHTML   = content['title'];
				
				if ( typeof ( content['js'] ) != 'undefined' )
					eval ( content['js'] );
				
				if ( typeof ( content['bouton'] ) != 'undefined' )
				{
					document.getElementById ( 'bouton' ).innerHTML = content['bouton']['text'];
					document.getElementById ( 'bouton' ).setAttribute ( 'onclick', content['bouton']['action'] );
					
				}
			}
		} );
	},
	
	load: function ( etat )
	{
	}
}