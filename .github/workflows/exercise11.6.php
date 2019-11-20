<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.6</title>
    </head>
    
    <body>
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