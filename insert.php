<?php

include 'connect.php';


if(isset($_POST['submit'])){

$name=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$symptoms=$_POST['symptoms'];
$message=$_POST['message'];

$insertquery="insert into affectpeople( name,phone,email,address,symptoms,message) VALUES ('$name','$email','$phone','$address','$symptoms','$message')";

$query=mysqli_query($con,$insertquery);
if($query){

    ?>
    <script>alert("Message has been sent")</script>
 <?php 
}else{
    ?>
    <script>alert("Message not sending")</script>
 <?php 
}
header('location:index.php');
}
?>