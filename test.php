<!DOCTYPE html>
<html>
<body>

<?php
    
    echo "Database II Final Project - Baseball database";
    
    $db_connection = mysqli_connect("localhost", "Joey", "123456", "Baseball");
    
    $query = "select * from teams";
    $res = mysqli_query($db_connection, $query);
    
    
    while($row = mysqli_fetch_assoc($res)) {
        
        echo "<Left><table border=1 width=100%><tr>";
        
        // $row is array... foreach( .. ) puts every element
        // of $row to $cell variable
        
        foreach($row as $cell)
        echo "<td>$cell</td>";
        
        echo "</tr>\n";
        
        
    }
    
    
    
    mysqli_close($db_connection);
    ?>





</body>
</html>
