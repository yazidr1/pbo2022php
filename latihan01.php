<?php 

require("vendor/autoload.php");
use App\Model\Anggota;
// munculkan besar memori diapakai sebelum membuat instance
echo memory_get_usage()."\n";
// instanciation
$anggota_baru = new Anggota("Yazid Ridwan", 6281288888888);
// munculkan value const PRIA
echo "Jenis Kelamin: ".$anggota_baru::PRIA."\n";
// munculkan no_anggota
echo "No. Anggota: ".$anggota_baru->getNoAnggota();
// munculkan no_hp
echo "No. HP: ".$anggota_baru->getNoHP();
// munculkan nama
echo "Nama Lengkap: ".$anggota_baru->getNamaAnggota();

// munculkan besar memori diapakai sebelum unset
echo memory_get_usage()."\n";
echo memory_get_peak_usage()."\n"; // Returns the peak of memory, in bytes, that's been allocated to your PHP script.

// menghapus instance anggota_baru
unset($anggota_baru);
echo "ini adalah perintah baru\n";
?>