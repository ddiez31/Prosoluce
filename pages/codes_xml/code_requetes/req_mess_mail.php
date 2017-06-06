<?xml version="1.0"?>
<ecampaign>
	<login>
		<user>UTILISATEUR</user>
		<password>MOT_DE_PASSE</password>
		<md5>MD5</md5>
	</login>
	<sendMail>
		<route>IDENT_ROUTE</route>
		<templateID>IDENT_TEMPLATE</templateID>
		<sendDate>DATE_ENVOI</sendDate>
		<replyTo>ADRESSE_REPONSE</replyTo>
		<subject>SUJET</subject>
		<message>MESSAGE</message>
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
			<mail>
				<mail>EMAIL</mail>
			</mail>
			<mail>
				<mail>EMAIL</mail>
			</mail>
		</recipients>
	</sendMail>
</ecampaign>





