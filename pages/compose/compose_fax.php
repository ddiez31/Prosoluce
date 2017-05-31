

<div id="d_cont">
    <div class="ui segment">
        <h2 class="ui left floated header">Envoyer une campagne</h2>
        <h3 class="ui orange right floated header">Télécopies fax (réponse synchrone)</h3>
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
                <div class="item">http://api.ecampaign.prosoluce.fr/sendFAX</div>
            </div>
            <div class="ui divider"></div>
            <h4>Paramètres</h4>
            <?php include ('pages/tables/table_send_sms.php');?>
            <h3>Description des paramètres</h3>
            <p>Il s'agit de la description des paramètres présents au sein des requêtes XML d'envoi de messages qui vont être détaillées sur les pages suivantes.</p>
            <?php 
            include ('pages/tables/table_sms_default.php');
            include ('pages/tables/table_sms_synchrone.php');
            include ('pages/tables/table_sms_asynchrone.php');
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

