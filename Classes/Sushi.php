<?php

class Sushi
{
    public $id;
    public $name;
    public $price;
    public $amount;

    public function __construct(){
        settype($this-> id, 'integer');
    }
}