<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
	
<title></title>

    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

<div id="wrapper">
			
			<nav>
			<a href="index.html">Home</a>
                <a href="store.php">BookStore</a>
                              
            </nav>
			
			</div>
            <div id="main">
        
                <h2> Here is a list of book available below:</h2></div>
            <br>

		</body>
		</html>



<?php

 require("mysqli_oop_connect.php");

$query_data = "select * from BookInventory";

$output = $dbc_oop-> query($query_data);

    if($output-> num_rows > 0){

        while($row = $output -> fetch_assoc()){

            echo "<p><ul><li><b>Book Name: </b><a href=checkout.php?bookname={$row['bookname']}>" .$row['bookname']. "</a> <br>"; 
			echo  "<b>Available Quantity: </b>" .$row['bookqty']. "</li></ul></p><br>";
        }
    }


?>