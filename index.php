<?php
session_start();
include("includes/config.php");
if(isset($_SESSION["login_session"])){
    header("Location: http://".$server_url."/user.php");
    die();

} else {
    header("Location: http://".$server_url."/login.php");
    die();
}

?>