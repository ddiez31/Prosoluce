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
                <?php highlight_file('./classes/ecampaign_class_fax.php') ?>
            </p>
        </div>
    </div>

</div>
</div>
