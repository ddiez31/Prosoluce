

<div id="d_cont">
	<h2>Suivi des envois</h2>
	<h3>Information sur un modèle</h3>
	<div class="ui top attached tabular menu" id="tabnavigation">
		<a class="item active" data-tab="one">Description</a>
		<a class="item" data-tab="two">Requêtes</a>
		<a class="item" data-tab="three">Réponses</a>
		<a class="item" data-tab="four">Exemple d'intégration</a>
	</div>
	<div class="ui bottom attached active tab segment" data-tab="one">
		<p>En fonction du contexte :</br>
			• Renvoie la liste de toutes les campagnes et des envois unitaires,</br>
			• Renvoie la liste de tous les messages rattachés à une campagne donnée.</p>
			<h3>Description des paramètres d'appel</h3>
			<?php include ('pages/tables/table_call_parameters.php'); ?>
			<h4>URL d’appel</h4>
			<div class="ui list">
				<div class="item">http://api.ecampaign.prosoluce.fr/tracking/getCDR</div>
			</div>
			<div class="ui divider"></div>
			<h4>Paramètres</h4>
			<p><strong>*ID*</strong> devra être remplacé par l’identifiant de la campagne.</p>
			<?php include ('pages/tables/table_suivi_envois.php'); ?>
		</div>
		<div class="ui bottom attached tab segment" data-tab="two">
			<p>test</p>
		</div>
		<div class="ui bottom attached tab segment" data-tab="three">
			<p>test</p>
		</div>
		<div class="ui bottom attached tab segment" data-tab="four">
			<p>test</p>
		</div>
	</div>

</div>
</div>
