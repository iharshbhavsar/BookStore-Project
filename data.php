<?php

require("mysqli_connect.php");

    $query = "select * from BookInventory";
    $result = mysqli_query($dbc,$query);
    
    if(mysqli_num_rows($result)>0){
        while(
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
               
                $bookid = $row['bookid'];
                $bookqty = $row['bookqty'];
                
                echo "<br><p> Message id is :  $bookid</p>";
    
                echo "<p> Comment is :  $bookqty</p>";
    
            }
        
    }

?>