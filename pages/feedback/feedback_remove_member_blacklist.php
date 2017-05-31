
<div id="d_cont">
	<h2>Méthode pour la gestion des réponses et blacklists</h2>
	<h3>Suppression d’un membre au sein d’une blacklist</h3>
	<div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Requêtes</a>
            <a class="item" data-tab="three">Réponses</a>
            <a class="item" data-tab="four">Exemple d'intégration</a>
	</div>
	<div class="ui bottom attached active tab segment" data-tab="one">
	<?php include ('pages/tables/table_supp_member_blacklist.php'); ?>
		<h4>URL d’appel</h4>
		<div class="ui list">
			<div class="item">http://api.ecampaign.prosoluce.fr/manageFeedback/*CANAL*/delBlacklistMember</div>
		</div>
		<div class="ui divider"></div>
		<h4>Paramètres</h4>
		<p><strong>*CAN*</strong> devra être remplacé par le canal choisi : « sms », « fax » ou « mail ».</p>
		<?php include ('pages/tables/table_gest_answer_and_blacklist.php'); ?>

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
