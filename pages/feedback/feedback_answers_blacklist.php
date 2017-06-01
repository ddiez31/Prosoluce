

<div id="d_cont">
	<h2>Méthode pour la gestion des réponses et blacklists</h2>
	<h3>Obtention de la liste des destinataires blacklistés</h3>
	<div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Requêtes</a>
            <a class="item" data-tab="three">Réponses</a>
            <a class="item" data-tab="four">Exemple d'intégration</a>
	</div>
	<div class="ui bottom attached active tab segment" data-tab="one">
	<?php include ('pages/tables/table_obtain_list_receiver_blacklist.php'); ?>
		<h4>URL d’appel</h4>
		<div class="ui list">
			<div class="item">http://api.ecampaign.prosoluce.fr/manageFeedback/*CANAL*/getBlacklist</div>
		</div>
		<div class="ui divider"></div>
		<h4>Paramètres</h4>
		<p><strong>*CAN*</strong> devra être remplacé par le canal choisi : « sms », « fax » ou « mail ».</p>
		<?php include ('pages/tables/table_gest_answer_and_blacklist.php'); ?>
       

	</div>
        <div class="ui bottom attached tab segment" data-tab="two">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-two"><i class="large copy icon"></i></button>
                <?php echo'<pre><code class="html" id="post-shortlink-two">'; highlight_file('./pages/codes_xml/code_requetes/******.php');  echo'</code></pre>'; ?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="three">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-three"><i class="large copy icon"></i></button>
                <?php echo'<pre><code class="html" id="post-shortlink-three">'; highlight_file('./pages/codes_xml/code_reponses/******.php');  echo'</code></pre>'; ?>

            <h4>Codes communs</h4>
            <?php include ('pages/code_errors/codes_communs.php'); ?>
    </div>
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
