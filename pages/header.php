
<!DOCTYPE html>
<!-- saved from url=(0025)https://www.prosoluce.fr/ -->
<html lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--<base href="/">--><base href=".">
<title>Prosoluce, développeur de contacts</title>
<meta name="description" content="Solutions de communication multicanal, logiciels de prospection, applications téléphoniques, intégration web, mobile et services d&#39;infrastructure.">
<meta name="keywords" content="prosoluce, communication, multicanal, omnicanal, infrastructure, reseau, web, hebergement, developpement, integration, solutions, applications, mobile, marketing, telemarketing, ndd, nom de domaine"> 
<meta name="generator" content="PROSOLUCE 2007-2017">


<meta name="viewport" content="width=device-width">
<!--<base href="http://www.prosoluce.fr/">-->
<link rel="icon" type="image/png" href="https://www.prosoluce.fr/uploads/design/imgs/favicon.png">


<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/semantic-2.2.10.min.js"></script>
<link rel="stylesheet" type="text/css" href="./style/semantic.min.css">
<link rel="stylesheet" type="text/css" href="./style/style.css">



</head><body cz-shortcut-listen="true">
<div id="haut-page" class="pousse-footer">
  <header class="ui fixed menu navbar">
   <a href=""><img id="logo" src="./assets/logo-prosoluce.png" alt="Logo PROSOLUCE"></a>
   <div id="burger"></div>
 </header>

<div class="ui vertical menu" id='navbarvertical'>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Envoi de messages<div class="menu">
      <div class="item"><a href="/?compose_sms">Messages SMS vers des téléphones mobiles et fixes</a></div>
      <div class="item"><a href="/?compose_voice">Campagnes d'appels téléphoniques (appels voix)</a></div>
      <div class="item"><a href="/?compose_mail">Courriers électroniques (e-mails)</a></div>
      <div class="item"><a href="/?compose_fax">Télécopies (FAX)</a></div>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Structure de groupes<div class="menu">
      <a class="item" href="/?groupes_search_user">Recherche de membres</a>
      <a class="item" href="/?groupes_add_user">Ajout d'un membre</a>
      <a class="item" href="/?groupes_change_user">Modification d'un membre</a>
      <a class="item" href="/?groupes_delete_user">Suppression d'un membre</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Contenu de groupes<div class="menu">
      <a class="item" href="/?groupes_list_groups">Liste des groupes existants</a>
      <a class="item" href="/?groupes_info_groups">Informations sur un groupe</a>
      <a class="item" href="/?groupes_create_groups">Création d'un groupe</a>
      <a class="item" href="/?groupes_change_groups">Modification d'un groupe</a>
      <a class="item" href="/?groupes_delete_contains_groups">Supprime le contenu d'un groupe d'envoi</a>
      <a class="item" href="/?groupes_import_contacts_XML">Import de contacts depuis un fichier XML</a>
      <a class="item" href="/?groupes_add_fields_groups">Ajouter des champs dans un groupe</a>
      <a class="item" href="/?groupes_delete_fields_groups">Supprimer des champs dans un groupe</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Gestion des modèles<div class="menu">
      <a class="item" href="/?templates_create_change">Création ou modification d'un modèle</a>
      <a class="item" href="/?templates_delete">Suppression d'un modèle</a>
      <a class="item" href="/?templates_news">Informations sur un modèle</a>
      <a class="item" href="/?templates_list">Liste de tous les modèles existants</a>
      <a class="item" href="/?templates_add_rec">Ajoute un enregistrement au sein d'un modèle "voix"</a>
      <a class="item" href="/?templates_download_rec">Télécharge un enregistrement présent dans un modèle voix</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Gestion des crédits<div class="menu">
      <a class="item" href="/?credits_management_credits">Consultation des crédits disponibles</a>
      </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Gestion des réponses et blacklists<div class="menu">
      <a class="item" href="/?feedback_answers_blacklist">Obtention de la liste des destinataires blacklistés</a>
      <a class="item" href="/?feedback_remove_member_blacklist">Suppression d'un membre au sein d'une blacklist</a>
      <a class="item" href="/?feedback_get_answers">Obtention des réponses</a>
      </div>    
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Suivi des renvois<div class="menu">
      <a class="item" href="/?tracking_get">Récupération de la liste des messages envoyés avec suivi</a>
      <a class="item" href="/?tracking_recovery_mail">Email : récupération du suivi des actions</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Obtention d'informations sur les numéros de tél<div class="menu">
      <a class="item" href="/?info_info_hlr">Obtention d'informations HLR</a>
    </div>
  </div>
</div>

<div class="container">

<?php

highlight_file('classes/ecampaign_class_fax.php');

?>

