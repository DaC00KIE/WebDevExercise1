<?php
include_once("menu_item.php");

class Drink extends Menu_Item{

    private $type = "Drink";
    private $final_price;

    public function __construct($name, $price, $desc){
        parent::__construct($name, $price, $desc);
        $this->final_price = $price*1.15;
    }

    public function get_type(){
        return $this->type;
    }

    public function get_final_price(){
        return $this->final_price;
    }
}

?>