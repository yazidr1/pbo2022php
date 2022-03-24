<?php 
namespace App\Model;
use App\Model\User;
class Anggota extends User
{
    // VAR
    // constansts
    const PRIA= 1;
    const WANITA= 0;

    // private
    private $no_anggota; //int
    private $nama_anggota; //str
    private $no_hp; //str

    // METHODS
    // constructor (kalo di python mirip __init__(self) keknya)
    public function __construct($nama_anggota_baru, $no_hp_baru)
    {
        $this->no_anggota= uniqid("main");
        $this->nama_anggota= $nama_anggota_baru;
        $this->no_hp= $no_hp_baru;
    }

    public function setNoAnggota($id_anggota): void
    {
        $this->no_anggota= $id_anggota;
    }

    public function getNoAnggota() //output int
    {
        return $this->no_anggota."\n";
    }

    public function setNamaAnggota($nama_lengkap): void
    {
        $this->nama_anggota= $nama_lengkap;
    }

    public function getNamaAnggota() //output str
    {
        return $this->nama_anggota."\n";
    }

    public function setNoHp($nomor_hp): void
    {
        $this->no_hp= $nomor_hp;
    }

    public function getNoHp() //output str
    {
        return $this->no_hp."\n";
    }

    public function daftarkan(): void
    {
        # code...
    }

    // destructor (kalo di python __del__(self))
    public function __destruct ()
    {
        echo "Object telah selesai digunakan\n";
        // munculkan besar memori 
        // echo memory_get_usage()."\n";
    }
}
?>