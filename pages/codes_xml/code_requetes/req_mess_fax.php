


<?xml version="1.0"?>
<ecampaign>
	<login>
		<user>UTILISATEUR</user>
		<password>MOT_DE_PASSE</password>
		<md5>MD5</md5>
	</login>
	<sendFAX>
		<route>IDENT_ROUTE</route>
		<filename>FICHIER</filename>
		<sendDate>DATE_ENVOI</sendDate>
		<callerID>NUMERO_APPELANT</callerID>
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
	</sendFAX>
</ecampaign>


