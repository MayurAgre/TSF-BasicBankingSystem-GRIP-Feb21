<?php
require_once"dbconfig.php";


$flag = false;
if (isset($_POST['transfer']))
{
$sender=$_POST["sender"];
$receiver=$_POST["reciever"];
$amount=$_POST["amount"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Navigation bar</h1>
    <?php
    $sql = "SELECT Current_Balance FROM customers_info WHERE name='$sender'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 if($amount>$row["Current_Balance"] or $row["Current_Balance"]-$amount<100){
    // echo "<script>alert( 'Error : Insufficient Balance' );</script>";
    echo"<script>alert('Error : You might have less money than the amount to be transferred or After transaction you should atleast have Rs500 in your account');

		
    window.location='customers.php';
    </script>";
   
 }
 else{
    $sql = "UPDATE `customers_info` SET Current_Balance=(Current_Balance-$amount) WHERE Name='$sender'";
    if ($conn->query($sql) === TRUE) {
      $flag=true;
    } else {
      echo "Error updating record: " . $conn->error;
    }
 }
}
}else{
    echo "0 results";
}



if($flag==true){
    $sql = "UPDATE `customers_info` SET Current_Balance=(Current_Balance+$amount) WHERE name='$receiver'";
    
    if ($conn->query($sql) === TRUE) {
      $flag=true;  
      
    } else {
      echo "Error updating record: " . $conn->error;
    }
    }


    if($flag==true){
        $sql = "INSERT INTO `transactions` (`Transaction_id`, `Sender`, `Receiver`, `Amount`,`Date`) VALUES (NULL, '$sender','$receiver','$amount',current_timestamp())";
        if ($conn->query($sql) === TRUE) {
            $flag=true;
        } else 
        {
          echo "Error updating record: " . $conn->error;
        }
        }

        if($flag==true){
            echo"<script>alert('You have successfully transfered money');

		
            window.location='transactions.php';
            </script>";
            }
 ?>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>