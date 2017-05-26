<?php
include ('pages/header.php');



include('ecampaign_demo_laurent.php');

$test = new ecampaign("dm-simplon","SimplonERN");
$test->sendSMS(1,array(array('+33','0687560651')),'test');




include ('pages/footer.php');
?>