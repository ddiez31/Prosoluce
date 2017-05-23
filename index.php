<?php
include ('template/header.php');



// $displayCategories = true;
// switch($displayCategories) {
//     case true: include ('pages/categories.php'); break;
//     case false: ;
// }

// $displayUnder_compose = false;
// if(isset($_GET["test"])) {
//     $displayCategories = false;
//     $displayUnder_compose = true;
//     switch($displayUnder_compose) {
//         case true: include ('pages/under_compose.php'); break;
//     }
// }

include ('pages/categories.php');
$page = $_GET['page'];
if(isset($page)) {
    switch($page) {
        case 1: include ('pages/under_compose.php'); break;
    } 
}


include ('pages/sms.php');








include ('template/footer.php');
?>