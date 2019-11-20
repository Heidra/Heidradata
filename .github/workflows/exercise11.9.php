<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.9</title>
    </head>
    
    <body>
    	
        <?php 
        $year= date("Y");
        $year2=$year+10;
        
            for ($x=$year; $x<=$year2; $x++){
                echo "Easter is in " . date("d-M-Y",easter_date($x)) . "<br/>";
          }
        ?>

    </body>
</html>