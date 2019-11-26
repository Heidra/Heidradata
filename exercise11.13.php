<!DOCTYPE html>
<html>
    <head>
    	<title>Exercise 11.13</title>
    </head>
    
    <body>
    	 
        <form action="" method="post">
        	<label>Column: </label><input type="text" name="column">
        	<br/>
        	<label>Row: </label><input type="text" name="row">	
        	<input type="submit" value="Create Table">
        </form>
        <br/>
        <br/>
        <?php
        $row = $_POST['row'];
        $column = $_POST['column'];
        	
    	function createTable($row,$column) 
    	{
    	    $counter=0;
            echo '<table border="1" cellpadding="25" cellspacing="0">';
            for ($i = 1; $i <= $row; $i++) 
            {
                echo '<tr>';
                for ($j = 1; $j <= $column; $j++) 
                {
                    $counter++;
                    echo "<td id='$counter'> $counter </td>";
                }
                
                echo "</tr>";
            }
    	}
       
        createTable($row,$column);    
        
        ?>
       
    </body>
</html>