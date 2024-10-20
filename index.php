<?php

if(!isset($_SESSION)){
    session_start();
    $_SESSION['user_logged']=false;
    $_SESSION['error']="";
    $_SESSION['message']="";
}

include_once("vendor/autoload.php");
include_once("App/config.php");
include_once("App/Router.php");
include_once("App/Models/User.php");
include_once("App/Models/Orm.php");
include_once("App/Core/Controller.php");
include_once("App/Core/Mailer.php");

use App\Router;

$r = new Router();
$r->run();
?>