<link rel="stylesheet" type="text/css" href="../../style/prism.css">




<div>

	<span><h3>Messages SMS vers des téléphones mobiles et fixes</h3></span></br>
	<pre class="code"><code class="language-php">

		&lt;?php	
		class ecampaign{
		// URL de l'API eCampaign
		private $url_base='http://api.ecampaign.prosoluce.fr';

		private $user;	// Nom d'utilisateur
		private $pass;	// Mot de passe

		/**
		* Constructeur
		* @param $user Nom d'utilisateur client
		* @param $pass Mot de passe
		*/
		function __construct($user, $pass){
		if($user == '' || $pass == '')
		throw new Exception("Nom d'utilisateur et mot de passe obligatoires.", 101);

		$this-&gt;user = $user;
		$this-&gt;pass = $pass;
	}

	/**
	* Envoi de télécopies FAX
	* @param $route Identifiant de la route à utiliser
	* @param $recipients Liste des destinataires : array( array(indicatif, numero), array(indicatif, numero)... )
	* @param $filename Fichier à transmettre
	* @param $callerid Numéro d'appelant pour les FAX (optionnel)
	* @param $send_date Date d'envoi sous la forme AAAA:MM:JJ HH:MM:SS (optionnel)
	* @param $group_id Identifiant du groupe d'envoi à utiliser (optionnel)
	* @param $group_fields Champs du groupe d'envoi à utiliser : array( 'champ1', 'champ2'... ) (optionnel)
	* @param $group_filter Activer le filtrage au sein du groupe d'envoi : true / false (optionnel)
	* @param $group_filter_global_op Opérateur de filtrage global : OR / AND (optionnel)
	* @param $group_filter_criterias Critères de filtrage : array ( array( champ, opérateur, valeur ), array(...)... ) (optionnel / opérateurs disponibles : =, !=, LIKE, NOTLIKE, BEGIN, NOTBEGIN, END, NOTEND, NOTNULL et NULL)
	*/
	public function sendFAX($route, $recipients, $filename, $callerid=null, $send_date=null, $group_id=null, $group_fields=null, $group_filter=false, $group_filter_global_op=null, $group_filter_criterias=null){
	$req  = &lt;sendFAX&gt;\n";
	$req .= &lt;route&gt;{$route}&lt;/route&gt;\n";
	if($callerid !== null)			$req .= &lt;callerID&gt;{$callerid}&lt;/callerID&gt;\n";
	if($send_date !== null)			$req .= &lt;sendDate&gt;{$send_date}&lt;/sendDate&gt;\n";
	$req .= &lt;filename&gt;{$filename}&lt;/filename&gt;\n";
	$req .= $this-&gt;Gen_recip_XML('phone', $recipients, $group_id, $group_fields, $group_filter, $group_filter_global_op, $group_filter_criterias);
	$req .= &lt;/sendFAX&gt;";

	// Mise en forme et envoi de la requête
	$xml = "xml=" . $this-&gt;makeXML($req);
	$url = $this-&gt;url_base . "/sendFAX";
	$resp_xml = $this-&gt;do_post_request($url, $xml);

	// Traitement de la réponse
	$x		= @simplexml_load_string($resp_xml);
	if($x === false)	throw new Exception('Impossible de traiter la réponse serveur.', 107);

	$code		= (int) $x-&gt;code;
	$message	= (string) $x-&gt;message;
	$recipients	= $x-&gt;recipients-&gt;phone;

	if($code != 0)		throw new Exception($message, $code);

	foreach($recipients as $item){
	$phone_code = (string) $item-&gt;attributes()-&gt;code;
	$phone_numb = (string) $item-&gt;attributes()-&gt;number;

	$result[$phone_code . $phone_numb] = ($item->state == "OK"?$item->msgid:false);
}

return $result;
}




// ==============================================================
// METHODES COMMUNES ============================================
// ==============================================================

/**
* Construction de la trame de requête XML
* @param $xml XML contenant les actions à réaliser
*/

private function makeXML($xml){
$req = "&lt;?xml version=\"1.0\" encoding=\"utf-8\"?&gt;
&lt;ecampaign&gt;
&lt;login&gt;
&lt;user&gt;{$this-&gt;user}&lt;/user&gt;
&lt;password&gt;{$this-&gt;pass}&lt;/password&gt;
&lt;/login&gt;
{$xml}
&lt;/ecampaign&gt;";


return $req;
}


/**
* Génère le bloc XML contenant les destinataires, le filtrage...
* @param $type Type de destinataire : "phone" ou "mail"
* @param $recipients Array contenant les destinataires
* @param $group_id Identifiant du groupe d'envoi à cibler
* @param $group_fields Champs du groupe d'envoi à cibler (array)
* @param $group_filter Filtres active (bool)
* @param $group_filter_global_op Opérateur global de filtrage (array)
* @param $group_filter_criterias Critères de filtrage (array)
*/
private function Gen_recip_XML($type, $recipients, $group_id, $group_fields, $group_filter, $group_filter_global_op, $group_filter_criterias){
$req = "&lt;recipients&gt;\n";
if($group_id !== null)			$req .= "&lt;groupID&gt;{$group_id}&lt;/groupID&gt;\n";
if(is_array($group_fields)){
if( is_array($group_fields) && count($group_fields) &gt; 0 ){
$req .= "&lt;groupFields&gt;\n";
foreach($group_fields as $field_cur){
$req .= "&lt;field&gt;{$field_cur}&lt;/field&gt;\n";
}
$req .= "&lt;/groupFields&gt;\n";
}
}
if($group_filter === true){
$req .= "&lt;groupFilter&gt;\n";
$req .= "&lt;globalOperator&gt;{$group_filter_global_op}&lt;/globalOperator&gt;\n";

if( is_array($group_filter_criterias) && count($group_filter_criterias) &gt; 0 ){
foreach($group_filter_criterias as $crit_cur){
$req .= "&lt;criteria&gt;\n";
$req .= "&lt;field&gt;{$crit_cur[0]}&lt;/field&gt;\n";
$req .= "&lt;operator&gt;{$crit_cur[1]}&lt;/operator&gt;\n";
$req .= "&lt;value&gt;{$crit_cur[2]}&lt;/value&gt;\n";
$req .= "&lt;/criteria&gt;\n";
}
}
$req .= "&lt;/groupFilter&gt;\n";
}
if( is_array($recipients) && count($recipients) &gt; 0 ){
foreach($recipients as $cur){
$req .= "&lt;{$type}&gt;\n";
if($type == 'mail'){
$req .= "&lt;mail&gt;{$cur[0]}&lt;/mail&gt;\n";
}
else{
$req .= "&lt;code&gt;{$cur[0]}&lt;/code&gt;\n";
$req .= "&lt;number&gt;{$cur[1]}&lt;/number&gt;\n";
}
$req .= "&lt;/{$type}&gt;\n";
}
}
$req .= "&lt;/recipients&gt;\n";

return $req;
}

/**
* Envoi d'une requête POST à une URL
* @param $url URL
* @param $data Paramètres POST
* @param $optional_headers En-têtes optionnels
*/
private function do_post_request($url, $data, $optional_headers = null){
$params = array('http' =&gt; array(
'method' =&gt; 'POST',
'content' =&gt; $data
));

if ($optional_headers !== null) {
$params['http']['header'] = $optional_headers;
}

$ctx = stream_context_create($params);

$fp = @fopen($url, 'rb', false, $ctx);
if(!$fp)	return false;

$response = @stream_get_contents($fp);
if($response === false)	return false;

return $response;
}


}

?&gt;

</code></pre>

</div>

<script type="text/javascript" src="../../js/prism.js"></script>
<script type="text/javascript" src="script.js"></script>

