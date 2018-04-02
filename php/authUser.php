<?php




$server = "localhost";
$username = "id4878180_vislouhi";
$password = "123123";
$database = "id4878180_requester";


    
$email=$_GET['email'];
$pass=$_GET['pass'];

$conn = mysqli_connect($server,$username,$password) or die(mysql_error());
$db = mysqli_select_db($conn,$database) or die(mysql_error());

$query = "SELECT * FROM `Table1` WHERE `email` LIKE '".$email."'";
$result = mysqli_query($conn,$query) or die(mysql_error());

$num_rows = $result->num_rows;

if ($num_rows==0){


$arr = array('status' => 'error', 'errCode' => '1');
}else{
    
$query = "SELECT * FROM `Table1` WHERE `email` LIKE '".$email."' AND `pass` LIKE '".$pass."'";
$result = mysqli_query($conn,$query) or die(mysql_error());
if ($result->num_rows==0){
 $arr = array('status' => 'error', 'errCode' => '2');     
}else{

$arr = array('status' => 'ok', 'errCode' => '0');    

}    
    
}
header("Content-Type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');
echo json_encode($arr);
?>