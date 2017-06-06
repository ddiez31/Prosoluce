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
	 * Recherche de membres
	 * @param $id_member Identifiant du membre d'un groupe
	 * @param $tab Liste des destinataires : array( array(mail), array(tel)... )
	 * @param $id_groupe Identifiant d'un groupe
	 
	 */
	public function searchMember($id_groupe){
		$req  = "<manageGroup>\n";
		$req .= "<getMember>\n";
		$req .= "<id>{$id_groupe}</id>\n";
	    $req .= "<tags>\n";
		// if($tab !== null){
        //     foreach ($tab as $champs => $item) {
 		// $req .= "<item id='{$champs}'>{$item}</item>\n";}}
		$req .= "</tags>";
		$req .= "</getMember>";
		$req .= "</manageGroup>";

		// Mise en forme et envoi de la requête
		$xml = "xml=" . $this->makeXML($req);
		$url = $this->url_base . "/manageGroup/{$id_groupe}/getMember";
		$resp_xml = $this->do_post_request($url, $xml);

        var_dump($xml);
       

		// Traitement de la réponse
		$x		= @simplexml_load_string($resp_xml);
        var_dump($x);
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

	// /**
	//  * Génère le bloc XML contenant les destinataires, le filtrage...
	//  * @param $type Type de destinataire : "phone" ou "mail"
	//  * @param $recipients Array contenant les destinataires
	//  * @param $group_id Identifiant du groupe d'envoi à cibler
	//  * @param $group_fields Champs du groupe d'envoi à cibler (array)
	//  * @param $group_filter Filtres active (bool)
	//  * @param $group_filter_global_op Opérateur global de filtrage (array)
	//  * @param $group_filter_criterias Critères de filtrage (array)
	//  */
	// private function Gen_recip_XML($type, $recipients, $group_id, $group_fields, $group_filter, $group_filter_global_op, $group_filter_criterias){
	// 	$req = "<recipients>\n";
	// 	if($group_id !== null)			$req .= "<groupID>{$group_id}</groupID>\n";
	// 	if(is_array($group_fields)){
	// 		if( is_array($group_fields) && count($group_fields) > 0 ){
	// 			$req .= "<groupFields>\n";
	// 			foreach($group_fields as $field_cur){
	// 				$req .= "<field>{$field_cur}</field>\n";
	// 			}
	// 			$req .= "</groupFields>\n";
	// 		}
	// 	}
	// 	if($group_filter === true){
	// 		$req .= "<groupFilter>\n";
	// 		$req .= "<globalOperator>{$group_filter_global_op}</globalOperator>\n";

	// 		if( is_array($group_filter_criterias) && count($group_filter_criterias) > 0 ){
	// 			foreach($group_filter_criterias as $crit_cur){
	// 				$req .= "<criteria>\n";
	// 				$req .= "<field>{$crit_cur[0]}</field>\n";
	// 				$req .= "<operator>{$crit_cur[1]}</operator>\n";
	// 				$req .= "<value>{$crit_cur[2]}</value>\n";
	// 				$req .= "</criteria>\n";
	// 			}
	// 		}
	// 		$req .= "</groupFilter>\n";
	// 	}
	// 	if( is_array($recipients) && count($recipients) > 0 ){
	// 		foreach($recipients as $cur){
	// 			$req .= "<{$type}>\n";
	// 			if($type == 'mail'){
	// 				$req .= "<mail>{$cur[0]}</mail>\n";
	// 			}
	// 			else{
	// 				$req .= "<code>{$cur[0]}</code>\n";
	// 				$req .= "<number>{$cur[1]}</number>\n";
	// 			}
	// 			$req .= "</{$type}>\n";
	// 		}
	// 	}
	// 	$req .= "</recipients>\n";

	// 	return $req;
	// }

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
