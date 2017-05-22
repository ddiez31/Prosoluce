var form_type =
{
	// Couleur d'arrière plan
	'bgColor':
	{
		'label':		"Couleur d'arri&egrave;re plan",
		'form':			'<input type="radio" name="form_bgCol" id="form_bgCol_col"    value="col"    onclick="form_type[\'bgColor\'].functions.switchType ( this.value );" /> <input type="text" id="form_bgCol" style="display: block" /> ' +
					'<input type="radio" name="form_bgCol" id="form_bgCol_transp" value="transp" onclick="form_type[\'bgColor\'].functions.switchType ( this.value );" /> <label for="form_bgCol_transp">Transparence</label>',			

		'functions':
		{
			'switchType': function ( value )
			{
				// Si on veut définir une couleur on applique la dernière couleur selectionnee
				if ( value == 'col' )
					form_type['bgColor'].functions.setColor ( $( "#form_bgCol" ).spectrum ( 'get' ) );

				// Si on veut de la transparence on l'applique
				else
					form_type['bgColor'].functions.setColor ( 'transparent' );
			},
			
			'setColor': function ( value )
			{
				form_type['bgColor']._elem.style.background = value;
			}
		},
		
		'load': function ( )
		{
			// Couleur par défaut si y a rien de défini
			var col = '#ffffff';

			// Si on est en transparent
			if ( form_type['bgColor']._elem.style.background == 'transparent' )
			{
				form_type['bgColor'].functions.switchType ( 'transp' );
				
				document.getElementById ( 'form_bgCol_transp' ).checked = true;
			}

			// Si une couleur est définie
			else if ( form_type['bgColor']._elem.style.background != '' )
			{
				form_type['bgColor'].functions.switchType ( 'col' );
				
				document.getElementById ( 'form_bgCol_col' ).checked = true;
				
				var col = editor.rgb2hex ( getComputedStyle ( form_type['bgColor']._elem ).backgroundColor );
			}

			// Palette de couleur
			var color = $( "#form_bgCol" ).spectrum (
			{
				showPalette:		true,
				showSelectionPalette:	false,
				showButtons:		false,
				showInput:		true,
				preferredFormat:	'hex',
				palette:		[["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]],
				color:			col,

				change: function ( color )
				{
					form_type['bgColor'].functions.setColor ( color.toHexString ( ) );
				},

				move: function ( color )
				{
					form_type['bgColor'].functions.setColor ( color.toHexString ( ) );
				},

				beforeShow: function ( color )
				{
					document.getElementById ( 'form_bgCol_col' ).checked = true;

					form_type['bgColor'].functions.setColor ( color.toHexString ( ) );
				}
			} );
		}
	},
	
	// Couleur du texte
	'color':
	{
		'label':		"Couleur du texte",
		'form':			'<input type="text" id="form_col" />',
						
		'functions':
		{
			'setColor': function ( value )
			{
				form_type['color']._elem.style.color = value;
			}
		},
		
		'load': function ( )
		{
			// Couleur par défaut si y a rien de défini
			var col = '#000000';

			if ( form_type['color']._elem.style.color != '' )
				var col = editor.rgb2hex ( getComputedStyle ( form_type['color']._elem ).color );

			// Palette de couleur
			var color = $( "#form_col" ).spectrum (
			{
				showPalette:		true,
				showSelectionPalette:	false,
				showButtons:		false,
				showInput:		true,
				preferredFormat:	'hex',
				palette:		[["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]],
				color:			col,

				change: function ( color )
				{
					form_type['color'].functions.setColor ( color.toHexString ( ) );
				},

				move: function ( color )
				{
					form_type['color'].functions.setColor ( color.toHexString ( ) );
				}
			} );
		}
	},
	
	
	// Arrondi des bords
	'radius':
	{
		'label':		"Arrondi des bords",
		'form':			'<input id="form_radius" type="range" value="0" max="20" min="0" oninput="form_type[\'radius\'].functions.set ( this.value );" />',
						
		'functions':
		{
			'set': function ( value )
			{
				form_type['radius']._elem.style.borderRadius = value + 'px';
			}
		},
		
		'load': function ( )
		{
			var rad = parseInt ( form_type['radius']._elem.style.borderRadius );
			
			document.getElementById ( 'form_radius' ).value = rad;
		}
	},
	
	
	// Arrondi des bords
	'radiusIMG':
	{
		'label':		"Arrondi de l'image",
		'form':			'<input id="form_radius" type="range" value="0" max="20" min="0" oninput="form_type[\'radiusIMG\'].functions.set ( this.value );" />',
						
		'functions':
		{
			'set': function ( value )
			{
				form_type['radiusIMG']._elem.style.borderRadius = value + 'px';
			}
		},
		
		'load': function ( )
		{
			var rad = parseInt ( form_type['radiusIMG']._elem.style.borderRadius );
			
			document.getElementById ( 'form_radius' ).value = rad;
		}
	},
	
	
	// Hauteur
	'height':
	{
		'label':		"Hauteur",
		'form':			'<input id="form_height" type="range" value="30" max="100" min="5" oninput="form_type[\'height\'].functions.set ( this.value );" />',
						
		'functions':
		{
			'set': function ( value )
			{
				form_type['height']._elem.style.height = value + 'px';
			}
		},
		
		'load': function ( )
		{
			var rad = parseInt ( form_type['height']._elem.style.height );
			
			document.getElementById ( 'form_height' ).value = rad;
		}
	},
	
	// Lien
	'lien':
	{
		'label':		"Cible du lien",
		'form':			'<input type="text" id="form_lien" placeholder="http://www.exemple.com" onchange="form_type[\'lien\'].functions.set ( this.value );" />',
		
		'functions':
		{
			'set': function ( value )
			{
					var l = 'link';
				
				form_type['lien']._elem.setAttribute ( l, value );
			}
		},
		
		'load': function ( elem )
		{
				var l = 'link';
			
			if ( form_type['lien']._elem.hasAttribute ( l ) )
				document.getElementById ( 'form_lien' ).value = form_type['lien']._elem.getAttribute ( l );
		}
	},
	
	// Legende
	'legende':
	{
		'label':		"L&#233;gende",
		'form':			'<input type="text" id="form_legende" onchange="form_type[\'legende\'].functions.set ( this.value );" />',
		
		'functions':
		{
			'set': function ( value )
			{
				form_type['legende']._elem.setAttribute ( 'alt', value );
				form_type['legende']._elem.setAttribute ( 'title', value );
			}
		},
		
		'load': function ( )
		{
			if ( form_type['legende']._elem.hasAttribute ( 'title' ) )
				document.getElementById ( 'form_legende' ).value = form_type['legende']._elem.getAttribute ( 'title' );
			else if ( form_type['legende']._elem.hasAttribute ( 'alt' ) )
				document.getElementById ( 'form_legende' ).value = form_type['legende']._elem.getAttribute ( 'alt' );
		}
	},
	
	// Police
	'font':
	{
		'label':		"Police d'&#233;criture",
		'form':			'<select id="form_font" onchange="form_type[\'font\'].functions.set ( this.value );" class="champ"><optgroup label="Sans-Serif fonts"><option value="Arial,Helvetica,sans-serif">Arial</option><option value="Comic Sans MS,cursive,sans-serif">Comic Sans MS</option><option value="Impact,Charcoal,sans-serif">Impact</option><option value="Trebuchet MS,Helvetica,sans-serif">Trebuchet MS</option><option value="Verdana,Geneva,sans-serif">Verdana</option></optgroup><optgroup label="Serif fonts"><option value="Georgia,serif">Georgia</option><option value="Times New Roman,Times,serif">Times New Roman</option></optgroup><optgroup label="Monospace fonts"><option value="Courier New,Courier,monospace">Courier New</option></optgroup></select>',
		
		'functions':
		{
			'set': function ( value )
			{
				form_type['font']._elem.style.fontFamily = value;
			}
		},
		
		'load': function ( )
		{
			document.getElementById ( 'form_font' ).value = form_type['font']._elem.style.fontFamily.replace ( /, /g, ',' );
		}
	},
	
	// Souligné
	'fontStyle':
	{
		'label':		'Mise en forme du texte',
		'form':			'<input type="checkbox" id="form_underline" onchange="form_type[\'fontStyle\'].functions.set ( \'underline\', this.checked );" /> <label for="form_underline">Soulign&#233;</label>' +
					'<input type="checkbox" id="form_bold" onchange="form_type[\'fontStyle\'].functions.set ( \'bold\', this.checked );" /> <label for="form_bold">Gras</label>' +
					'<input type="checkbox" id="form_italique" onchange="form_type[\'fontStyle\'].functions.set ( \'italic\', this.checked );" /> <label for="form_italique">Italique</label>',
						
		'functions':
		{
			'set': function ( type, value )
			{
				switch ( type )
				{
					case 'underline':
						if ( value )
							form_type['fontStyle']._elem.style.textDecoration = 'underline';
						else
							form_type['fontStyle']._elem.style.textDecoration = 'none';
					break;


					case 'bold':
						if ( value )
							form_type['fontStyle']._elem.style.fontWeight = 'bold';
						else
							form_type['fontStyle']._elem.style.fontWeight = 'normal';
					break;


					case 'italic':
						if ( value )
							form_type['fontStyle']._elem.style.fontStyle = 'italic';
						else
							form_type['fontStyle']._elem.style.fontStyle = 'normal';
					break;
				}
			}
		},
		
		'load': function ( )
		{			
			if ( form_type['fontStyle']._elem.style.textDecoration == 'underline' )
				document.getElementById ( 'form_underline' ).checked = true;
			else
				document.getElementById ( 'form_underline' ).checked = false;

			if ( form_type['fontStyle']._elem.style.fontWeight == 'bold' )
				document.getElementById ( 'form_bold' ).checked = true;
			else
				document.getElementById ( 'form_bold' ).checked = false;

			if ( form_type['fontStyle']._elem.style.fontStyle == 'italic' )
				document.getElementById ( 'form_italique' ).checked = true;
			else
				document.getElementById ( 'form_italique' ).checked = false;
		}
	},
	
	// Souligné
	'underlined':
	{
		'form':			'<input type="checkbox" id="form_underline" onchange="form_type[\'underline\'].functions.set ( this.checked );" /> Soulign&#233;',
						
		'functions':
		{
			'set': function ( value )
			{
				if ( value )
					form_type['underline']._elem.style.textDecoration = 'underline';
				else
					form_type['underline']._elem.style.textDecoration = 'none';
			}
		},
		
		'load': function ( )
		{			
			if ( form_type['underline']._elem.style.textDecoration == 'underline' )
				document.getElementById ( 'form_underline' ).checked = true;
			else
				document.getElementById ( 'form_underline' ).checked = false;
		}
	},
	
	// Gras
	'bold':
	{
		'form':			'<input type="checkbox" id="form_bold" onchange="form_type[\'bold\'].functions.set ( this.checked );" /> Gras',
						
		'functions':
		{
			'set': function ( value )
			{
				if ( value )
					form_type['bold']._elem.style.fontWeight = 'bold';
				else
					form_type['bold']._elem.style.fontWeight = 'normal';
			}
		},
		
		'load': function ( )
		{			
			if ( form_type['bold']._elem.style.fontWeight == 'bold' )
				document.getElementById ( 'form_bold' ).checked = true;
			else
				document.getElementById ( 'form_bold' ).checked = false;
		}
	},
	
	// Taille du texte
	'fontSize':
	{
		'label':		"Taille du texte",
		'form':			'<input id="form_fontSize" type="range" value="17" max="32" min="11" oninput="form_type[\'fontSize\'].functions.set ( this.value );" />',
						
		'functions':
		{
			'set': function ( value )
			{
				form_type['fontSize']._elem.style.fontSize = value + 'px';
			}
		},
		
		'load': function ( )
		{
			var size = parseInt ( form_type['fontSize']._elem.style.fontSize );
			
			document.getElementById ( 'form_fontSize' ).value = size;
		}
	},
}
