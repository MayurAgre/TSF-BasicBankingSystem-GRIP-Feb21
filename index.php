<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/navbar.css">
<!-- <link rel="stylesheet" href="css/animation.css"> -->
</head>

<body>

<nav class="navbar">
    <div class="brand-title" ><span style="color:black">ABC BANK</span></div>
    <!-- <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a> -->
    
</nav> 


<div class="slide">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" id="carousel" src="/grip/images/carousel4.jpg" alt="First slide" style="height:570px;">
                <div class="carousel-caption">
                    <h4 style="color:#312B35">Easy Payment System</h4>
                    <form action="customers.php"><button class="btn btn-success">Get Started</button></form>
                    <p style="color: #312B35;">Transfer money easily from one account to another</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="carousel" src="/grip/images/carousel5.jpg" alt="Second slide" style="height:570px;">
                <div class="carousel-caption">
                    <h3 style="color:white">Transactions</h3>
                    <form action="customers.php"><button class="btn btn-success">Get Started</button></form>
                    <p style="color: white;">View all your transactions</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" id="carousel" src="/grip/images/carousel6.png" alt="Third slide" style="height:570px;">
                <div class="carousel-caption">
                    <h3 style="color:#312B35;"></h3>
                    <form action="customers.php"><button class="btn btn-success">Get Started</button></form>
                    <p style="color:#312B35;">We provide a very safe and secure transaction!!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> 
</div>
<footer class="footer" style="background-color:black;height:100px;">
<div class="para"><span style="color:yellow;">&copy;This project is made by Mayur in 2021 at GRIP </span></div>
<div class="para"><span style="color:yellow;">Contact me :&nbsp;</span><a target=”_blank” href="https://github.com/MayurAgre/TSF-BasicBankingSystem-GRIP-Feb21.git"><i class="fa fa-github" style="font-size:36px;color:white;"></i></a>&nbsp;&nbsp;&nbsp;<a target=”_blank” href="https://www.linkedin.com/in/mayur-agre-8023031aa/"><i class="fa fa-linkedin-square" style="font-size:36px;color: rgb(47, 37, 197);"></i></a></div>



            

        </footer>
<script src="js/navbartoggle.js"></script>


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->
</body>
</html>