<?php 
require "vendor/autoload.php";
use App\Model\Petugas;
use App\Model\User;

$yazid1= new User;
$yazid1->login();

$yazid2= new Petugas();
$yazid2->login();

#abstraction
// abstract class -> class yang tidak dapat dibuat sebagai object
// buat abstract class dengan keyword abstract sebelum keyword class
// abstrat function dibuat supaya class anaknya harus membuat fungsi dengan nama function yang sama
// absract class hello
// {
//     abstract public function methodName(){}
// }

?>