<table class="ui fixed line celled table">
	<thead>
		<tr><th>Paramètres</th>
			<th>Description</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>TYPE_MODÉLE</td>
			<td>« sms », « voice » (appels vocaux interactifs) ou « mail »</td>
		</tr>
		<tr>
			<td>MESSAGE_SMS</td>
			<td>Modèle de message SMS</td>
		</tr>
		<tr>
			<td>MESSAGE_MAIL</td>
			<td>Objet qui sera utilisé dans le modèle de message e-mail</td>
		</tr>
		<tr>
			<td>SUJET_EMAIL</td>
			<td>Objet qui sera utilisé dans le modèle de message e-mail</td>
		</tr>
		<tr>
			<td>DURÉE_MAX</td>
			<td>Durée maximale du message vocal en secondes (60, 120 ou 180 sec)</td>
		</tr>
		<tr>
			<td>INTERACTIF_ACTIF</td>
			<td>Booléen (false/true) : Permet d'activer la diffusion d'une message
				interactif lorsqu'une personne physique décroche. Si cette option est
				désactivée, l'appel sera raccroché si une personne prend l'appel.</td>
		</tr>
		<tr>
			<td>INTRO_ACTIF</td>
			<td>Booléen (false/true) : Active un message d'introduction qui sera diffusé
				avant le message principal, il permettra à l'interlocuteur d'accepter ou
				non l'écoute du message (1 = écouter le message / 3 = le supprimer).</td>
		</tr>
		<tr>
			<td>QUESTION_FIN_ACTIVE</td>
			<td>Booléen (false/true) : Un message de fin sera diffusé après le message
				principal. L'interlocuteur pourra formuler un choix avec les touches de
				son téléphone (touches de 0 à 9). Un message sera diffusé après réponse.</td>
		</tr>
		<tr>
			<td>RÉPONDEUR_ACTIF</td>
			<td>Booléen (false/true) : Active le dépôt de message sur répondeur en cas
				de non réponse.</td>
		</tr>
		<tr>
			<td>RÉPONDEUR_PERSONNALISÉ</td>
			<td>Booléen (false/true) : Si activé, un message personnalisé sera enregistré
				sur les répondeurs. Dans le cas contraire, le message principal utilisé
				dans le scénario interactif sera enregistré.</td>
		</tr>
		<tr>
			<td>ENREGISTREMENT_RÉALISÉ</td>
			<td>Booléen (false/true) : Si passé à « true », l'enregistrement du modèle voix
				sera considéré comme réalisé. Dans le cadre d'un enregistrement via le
				serveur vocal interactif, le modèle sera automatiquement marqué comme
				enregistré à la fin du processus.</td>
		</tr>
	</tbody>
</table>