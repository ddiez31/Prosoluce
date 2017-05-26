<table class="ui fixed line celled table">
	<thead>
		<tr><th>Suffixe de l'URL</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>/sendSMS</td>
			<td>Envoi de SMS sur des téléphones mobiles ou fixes</td>
		</tr>
		<tr>
			<td>/sendVoice</td>
			<td>Envoi de campagnes d'appels téléphoniques</td>
		</tr>
		<tr>
			<td>sendMail</td>
			<td>Envoi de courriers électroniques</td>
		</tr>
		<tr>
			<td>/sendFAX</td>
			<td>Envoi de télécopies</td>
		</tr>
		<tr>
			<td>apionly</td>
			<td>true = retourne uniquement les envois réalisés depuis les web-services</td>
		</tr>
		<tr>
			<td>campaignid</td>
			<td>Si renseigné, renvoie la liste de tous les messages rattaché à cet
				identifiant de campagne
				Dans le cas contraire, renvoie la liste de toutes les campagnes et des
				envois unitaires réalisés.</td>
		</tr>
		<tr>
			<td>showcontent</td>
			<td>true = affiche le contenu du message (message pour les mails et SMS et
				nom de fichier PDF pour les FAX).
				L’activation de ce paramètre ralentit les réponses et peut générer des
				retours volumineux.</td>
		</tr>
	</tbody>
</table>