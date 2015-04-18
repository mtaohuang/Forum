<?php

session_start();
header("Content-Type:application/json;charset=utf-8");
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
include_once (ROOT . '/lib/mysql.func.php');
require_once (ROOT . '/core/admin.inc.php');
$username = isset($_POST['email']) ? $_POST['email'] : NULL;
$password = isset($_POST['password']) ? ($_POST['password']) : NULL;
$remMe=isset($_POST['remMe'])?$_POST['remMe']:NULL;
$sql = "select username,head,id,email from users where email='{$username}'and password='{$password}' ";
$res = fetchOne($sql);
if ($res) {
    $result = "{\"success\":true,\"head\":{$res['head']},\"username\":\"你好，{$res['username']}&nbsp;&nbsp;退出\"}";
    $_SESSION['username'] = $res['username'];
    $_SESSION['head'] = $res['head'];
    $_SESSION['id'] = $res['id'];
    if ($remMe) {
        setcookie("autoLogin", "yes", time() + 7 * 24 * 3600);
        setcookie("id", $res['id']);
        setcookie("email", $res['email'], time() + 7 * 24 * 3600);
        setcookie("username", $res['username'], time() + 7 * 24 * 3600);
        setcookie("password", $password, time() + 7 * 24 * 3600);
    }else{
        setcookie("autoLogin", "no", time() + 7 * 24 * 3600);
    }
} else {
    if (fetchOne("select id from users where email ='{$username}'")) {
        $result = "{\"success\":false,\"msg\":\"用户名或密码错误，&nbsp;<a href='findPWD.php'>找回密码</a>\"}";
    } else {
        $result = "{\"success\":false,\"msg\":\"该邮箱未注册\"}";
    }
}
echo $result;

