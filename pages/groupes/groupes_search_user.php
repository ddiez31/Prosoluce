

<div id="d_cont">
	<h2>Groupes d'envoi</h2>
	<h3>Recherche de membres</h3>
	<div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Requêtes</a>
            <a class="item" data-tab="three">Réponses</a>
            <a class="item" data-tab="four">Exemple d'intégration</a>
	</div>
	<div class="ui bottom attached active tab segment" data-tab="one">
		<h4>URL d’appel</h4>
		<div class="ui list">
			<div class="item">hthttp://api.ecampaign.prosoluce.fr/manageGroup/*ID_GROUPE*/getMember</div>
		</div>
		<div class="ui divider"></div>
		<h4>Paramètres</h4>
		<p><strong>*ID*</strong> devra être remplacé par l'identifiant du groupe d'envoi.</p>
		<?php 
		include ('pages/tables/table_descr_gest_grp_envoi.php');
		?>

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
