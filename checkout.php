<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
    <?php

    session_start();

    if(isset($_GET['bookname'])){
        $_SESSION['bookname'] = $_GET['bookname'];
        $bookname = $_SESSION['bookname'];

        echo "<h3>Selected Book Name: " .$bookname. "</h3>" ;
    };

?>

    <form method="post" action="checkout.php">
        
        <label>First Name : <input type="text" name="custfirstname"></label>
        
        <p><label>Last Name : <input type="text" name="custlastname"></label></p>

        <input type="radio" name="payment" id="cash" value="cash">
        <label>Cash Payment</label>

        <input type="radio" name="payment" id="card" value="card">
        <label>Card Payment</label>
    
        
        <p><input type="submit" name="submit" id="submit"></p>


    </form>
 
</body>
</html>


<?php

require("mysqli_oop_connect.php");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $bookname = $_SESSION['bookname'];
    $error = false;

    if((empty($_POST['custfirstname'])) && (empty($_POST['custlastname'])) && (!isset($_POST['payment']))){
        $error = true;
        echo "Please fill all the fields";
    }


    if($error==false){

        $custfirstname = mysqli_real_escape_string($dbc_oop,$_POST['custfirstname']);

        $custlastname = mysqli_real_escape_string($dbc_oop,$_POST['custlastname']);

        $payment = mysqli_real_escape_string($dbc_oop,$_POST['payment']);

        if(isset($_POST['submit'])){

            if(isset($_POST['payment'])){

              $payment = $_POST['payment'];
                                 
            }
          }

          $insertquery = "insert into BookInventoryOrder (bookname,custfirstname,custlastname,payment) values ('$bookname','$custfirstname','$custlastname','$payment')";

          $updatedata = "update BookInventory set bookqty = bookqty-1 where bookname = '$bookname'";

          mysqli_query($dbc_oop,$insertquery);

          mysqli_query($dbc_oop,$updatedata);

          mysqli_close($dbc_oop);
          
    }
}



?>
