<?php

require_once "model/model_class.php";
require_once "model/user_Manager.php";
require_once "controller/user_Controller.php";

$p = $_GET['p'] ?? "";

include_once 'view/head.php';
switch($p){

    case "home";
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
    include('view/logged.php');
    break;
    
    case "waitReset";
    include('view/waitReset.php');
    break;

    case "resetPass";
    include('view/resetPass.php');
    break;
    // include_once 'view/head.php';
    // if($_GET['page'] == "signup"){
    //     include('view/signup.php');
    // }
    // if($_GET['page'] == "signupNotication"){
    //     include('view/signupNotication.php');
       
    // }
    // if($_GET['page'] == "login"){
    //     include('view/login.php');
    // }
    // if($_GET['page'] == "logged"){
    //     include('view/logged.php');
    // }

    // include('view/footer.php');
}
include('view/footer.php');
?>