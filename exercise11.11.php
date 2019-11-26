<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.11</title>
    </head>
    
    <body>
    	
        <?php
        $year = date ("Y");
        $year2 = $year+10;
        for ($year; $year <= ($year2); $year++) {
            echo "My birthday in " . ($year) . " is on " . date("l, F, j", strtotime("june 4 {$year}")) . "<br>";
        }
        ?>

    </body>
</html>
