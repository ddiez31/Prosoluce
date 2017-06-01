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
	 * Création d'un groupe
	 * @param $name Nom du groupe
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
	public function addGroup($name, $group_fields=null, $locked_structure=false, $locked_content=false, $doublon=false){
		$req  = "<manageGroup>\n";
		$req .= "<addGroup>\n";
		$req .= "<name>{$name}</name>\n";
		$req .= "<locked_structure>{$locked_structure}</locked_structure>\n";
		$req .= "<locked_content>{$locked_content}</locked_content>\n";
		$req .= "<tags>\n";
		if(is_array($group_fields) !== null) {
			foreach($group_fields as $field => $value) {
				$req .= "<item type='{$field}' unique='{$doublon}'>{$value}</item>\n";
			};
		};			
		$req .= "</tags>\n";
		$req .= "</addGroup>";
		$req .= "</manageGroup>";

		// Mise en forme et envoi de la requête
		$xml = "xml=" . $this->makeXML($req);
		$url = $this->url_base . "/manageGroup/addGroup";
		$resp_xml = $this->do_post_request($url, $xml);
		// Traitement de la réponse
		$x		= @simplexml_load_string($resp_xml);
		if($x === false)	throw new Exception('Impossible de traiter la réponse serveur.', 107);

		$code		= (int) $x->code;
		$message	= (string) $x->message;
		if($code != 0)		throw new Exception($message, $code);

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
