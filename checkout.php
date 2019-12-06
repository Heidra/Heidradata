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
        <title>Checkout</title>
    </head>
<body>
    <div class="showcase">
    	<div class="container showcase-inner">
            <h1>Checkout</h1>
            <p>Fill out the form to finalize your order</p>
    
            <div class="row">
              <div class="col-75 formarea">
                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="form">
                 	<div class="row">
                 		<div class="col-50x">
                 			<h3>Billing Address</h3>
                 				<label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        			<input class="inputbox2" type="text" id="fname" name="firstname" placeholder="John M. Doe">
                        		<label for="email"><i class="fa fa-envelope"></i> Email</label>
                        			<input class="inputbox2" type="text" id="email" name="email" placeholder="john@example.com">
                        		<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        			<input class="inputbox2" type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                        		<label for="city"><i class="fa fa-institution"></i> City</label>
                        			<input class="inputbox2" type="text" id="city" name="city" placeholder="New York">
                    			<div class="col-50">
                    				<label for="state">State</label>
                                    <input class="inputbox2" type="text" id="state" name="state" placeholder="NY">
                                </div>
                            	<div class="col-50">
                                	<label for="zip">Zip</label>
                                	<input class="inputbox2" type="text" id="zip" name="zip" placeholder="10001">
                              	</div>
              			</div>
              			
              			<div class="col-50y">
              				<h3>Payment</h3>
              					<label for="fname">Accepted Cards</label>
              					<div class="icon-container">
              						<i class="fab fa-cc-visa" style="color:navy;"></i>
                                  	<i class="fab fa-cc-amex" style="color:blue;"></i>
                                  	<i class="fab fa-cc-mastercard" style="color:red;"></i>
                                  	<i class="fab fa-cc-discover" style="color:orange;"></i> 
                        		</div>
                        		<label for="cname">Name on Card</label>
                        			<input class="inputbox2" type="text" id="cname" name="cardname" placeholder="John More Doe">
                        		<label for="ccnum">Credit card number</label>
                        			<input class="inputbox2" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        		<label for="expmonth">Exp Month</label>
                        			<input class="inputbox2" type="text" id="expmonth" name="expmonth" placeholder="September">
                          			<div class="col-50">
                            			<label for="expyear">Exp Year</label>
                            				<input class="inputbox2" type="text" id="expyear" name="expyear" placeholder="2018">
                          			</div>
                          			<div class="col-50">
                            			<label for="cvv">CVV</label>
                            				<input class="inputbox2" type="text" id="cvv" name="cvv" placeholder="352">
                          			</div>
                      	</div>
                  	</div>
                  	<div class="row">
                        <label>
                        	<input class="sameadr" type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                        </label>
                        	<input type="submit" value="Continue to checkout" class="btn">
                	</div>
            	</form>
               
              </div>
              <div class="col-25">
                <div class="container2">
                  <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                  <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                  <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                  <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                  <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                  <hr>
                  <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                </div>
              </div>
            </div>
        </div>
    </div>
</body>
</html>