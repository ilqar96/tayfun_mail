<?php

require_once  __DIR__."/vendor/autoload.php";
require_once __DIR__.'/helper.php';



//$email = new \SendGrid\Mail\Mail();
//$email->setFrom("ilqar.huseynli.9686@gmail.com", "Qeydiyyat bildirishi");
//$email->setSubject("Sendgrid vasitesile gonderildi");
//$email->addTo("tural.memmedov.9696@gmail.com", "Tural Memmedov");
//$email->addContent(
//    "text/html", "<strong> Mail gonderimi ugurlu oldu </strong>"
//);
//$sendgrid = new \SendGrid('');
//try {
//    $response = $sendgrid->send($email);
//    print $response->statusCode() . "\n";
//    print_r($response->headers());
//    print $response->body() . "\n";
//} catch (Exception $e) {
//    echo 'Caught exception: '. $e->getMessage() ."\n";
//}


$action = array_filter(explode('/',isset($_GET['action'])?$_GET['action']:''));

if (!isset($action[0])){
    $action[0] = 'index';
}

if(!file_exists('controller/'.strtolower($action[0]).'.php')){
    $action[0] = 'index';
}

require 'controller/'.$action[0].'.php';















?>
