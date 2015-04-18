<?php
session_start();
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
require_once(ROOT . '/lib/mysql.func.php');
connect();
$sql = "select * from users where id={$_SESSION['id']}";
$res=  fetchOne($sql);
echo    "<fieldset id='self_info_fieldset'><legend>我的信息</legend>
        <span class='item'>用&nbsp;户&nbsp;名&nbsp;：<input type=\"text\" value='{$res['email']}' class=\"textbox\"/></br></span>
	<span class='item'>昵&nbsp;&nbsp;&nbsp;&nbsp;称&nbsp;：<input type=\"email\" class=\"textbox\" value=\"{$res['username']}\"></br></span>
	<span class='item'>院&nbsp;&nbsp;&nbsp;&nbsp;系&nbsp;：<input type=\"text\" class=\"textbox\" value=\"{$res['academy']}\"></br></span>
	<span class='item'>专&nbsp;&nbsp;&nbsp;&nbsp;业&nbsp;：<input type=\"text\" class=\"textbox\" value=\"{$res['major']}\"></br></span>
	<span class='item'>入校年份&nbsp;：<input type=\"number\" class=\"textbox\" value=\"{$res['section']}\"></br></span>
        <span class='item'>家&nbsp;&nbsp;&nbsp;&nbsp;乡&nbsp;：<input type=\"text\" class=\"textbox\" value=\"{$res['homeaddress']}\"></br></span>
        <span class='item'>寝&nbsp;&nbsp;&nbsp;&nbsp;室&nbsp;：<input type=\"text\" class=\"textbox\" value=\"{$res['dorm']}\"></br></span>
        <span class='item'><span id=\"select_span\"><span id=\"select_text\">情感状况&nbsp;:
        </span><select id=\"selectmenu\" value=\"{$res['single']}\"><option>单身</option><option>恋爱
        </option><option selected=\"selected\">保密</option></select></span></br></span>
        </fieldset>
";

