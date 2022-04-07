<?php 
namespace Core;

abstract class Minuman
{
    private $rasa;

    abstract public function minum();
    public function setRasa($rasa)
    {
        $this->rasa= $rasa;
    }
}

