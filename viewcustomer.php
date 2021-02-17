<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>View Customer</title>
    <style>
    body{
        background-color:rgb(240, 186, 87);
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
    <div class="container mt-5 ">
    <div class="row">
    <div class="col-6">
    <span class="font-weight-bold" style="color:#800000;font-size:1.8em;line-height:1em;display:inline;margin:10px 5px 0px 5px;padding-top:1%">Account Details</span>
<?php
        if (isset($_POST['user']))
        {
          $user=$_POST['user'];
          
          $result=mysqli_query($conn,"SELECT * FROM customers_info WHERE Name='$user'");
          
          while($row=mysqli_fetch_array($result))
          {
            echo "<p style='background:rgb(195, 255, 252);'><b style='font-size:1.2em;'>Customer ID</b> &nbsp;: <strong>".$row['Customer_id']."</strong></p><br>";
            echo "<p style='background:rgb(195, 255, 252);' name='sender'><b style='font-size:1.2em;'>Name&nbsp;&nbsp;</b>&nbsp;&nbsp;:<strong> ".$row['Name']."</strong></p><br>";
            echo "<p style='background:rgb(195, 255, 252);' ><b style='font-size:1.2em;'>Email ID</b> : <strong>".$row['Email']."</strong></p><br>";
            echo "<p style='background:rgb(195, 255, 252);' ><b style='font-size:1.2em;'>Address ID</b> : <strong>".$row['Address']."</strong></p><br>";
            echo "<p style='background:rgb(195, 255, 252);' ><b style='font-size:1.2em;'>Account No.</b> : <strong>".$row['Account_no']."</strong></p><br>";
            echo "<p style='background:rgb(195, 255, 252);' ><b style='font-size:1.2em;'>IFSC Code ID</b> : <strong>".$row['IFSC_code']."</strong></p><br>";
            echo "<p style='background:rgb(195, 255, 252);' ><b style='font-size:1.2em;'>Balance</b>&nbsp; :&nbsp;<b>&#8377;</b> <strong>".$row['Current_Balance']."</strong></p>";
          }         
        }
        else{
            echo "something went wrong";
        }
     ?>
     </div>


        <div class="col-6">
                    <form action="transfer.php" method="POST">
                        
                    
                    <div style="padding-top:2%;display:inline;">
                    <span class="font-weight-bold" style="color:#800000;font-size:1.8em;line-height:1em;display:inline;margin:10px 5px 0px 5px;padding-top:1%">Money Transfer</span>
                    </div><br><br>
                    <b style="font-size:1.2em;">Sender</b> : <span style="font-size:1.2em;"><input id="myinput" name="senderr" disabled type="text"class='text-muted' style="width:40%;border:none;" value='<?php echo "$user";?>'></span>
                    <input name="sender" style="display:none;" value="<?php echo "$user";?>">

                        <br><br><br>
                        <b style="font-size:1.2em;">Select Reciever:</b>
                <select name="reciever" id="dropdown" required>
                    <option>Select Reciever</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "grip");
                $res = mysqli_query($db, "SELECT * FROM customers_info WHERE Name!='$user'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['Name']."</option>");
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;">Amount to be transferred &#8377;:</b>
                        <input name="amount" type="number" style="width:35%;" min="100" required>
                        <br><br><br>
                        <button id="transfer"  name="transfer" class="btn btn-primary" ><b>Transfer</b></button>
                        </form>
        </div>

    </div>
    </div>

    

    <script src="js/navbartoggle.js"></script>

  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>