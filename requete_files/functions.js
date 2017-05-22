// $(document).ready(function() {
// 	/* Cache le H1 */
// 	$('#h1_titre').hide();
// });

/* Passe le datepicker Jquery en FR */
function datepicker_fr(){
	$.datepicker.regional['fr'] = {
			clearText: 'Effacer', clearStatus: '',
			closeText: 'Fermer', closeStatus: 'Fermer sans modifier',
			prevText: '&lt;Pr&eacute;c', prevStatus: 'Voir le mois pr&eacute;c&eacute;dent',
			nextText: 'Suiv&gt;', nextStatus: 'Voir le mois suivant',
			currentText: 'Courant', currentStatus: 'Voir le mois courant',
			monthNames: ['Janvier','F&eacute;vrier','Mars','Avril','Mai','Juin','Juillet','Ao&ucirc;t','Septembre','Octobre','Novembre','D&eacute;cembre'],
			monthNamesShort: ['Jan','F&eacute;v','Mar','Avr','Mai','Jun','Jul','Ao&ucirc;','Sep','Oct','Nov','D&eacute;c'],
			monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre ann&eacute;e',
			weekHeader: 'Sm', weekStatus: '',
			dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
			dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
			dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
			dayStatus: 'Utiliser DD comme premier jour de la semaine', dateStatus: 'Choisir le DD, MM d',
			dateFormat: 'dd/mm/yy', firstDay: 0,
			initStatus: 'Choisir la date', isRTL: false
	};
	
	$.datepicker.setDefaults($.datepicker.regional['fr']);
}

function change_val_cli(url,question,initial){
	var nouvelleval = prompt(question,initial);

	if(nouvelleval != "" && nouvelleval != null){
		makeRequest(url + "&val=" + nouvelleval);
	}else if(nouvelleval == ""){
		alert("Il est obligatoire d'entrer une valeur !");
	}
}

function confirm2go(url,question,ajax){
	if(confirm(question)){
		if(ajax == false)       parent.location=url;
		else                    makeRequest(url);
		return true;
	}else   return false;
}

function confirm2go_refresh(url,question,divid,urld){
	if(confirm(question)){
		makeRequest(url);
		url2div(urld,divid);
	}else   return false;
}

// Gestion nombre caractères SMS restants
function textCounter(field, cntfield, maxlimit, block){
	if (field.value.length > maxlimit && block == true)
		field.value = field.value.substring(0, maxlimit);
	else
		cntfield.innerHTML = maxlimit - field.value.length;

	return true;
}

// Gestion du nombre de messages SMS utilisés
function textCounterMessage(field, cntfield, maxlimit){
	cntfield.innerHTML = Math.ceil(field.value.length / maxlimit);

	return true;
}


// Gestion de la longueur des SMS (nouvelle version 2010)
function textCounterUse_v2(field, chars_field, chars_max_field, nbmsg_field, pluriel_field, stopsms){	
	var len		= field.value.length;
	var unit	= 0;
	var pluriel = '';
	
	/* STOP SMS : +10 caractères */
	if( stopsms == true ){
		if( len == 0 ){	/* Si message non saisi */
			len += 10;
		}
		else{			/* Si message saisi */
			len += 11;
		}
	}
	
	if(len <= 160){						/* 1 SMS : 160 caractères max */
		unit	= 1;
		nb_max	= 160;
	}
	else if(len <= 1224){				/* Concat UDH : segments de 153 caractères */
		unit	= Math.ceil(len / 153);
		nb_max	= 153 * unit;
	}
	else{								/* Dépassement de la taille max : 1 224 caractères */
		unit = 8;
		field.value = field.value.substring(0, 1224);
	}
	
	if(unit > 1)
		pluriel = 's';
	
	chars_field.innerHTML		= len;		/* Set le nombre de caractères utilisés */
	chars_max_field.innerHTML	= nb_max;	/* Set le nombre de caractères restants avant le prochain seuil */
	nbmsg_field.innerHTML		= unit;		/* Set le nombre de SMS utilisés */
	pluriel_field.innerHTML		= pluriel;
	
	return true;
}


// Validation du numéro de tel (pour jquery)
function check_tel(formData, jqForm, options) {
	rePhoneNumber = new RegExp(/^[1-9]\d{5,20}$/);
	var form = jqForm[0];

	if (!rePhoneNumber.test(form.tel.value)) {
		alert("Le numero saisi est invalide, il doit etre au format international (exemple : pour 0678912345, saisir 678912345)");
		return false;
	}

	return true;
}

function check_mail(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}

// Exemple de validation Jquery
function validate() { 
	var form = jqForm[0];
	if (!form.username.value || !form.password.value) {
		alert('Please enter a value for both Username and Password');
		return false;
	}
	alert('Both fields contain values.');
}

// Insertion de texte dans un textarea
function TAinsert(text1, id_zone){
	var ta = document.getElementById(id_zone);

	if (ta.selectionStart | ta.selectionStart == 0){
		if (ta.selectionEnd > ta.value.length)
			ta.selectionEnd = ta.value.length;

		var firstPos = ta.selectionStart;

		ta.value = ta.value.slice(0,firstPos) + text1 + ta.value.slice(firstPos);

		ta.selectionStart = firstPos+text1.length;
		ta.selectionEnd = firstPos+text1.length;
		ta.focus();
	}else{
		// Opera
		var sel = ta;
		sel.value = sel.value + text1;
	}

	return false;
}

// Vérifier numéro de tel mobile
function verif_tel(num_tel, mobile){
	if(mobile)
		var regex = new RegExp(/^(336|06)(([\.\-\/ ])?[0-9][0-9]){4}/gi);
	else
		var regex = new RegExp(/^(01|02|03|04|05|06|08)(([\.\-\/ ])?[0-9][0-9]){4}/gi);

	return (regex.test(num_tel));
}

function str_replace(search, replace, subject) {
    var f = search, r = replace, s = subject;
    var ra = r instanceof Array, sa = s instanceof Array, f = [].concat(f), r = [].concat(r), i = (s = [].concat(s)).length;
 
    while (j = 0, i--) {
        if (s[i]) {
            while (s[i] = (s[i]+'').split(f[j]).join(ra ? r[j] || "" : r[0]), ++j in f){};
        }
    };
 
    return sa ? s : s[0];
}

/* Vérifie si la valeur est numérique */
function isNumeric(form_value) { 
    if (form_value.match(/^\d+$/) == null) 
        return false; 
    else 
        return true; 
} 


function goTo(ancre){
	jQuery('html,body').animate({scrollTop:jQuery(ancre).offset().top},1000,'swing',function(){
	    if(ancre != 'body')	        window.location.hash = ancre;
	    else						window.location.hash = '#';
	    
	    jQuery(ancre).attr('tabindex','-1');
	    jQuery(ancre).focus();
	    jQuery(ancre).removeAttr('tabindex');
	    jQuery(ancre).blur();
	});
}

/* Popup Jquery */
function open_popup(url, title){
	$('#popupjquery').dialog('option', 'title', title);
	$('#popupjquery > .content').html('<' + 'div style="text-align:left;"><' + 'img src="images/ajax-loader.gif" alt="Chargement..." /> Chargement...</' + 'div>');
	$('#popupjquery > .content').load(url);
	$('#popupjquery').dialog('open');
}

/* TinyMCE : Gestion de fichiers */
function FilePicker (field_name, url, type, win){
	var fileURL = 'js/tinymce/tinymce_select-img.php';
	
	if(type == 'image'){
		tinyMCE.activeEditor.windowManager.open({
			file : fileURL,
			title : 'Choisir un fichier',
			width : '700',
			height : '500',
			resizable : 'yes',
			scrollbars : 'yes',
			inline : 'yes',
			close_previous : 'no'
		},
		{
			window : win,
			input : field_name
		});
	}
	
	return false;
}


/* Equivallent de la fonction PHP number_format */
function number_format (number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

/* Conversion d'un nombre de bytes dans une unité usuelle */
function bytes_format(bytes){
	var size = bytes / 1024;
	
	if(size < 1024){
		size = number_format(size, 2) + ' Ko';
	}
	else{
		if(size / 1024 < 1024){
			size = number_format(size / 1024, 2) + ' Mo';
		}
		else if (size / 1024 / 1024 < 1024){
			size = number_format(size / 1024 / 1024, 2) + ' Go';
		}
	}
	
	return size; 
}

/* Convertit les retours à la ligne en <br /> */
function nl2br (str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}