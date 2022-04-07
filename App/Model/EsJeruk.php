<?php
namespace App\Model;

use Core\Minuman;
use Core\Produk;

class EsJeruk implements Minuman, Produk
{
    private $rasa;
    private $harga;

    public function setHarga($harga)
    {
        $this->harga= $harga;
    }

    public function jual()
    {
        echo "produk sudah terjual";
    }

    public function setRasa($rasa)
    {
        $this->rasa= $rasa;
    }

    public function minum()
    {
        echo "hmm segar segar asem";
    }

}