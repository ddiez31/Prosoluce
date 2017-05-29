<?php

function getContent() {
	if(isset($_GET['index'])) {
		include __DIR__.'/../pages/menu.php';
	} if(empty($_GET)) {
		include __DIR__.'/../pages/menu.php';
	} if(isset($_GET['compose_sms'])) {
		include __DIR__.'/../pages/compose/compose_sms.php';
	} if(isset($_GET['compose_fax'])) {
		include __DIR__.'/../pages/compose/compose_fax.php';
	} if(isset($_GET['compose_voice'])) {
		include __DIR__.'/../pages/compose/compose_voice.php';
	} if(isset($_GET['compose_mail'])) {
		include __DIR__.'/../pages/compose/compose_mail.php';
	} if(isset($_GET['admin'])) {
		include __DIR__.'/../public/admin.php';
	}
}

function getPart($name) {
	if(!isset($_GET["admin"])) {
		include __DIR__ . '/../pages/'. $name . '.php';
	}
}

function home() {
	echo 'function home ok';
}

function admin() {
	echo 'function admin ok';
}

?>
