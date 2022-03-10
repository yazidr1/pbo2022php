<?php 
class Buku{
    // var
    public $penulis;
    public $isbn;
    public $judul;

    // method
    public function pinjamBuku($no_anggota, $nama_anggota, $no_hp, $penulis, $judul)
    {
        // setNoAnggota, setNamaAnggota, setNoHP, setPenulisBuku, setJudul(masih belum tau memanggil fungsi di luar file)
        // 
        echo $no_anggota."<br>".$nama_anggota."<br>".$no_hp."<br>".$penulis."<br>".$judul;
    }

    public function setPenulisBuku($namaPenulis)
    {
        $this->penulis= $namaPenulis;
    }

    public function getPenulisBuku()
    {
        return $this->penulis;
    }

    public function setISBN($noIsbn)
    {
        $this->isbn= $noIsbn;
    }

    public function getISBN()
    {
        return $this->isbn;
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