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

if($_GET['action'] == 'delete') {
    delete_item();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
    	<link rel="stylesheet" href="checkout.css">
    	<link rel="stylesheet" href="menu.css">
    	<script src="https://kit.fontawesome.com/d5b4045246.js" crossorigin="anonymous"></script>
       <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script>

        $(document).ready(function(){

        	$("#fname").keyup(function(){
            	console.log(this.value);
            	if (ValidateName(this.value) === true ) {
					console.log("its valid");
					$("#fname").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		$("#fname").css({"border":"1px solid red", "color" :"red"});
            	}
            });

    		        
            $("#email").keyup(function(){
            	console.log(this.value);
            	if (ValidateEmail(this.value) === true ) {
					console.log("its valid");
					$("#email").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		console.log("its not valid");
            		$("#email").css({"border":"1px solid red", "color" :"red"});
            	}
            });

            
            $("#adr").keyup(function(){
            	console.log(this.value);
            	if (ValidateAddress(this.value) === true ) {
					console.log("its valid");
					$("#adr").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		console.log("its not valid");
            		$("#adr").css({"border":"1px solid red", "color" :"red"});
            	}
            });


            $("#city").keyup(function(){
            	console.log(this.value);
            	if (ValidateCity(this.value) === true ) {
					console.log("its valid");
					$("#city").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		console.log("its not valid");
            		$("#city").css({"border":"1px solid red", "color" :"red"});
            	}
            });


            $("#state").keyup(function(){
            	console.log(this.value);
            	if (ValidateState(this.value) === true ) {
					console.log("its valid");
					$("#state").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		console.log("its not valid");
            		$("#state").css({"border":"1px solid red", "color" :"red"});
            	}
            });


            $("#zip").keyup(function(){
            	console.log(this.value);
            	if (ValidateZIP(this.value) === true ) {
					console.log("its valid");
					$("#zip").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		console.log("its not valid");
            		$("#zip").css({"border":"1px solid red", "color" :"red"});
            	}
            });


            $("#cname").keyup(function(){
            	console.log(this.value);
            	if (ValidateCardname(this.value) === true ) {
					console.log("its valid");
					$("#cname").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		$("#cname").css({"border":"1px solid red", "color" :"red"});
            	}
            });


            $("#ccnum").keyup(function(){
            	console.log(this.value);
            	if (ValidateCardnumber(this.value) === true ) {
					console.log("its valid");
					$("#ccnum").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		$("#ccnum").css({"border":"1px solid red", "color" :"red"});
            	}
            });


            $("#expyear").keyup(function(){
            	console.log(this.value);
            	var month = $("#expmonth").val();
            	if (ValidateExpirationDate(this.value, month) === true ) {
					console.log("its valid");
					$("#expyear").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		$("#expyear").css({"border":"1px solid red", "color" :"red"});
            	}
            });


            $("#cvv").keyup(function(){
            	console.log(this.value);
            	if (ValidateCVV(this.value) === true ) {
					console.log("its valid");
					$("#cvv").css({"border":"1px solid green", "color" :"green"});
            	} else {
            		$("#cvv").css({"border":"1px solid red", "color" :"red"});
            	}
            });
           
        });



        
        function ValidateName(fname) 
        {
         if (/[a-zA-Z'-\s]{1,50}$/.test(fname))
          {
            return (true)
          }
            return (false)
        }


        
        function ValidateEmail(email) 
        {
         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
          {
            return (true)
          }
            return (false)
        }


        
        function ValidateAddress(adr) 
        {
         if (/^[a-zA-Z0-9\s,'-]+$/.test(adr))
          {
            return (true)
          }
            return (false)
        }



        function ValidateCity(city) 
        {
         if (/[a-zA-Z'&-()\s]{1,50}$/.test(city))
          {
            return (true)
          }
            return (false)
        }



        function ValidateState(state) 
        {
         if (/[a-zA-Z'&-\s]{1,50}$/.test(state))
          {
            return (true)
          }
            return (false)
        }


        function ValidateZIP(zip) 
        {
         if (/^[a-zA-Z0-9\s'-]+$/.test(zip))
          {
            return (true)
          }
            return (false)
        }



        function ValidateCardname(cname) 
        {
         if (/[a-zA-Z'-\s]{1,50}$/.test(cname))
          {
            return (true)
          }
            return (false)
        }


        function ValidateCardnumber(ccnum) 
        {
         if (/[0-9]{4}[-]{1}[0-9]{4}[-]{1}[0-9]{4}[-]{1}[0-9]{4}$/.test(ccnum))
          {
            return (true)
          }
            return (false)
        }


        function ValidateExpirationDate(expyear, expmonth) 
        {
    	const currentMonth = new Date().getMonth() + 1;
        const currentYear  = new Date().getFullYear();
        if (expyear > currentYear ||  (expyear == currentYear && expmonth >= currentMonth))
          {
            return (true)
          }
            return (false)
        }


        function ValidateCVV(cvv) 
        {
         if (/^[0-9]{3}$/.test(cvv))
          {
            return (true)
          }
            return (false)
        }
        
        </script> 
       
       
        <title>Checkout</title>
    </head>
<body>
    <div class="showcase">
    	<div class="showcase-inner">
            <h1>Checkout</h1>
            <p>Fill out the form to finalize your order</p>
    
            <div class="row">
              <div class="col-75">
              	<div class="container">
              	<div id="error"></div>
                 <form action="confirmation.php" method="POST" class="form" id="form">
                 	<div class="row">
                 		<div class="col-50">
                 			<h3>Billing Address</h3><hr> 
                 				<label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        			<input class="inputbox2" type="text" id="fname" name="firstname" placeholder="John M. Doe" required value='<?php echo $_POST['firstname'];?>'>
                        		<label for="email"><i class="fa fa-envelope"></i> Email</label>
                        			<input class="inputbox2" type="email" id="email" name="email" placeholder="john@example.com" required value='<?php echo $_POST['email'];?>'>
                        		<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        			<input class="inputbox2" type="text" id="adr" name="address" placeholder="542, W. 15th Street" required value='<?php echo $_POST['address'];?>'>
                        		<label for="city"><i class="fa fa-institution"></i> City</label>
                        			<input class="inputbox2" type="text" id="city" name="city" placeholder="New York" required value='<?php echo $_POST['city'];?>'>
                        		<div class="row">
                        			<div class="half11">
                        				<label for="state">State or Region/County</label>
                                        	<input class="inputbox2" type="text" id="state" name="state" placeholder="NY" required value='<?php echo $_POST['state'];?>'>
                                    </div>
                                	<div class="half21">
                                    	<label for="zip">Zip</label>
                                    		<input class="inputbox2" type="text" id="zip" name="zip" placeholder="10001" required value='<?php echo $_POST['zip'];?>'>
                                  	</div>
              					</div>	
              			</div>
              			
              			<div class="col-50">
              				<h3>Payment</h3><hr>
              					<div for="fname" class="cardtitle">Accepted Cards
              					</div>
              					<div class="icon-container">
              						<?php if ($_POST["radiobtn"] == "visa") {?>
              						<input type="radio" id="visa" class="visa" name="radiobtn" value="visa" checked="checked"/>
              							<label for="visa" class="labelstyle"></label> 
          					    <?php } else { ?>
              					 	<input type="radio" id="visa" class="visa" value="visa" name="radiobtn"/>
              							<label for="visa" class="labelstyle"></label> 
          					    <?php } ?>
          					    
          					    <?php if ($_POST["radiobtn"] == "amex") {?>
                                  	<input type="radio" id="amex" class="amex" name="radiobtn" value="amex" checked="checked"/>
                                  		<label for="amex" class="labelstyle"></label>
                          		<?php } else { ?>	
                      				<input type="radio" id="amex" class="amex" value="amex" name="radiobtn"/>
                                  		<label for="amex" class="labelstyle"></label>
                          		<?php } ?>
                          		
                          		<?php if ($_POST["radiobtn"] == "mastercard") {?>
                                  	<input type="radio" id="mastercard" class="mastercard" name="radiobtn" value="mastercard" checked="checked"/>
                                  		<label for="mastercard" class="labelstyle"></label>
                          		<?php } else { ?>
                          			<input type="radio" id="mastercard" class="mastercard" value="mastercard" name="radiobtn"/>
                                  		<label for="mastercard" class="labelstyle"></label>
                          		<?php } ?>
                          		
                          		<?php if ($_POST["radiobtn"] == "discover") {?>
                                  	<input type="radio" id="discover" class="discover" name="radiobtn" value="discover" checked="checked"/>
                                  		<label for="discover" class="labelstyle"></label> 
                          		<?php } else { ?>
                          			<input type="radio" id="discover" class="discover" value="discover" name="radiobtn"/>
                                  		<label for="discover" class="labelstyle"></label>
                          		<?php } ?> 
                        		</div>
                        		<label for="cname">Name on Card</label>
                        			<input class="inputbox2" type="text" id="cname" name="cardname" placeholder="John More Doe" required value='<?php echo $_POST['cardname'];?>'>
                        		<label for="ccnum">Credit card number</label>
                        			<input class="inputbox2" type="text" id="ccnum" name="cardnumber" maxlength=19 placeholder="1111-2222-3333-4444" required value='<?php echo $_POST['cardnumber'];?>'>
                        		<label for="expmonth">Exp Month</label>
                        			<select class="inputbox3" id="expmonth" name="expmonth" required>
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
                        		<div class="row">
                        			<div class="half1">	
                            			<label for="expyear">Exp Year</label>
                            				<input class="inputbox2" type="text" id="expyear" name="expyear" maxlength=4 placeholder="2018" required value='<?php echo $_POST['expyear'];?>' autocomplete='off'>
                            		</div>
                            		<div class="half2">	
                            			<label for="cvv">CVV</label>
                            				<input class="inputbox2" type="text" id="cvv" name="cvv" maxlength=3 placeholder="352" required value='<?php echo $_POST['cvv'];?>'>
                                  	</div>
                                </div>  			
                      	</div>
                  	
                  	</div>
                  	
                  	<div class="buttonline">
                        <label>
                        	<input class="sameadr" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        	<input type="submit" name="checkout" value="Continue to confirmation" class="btn">
                	</div>
            	  </form>
                </div>
              </div>
              
              <div class="col-30">
                    <div class="container">
                       <h3 style='margin-top:10%;'>Cart <div class='price2' style='color:black'><i class='fa fa-shopping-cart'></i><b>
                       <?php 
                       if (!empty($_SESSION['cart'])) {
                           echo count($_SESSION['cart']);
                       }
                       ?>
    			       </b></div></h3><hr>
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
                                                <div class='item'>" 
                	                               . $name . 
                	                               "</div>
                                                    <div class='artno'>"
                	                               . $artno .
                	                               "</div>
                                                    <div class='price'>"
                	                               . $price . "</div>" . "<div class='euro'>€</div>
                                                    <div class='deletebtn'>
                                                        <button class='btn5'><a href='checkout.php?action=delete&item={$key}'>Delete item</a></button>
                                                    </div>
                                           </div>";
        			             }
            			    }
            			    ?>
        			   </div>
        			   <hr>
    			    
                			    <?php 
                			    echo "
                        <div>
                            <div class='endprice'><h3>Total <div class='price2' style='color:black'><b>" . $endprice . "€</b></div></h3></div>";
                        			    ?>
                			<button class="btn3" type="submit"><a href="shop.php">Go back shopping</a></button>
                		</div>
            		</div>
                </div>
           </div>
      </div>
 
</body>
</html>