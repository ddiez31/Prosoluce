<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/lib/functions.php';

getPart('header');
getContent();
getPart('footer');


?>

<?php




// test tableau descrptif Julien de là!!!
// include ('pages/tables/sms_default.php');
// include ('pages/tables/sms_synchrone.php');
// include ('pages/tables/sms_asynchrone.php');
// include ('pages/tables/create_groupe.php');
// include ('pages/tables/import_contact_xml.php');
// include ('pages/tables/create_modif_model.php');
// include ('pages/tables/recorded_model_voice.php');
// include ('pages/tables/download_recorded_model_voice.php');
// include ('pages/tables/consult_cred_disp.php');
// include ('pages/tables/obtain_list_receiver_blacklist.php');
// include ('pages/tables/supp_member_blacklist.php');
// include ('pages/tables/obtain_responses.php');
// include ('pages/tables/call_parameters.php');
// include ('pages/tables/parameters_get.php');
// include ('pages/tables/info_return.php');
// include ('pages/code_errors/code_communs.php');
// include ('pages/code_errors/codes_méthodes_send.php');
// include ('pages/code_errors/codes_relat_group_send.php');
// include ('pages/code_errors/codes_relat_gest_model.php');
// include ('pages/code_errors/codes_relat_gest_cred.php');
// include ('pages/code_errors/codes_relat_suivi_envois.php');
// include ('pages/code_errors/codes_status.php');
// include ('pages/code_errors/codes_errors.php');
// include ('pages/code_errors/etat_remise.php');
// test tableau descriptif Julien À de là!!!






// include ('classes/ecampaign_class_sms.php');
// $testSms = new ecampaign('dm-simplon', 'SimplonERN');
// $testSms->sendSMS(1, array(array('+33', '0695501119')), 'C\'est pas bien d\'être jaloux!!');


// include ('classes/ecampaign_class_mail.php');
// $testMail = new ecampaign('dm-simplon', 'SimplonERN');
// $testMail->sendMail(9, array(array('david.diez31@free.fr')), 'test sujet', 'test message');


// include ('classes/ecampaign_class_voice.php');
// $testVoice = new ecampaign('dm-simplon', 'SimplonERN');
// $testVoice->sendVoice(8, array(array('+33', '0782063177')), 3519);


// include ('classes/ecampaign_class_fax.php');
// $file = file_get_contents('fax.pdf');
// echo $file;
// $testFax = new ecampaign('dm-simplon', 'SimplonERN');
// $testFax->sendFAX(10, array(array('+33', '0561989052')), $file);


?>