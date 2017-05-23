 <div id="form">
 <form class="ui form" id="sms" method="POST">
       <div class="ui input" id='toto'>
    <input type="text" name="UTILISATEUR" type="text" placeholder="UTILISATEUR" title="Nom d'utilisateur eCampaign" required>
  </div>
       <div class="ui input">
    <input type="text" name="MOT_DE_PASSE" type="text" placeholder="MOT_DE_PASSE" title="Mot de passe rattaché au nom d'utilisateur eCampaign. Il est, dans la majorité des cas, identique à celui rattaché au compte utilisateur, sauf paramètrage spécifique" required>
  </div>
       <div class="ui input">
    <input type="text" name="md5" placeholder="MD5" title="Mettre à « true » si le mot de passe spécifié dans la requête XML
est chiffré avec l’algorithme MD5">
  </div>
       <div class="ui input">
    <input type="text" name="IDENT_ROUTE" type='number' placeholder="IDENT_ROUTE" title="Identifiant numérique de la route à utiliser (possibilité de l'obtenir en consultant la page « Gérer mes crédits » sur l'interface web)" required>
  </div>
       <div class="ui input">
    <input type="text" name="EXPEDITEUR_SMS" type='text' placeholder="EXPEDITEUR_SMS" title="MNom d'expéditeur SMS (11 caractères alphanumériques max). Par défaut, le nom d'expéditeur rattaché au compte sera utilisé">
  </div>
       <div class="ui input">
    <input type="text" name="NUMERO_APPELANT" type='tel' placeholder="NUMERO_APPELANT" title="Numéro d'appelant, au format international et sans le « + » initial. Par défaut, le numéro d'appelant rattaché au compte sera utilisé">
  </div>
       <div class="ui input">
    <input type="text" name="IDENT_TEMPLATE" type='number' placeholder="IDENT_TEMPLATE" title="Identifiant du modèle à utiliser (disponible sur l'interface web). Il est obligatoire pour les campagnes d'appels et facultatif pour les autres modes d'envois." required>
  </div>
       <div class="ui input">
    <input type="text" name="MESSAGE" placeholder="MESSAGE" title="Message SMS ou E-mail à transmettre">
  </div>
       <div class="ui input">
    <input type="text" name="DATE_ENVOI" type='date' placeholder="DATE_ENVOI" title="Date d'envoi demandée, sous la forme AAAA-MM-JJ HH:MM:SS">
  </div>
       <div class="ui input">
    <input type="text" name="IDENT_GROUPE" type='number' placeholder="IDENT_GROUPE" title="Identifiant du groupe d'envoi à cibler">
  </div>
       <div class="ui input">
    <input type="text" name="CHAMP_DESTINATION" type='text' placeholder="CHAMP_DESTINATION" title="Champs du groupe d'envoi contenant les numéros de téléphone ou les adresses e-mail à contacter">
  </div>
       <div class="ui input">
    <input type="text" name="OPERATEUR_GLOBAL" placeholder="OPERATEUR_GLOBAL" type='text' title="Peut être placé à « AND » (tous les critères de filtrage doivent être respectés) ou « OR » (au moins un critère doit être respecté)">
  </div>
       <div class="ui input">
    <input type="text" name="CHAMP_FILTRE" placeholder="CHAMP_FILTRE" type='text' title="Champ du groupe d'envoi à utiliser pour le critère de filtrage, par exemple « ville »">
  </div>
       <div class="ui input">
    <input type="text" name="OPERATEUR_FILTRE" placeholder="OPERATEUR_FILTRE" type='text' title="Opérateur de filtrage à utiliser.
Disponible : « = » (égal), « != » (pas égal), « LIKE » (contient), « NOTLIKE » (ne contient pas), « BEGIN » (commence par), « NOTBEGIN » (ne commence pas par), « END » (finit par), « NOTEND » (ne finit pas par), « NOTNULL » (rempli), « NULL » (non rempli)">
  </div>
       <div class="ui input">
    <input type="text" name="VALEUR_FILTRE" placeholder="VALEUR_FILTRE" type='text' title="Valeur à utiliser pour le critère de filtrage, par exemple « Paris » (« ville » « est égale » à « Paris »)">
  </div>
       <div class="ui input">
    <input type="text" name="INDICATIF" placeholder="INDICATIF" type='number' title="Indicatif téléphonique international, par exemple « 33 » pour la France">
  </div>
       <div class="ui input">
    <input type="text" name="NUMERO" placeholder="NUMERO" type='number' title="Numéro de téléphone sans le « 0 » initial. Par exemple
« 612345678 » pour contacter le « 06 12 34 56 78 »">
  </div>
   <button class="ui button" type="submit">Submit</button>
   <div class="ui error message"></div>
    </form>
    </div>

<?php
$xml= new XMLWriter();
$xml->openURI('data/sms.xml');
$xml->startDocument('1.0');
$xml->startElement('ecampaign');
$xml->startElement('login');
$xml->writeElement('user', $_POST['UTILISATEUR']);
$xml->writeElement('password', $_POST['MOT_DE_PASSE']);
$xml->writeElement('md5', $_POST['MD5']);
$xml->endElement();
$xml->startElement('sendSMS');
$xml->writeElement('route', $_POST['IDENT_ROUTE']);
$xml->writeElement('senderID', $_POST['EXPEDITEUR_SMS']);
$xml->writeElement('callerID', $_POST['NUMERO_APPELANT']);
$xml->writeElement('templateID', $_POST['IDENT_TEMPLATE']);
$xml->writeElement('message', $_POST['MESSAGE']);
$xml->writeElement('sendDate', $_POST['DATE_ENVOI']);
$xml->startElement('recipients');
$xml->writeElement('groupID', $_POST['IDENT_GROUPE']);
$xml->startElement('groupFields');
$xml->writeElement('field', $_POST['CHAMP_DESTINATION']);
$xml->writeElement('field', $_POST['CHAMP_DESTINATION']);
$xml->endElement();
$xml->startElement('groupFilter');
$xml->writeElement('globalOperator', $_POST['OPERATEUR_GLOBAL']);
$xml->startElement('criteria');
$xml->writeElement('field', $_POST['CHAMP_FILTRE']);
$xml->writeElement('operator', $_POST['OPERATEUR_FILTRE']);
$xml->writeElement('value', $_POST['VALEUR_FILTRE']);
$xml->endElement();
$xml->startElement('criteria');
$xml->writeElement('field', $_POST['CHAMP_FILTRE']);
$xml->writeElement('operator', $_POST['OPERATEUR_FILTRE']);
$xml->writeElement('value', $_POST['VALEUR_FILTRE']);
$xml->endElement();
$xml->endElement();
$xml->startElement('phone');
$xml->writeElement('code', $_POST['INDICATIF']);
$xml->writeElement('number', $_POST['NUMERO']);
$xml->endElement();
$xml->startElement('phone');
$xml->writeElement('code', $_POST['INDICATIF']);
$xml->writeElement('number', $_POST['NUMERO']);
$xml->endElement();
$xml->endElement();
$xml->endElement();
$xml->endElement();
$xml->flush();

?>
