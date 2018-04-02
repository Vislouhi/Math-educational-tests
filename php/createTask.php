<?php




$server = "localhost";
$username = "id4878180_vislouhi";
$password = "123123";
$database = "id4878180_requester";


    
$head=$_GET['Head'];
$text1=$_GET['Text1'];
$text2=$_GET['Text2'];

$conn = mysqli_connect($server,$username,$password) or die(mysql_error());
$db = mysqli_select_db($conn,$database) or die(mysql_error());



$query = "INSERT INTO `Table2`(`head`, `text1`, `text2`, `empt2`) VALUES ('".$head."','".$text1."','".$text2."',0)";

$result = mysqli_query($conn,$query) or die(mysql_error());
$arr = array('status' => 'ok', 'errCode' => '0');

header("Content-Type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');
echo json_encode($arr);
?>