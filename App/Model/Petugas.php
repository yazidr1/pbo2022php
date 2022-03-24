<?php 
namespace App\Model;
use App\Model\User;

class Petugas extends User
{
    public $nip; //int
    public $nama_lengkap; //str
    public $alamat; //str

    public function lihatProfil() //output array
    {
        # code...   
    }
    public function login()
    {
        echo "Login petugas sedang dibatasi";
    }
    
}

?>