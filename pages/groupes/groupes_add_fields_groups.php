

<div id="d_cont">
	<h2>Groupes d'envoi</h2>
	<h3>Ajouter des champs dans un groupe</h3>
	<div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Requêtes</a>
            <a class="item" data-tab="three">Réponses</a>
            <a class="item" data-tab="four">Exemple d'intégration</a>
	</div>
	<div class="ui bottom attached active tab segment" data-tab="one">
	<p>Ajoute des champs au sein d'un groupe d'envoi existant.</p>
		<h4>URL d’appel</h4>
		<div class="ui list">
			<div class="item">http://api.ecampaign.prosoluce.fr/manageGroup/*ID_GROUPE*/addTags</div>
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
