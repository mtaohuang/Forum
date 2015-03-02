<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
function buildRandomString($type = 1, $length = 4) {
    if ($type == 1) {
        $chars = join("", range(0, 9));
    } else if ($type == 2) {
        $chars = join("", array_merge(range("a", "z"), range("A", "Z")));
    } else if ($type == 3) {
        $chars = join("", array_merge(range("a", "z"), range("A", "Z"), range(0, 9)));
    }
    if ($length > strlen($chars)) {
        exit("字符串长度不够");
    }
    $chars = str_shuffle($chars);
    return substr($chars, 0, $length);
}

/*
 * 得到独一的名字
 */
function getUniName(){
    return md5(uniqid(microtime(TRUE)),true);
}
/*
 *得到文件扩展名
 * @param string $filename
 * @return string
 */
function getExt($filename){
    return strtolower(end(explode(".", $filename)));
}