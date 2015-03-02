<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
//此处require运行无误，且必须这样写
require_once ROOT.'/conf/configs.php';
header("content-type:text/html;charset=utf-8");
/* 连接数据库 */

function connect() {
    $link = mysql_connect(DB_HOST, DB_USER, DB_PWD) or die("数据库连接失败 Error:" . mysql_errno() . ":" . mysql_error());
    mysql_set_charset(DB_CHARSET);
    mysql_select_db(DB_DBNAME) or die("指定数据库打开失败");
    return $link;
}

//记录插入操作
function insert($table, $array) {
    $key = join(",", array_keys($array));
    $vals = "'" . join(",", array_values($array)) . ",";
    $sql = "insert {$table}($keys) values({$vals})";
    mysql_query($sql);
    return mysql_insert_id();
}

//记录更新操作
function update($table, $array, $where = null) {
    foreach ($array as $key => $val) {
        if ($str == null) {
            $sep = "";
        } else {
            $sep = ",";
        }
        $str.=$sep . $key . "='" . $val . "'";
    }
    $sql = "update{$table} set {$str}" . ($where == null ? null : "where " . $where);
    mysql_query($sql);
    return mysql_affected_rows();
}

function delete($table,$where=null){
    $where=$where==null?null:"$where ".$where;
    $sql="delete from{$table}{$where}";
    mysql_query($sql);
    return mysql_affected_rows();
}

function fetchOne($sql,$result_type=MYSQL_ASSOC){
    $result=  mysql_query($sql);
    
    $row= mysql_fetch_array($result,$result_type);
    return $row;
}

function fetchAll($sql,$result_type=MYSQL_ASSOC){
    $result-mysql_query($sql);
    while(@$row=  mysql_fetch_array($result,$result_type)){
        $rows[]=$row;
    }
    return $rows;
}

//得到结果集中的记录条数
function getResultNum($sql){
    $result=  mysql_query($sql);
    return mysql_num_rows($result);
}