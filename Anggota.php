<?php 
class Anggota{
    // var
    public $noAnggota;
    public $namaAnggota;
    public $noHP;

    // method
    public function setNoAnggota($idAnggota)
    {
        $this->noAnggota= $idAnggota;
    }

    public function getNoAnggota()
    {
        return $this->noAnggota;
    }

    public function setNamaAnggota($namaLengkap)
    {
        $this->namaAnggota= $namaLengkap;
    }

    public function getNamaAnggota()
    {
        return $this->namaAnggota;
    }

    public function setNoHP($nomorHP)
    {
        $this->noHP= $nomorHP;
    }

    public function getNoHP()
    {
        return $this->noHP;
    }
}

?>