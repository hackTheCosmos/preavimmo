<?php

session_start();

require_once "autoloader.php";

// require_once 'Includes/dompdf/autoload.inc.php';


//Load Composer's autoloader
// require_once 'PHPMailer/PHPMailerAutoload.php';

Router::route();