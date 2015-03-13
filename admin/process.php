<?php

session_start();
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
include_once (ROOT . '/lib/common.php');
require_once (ROOT . '/core/admin.inc.php');
header("content-type:text/html;charset=utf-8");
$email = $_POST['email'];
$password = md5($_POST['password']);
$verifynum = $_POST['verify'];
if ($verifynum == $_SESSION['verifyNum']) {
    $sql = "select * from managers where email='{$email}' and password='{$password}'";
    $res = checkAdmin($sql);
    if ($res) {
        echo "Succeed.";
        $_SESSION['adminId'] = $res['id'];
        echo $res['id'];
    } else {
        alertMes("用户名或密码错误", "adminLogin.php");
    }
} else {
    echo"验证码错误";
}
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/admin_process.css">
</head>
<body>
    <img src="../data/head/<?php echo "{$res['id']}.jpg"?>" width="100px" height="100px"/>
</body>