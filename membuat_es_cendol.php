<?php 
require "vendor/autoload.php";
use App\Model\EsCendol;
$minuman_berbuka = new EsCendol();
$minuman_berbuka->setRasa('Yang Pernah Ada');
$minuman_berbuka->minum();
?>