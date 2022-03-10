<?php 
class Anggota{
    // VARS
    // constansts
    const PRIA= 1;
    const WANITA= 0;

    // public
    public $no_anggota;
    public $nama_anggota;
    public $no_hp;
    public $program_studi;

    // METHODS

    ////
    // constructor (kalo di python __init__(self))
    public function __construct($nama_anggota_baru, $no_hp_baru)
    {
        $this->no_anggota= uniqid("main");
        $this->nama_anggota= $nama_anggota_baru;
        $this->no_hp= $no_hp_baru;
        $this->program_studi= "Sistem Informasi";
    }
    ////

    public function setNoAnggota($id_anggota)
    {
        $this->no_anggota= $id_anggota;
    }

    public function getNoAnggota()
    {
        return $this->no_anggota."\n";
    }

    public function setNamaAnggota($nama_lengkap)
    {
        $this->nama_anggota= $nama_lengkap;
    }

    public function getNamaAnggota()
    {
        return $this->nama_anggota."\n";
    }

    public function setNoHP($nomor_hp)
    {
        $this->no_hp= $nomor_hp;
    }

    public function getNoHP()
    {
        return $this->no_hp."\n";
    }

    ////
    // destructor (kalo di python __del__(self))
    public function __destruct()
    {
        echo "Object telah selesai digunakan\n";
        // munculkan besar memori 
        echo memory_get_usage()."\n";
    }
    ////
}
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