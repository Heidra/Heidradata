<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.1-3</title>
    </head>
    
    <body>
    	<?php
    	   echo "Hello, it is " . date("d-M-Y H:i") . "<br/>";
    	   echo "Easter time in this year " . date("d-M-Y",easter_date()) . "<br/>";
    	?>
    </body>
</html>