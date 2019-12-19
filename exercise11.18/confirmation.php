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

include ('functions.php');

?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    	<!--JavaScript-jQuery-->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
    	<link rel="stylesheet" href="checkout.css">
    	<link rel="stylesheet" href="menu.css">
    	<script src="https://kit.fontawesome.com/d5b4045246.js" crossorigin="anonymous"></script>
        
        <title>Confirmation page</title>
    </head>
<body>
    <div class="showcase">
    	<div class="showcase-inner">
            <h1>Confirmation</h1>
            <p>Please check if your data is correct</p>
    
            <div class="row">
            
              <div class="col-75">
              	<div class="container">
                 <form action="confirmation.php" method="POST" class="form">
                 	<div class="row">
                 		<div class="col-50">
                 			<h3>Billing Address</h3><hr>
                 			
                 			 <script type="text/javascript">
                      			$(function () {
                     		        $("input[name=Firstname]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#fname").removeAttr("disabled");
                     		            } else {
                     		                $("#fname").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Email]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#email").removeAttr("disabled");
                     		            } else {
                     		                $("#email").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Address]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#adr").removeAttr("disabled");
                     		            } else {
                     		                $("#adr").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=City]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#city").removeAttr("disabled");
                     		            } else {
                     		                $("#city").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=State]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#state").removeAttr("disabled");
                     		            } else {
                     		                $("#state").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Zip]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#zip").removeAttr("disabled");
                     		            } else {
                     		                $("#zip").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Cardname]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#cname").removeAttr("disabled");
                     		            } else {
                     		                $("#cname").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Cardnumber]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#ccnum").removeAttr("disabled");
                     		            } else {
                     		                $("#ccnum").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Expmonth]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#expmonth").removeAttr("disabled");
                     		            } else {
                     		                $("#expmonth").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Expyear]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#expyear").removeAttr("disabled");
                     		            } else {
                     		                $("#expyear").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });

                      			$(function () {
                     		        $("input[name=Cvv]").click(function () {
                     		            if ($(this).val() == "Edit") {
                     		                $("#cvv").removeAttr("disabled");
                     		            } else {
                     		                $("#cvv").attr("disabled", "disabled");
                     		            }
                     		        });
                     		    });
                             </script>
                			
                 			<?php 
                 			        $name = $_POST['firstname'];
                 			        $email = $_POST['email'];
                 			        $address = $_POST['address'];
                 			        $city = $_POST['city'];
                 			        $state = $_POST['state'];
                 			        $zip = $_POST['zip'];
                 			        $cardname = $_POST['cardname'];
                 			        $cardnumber = $_POST['cardnumber'];
                 			        $expmonth = $_POST['expmonth'];
                 			        $expyear = $_POST['expyear'];
                 			        $cvv = $_POST['cvv']; ?>
                 			        
                 			        <div class='row'>
             			        		<label for='fname'><i class='fa fa-user'></i> Full Name</label>
             			        		<input class="btn4" type='button' value='Edit' name='Firstname' />
         			        		</div>
                        			    <input class='inputbox2' type='text' id='fname' name='firstname' value='<?php echo $name; ?>' required disabled = "disabled">
                        		    <div class='row'>
                        		    	<label for='email'><i class='fa fa-envelope'></i> Email</label>
                        		    	<input class="btn4" type='button' value='Edit' name='Email' />
                    		    	</div>
                        		        <input class='inputbox2' type='text' id='email' name='email' value='<?php echo $email; ?>' required disabled = "disabled">
                                   	<div class='row'>
                                   		<label for='adr'><i class='fa fa-address-card-o'></i> Address</label>
                                   		<input class="btn4" type='button' value='Edit' name='Address' />
                               		</div>
                                    	<input class='inputbox2' type='text' id='adr' name='address' value='<?php echo $address; ?>' required disabled = "disabled">
                                    <div class='row'>
                                    	<label for='city'><i class='fa fa-institution'></i> City</label>
                                    	<input class="btn4" type='button' value='Edit' name='City' />
                                	</div>
                                    	<input class='inputbox2' type='text' id='city' name='city' value='<?php echo $city; ?>' required disabled = "disabled">
                                    <div class='row'>
                			            <div class='half1'>
                			            	<div class='row'>
                                              <label for='state'>State</label>
                                      		  <input class="btn4" type='button' value='Edit' name='State' />
                                  		  	</div>
                        		              <input class='inputbox2' type='text' id='state' name='state' value='<?php echo $state; ?>' required disabled = "disabled">
                                         </div>
                			             <div class='half2'>
                			             	<div class='row'>
                                              <label for='zip'>Zip</label>
                                      		  <input class="btn4" type='button' value='Edit' name='Zip' />
                                  		    </div>
                                              <input class='inputbox2' type='text' id='zip' name='zip' value='<?php echo $zip; ?>' required disabled = "disabled">
      									 </div>
                                   </div>
              			</div>
              			
              			<div class='col-50'>
              				<h3>Payment</h3><hr>
              				<div for="fname" class="cardtitle">Accepted Cards</div>
              					<div class="icon-container">
              					<?php if ($_POST["radiobtn"] == "visa") {?>
              						<input type="radio" id="visa" class="visa" name="radiobtn" checked="checked"/>
              							<label for="visa" class="labelstyle"></label> 
          					    <?php } else { ?>
              					 	<input type="radio" id="visa" class="visa" name="radiobtn"/>
              							<label for="visa" class="labelstyle"></label> 
          					    <?php } ?>
          					    
          					    <?php if ($_POST["radiobtn"] == "amex") {?>
                                  	<input type="radio" id="amex" class="amex" name="radiobtn" checked="checked"/>
                                  		<label for="amex" class="labelstyle"></label>
                          		<?php } else { ?>	
                      				<input type="radio" id="amex" class="amex" name="radiobtn"/>
                                  		<label for="amex" class="labelstyle"></label>
                          		<?php } ?>
                          		
                          		<?php if ($_POST["radiobtn"] == "mastercard") {?>
                                  	<input type="radio" id="mastercard" class="mastercard" name="radiobtn" checked="checked"/>
                                  		<label for="mastercard" class="labelstyle"></label>
                          		<?php } else { ?>
                          			<input type="radio" id="mastercard" class="mastercard" name="radiobtn"/>
                                  		<label for="mastercard" class="labelstyle"></label>
                          		<?php } ?>
                          		
                          		<?php if ($_POST["radiobtn"] == "discover") {?>
                                  	<input type="radio" id="discover" class="discover" name="radiobtn" checked="checked"/>
                                  		<label for="discover" class="labelstyle"></label> 
                          		<?php } else { ?>
                          			<input type="radio" id="discover" class="discover" name="radiobtn"/>
                                  		<label for="discover" class="labelstyle"></label>
                          		<?php } ?> 
                          			
                        		</div>
              					<div class='row'>
                        			<label for='cname'>Name on Card</label>
                    				<input class="btn4" type='button' value='Edit' name='Cardname' />
                				</div>
                        		      	<input class='inputbox2' type='text' id='cname' name='cardname' value='<?php echo $cardname; ?>' required disabled = "disabled">
                        		<div class='row'>	
                        			<label for='ccnum'>Credit card number</label>
                    				<input class="btn4" type='button' value='Edit' name='Cardnumber' />
                				</div>
                        		      	<input class='inputbox2' type='text' id='ccnum' name='cardnumber' maxlength=19 value='<?php echo $cardnumber; ?>' required disabled = "disabled">
                    		 	<div class='row'>
                        		 	<label for='expmonth'>Exp Month</label>
                    		 		<input class="btn4"type='button' value='Edit' name='Expmonth' />
                		 		</div>
                        		      	<select class='inputbox3'  id='expmonth' name='expmonth' disabled = "disabled" required>
                                			<?php if ($_POST["expmonth"] == "01") {?>
                            					<option selected>01</option>
                                			<?php } else { ?>	
                                				<option>01</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "02") {?>
                                				<option selected>02</option>
                                			<?php } else { ?>	
                                				<option>02</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "03") {?>
                                				<option selected>03</option>
                                			<?php } else { ?>	
                                				<option>03</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "04") {?>
                                				<option selected>04</option>
                                			<?php } else { ?>	
                                				<option>04</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "05") {?>
                                				<option selected>05</option>
                                			<?php } else { ?>	
                                				<option>05</option>
                            				<?php } ?>
                            				<?php if ($_POST["expmonth"] == "06") {?>
                                				<option selected>06</option>
                                			<?php } else { ?>	
                                				<option>06</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "07") {?>
                                				<option selected>07</option>
                                			<?php } else { ?>	
                                				<option>07</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "08") {?>
                                				<option selected>08</option>
                                			<?php } else { ?>	
                                				<option>08</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "09") {?>
                                				<option selected>09</option>
                                			<?php } else { ?>	
                                				<option>09</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "10") {?>
                                				<option selected>10</option>
                                			<?php } else { ?>	
                                				<option>10</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "11") {?>
                                				<option selected>11</option>
                                			<?php } else { ?>	
                                				<option>11</option>
                            				<?php } ?>
                            				
                            				<?php if ($_POST["expmonth"] == "12") {?>
                                				<option selected>12</option>
                                			<?php } else { ?>	
                                				<option>12</option>
                            				<?php } ?>
                                    	</select>
                             	<div class='row'>
                    		      	<div class='half1'>
                    		      		<div class='row'>
                                            <label for='expyear'>Exp Year</label>
                                    	    <input class="btn4" type='button' value='Edit' name='Expyear' />
                                	    </div>
                                            <input class='inputbox2' type='text' id='expyear' name='expyear' maxlength=4 value='<?php echo $expyear; ?>' required disabled = "disabled">
                              		</div>
                                  	<div class='half2'>
                                  		<div class='row'>
                      			            <label for='cvv'>CVV</label>
                      			            <input class="btn4" type='button' value='Edit' name='Cvv' />
                  			            </div>
                      			            <input class='inputbox2' type='text' id='cvv' name='cvv' maxlength=3 value='<?php echo $cvv; ?>' required disabled = "disabled">
                                	</div>
                                </div>
                        </div>   
                  	</div>

                  	<div class="buttonline">
                        <label>
                        	<input class="sameadr" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        	<input type="submit" name="send" value="Finish Order" class="btn">
                	</div>
            	</form>
               </div>
              </div>
              
              <div class="col-30">
                <div class="container">
                   <?php 
                   if (!empty($_SESSION['cart'])) {
                       echo "<h3 style='margin-top:10%;'>Cart <div class='price2' style='color:black'><i class='fa fa-shopping-cart'></i> <b>" . count($_SESSION['cart']) . "</b></div></h3><hr>";
                   }
                   ?>
			       <div class='frame'>
    			       <?php
                       $endprice = 0;
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
        			             $endprice = $endprice + $price;
        			             echo "
                                       <div class='row2'>
                                            <div class='item2'>" 
            	                               . $name . 
            	                               "</div>
                                                <div class='artno2'>"
            	                               . $artno .
            	                               "</div>
                                                <div class='price3'>"
            	                               . $price . "</div>" . "<div class='euro'>€</div>
                                       </div>";
    			             }
        			    }
        			    ?>
    			    </div>
    			    <hr>
			    
        			    <?php 
        			    echo "
                    <div class='row'>
                        <div class='endprice'><h3>Total <div class='price2' style='color:black'><b>" . $endprice . "€</b></div></h3></div>";
            			    ?>
    			    </div>
    			    <form action="checkout.php" method='post'>
    			    <input type='hidden' name='firstname' value='<?php echo $_POST['firstname']?>'>
    			    <input type='hidden' name='email' value='<?php echo $_POST['email']?>'>
    			    <input type='hidden' name='address' value='<?php echo $_POST['address']?>'>
    			    <input type='hidden' name='city' value='<?php echo $_POST['city']?>'>
    			    <input type='hidden' name='state' value='<?php echo $_POST['state']?>'>
    			    <input type='hidden' name='zip' value='<?php echo $_POST['zip']?>'>
    			    <input type='hidden' name='radiobtn' value='<?php echo $_POST['radiobtn']?>'>
    			    <input type='hidden' name='cardname' value='<?php echo $_POST['cardname']?>'>
    			    <input type='hidden' name='cardnumber' value='<?php echo $_POST['cardnumber']?>'>
    			    <input type='hidden' name='expmonth' value='<?php echo $_POST['expmonth']?>'>
    			    <input type='hidden' name='expyear' value='<?php echo $_POST['expyear']?>'>
    			    <input type='hidden' name='cvv' value='<?php echo $_POST['cvv']?>'>
        			<input class="btn3" type="submit" name="edit" value='Go back to edit cart'>
                   	</form>
                </div>
              </div>
		</div>
    </div>
  
</body>
</html>