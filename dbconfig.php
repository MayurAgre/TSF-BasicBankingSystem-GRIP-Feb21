<?php
session_start();
$username="root";
$password="";
$database="grip";
$server="localhost";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    
    die("Error".mysqli_connect_error());
}
// else{
//     echo "Connected";
// }
?>