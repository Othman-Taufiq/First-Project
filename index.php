<?php
// define("PATH_DIR", __DIR__);
session_start();
require_once "model/model_class.php";
require_once "model/userManager.Class.php";
require_once "model/etats_Manager.php";
require_once "model/categories_Manager.php";
require_once "model/annonces_Manager.php";
require_once "controller/user_Controller.php";
require_once "controller/contact_Controller.php";
require_once "controller/etats_Controller.php";
require_once "controller/categories_Controller.php";
require_once "controller/annonces_Controller.php";

$p = $_GET['p'] ?? "";

include_once 'view/head.php';
switch($p){

    case "";
    case "home";
    include('view/navbar.php');
    include('view/home.php');
    break;

    case "signup";
    include('view/signup.php');
    break;

    case "signupNotication";
    include('view/signupNotication.php');
    break;

    case "login";
    include('view/login.php');
    break;

    case "logged";
    include('view/logged-navbar.php');
    include('view/logged.php');
    break;
    
    case "waitReset";
    include('view/waitReset.php');
    break;

    case "waitResetNotification";
    include('view/waitResetNotification.php');
    break;

    case "resetPass";
    include('view/resetPass.php');
    break;

    case "contact";
    include('view/contact.php');
    break;

    case "ajouteAnnonce";
    include('view/logged-navbar.php');
    include('view/ajouteAnnonce.php');
    break;

    case "userAnnonces";
    include('view/logged-navbar.php');
    include('view/userAnnonces.php');
    break;

    include('view/footer.php');
}
include('view/footer.php');
?>