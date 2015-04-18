<?php
session_start();
header("Content-Type:application/json;charset=utf-8");
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
require_once (ROOT . '/lib/mysql.func.php');
connect();
$username = isset($_POST['username']) ? $_POST['username'] : NULL;
$password = isset($_POST['password']) ? ($_POST['password']) : NULL;
$email = isset($_POST['email']) ? $_POST['email'] : NULL;
$head=0;
$checkcode = isset($_POST['checkcode']) ? ($_POST['checkcode']) : NULL;
$result=NULL;
$array=array("username"=>$username,"email"=>$email,"password"=>$password,"head"=>$head);

if($checkcode==$_SESSION['verifyCode']){
    $insert=insert("users", $array);
    $result = "{\"success\":true,\"head\":{$head},\"username\":\"你好，{$username}&nbsp;&nbsp;退出\"}";
}
else{
    $result = "{\"success\":false,\"msg\":\"验证码错误\"}";
}
echo $result;