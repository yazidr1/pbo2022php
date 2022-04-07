<?php 
namespace App\Model;

use Core\Minuman;

class EsCendol implements Minuman
{
    private $rasa;
    public function setRasa($rasa): void
    {
        $this->rasa= $rasa;
    }
    
    public function minum()
    {
        echo "Segar dan manis rasanya seperti kamu";
    }
}
?>