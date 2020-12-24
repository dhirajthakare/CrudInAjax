<?php

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'ajax');



    $username = $_POST['username'];
    $password = $_POST['password'];
    
$sql = " insert into `insertdata` (`username`,`password`)values('$username','$password')";
$result = mysqli_query($conn,$sql);



?>