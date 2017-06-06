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




// include ('classes/ecampaign_class_recherche_membre.php');
// $search_Member = new ecampaign('dm-simplon', 'SimplonERN');
// $search_Member->searchMember('8192');



// echo'<div class="container">';
// include ('classes/ecampaign_class_add_group.php');
// $testAddGroup = new ecampaign('dm-simplon', 'SimplonERN');
// $testAddGroup->addGroup('newgroupe', array('NOM' => 'nom', "TEL" => 'tel'));


?>
