<?php

$email = $_GET['email'];
$pass = $_GET['pass'];


$servername = "localhost";
$username = "id****";
$password = "pass";
$database = "id48****";


    


$conn = mysqli_connect($server,$username,$password) or die(mysql_error());
$db = mysqli_select_db($conn,$database) or die(mysql_error());


$query = "INSERT INTO `requests` (`id`, `requests`, `empt1`, `empt2`) VALUES ('".$email."', '".$pass."', '123', '1')";
$result = mysqli_query($conn,$query) or die(mysql_error());




$query = "SELECT * FROM `requests` WHERE id LIKE 1855"; 
$result = mysqli_query($conn,$query) or die(mysql_error());


   
  while ($row = $result->fetch_array(MYSQLI_ASSOC))
  {
    $arr = array('email' => $row["id"], 'pass' => $row["requests"], 'status' => 'ok');     
  
    //printf ("%s (%s)\n", $row["id"], $row["requests"]);

  }






header("Content-Type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');
echo json_encode($arr);
?>
