<!--reponse synchrone -->
<!-- modele de reponse XML -->

<?xml version="1.0"?>
<ecampaign>
	<code>CODE_RETOUR</code>
	<message>MESSAGE_RETOUR</message>
	<recipients>
		<destination mail="E-MAIL" code="INDICATIF" number="NUMERO">
			<state>ETAT</state>
			<msgid>ID_MESSAGE</msgid>
			<credits>NB_CREDITS</credits>
			<memberID>ID_MEMBRE</memberID>
		</destination>
		<destination mail="E-MAIL" code="INDICATIF" number="NUMERO">
			<state>ETAT</state>
			<msgid>ID_MESSAGE</msgid>
			<credits>NB_CREDITS</credits>
			<memberID>ID_MEMBRE</memberID>
		</destination>
	</recipients>
</ecampaign>


<!--reponse asynchrone -->
<!-- modele de reponse XML -->

<?xml version="1.0"?>
<ecampaign>
	<msgid>ID_MESSAGE</msgid>
	<state>CODE_ETAT</state>
	<timestamp>DATE_HEURE</timestamp>
</ecampaign>
