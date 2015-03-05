<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
require_once ROOT.'/lib/mysql.func.php';
require_once ROOT.'/lib/common.php';
connect();
function checkAdmin($sql){
    return fetchOne($sql);
}

function checkLogined(){
    if($_SESSION['adminId']==""&&$_COOKIE['adminId']==""){
        alertMes("请先登录","login.php");
    }
}