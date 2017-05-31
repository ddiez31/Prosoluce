
<div id="d_cont">
	<h2>Méthode pour l'obtention d'information sur les numéros de télephone</h2>
	<h3>Obtention d'information HLR</h3>
	<div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Requêtes</a>
            <a class="item" data-tab="three">Réponses</a>
            <a class="item" data-tab="four">Exemple d'intégration</a>
	</div>
	<div class="ui bottom attached active tab segment" data-tab="one">
	<h3>Description des paramètres GET</h3>
	<?php include ('pages/tables/table_parameters_get.php'); ?>
	<h3>Informations retournées</h3>
	<?php include ('pages/tables/table_info_return.php'); ?>
		<h4>URL d’appel</h4>
		<div class="ui list">
			<div class="item">http://api.ecampaign.prosoluce.fr/numberInfo/HLRlookup</div>
		</div>
		<div class="ui divider"></div>
		<h4>Paramètres</h4>
		<p><strong>*ID*</strong> devra être remplacé par l’identifiant de la campagne.</p>
		<?php include ('pages/tables/table_info_number_phone.php'); ?>
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
