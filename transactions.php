<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Transaction History</title>
    <style>
        
    body{
        background-color:rgb(231, 211, 96)
  }
    }
    </style>
</head>
<body>
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
                <th>Transaction ID</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount Paid</th>
                <th>&nbsp;Date &nbsp;and &nbsp;&nbsp;Time</th>
            </tr>
            <?php
            $sqlquery = "SELECT * from transactions";
            $result = $conn->query($sqlquery);
            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>".$row["Transaction_id"]."</td><td>".$row["Sender"]."</td><td>".$row["Receiver"]."</td><td>".
                    $row["Amount"]."</td><td>".$row["Date"]."</td></tr>" ;
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