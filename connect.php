<?php

$user = "root";
$password = "";
$servername = "localhost";
$db="corona";

$con=mysqli_connect($servername,$user,$password,$db);

if($con){
    ?>
    <script>alert("connection successfully")</script>
    <?php
}else{
    die("no connection".mysqli_connect_error());
}


?>