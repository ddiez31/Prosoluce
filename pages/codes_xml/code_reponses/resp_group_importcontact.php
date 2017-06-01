<!-- Réponse synchrone -->
<?xml version="1.0"?>
<ecampaign>
	<code>CODE_RETOUR</code>
	<message>MESSAGE_RETOUR</message>
</ecampaign>
----------------------------------------------------------------
<!-- Structure du fichier XML à mettre à disposition -->
<?xml version="1.0"?>
<groupMembers>
	<member>
		<CHAMP1>
			<value>VALEUR</value>
			<indicatif>+33</indicatif>
		</CHAMP1>
		<CHAMP2>
			<value>VALEUR</value>
		</CHAMP2>
	</member>
	<member>
		<CHAMP1>
			<value>VALEUR</value>
			<indicatif>+33</indicatif>
		</CHAMP1>
		<CHAMP2>
			<value>VALEUR</value>
		</CHAMP2>
		/member>
	</groupMembers>
	<!-- nécessaire si CHAMP1 est de type téléphone -->
	<!-- nécessaire si CHAMP1 est de type téléphone -->

	-------------------------------------------------------------
	<!-- Structure de la réponse asynchrone (callback)
	La réponse XML suivante sera intégrée au sein de la variable « xml » envoyée en POST sur votre
	URL HTTP de callaback : -->
	<?xml version="1.0"?>
	<ecampaign>
		<importFromXml>
			<state>ETAT</state>
			<imported>NB_IMPORT</imported>
			<errors>
				<!-- Si des erreurs sont présentes -->
				<error>ERREUR 1</error>
				<error>ERREUR 2</error>
				<error>ERREUR 3</error>
				<error>ERREUR 4</error>
				<error>ERREUR 5</error>
				<error>ERREUR 6</error>
			</errors>
		</importFromXml>
	</ecampaign>