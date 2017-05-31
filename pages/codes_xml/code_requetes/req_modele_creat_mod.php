
<?php

<?xml version="1.0"? >
<ecampaign>
	<login>
		<user>UTILISATEUR</user>
		<password>MOT_DE_PASSE</password>
		<md5>MD5</md5>
	</login>
	<manageTemplate>
		<addTemplate>
			<name>NOM_MODELE</name>
			<type>TYPE_MODELE</type>
			<sms>
				<message>MESSAGE_SMS</message>
			</sms>
			<mail>
				<message>MESSAGE_EMAIL</message>
				<subject>SUJET_EMAIL</subject>
			</mail>
			<voice>
				<duration>DUREE_MAX</duration>
				<recorded>ENREGISTREMENT_RÉALISÉ</recorded>
				<interactive>
					<enable>INTERACTIF_ACTIF</enable>
					<intro>INTRO_ACTIF</intro>
					<ask_end>QUESTION_FIN_ACTIVE</ask_end>
				</interactive>
				<responder>
					<enable>REPONDEUR_ACTIF</enable>
					<custom>REPONDEUR_PERSONNALISE</custom>
				</responder>
			</voice>
		</addTemplate>
	</manageTemplate>
</ecampaign>
?>

