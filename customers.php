<?php
require_once"dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/customers.css">
<!-- <link rel="stylesheet" href="css/table.css"> -->
    <title>Customers</title>
    
</head>
<body>
<!-- <div id="main">
    
    <nav>
    <span id="brandlogo"><a href="#">ABC BANK</a></span>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="customers.php">View Customers</a></li>
            <li><a href="">Transactions History</a></li>
            <li><a href="newfeedback/feedback.php">Contact</a></li>
            <li><a href="">About Us</a></li>
            
        </ul>
    </nav>
</div> -->

<nav class="navbar">
    <div class="brand-title">ABC BANK</div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="customers.php">View Customer</a></li>
            <li><a href="transactions.php">Transaction history</a></li>
            <li><a href="newfeedback/feedback.php">Contact Us</a></li>
            
        </ul>
    </div>
</nav>


    <table class="container">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Current Balance</th>
                <th>More info</th>
            </tr>
            <?php
            $sqlquery = "SELECT * from customers_info";
            $result = $conn->query($sqlquery);
            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<form action='viewcustomer.php' method='post'><tr><td>".$row["Customer_id"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".
                    $row["Current_Balance"]."</td><td> <a href='viewcustomer.php'><button type='submit' class='btn btn-primary' name='user'  id='users1' value= '{$row['Name']}'>View Customer</button></a></td></tr></form>";
                    // <button type='submit' class='btn btn-default' name='user'  id='users1' value= '{$row['name']}' >View Customer</button></a></td>"
                }
                echo "</table>";
            }else{
                echo "No result";
            }

            ?>
        </thead>
    </table>
    <script src="js/navbartoggle.js"></script>
    
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>