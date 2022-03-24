<?php 
require "vendor/autoload.php";
use App\Model\Petugas;
use App\Model\User;

$yazid1= new User;
$yazid1->login();

$yazid2= new Petugas();
$yazid2->login();


?>