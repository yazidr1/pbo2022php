<?php 
namespace App\Model;
use App\Model\User;

class Petugas extends User
{
    public $nip; //int
    public $nama_lengkap; //str
    public $alamat; //str
    
    const AKTIF= 1;
    const NONAKTIF= 0;

    public function lihatProfil() //output array
    {
        # code...   
    }
    public function login()
    {
        echo "Login petugas sedang dibatasi";
    }

    public static function presensi()
    {
        echo "presensi tidak berhasil berhasil \n";
        echo self::NONAKTIF;
    }
}
?>