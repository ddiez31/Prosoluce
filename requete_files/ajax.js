var ajax = function ( datas )
{
	var xhr;

	try
	{
		xhr = new ActiveXObject ( 'Msxml2.XMLHTTP' );
	}
	catch ( e )
	{
		try
		{
			xhr = new ActiveXObject ( 'Microsoft.XMLHTTP' );
		}
		catch ( e2 ) 
		{
			try
			{
				xhr = new XMLHttpRequest ( );
			}
			catch ( e3 )
			{
				xhr = false;
			}
		}
	}

	xhr.onreadystatechange = function ( )
	{
		if ( xhr.readyState  == 4 )
		{
			if ( xhr.status  == 200 )
			{
				if ( typeof datas.update == 'object' )
					datas.update.innerHTML = xhr.responseText;
				else if ( typeof datas.update != 'undefined' )
				{
					if ( document.getElementById ( datas.update ) )
						document.getElementById ( datas.update ).innerHTML = xhr.responseText;
				}

				if ( typeof datas.onComplete != 'undefined' )
					datas.onComplete ( xhr.responseText );
			}
		}
	}

	if ( typeof datas.method == 'undefined' || datas.method != 'POST' )
		datas.method = 'GET';

	xhr.open ( datas.method, datas.url,  true );

	if ( datas.method == 'POST' && typeof datas.post != 'undefined' )
	{
		xhr.setRequestHeader ( 'Content-type', 'application/x-www-form-urlencoded' );
		xhr.setRequestHeader ( 'Content-length', datas.post.length );
		xhr.setRequestHeader ( 'Connection', 'close' );

		xhr.send ( datas.post );
	}
	else
		xhr.send ( );
}
