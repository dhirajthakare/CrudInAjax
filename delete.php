<?php

$conn = mysqli_connect('localhost','root','','ajax');

$id = $_POST['id'];

$searchdata = "DELETE FROM `insertdata` WHERE `insertdata`.`id` = $id ";

$result = mysqli_query($conn,$searchdata);




?>