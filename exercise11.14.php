<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.14</title>
    </head>
    
    <body>
    	 
        <form action="" method="post">
        	<label>Column: </label><input type="text" name="column" value="<?php echo $_POST['column']?>">
        	<br/>
        	<label>Row: </label><input type="text" name="row" value="<?php echo $_POST['row']?>">	
        	<br/>
        	<label>Number of drawn numbers: </label><input type="text" name="drawn" value="<?php echo $_POST['drawn']?>">
        	<br/>
        	<input type="submit" value="Lotto!">
        </form>
        <br/>
        <br/>
        <?php
        $drawn = $_POST['drawn'];
        $number = range (1, ($_POST['row']*$_POST['column']) ); 

        $win = array_rand ($number, $drawn);
       
        sort($win);
        $realwinnumbers = array();
        echo 'The winning numbers are: ';
        foreach ($win as $item){
            echo $number[$item] . ' ';
            $realwinnumbers[]=$number[$item];
        }
        
       
    
         
        $row = $_POST['row']; 
        $column = $_POST['column']; 
        
        createTable($row,$column,$realwinnumbers); 
        
    	function createTable($row,$column,$winning_numbers) 
    	{
    	    $counter=1;
            echo '<table border="1" cellpadding="25" cellspacing="0">';
            for ($i = 1; $i <= $row; $i++) 
            {
                echo '<tr>';
                for ($j = 1; $j <= $column; $j++) 
                {
                    if (in_array($counter,$winning_numbers)) {
                        echo "<td style='background-color:red'> $counter </td>";
                        
                    } else {
                        echo "<td id='$counter'> $counter </td>";
                }
                $counter++;
                }
                echo "</tr>";
            }
    	}
    	
    	
        
        ?>
       
    </body>
</html>