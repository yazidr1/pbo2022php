<?php 
require "vendor/autoload.php";
use App\Model\EsJeruk;
$minuman_berbuka = new EsJeruk();
$rasanya= $minuman_berbuka->setRasa('Mantap jiwa');
// echo $rasanya;
$minuman_berbuka->minum();
?>