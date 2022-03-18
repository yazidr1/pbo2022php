<?php 
namespace App\Model;

class Buku extends Aset
{
    // VAR
    private $penulis; //str
    private $isbn; //int
    private $judul; //str

    // METHODS
    public function setPenulis($nama_penulis):void
    {
        $this->penulis= $nama_penulis;
    }

    public function getPenulis() //output str
    {
        return $this->penulis;
    }

    public function setISBN($no_isbn):void
    {
        $this->isbn= $no_isbn;
    }

    public function getISBN() //output int
    {
        return $this->isbn;
    }

    public function setJudul($nama_judul):void
    {
        $this->judul= $nama_judul;
    }

    public function getJudul() //output str
    {
        return $this->judul;
    }

    public function pinjam(): void
    {   
        // gift or declare the new value will be value of certain atributes and then 
        // echo $no_anggota."<br>".$nama_anggota."<br>".$no_hp."<br>".$penulis."<br>".$judul;
    }

    public function tambah(): void
    {
        # code...
    }

    public function hapus(): void
    {
        # code...
    }
}

?>