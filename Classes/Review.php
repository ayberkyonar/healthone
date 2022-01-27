<?php 

class Review
{
    public $id;
    public $user_id;
    public $name;
    public $date;
    public $suggestion;

    public function __construct(){
        settype($this-> id, 'integer');
        settype($this-> product_id, 'integer');
    }
}