<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.10</title>
    </head>
    
    <body>
    	
        <?php 
        $year= date("Y");
        $year2=$year+10;

        for ($x=$year; $x<=$year2; $x++)
        {
            $date = holidays($x);
            $date = $date[0];
            echo "Good Friday is in $date <br/>";
        }
        
        
        function holidays($x):array
        {
            $return = array();
            $easterDate = DateTime::createFromFormat('U', easter_date($x) );
            $easterDate->modify('- 1 days');
            $return[] = $easterDate->format('d-M-Y');
                
            return $return;
        }
      
        
        
        ?>

    </body>
</html>

