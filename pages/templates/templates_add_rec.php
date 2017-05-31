

<div id="d_cont">
	<h2>modèles</h2>
	<h3>Ajoute un enregistrement au sein d'un modèle "voix"</h3>
	<div class="ui top attached tabular menu" id="tabnavigation">
		<a class="item active" data-tab="one">Description</a>
		<a class="item" data-tab="two">Requêtes</a>
		<a class="item" data-tab="three">Réponses</a>
		<a class="item" data-tab="four">Exemple d'intégration</a>
	</div>
	<div class="ui bottom attached active tab segment" data-tab="one">
	<p>Ajoute ou remplace un enregistrement au sein d'un modèle existant.</p>
	<?php include ('pages/tables/table_register_model_voice.php') ?>
		<h4>URL d’appel</h4>
		<div class="ui list">
			<div class="item">http://api.ecampaign.prosoluce.fr/manageTemplate/*ID_MODELE*/pushMP3</div>
		</div>
		<div class="ui divider"></div>
		<h4>Paramètres</h4>
		<p><strong>*ID*</strong> devra être remplacé par l'identifiant du modèle.</p>
		<?php include ('pages/tables/table_gest_grp_model.php'); ?>

	</div>
        <div class="ui bottom attached tab segment" data-tab="two">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-two"><i class="large copy icon"></i></button>
            <p id="post-shortlink-two">
                
            </p>
        </div>
        <div class="ui bottom attached tab segment" data-tab="three">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-three"><i class="large copy icon"></i></button>
            <p id="post-shortlink-three">

            </p>
        </div>
        <div class="ui bottom attached tab segment" data-tab="four">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-four"><i class="large copy icon"></i></button>
            <p id="post-shortlink-four">
                <?php  ?>
            </p>
        </div>
</div>

</div>
</div>
