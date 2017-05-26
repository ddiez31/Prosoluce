<?php

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

		$this->user = $user;
		$this->pass = $pass;
	}

	/**
	 * Appels téléphoniques
	 * @param $route Identifiant de la route à utiliser
	 * @param $recipients Liste des destinataires : array( array(indicatif, numero), array(indicatif, numero)... )
	 * @param $message Message SMS (optionnel)
	 * @param $senderid Nom d'expéditeur SMS (optionnel)
	 * @param $callerid Numéro d'appelant pour les appels téléphoniques (optionnel)
	 * @param $template_id Identifiant du template à utiliser (optionnel)
	 * @param $send_date Date d'envoi sous la forme AAAA:MM:JJ HH:MM:SS (optionnel)
	 * @param $group_id Identifiant du groupe d'envoi à utiliser (optionnel)
	 * @param $group_fields Champs du groupe d'envoi à utiliser : array( 'champ1', 'champ2'... ) (optionnel)
	 * @param $group_filter Activer le filtrage au sein du groupe d'envoi : true / false (optionnel)
	 * @param $group_filter_global_op Opérateur de filtrage global : OR / AND (optionnel)
	 * @param $group_filter_criterias Critères de filtrage : array ( array( champ, opérateur, valeur ), array(...)... ) (optionnel / opérateurs disponibles : =, !=, LIKE, NOTLIKE, BEGIN, NOTBEGIN, END, NOTEND, NOTNULL et NULL)
	 */
	public function sendVoice($route, $recipients, $message=null, $senderid=null, $callerid=null, $template_id=null, $send_date=null, $group_id=null, $group_fields=null, $group_filter=false, $group_filter_global_op=null, $group_filter_criterias=null){
		$req  = "<sendVoice>\n";
		$req .= "<route>{$route}</route>\n";
		if($senderid !== null)			$req .= "<senderID>{$senderid}</senderID>\n";
		if($callerid !== null)			$req .= "<callerID>{$callerid}</callerID>\n";
		if($template_id !== null)		$req .= "<templateID>{$template_id}</templateID>\n";
		if($send_date !== null)			$req .= "<sendDate>{$send_date}</sendDate>\n";
		$req .= "<message>{$message}</message>\n";
		$req .= $this->Gen_recip_XML('phone', $recipients, $group_id, $group_fields, $group_filter, $group_filter_global_op, $group_filter_criterias);
		$req .= "</sendVoice>";

		// Mise en forme et envoi de la requête
		$xml = "xml=" . $this->makeXML($req);
		$url = $this->url_base . "/sendVoice";
		$resp_xml = $this->do_post_request($url, $xml);

		// Traitement de la réponse
		$x		= @simplexml_load_string($resp_xml);
		if($x === false)	throw new Exception('Impossible de traiter la réponse serveur.', 107);

		$code		= (int) $x->code;
		$message	= (string) $x->message;
		$recipients	= $x->recipients->phone;

		if($code != 0)		throw new Exception($message, $code);

		foreach($recipients as $item){
			$phone_code = (string) $item->attributes()->code;
			$phone_numb = (string) $item->attributes()->number;

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
		$req = "<?xml version=\"1.0\" encoding=\"utf-8\"?>
				<ecampaign>
					<login>
						<user>{$this->user}</user>
						<password>{$this->pass}</password>
					</login>
				{$xml}
				</ecampaign>";
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
		$req = "<recipients>\n";
		if($group_id !== null)			$req .= "<groupID>{$group_id}</groupID>\n";
		if(is_array($group_fields)){
			if( is_array($group_fields) && count($group_fields) > 0 ){
				$req .= "<groupFields>\n";
				foreach($group_fields as $field_cur){
					$req .= "<field>{$field_cur}</field>\n";
				}
				$req .= "</groupFields>\n";
			}
		}
		if($group_filter === true){
			$req .= "<groupFilter>\n";
			$req .= "<globalOperator>{$group_filter_global_op}</globalOperator>\n";

			if( is_array($group_filter_criterias) && count($group_filter_criterias) > 0 ){
				foreach($group_filter_criterias as $crit_cur){
					$req .= "<criteria>\n";
					$req .= "<field>{$crit_cur[0]}</field>\n";
					$req .= "<operator>{$crit_cur[1]}</operator>\n";
					$req .= "<value>{$crit_cur[2]}</value>\n";
					$req .= "</criteria>\n";
				}
			}
			$req .= "</groupFilter>\n";
		}
		if( is_array($recipients) && count($recipients) > 0 ){
			foreach($recipients as $cur){
				$req .= "<{$type}>\n";
				if($type == 'mail'){
					$req .= "<mail>{$cur[0]}</mail>\n";
				}
				else{
					$req .= "<code>{$cur[0]}</code>\n";
					$req .= "<number>{$cur[1]}</number>\n";
				}
				$req .= "</{$type}>\n";
			}
		}
		$req .= "</recipients>\n";

		return $req;
	}

	/**
	 * Envoi d'une requête POST à une URL
	 * @param $url URL
	 * @param $data Paramètres POST
	 * @param $optional_headers En-têtes optionnels
	 */
	private function do_post_request($url, $data, $optional_headers = null){
		$params = array('http' => array(
			'method' => 'POST',
			'content' => $data
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

?>
