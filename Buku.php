<?php 
class Buku{
    // var
    public $penulis;
    public $ISBN;
    public $judul;

    // method
    public function pinjamBuku($noAnggota, $namaAnggota, $noHP, $penulis, $judul)
    {
        // setNoAnggota, setNamaAnggota, setNoHP, setPenulisBuku, setJudul(masih belum tau memanggil fungsi di luar file)
        // 
        echo $noAnggota."<br>".$namaAnggota."<br>".$noHP."<br>".$penulis."<br>".$judul;
    }

    public function setPenulisBuku($namaPenulis)
    {
        $this->penulis= $namaPenulis;
    }

    public function getPenulisBuku()
    {
        return $this->penulis;
    }

    public function setISBN($noISBN)
    {
        $this->ISBN= $noISBN;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }

    public function setJudul($namaJudul)
    {
        $this->judul= $namaJudul;
    }

    public function getJudul()
    {
        return $this->judul;
    }
}

?>