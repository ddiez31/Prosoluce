<?php

function getContent() {
	if(isset($_GET['index'])) {
		include __DIR__.'/../pages/menu.php';
	} if(empty($_GET)) {
		include __DIR__.'/../pages/menu.php';
	} if(isset($_GET['compose_synchrone'])) {
		include __DIR__.'/../pages/compose/compose_synchrone.php';
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
