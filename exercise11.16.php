<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.16</title>
    </head>
    
    <body>
    
    <?php
    
    function germanday($timestamp) {
    setlocale(LC_TIME, 'de_DE.utf8');
    $weekday = strftime('%A');
    return $weekday;
    }
    
    function germanmonth($timestamp) {
        setlocale(LC_TIME, 'de_DE.utf8');
        $month = strftime('%B');
        return $month;
    }
    
    echo germanday() . ", ";
    echo germanmonth();
    
    echo "<br/>";
    
    
    for ($x=1; $x<=10000; $x++){
        echo "<span ";
        if (strpos(strftime('%A, %B %d, %Y',(time()+(60*60*24*$x))), 'Freitag')!==false && strpos(strftime('%A, %B %d, %Y',(time()+(60*60*24*$x))), '13')!==false ) {
                echo "style='background:red'";
            }
            echo ">".strftime('%A, %B %d, %Y',(time()+(60*60*24*$x)))."</span><br/>";
        }
  
 
        
    
    ?>
    
    </body>
</html>