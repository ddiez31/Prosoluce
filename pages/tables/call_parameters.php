<table class="ui fixed line celled table">
	<thead>
		<tr><th>Paramètres</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>startdate</td>
			<td>Date de début de période (format : AAAA-MM-JJ)</td>
		</tr>
		<tr>
			<td>stopdate</td>
			<td>Date de fin de période (format : AAAA-MM-JJ)</td>
		</tr>
		<tr>
			<td>channel</td>
			<td>Si renseigné, sélectionne uniquement un type de canal donné (accepté :
				sms, voice, mail, fax)</td>
		</tr>
		<tr>
			<td>campaignonly</td>
			<td>true = renvoie uniquement les campagnes (envois unitaires exclus)</td>
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