<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php'?>

<?php
    if ($_SESSION['account']->user_usertype != "faculty") {
        header("Location: /account/student");
    }
    else {
        header("Location: /account/faculty");
    }
?>      
