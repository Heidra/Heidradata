<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.7</title>
    </head>
    
    <body>
    	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
    		START: <input name="start">
    		<br>
    		END: <input name="end">
    		<br>
    		<button type="submit">Range!</button>
    	</form>
    	<?php 
    	   $a=$_GET["start"];
    	   $b=$_GET["end"];
    	   for ($i=$a;$i<=$b;$i++)
    	   {
    	       echo"".$i."<br/>";
    	   }
    	?>
    </body>
</html>