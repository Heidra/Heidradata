<?php 
 session_start();

 function store_numbers () {
     if (empty($_SESSION['cart'])){
         $_SESSION['cart'] = array ();
     }
     if (strlen($_GET['input']) < 20 && strlen($_GET['input']) != 0) {
         $_SESSION['cart'][] = $_GET['input']; 
     }
 }
    
 function delete_cart(){
         session_unset();
     }
 
 function delete_item(){
     if(!empty($_SESSION['cart'])) {
         unset($_SESSION['cart'][$_GET['item']]);
     }
 }
 
?>

