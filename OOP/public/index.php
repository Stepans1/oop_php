<?php

//use app\Worker;
require_once ("../vendor/autoload.php");

$developer=new \App\Developer("Boris",12,[29,12,1]);

$developer->setName("Dima");
var_dump($developer->getName());