<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.8</title>
    </head>
    
    <body>
    	

    	
    	
    	<?php 
    	  $startErr=$endErr="";
    	  $start=$end="";
    	 
    	  
    	      if(empty($_GET["start"])){
    	          $startErr="Error";
    	      }
    	      else {
    	          if(!preg_match("/^[0-9]*$/",$_GET["start"])){
    	              $startErr="Error no number";
    	              $errorparameter2=true;
    	          }
    	      }
    	  
    	  
    	
    	      if(empty($_GET["end"])){
    	          $endErr="Error";
    	      }
    	      else {
    	          if(!preg_match("/^[0-9]*$/",$_GET["end"])){
    	              $endErr="Error no number";
    	              $errorparameter=true;
    	          }
    	      }
    	  
    	  
    	  ?>
    	  
    	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
    		START: <input name="start"><?php echo $startErr; ?>
    		<br>
    		END: <input name="end"><?php echo $endErr; ?>
    		<br>
    		<button type="submit">Range!</button>
		 </form>
    	  
    	  <?php 
    	  
    	  if($errorparameter!==true && $errorparameter2!==true){
    	      $a=$_GET["start"];
    	      $b=$_GET["end"];
    	      for($i=$a; $i<=$b; $i++){
    	          echo"".$i."<br/>";
    	      }
    	  }
    	  
    	?>
    </body>
</html>