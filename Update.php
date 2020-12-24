<?php

$conn = mysqli_connect('localhost','root','','ajax');
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];


$edit = "UPDATE `insertdata` SET `username` = '$username', `password` = '$password' WHERE `insertdata`.`id` = $id;  ";

$result = mysqli_query($conn,$edit);





?>