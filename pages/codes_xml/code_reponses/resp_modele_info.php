<?xml version="1.0"?>
<ecampaign>
	<code>CODE_RETOUR</code>
	<message>MESSAGE_RETOUR</message>
	<!-- Informations générales -->
	<type>sms/voice/mail</type>
	<id>IDENTIFIANT_NUMERIQUE_MODELE</id>
	<create_date>DATE_ET_HEURE_DE_CREATION</create_date>
	<update_date>DATE_ET_HEURE_DE_MODIFICATION</update_date>
	<name>NOM_DU_MODELE</name>
	<!-- Templates appels interactifs -->
	<phonecode>VOICE_CODE_ENREGISTREMENT_SERVEUR_TELEPHONIQUE</phonecode>
	<templatereference>VOICE_IDENTIFIANT_ALPHANUMERIQUE_MODELE</templatereference>
	<recorded>MESSAGES_ENREGISTRES_FALSE/TRUE</recorded>
	<duration>DUREE_MAX_EN_SECONDES</duration>
	<interactive>
		<enabled>FALSE/TRUE</enabled>
		<intro>FALSE/TRUE</intro>
		<ask_end>FALSE/TRUE</ask_end>
	</interactive>
	<responder>
		<enabled>FALSE/TRUE</enabled>
		<custom>FALSE/TRUE</custom>
	</responder>
</ecampaign>