<?php 
require "vendor/autoload.php";
use App\Model\Petugas;

Petugas::presensi();
Petugas::NONAKTIF;
?>