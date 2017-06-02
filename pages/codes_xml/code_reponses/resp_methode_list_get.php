<?xml version="1.0"?>
<ecampaign>
	<code>CODE_RETOUR</code>
	<message>MESSAGE_RETOUR</message>
	<getCDR>
		<!-- Pour les envois unitaires -->
		channel="">
		<message id=""	 <!-- ID numérique du message -->
			<date_init></date_init>			<!-- Date d’envoi  -->
			<sender></sender>			<!-- Expéditeur  -->
			<from_api></from_api>	<!-- Envoyé depuis l’API (true/false)  -->
			<credits></credits>	<!-- Nb de crédits utilisés  -->
			<message_ref></message_ref>	<!-- Référence alphanum. du message -->
			<phone_code></phone_code>	<!-- Indicatif téléphonique  -->
			<phone_number></phone_number>	<!-- Numéro de téléphone  -->
			<mail_recipient></mail_recipient>	<!-- Adresse e-mail  -->
			<mail_subject></mail_subject>	<!-- Objet du mail  -->
			<status_id></status_id>	<!-- État de remise (voir annexe) -->
			<status_date></status_date>	<!-- Date et heure du dernier état  -->
			<content></content>
		</message> 	<!-- Message envoyé -->


		<!-- Pour les campagnes  -->
		<campaign id=""	<!-- ID numérique de la campagne -->
			Channel=""	<!-- Canal (sms/vsms/mail/fax/voice)  -->
			recipients_count="">	<!-- Nombre de destinataires  -->
			<date_init></date_init>	<!-- Date d’envoi  -->
			<sender></sender>	<!-- Expéditeur  -->
			<from_api></from_api>	<!-- Envoyé depuis l’API (true/false)  -->
			<credits></credits>	<!-- Crédits consommés  -->
			<group_id></group_id>	<!-- ID du groupe cible  -->
			<template_id></template_id>	<!-- ID du modèle cible  -->
		</campaign> 

	</getCDR>
</ecampaign>
---------------------------------------------------------------------
<!-- Réponse avec la liste de tous les messages rattachés à une campagne donnée 
Réponse avec la liste de tous les messages rattachés à une campagne donnée
Lors de l’appel, « campaignid » doit contenir l’identifiant numérique de la campagne en question.
-->
Réponse XML :
<?xml version="1.0"?>
<ecampaign>
	<code>CODE_RETOUR</code>
	<message>MESSAGE_RETOUR</message>
	<getCDR>
		<message id="">
			<!-- ID numérique du message  -->
			<date_init></date_init>
			<!-- Date d’envoi  -->
			<credits></credits>
			<!-- Nb de crédits utilisés  -->
			<message_ref></message_ref>
			<!-- Référence alphanum. du message  -->
			<group_member_id></group_member_id>
			<!-- ID du membre du groupe d’envoi  -->
			<phone_code></phone_code>
			<!-- Indicatif téléphonique  -->
			<phone_number></phone_number>
			<!-- Numéro de téléphone  -->
			<mail_recipient></mail_recipient>
			<!-- Adresse e-mail  -->
			<mail_subject></mail_subject>
			<!-- Objet du mail  -->
			<status_id></status_id>
			<!-- État de remise (voir annexe)  -->
			<status_date></status_date>
			<!-- Date et heure du dernier état  -->
			<content></content>
			<!-- Message envoyé  -->
		</message>
	</getCDR>
</ecampaign>
