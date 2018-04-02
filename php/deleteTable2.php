<?php




$server = "localhost";
$username = "id4878180_vislouhi";
$password = "123123";
$database = "id4878180_requester";


    
$req=$_GET['req'];

$conn = mysqli_connect($server,$username,$password) or die(mysql_error());
$db = mysqli_select_db($conn,$database) or die(mysql_error());

$query = "DROP TABLE `id4878180_requester`.`Table2;";

$result = mysqli_query($conn,$query) or die(mysql_error());

header("Content-Type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');
echo $result;
?>