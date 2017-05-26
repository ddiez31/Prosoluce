<table class="ui fixed line celled table">
	<thead>
		<tr><th>Paramètres</th>
			<th>Oblig.</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>UTILISATEUR</td>
			<td>Oui</td>
			<td>Nom d'utilisateur eCampaign</td>
		</tr>
		<tr>
			<td>MOT_DE_PASSE</td>
			<td>Oui</td>
			<td>Mot de passe rattaché au nom d'utilisateur eCampaign. Il est, dans
				la majorité des cas, identique à celui rattaché au compte
				utilisateur, sauf paramètrage spécifique</td>
		</tr>
		<tr>
			<td>MD5</td>
			<td>Non</td>
			<td>Mettre à « true » si le mot de passe spécifié dans la requête XML
				est chiffré avec l’algorithme MD5</td>
		</tr>
		<tr>
			<td>IDENT_ROUTE</td>
			<td>Oui</td>
			<td>Identifiant numérique de la route à utiliser (possibilité de l'obtenir
				en consultant la page « Gérer mes crédits » sur l'interface web)</td>
		</tr>
		<tr>
			<td>EXPÉDITEUR_SMS</td>
			<td>Non</td>
			<td>Nom d'expéditeur SMS (11 caractères alphanumériques max). Par
				défaut, le nom d'expéditeur rattaché au compte sera utilisé</td>
		</tr>
		<tr>
			<td>NUMÉRO_APPELANT</td>
			<td>Non</td>
			<td>Numéro d'appelant, au format international et sans le « + » initial.
				Par défaut, le numéro d'appelant rattaché au compte sera utilisé</td>
		</tr>
		<tr>
			<td>ADRESSE_RÉPONSE</td>
			<td>Non</td>
			<td>Adresse e-mail de réponse. Par défaut, l'adresse de réponse
				rattachée au compte sera utilisée</td>
		</tr>
		<tr>
			<td>IDENT_TEMPLATE</td>
			<td>O/N</td>
			<td>Identifiant du modèle à utiliser (disponible sur l'interface web).
				Il est obligatoire pour les campagnes d'appels et facultatif pour les autres modes d'envoi</td>
		</tr>
		<tr>
			<td>SUJET</td>
			<td>Non</td>
			<td>Sujet du courrier électronique à envoyer</td>
		</tr>
		<tr>
			<td>MESSAGE</td>
			<td>Non</td>
			<td>Message SMS ou E-mail à transmettre</td>
		</tr>
		<tr>
			<td>FICHIER</td>
			<td>Oui</td>
			<td>Fichier à transmettre par FAX (fait référence à un nom de fichier
				PDF stocké au sein du gestionnaire de fichiers)</td>
		</tr>
		<tr>
			<td>DATE_ENVOI</td>
			<td>Non</td>
			<td>Date d'envoi demandée, sous la forme AAAA-MM-JJ HH:MM:SS</td>
		</tr>
		<tr>
			<td>IDENT_GROUP</td>
			<td>Non</td>
			<td>Identifiant du groupe d'envoi à cibler</td>
		</tr>
		<tr>
			<td>CHAMP_DESTINATION</td>
			<td>Non</td>
			<td>Champs du groupe d'envoi contenant les numéros de téléphone ou
				les adresses e-mail à contacter</td>
		</tr>
		<tr>
			<td>OPÉRATEUR_GLOBAL</td>
			<td>Non</td>
			<td>Peut être placé à « AND » (tous les critères de filtrage doivent
				être respectés) ou « OR » (au moins un critère doit être respecté)</td>
		</tr>
		<tr>
			<td>CHAMP_FILTRE</td>
			<td>Non</td>
			<td>Champ du groupe d'envoi à utiliser pour le critère de filtrage, par
				exemple « ville »</td>
		</tr>
		<tr>
			<td>OPÉRATEUR_FILTRE</td>
			<td>Non</td>
			<td>Opérateur de filtrage à utiliser.
				Disponible :
				« = »
				(égal),
				« != »
				(pas
				égal),
				« LIKE »
				(contient),
				« NOTLIKE » (ne contient pas), « BEGIN » (commence par), « NOTBEGIN »
				(ne commence pas par), « END » (finit par), « NOTEND » (ne finit pas
				par), « NOTNULL » (rempli), « NULL » (non rempli)</td>
		</tr>
		<tr>
			<td>VALEUR_FILTRE</td>
			<td>Non</td>
			<td>Valeur à utiliser pour le critère de filtrage, par exemple « Paris »
				(« ville » « est égale » à « Paris »)</td>
		</tr>
		<tr>
			<td>INDICATIF</td>
			<td>Non</td>
			<td>Indicatif téléphonique international, par exemple « 33 » pour la
				France</td>
		</tr>
		<tr>
			<td>NUMÉRO</td>
			<td>Non</td>
			<td>Numéro de téléphone sans le « 0 » initial. Par exemple
				« 612345678 » pour contacter le « 06 12 34 56 78 »</td>
		</tr>
	</tbody>
</table>