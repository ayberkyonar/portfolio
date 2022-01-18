<?php

class Orders
{
    public $id;
    public $customer_id;
    public $sushi_1;
    public $sushi_2;
    public $sushi_3;
    public $sushi_4;
    public $sushi_5;
    public $total;


    public function __construct(){
        settype($this-> id, 'integer');
    }
}