
<?php 
    session_start();
    
    
    $products = array(
        array('productname'=>'Water Color', 'articlenumber'=>'1', 'price'=>10.00),
        array('productname'=>'w1 Water Color - Pelican', 'articlenumber'=>'1.1', 'price'=>10.50),
        array('productname'=>'w2 Water Color - Faber Castel', 'articlenumber'=>'1.2', 'price'=>10.60),
        array('productname'=>'Pencil', 'articlenumber'=>'2', 'price'=>11.00),
        array('productname'=>'pe1 Pencil - Prisma', 'articlenumber'=>'2.1', 'price'=>11.50),
        array('productname'=>'pe2 Pencil - Faber Castel', 'articlenumber'=>'2.2', 'price'=>11.60),
        array('productname'=>'Pastel', 'articlenumber'=>'3', 'price'=>12.00),
        array('productname'=>'pa1 Pastel - Faber Castel', 'articlenumber'=>'3.1', 'price'=>12.50),
        array('productname'=>'pa2 Pastel - Crayola', 'articlenumber'=>'3.2', 'price'=>12.60),
    );
    
    $inputErr="";
    if(strlen($_GET['input']) > 20){
        $inputErr= "<span style='color:red;'> Article name or number cannot be longer than 20 characters</span>";
    }
    
    if(strlen($_GET['input']) == 0) {
        $inputErr="<span style='color:#3d5c5c;'> Please give an article name or number</span>";
    }
    
    include ('functions.php'); 
    
    if($_GET['storing'] == "store" && $inputErr == ""){
        $found = false;
        foreach ($products as $product){
            if ($product ['productname'] == $_GET['input'] || $product ['articlenumber'] == $_GET['input']) {
                $found = true;
            }
        }
        if ($found == true) {
            store_numbers();
        }
        header ('Location: shop.php');
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
    	
    	<!--JavaScript-jQuery-->
    	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    	
    	<!--jQuery UI-->	
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    	<link rel="stylesheet" href="/resources/demos/style.css">
    	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    	
    	<!--Font-->
    	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
    	
    	<link rel="stylesheet" href="style.css">
    	
    	<link rel="stylesheet" href="menu.css">
    	
    	<script>
      	  $( function() {
		    $( "#dialog" ).dialog({
		      autoOpen: false,
		      show: {
		        effect: "blind",
		        duration: 1000
		      },
		      hide: {
		        effect: "explode",
		        duration: 1000
		      }
		    });
		 
		    $( "#opener" ).on( "click", function() {
		      $( "#dialog" ).dialog( "open" );
		    });
		  } );
		</script>
	    
    	<title>Shop</title>
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
                    		<li><a href="studycenter.php">StudyCenter</a></li>
                    		<li><a href="#">Forum</a></li>
                    		<li><a href="shop.php">Shop</a></li>
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
    			
    			<div id="dialog" title="Basic dialog">
					<div>
						<h2>Shipping details</h2>
						<br>
						<br>
						<p>Second and more items ship FOR FREE!</p>
						<br>
						<p>All items are in stock and ready to ship. Orders ship out within 1-2 days with tracking numbers.</p>
						<br>
						<p>This card will be packed and shipped with care to prevent it from any damage.</p>
					</div>
					<br>
					<div>
                        <h3>Shipping & returns</h3>
                        <br>
                        <br>
                        <p>Ready to ship in 1–2 business days</p>
                        <br>
                        <p>From United States</p>
                        <br>
                        <p>€9.86 shipping to Germany</p>
					</div>
				</div>
				<button id="opener" class="btn" id="myBtn">Delivery details</button>
    			
    			<div class="formarea">
    				
        			<script> function artno(num) { 
                        var txt=document.getElementById("result").value; 
                        txt=txt + num; 
                        document.getElementById("result").value=txt; 
                        } 
                    </script>
                    
                    <script> function artname(num) { 
                        var txt=document.getElementById("result").value; 
                        txt=txt + num; 
                        document.getElementById("result").value=txt; 
                        } 
                    </script>
                   
                    <script>
                    $(document).ready(function() {
                        
                        $('#artnameinput').keyup(function(event) {
							
							var searchstring = $("#artnameinput").val();
							var res = searchstring.toLowerCase();
							var buttontext = "";
							var res2 = buttontext.toLowerCase();

							console.log(searchstring);
							
							for (i=0; i<3; ++i) {
								console.log(buttons[i]);

								buttontext = buttons[i].innerHTML = res2;
								
								if (buttontext.includes(searchstring)) {
                            		var key = event.which;
                            		if (key == 13) {
                            			buttons[i].style.display = "block";
                        	        }
                        	        else {
                        	        	buttons[i].style.display = "none";
                    	        	}
                        		}
							} 
							
                    	})
                    });
                    </script>
                    
                    
                    <h4 class="articlenumber"><label for="inputbox">Article name: </label></h4>
                    	<div class="input">
                    		<input class="inputbox text" type="text" name="artname" id="artnameinput" autocomplete="off">
                		</div>
                    <br>
    				<div class="articlebuttons">
    					<div class="namebtn" id="namebtn">
    						<button onclick="artname(this.value)" value="1" class="btn3 hide" id="watercolor">Water Color</button>
    						<button onclick="artname(this.value)" value="2" class="btn3 hide" id="pencil">Pencil</button>
    						<button onclick="artname(this.value)" value="3" class="btn3 hide" id="pastel">Pastel</button>
    					</div>
    					<div class="artbtn">
            				<button onclick="artno(this.value)" value="Water Color" class="btn2">Art no. 1</button>
            				<button onclick="artno(this.value)" value="Pencil" class="btn2">Art no. 2</button>
            				<button onclick="artno(this.value)" value="Pastel" class="btn2">Art no. 3</button>
        				</div>
    				</div>
    				
    				
    				<div class="form">
                		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET" id="myForm">
                			<div class="inputarea">
                    			<h4 class="articlenumber"><label for="inputbox">Article number: </label></h4>
                    				<div class="input">
                        				<input class="inputbox" type="text" name="input" value="<?php if(isset($_GET['input'])) echo htmlspecialchars($_GET['input']);?>" id="result" required>
                        					<span class='error'><?php echo $inputErr; ?></span><br>
                					</div>
        					</div>
                			<div class="storebuttons">
                    			<button class="btn2" type="submit" name='storing' value="store">Store</button> 
                    			<button onclick="emptyCart(this)" class="btn2" type="submit" value="empty_cart">Empty cart</button>
                				<input type='hidden' name='action'>
                			</div>
            			</form>
        			</div>
        			<script>
        			
                        function emptyCart(element) {
                        	document.getElementsByName("action")[0].value = element.value;
                        	event.preventDefault();
                        	
                          if (confirm("Do you really want to delete the cart?")) {
                        	  document.getElementById("myForm").submit(); 
                        	}
                          else {
                              alert("Canceled!");
                          }
                           
                        }
                    </script>
    			
        			<?php
        			 if (!empty($_SESSION['cart'])) {
        			     echo "<br>You have " . count($_SESSION['cart']) . " items in your cart.<br>" . "<br>";
        			    
        			     foreach ($_SESSION['cart'] as $key => $item ) {
        			         $found = false;
        			         foreach ($products as $product){
        			             if ($product ['productname'] == $item || $product ['articlenumber'] == $item) {
        			                 $price = $product['price'];
        			                 $artno = $product['articlenumber'];
        			                 $name = $product['productname'];
        			                 $found = true;
        			             }
        			         }
        			         
        			         if($found === true){
            			         echo "<div class='productdetails'>
                                           <div class='row'>
                                               <div class='item'>"
                                                . $name . 
                                              "</div>
                                               <div class='artno'>"
                                               . $artno .
                                              "</div> 
                                               <div class='price'>"
                                               . $price. "€
                                               </div>
                                               <div class='deletebtn'>
                                                    <button class='btn2'><a href='shop.php?action=delete&item={$key}'>Delete item</a></button>
                                               </div>
                                           </div>";
        			         }
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