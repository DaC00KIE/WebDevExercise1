<?php
class Menu_Item{
    // attributes
    private $name; 
    private $price;
    private $desc;
    private $type;

    //constructor
    function __construct($name, $price, $desc){
        $this->name = $name;
        $this->price = $price;
        $this->desc = $desc;
    }

    // methods
    public function get_name(){
        return $this->name;
    }
    public function get_price(){
        return $this->price;
    }
    public function get_desc(){
        return $this->desc;
    }
    public function get_type(){
        return $this->type;
    }
}


?>