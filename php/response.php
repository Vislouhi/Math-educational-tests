<?php

//извлечение параметров из строки запроса ?email=ivan@ivan.com&pass=12345"
$email = $_GET['email'];
$pass = $_GET['pass'];

//здесь работа с базой данных

//формирование массива для ответа приложению
$arr = array('email' => $email, 'pass' => $pass, 'status' => 'ok');

//Ответ в формате json.
header("Content-Type: application/json; charset=utf-8");
//разрешен доступ из любого домена.
header('Access-Control-Allow-Origin: *');
//вывод ответа
echo json_encode($arr);
?>
