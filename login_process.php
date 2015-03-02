<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
include_once (ROOT.'/lib/common.php');
require_once (ROOT.'/core/admin.inc.php');
header("content-type:text/html;charset=utf-8");

$username=$_POST['username'];
$password=md5($_POST['password']);
$autoFlag=$_POST['autoFlag'];
$sql="select * from managers where email='{$username}'and password='{$password}' ";
$res=checkAdmin($sql);

if($res){
echo "Succeed.";
$_SESSION['adminId']=$res['id'];
echo $_SESSION['adminId'];
}
else{
    alertMes("用户名或密码错误","login.php");
}
//autoFlag选中
if($autoFlag){
    setcookie("adminId",$res['id'],time()+7*24*3600);
    setcookie("adminName",$res['username'],  time()+7*24*3600);
}
