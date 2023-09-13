<?php
session_start();    
include "drink.php";
include "food.php";

    if(isset($_POST['submit'])){      
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        $type = $_POST['type'];
    }

    if($_SESSION['full_menu'] != null){
        $menu = unserialize($_SESSION['full_menu']);
    } else {
        $menu = array();
    }

    switch($type){
        case "food":
            $new_item = new Food($name, $price, $desc);
            break;
        
        case "drink":
            $new_item = new Drink($name, $price, $desc);
            break;
        
        default:
            echo "it dont work";
            break;
    }
    

    array_push($menu, $new_item);
    $_SESSION['full_menu'] = serialize($menu);
    
    header("Location:index.php");  
?>