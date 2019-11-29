
<?php 
    session_start();
    
    $inputErr="";
    if(strlen($_GET['input']) > 20){
        $inputErr= "<span style='color:red;'> Article name or number cannot be longer than 20 characters</span>";
    }
    
    if(strlen($_GET['input']) == 0) {
        $inputErr="<span style='color:#3d5c5c;'> Please give an article name or number</span>";
    }
    
    include ('functions.php'); 
    
    if($_GET['action'] == "store" && $inputErr == ""){
        store_numbers();
        header ('Location: test.php');
    }
    if ($_GET['action'] == "empty_cart"){
        delete_cart();
    }
    if($_GET["action"] == 'delete') {
        delete_item();
    }
    
   
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
    	<link rel="stylesheet" href="style.css">
    	<link rel="stylesheet" href="menu.css">
    	<title>Exercise 11.18</title>
    </head>
    
    <body>
		<div class="menu-wrap">
			<input type="checkbox" class="toggler">
    			<div class="hamburger">
    				<div>
    				</div>
    			</div>
			<div class="menu">
				<div>
					<div>
						<ul class="nav-links">
                    		<li><a href="#">News</a></li>
                    		<li><a href="#">StudyCenter</a></li>
                    		<li><a href="#">Forum</a></li>
                    		<li><a href="#">Shop</a></li>
                    		<li><a href="#">Contact</a></li>
                    	</ul>
					</div>
				</div>
			</div>
		</div>
    		
    	<div class="showcase">
    		<div class="container showcase-inner">
    			<h1>Shop</h1>
    			<p>Buy some cool stuff!</p>
    			<a href="#" class="btn">Delivery details</a>
    		
    			<div class="form">
            		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
            			<div class="inputarea">
                			<label>Article number: </label>
                				<div class="input">
                    				<input class="inputbox" type="text" name="input" value="<?php if(isset($_GET['input'])) echo htmlspecialchars($_GET['input']);?>">
                    					<span class='error'><?php echo $inputErr; ?></span><br>
            					</div>
    					</div>
            			<div class="storebuttons">
                			<button class="btn2" type="submit" name='action' value="store">Store</button> 
                			<button class="btn2" type="submit" name='action' value="empty_cart">Empty cart</button>
            			</div>
        			</form>
    			
        			<?php
        			 if (!empty($_SESSION['cart'])) {
        			     echo "<br>You have " . count($_SESSION['cart']) . " items in your cart.<br>" . "<br>";
        			     foreach ($_SESSION['cart'] as $key => $item ) {
        			         echo "<div class='itemandbtn'>
                                        <div class='item'>"
                                            . $item .
                                       "</div>
                                        <div class='storebuttons'>
                                            <button class='btn2'><a href=test.php?action=delete&item={$key}>Delete item</a></button>
                                    </div>
                                    <br/>
                                    <br/>";
        			     }
        			 }
        			 else {
        			     echo "<br>You have not put anything in the cart yet.";
        			 }
        			 ?>
    		  	</div>
		  	</div>
	  	</div>
    </body>
    
</html>