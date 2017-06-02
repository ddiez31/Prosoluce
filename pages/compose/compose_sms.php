<div id="d_cont">
    <div class="ui segment">
        <h2 class="ui left floated header">Envoyer une campagne</h2>
        <h3 class="ui orange right floated header">Envoi de SMS sur des téléphones mobiles ou fixes</h3>
        <div class="ui clearing divider"></div>
        <div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Requêtes</a>
            <a class="item" data-tab="three">Réponses</a>
            <a class="item" data-tab="four">Exemple d'intégration</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="one">
            <h4>URL d’appel</h4>
            <div class="ui list">
                <div class="item">http://api.ecampaign.prosoluce.fr/sendSMS</div>
            </div>
            <div class="ui divider"></div>
            <h4>Paramètres</h4>
            <?php include ('pages/tables/table_send_sms.php');?>
            <h4>Description des paramètres</h4>
            <p>Il s'agit de la description des paramètres présents au sein des requêtes XML d'envoi de messages qui vont être détaillées sur les pages suivantes.</p>
            <?php 
            include ('pages/tables/table_sms_default.php');
            ?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="two">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-two"><i class="large copy icon"></i></button>
            <?php echo'<pre><code class="html" id="post-shortlink-two">'; highlight_file('./pages/codes_xml/code_requetes/req_mess_sms.php');  echo'</code></pre>'; ?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="three">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-three"><i class="large copy icon"></i></button>

            <?php echo'<pre><code class="html" id="post-shortlink-three">'; highlight_file('./pages/codes_xml/code_reponses/resp_mess_sms.php');  echo'</code></pre>'; ?>

            <h4>Réponse synchrone</h4>
            <?php include ('pages/tables/table_sms_synchrone.php'); ?>
            <h4>Réponse asynchrone</h4>
            <?php include ('pages/tables/table_sms_asynchrone.php');?>
            <h4>Codes communs</h4>
            <?php include ('pages/code_errors/codes_communs.php'); ?>
            <?php include ('pages/code_errors/codes_méthodes_send.php'); ?>
            <?php include ('pages/code_errors/code_etat_sms.php'); ?>
        </div>

        <div class="ui bottom attached tab segment" data-tab="four">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-four"><i class="large copy icon"></i></button>
            <p id="post-shortlink-four">
                <?php highlight_file('./classes/ecampaign_class_sms.php') ?>
            </p>
        </div>

    </div>

</div>
</div>