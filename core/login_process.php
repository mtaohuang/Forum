<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
require_once ROOT.'/core/admin.inc.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql="select * from managers where email='{$username}'and password='{$password}' ";
$res=checkAdmin($sql);
print_r($res);
