<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
include_once (ROOT.'/lib/common.php');
require_once (ROOT.'/core/admin.inc.php');
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql="select * from users where email='{$username}'and password='{$password}' ";
$res=checkAdmin($sql);

if($res){
echo "Succeed.";
$_SESSION['adminId']=$res['id'];
echo $_SESSION['adminId'];
}
else{
    alertMes("用户名或密码错误","clubIndex.php");
}
//autoFlag选中
if(isset($_POST['autoFlag'])){
    setcookie("autoLogin","yes",time()+7*24*3600);
    setcookie("id",$res['id']);
    setcookie("adminName",$res['username'],  time()+7*24*3600);
}
