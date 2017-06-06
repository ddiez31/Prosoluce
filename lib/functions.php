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
	} if(isset($_GET['groupes_add_fields_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_add_fields_groups.php';
	} if(isset($_GET['groupes_add_user'])) {
		include __DIR__.'/../pages/groupes/groupes_add_user.php';
	} if(isset($_GET['groupes_change_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_change_groups.php';
	} if(isset($_GET['groupes_change_user'])) {
		include __DIR__.'/../pages/groupes/groupes_change_user.php';
	} if(isset($_GET['groupes_create_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_create_groups.php';
	} if(isset($_GET['groupes_delete_contains_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_delete_contains_groups.php';
	} if(isset($_GET['groupes_delete_fields_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_delete_fields_groups.php';
	} if(isset($_GET['groupes_delete_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_delete_groups.php';
	} if(isset($_GET['groupes_delete_user'])) {
		include __DIR__.'/../pages/groupes/groupes_delete_user.php';
	} if(isset($_GET['groupes_import_contacts_XML'])) {
		include __DIR__.'/../pages/groupes/groupes_import_contacts_XML.php';
	} if(isset($_GET['groupes_info_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_info_groups.php';
	} if(isset($_GET['groupes_list_groups'])) {
		include __DIR__.'/../pages/groupes/groupes_list_groups.php';
	} if(isset($_GET['groupes_search_user'])) {
		include __DIR__.'/../pages/groupes/groupes_search_user.php';
	} if(isset($_GET['templates_add_rec'])) {
		include __DIR__.'/../pages/templates/templates_add_rec.php';
	} if(isset($_GET['templates_create_change'])) {
		include __DIR__.'/../pages/templates/templates_create_change.php';
	} if(isset($_GET['templates_delete'])) {
		include __DIR__.'/../pages/templates/templates_delete.php';
	} if(isset($_GET['templates_download_rec'])) {
		include __DIR__.'/../pages/templates/templates_download_rec.php';
	} if(isset($_GET['templates_list'])) {
		include __DIR__.'/../pages/templates/templates_list.php';
	} if(isset($_GET['templates_news'])) {
		include __DIR__.'/../pages/templates/templates_news.php';
	} if(isset($_GET['credits_management_credits'])) {
		include __DIR__.'/../pages/credits/credits_management_credits.php';
	} if(isset($_GET['feedback_answers_blacklist'])) {
		include __DIR__.'/../pages/feedback/feedback_answers_blacklist.php';
	} if(isset($_GET['feedback_get_answers'])) {
		include __DIR__.'/../pages/feedback/feedback_get_answers.php';
	} if(isset($_GET['feedback_remove_member_blacklist'])) {
		include __DIR__.'/../pages/feedback/feedback_remove_member_blacklist.php';
	} if(isset($_GET['tracking_get'])) {
		include __DIR__.'/../pages/tracking/tracking_get.php';
	} if(isset($_GET['tracking_recovery_mail'])) {
		include __DIR__.'/../pages/tracking/tracking_recovery_mail.php';
	} if(isset($_GET['info_info_hlr'])) {
		include __DIR__.'/../pages/info/info_info_hlr.php';
	} if(isset($_GET['plan'])) {
		include __DIR__.'/../pages/plan.php';
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


