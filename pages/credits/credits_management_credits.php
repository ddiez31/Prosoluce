<div id="d_cont">
  <div class="ui segment">
   <h2 class="ui left floated header">Méthode pour la gestion des crédits</h2>
   <h3 class="ui orange right floated header">Consultation des crédits disponibles</h3>
   <div class="ui top attached tabular menu" id="tabnavigation">
    <a class="item active" data-tab="one">Description</a>
    <a class="item" data-tab="two">Requêtes</a>
    <a class="item" data-tab="three">Réponses</a>
    <a class="item" data-tab="four">Exemple d'intégration</a>
  </div>
  <div class="ui bottom attached active tab segment" data-tab="one">
   <?php include ('pages/tables/table_consult_cred_disp.php'); ?>
   <h4>URL d’appel</h4>
   <div class="ui list">
     <div class="item">http://api.ecampaign.prosoluce.fr/tracking/getCDR</div>
   </div>
   <div class="ui divider"></div>
   <h4>Paramètres</h4>
   <?php include ('pages/tables/table_gest_cred.php'); ?>

 </div>
 <div class="ui bottom attached tab segment" data-tab="two">
  <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-two"><i class="large copy icon"></i></button>
  <?php echo'<pre><code class="html" id="post-shortlink-two">'; highlight_file('./pages/codes_xml/code_requetes/req_modele_gestion_credit.php');  echo'</code></pre>'; ?>
</div>
<div class="ui bottom attached tab segment" data-tab="three">
  <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-three"><i class="large copy icon"></i></button>
  <?php echo'<pre><code class="html" id="post-shortlink-three">'; highlight_file('./pages/codes_xml/code_reponses/resp_modele_gestion_credit.php');  echo'</code></pre>'; ?>

  <h4>Codes communs</h4>
  <?php include ('pages/code_errors/codes_communs.php'); ?>
  <?php include ('pages/code_errors/codes_relat_gest_cred.php'); ?>
</div>
<div class="ui bottom attached tab segment" data-tab="four">
  <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-four"><i class="large copy icon"></i></button>
  <p id="post-shortlink-four">
    <?php  ?>
  </p>
</div>


<h4>Codes communs</h4>
<?php include ('pages/code_errors/codes_communs.php'); ?>
<?php include ('pages/code_errors/codes_relat_gest_cred.php'); ?>
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
</div>
