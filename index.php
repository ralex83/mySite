<?php

function __autoload($getParams){
	include $getParams.'.php';
}

$getParams1 = new getParams();
$getParams1->setController($_GET['controller']);
$getParams1->setAction($_GET['action']);
$getParams1->setCheck($_GET['check']);

echo $getParams1->getController()."<br />";
echo $getParams1->getAction()."<br />";
echo $getParams1->getCheck()."<br />";


?>