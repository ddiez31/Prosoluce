<?php
include ('../header.php');
?>

    <div id="d_cont">
        <h2>Envoyer une campagne</h2>
        <h3>Appels téléphoniques voix (réponse synchrone)</h3>
        <div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Codes xml</a>
            <a class="item" data-tab="three">Codes erreurs</a>
            <a class="item" data-tab="four">Test en ligne</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="one">
            <h4>URL d’appel</h4>
            <div class="ui list">
                <div class="item">http://api.ecampaign.prosoluce.fr/sendVoice</div>
            </div>
            <div class="ui divider"></div>
            <h4>Paramètres</h4>
         
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
    <div class="ui basic buttons">
        <a href="../../index.php" class="ui button">Accueil</a>
        <a href="compose_synchrone.php" class="ui button">Retour</a>
    </div>
    </div>
    </div>


<?php
include ('../footer.php');
?>