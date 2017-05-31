<link rel="stylesheet" type="text/css" href="../../style/semantic.min.css">
<link rel="stylesheet" type="text/css" href="../../style/style.css">

<div class= xml>

	<span><h3>Campagnes d'appels téléphoniques (appels voix)</h3></span></br>
	<pre><code ><textarea id="code" >

		<?xml version="1.0"?>
		<ecampaign>
			<login>
				<user>UTILISATEUR</user>
				<password>MOT_DE_PASSE</password>
				<md5>MD5</md5>
			</login>
			<sendVoice>
				<route>IDENT_ROUTE</route>
				<templateID>IDENT_TEMPLATE</templateID>
				<callerID>NUMERO_APPELANT</callerID>
				<sendDate>DATE_ENVOI</sendDate>
				<recipients>
					<groupID>IDENT_GROUPE</groupID>
					<groupFields>
						<field>CHAMP_DESTINATION</field>
						<field>CHAMP_DESTINATION</field>
					</groupFields>
					<groupFilter>
						<globalOperator>OPERATEUR_GLOBAL</globalOperator>
						<criteria>
							<field>CHAMP_FILTRE</field>
							<operator>OPERATEUR_FILTRE</operator>
							<value>VALEUR_FILTRE</value>
						</criteria>
						<criteria>
							<field>CHAMP_FILTRE</field>
							<operator>OPERATEUR_FILTRE</operator>
							<value>VALEUR_FILTRE</value>
						</criteria>
					</groupFilter>
					<phone>
						<code>INDICATIF</code>
						<number>NUMERO</number>
					</phone>
					<phone>
						<code>INDICATIF</code>
						<number>NUMERO</number>
					</phone>
				</recipients>
			</sendVoice>
		</ecampaign>
	</textarea></code></pre>
</div>

<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../js/semantic-2.2.10.min.js"></script>
