<?php
session_start();
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
require_once(ROOT . '/lib/mysql.func.php');
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style/index.css" />
        <link rel=stylesheet type=text/css href="style/jquery-ui.min.css"/>

        <title>Club - 华中大学生团体聚合社区</title>
    </head>
    <body>
        <header>
            <img src="image/CCMTC_logo.bmp" alt="华中微软俱乐部" title="华中微软俱乐部" height="65px" id="Main_logo"/>
            <div id="navigators">
                <a href="" style="text-decoration:none"><div class="navigator">我的俱乐部</div></a>
                <a href="" style="text-decoration:none"><div class="navigator">公告&消息</div></a>
                <a href="#" style="text-decoration:none" onclick="head_selfInfo()"><div class="navigator">个人中心</div></a>
                <div id="log_reg"><a href="#" onclick="log_reg();">登录/注册</a></div>
            </div>
            <center><form id='log_reg_div'>
                    <div id="log_reg_container">
                        邮箱：<input type="email" class="log_info" id="email"></br>
                        密码：<input type="password" class="log_info" id="password"></br></br>
                        <input type="checkbox" name="remMe" id="remMe">记住我
                        <input type="submit" value="登录" class="log_reg_btn" onclick="login()"/>
                        <input type="button" name='reg' value='注册'class="log_reg_btn" onclick="register()"/></br>
                        <div class="ui-widget" id="log_info">
                            <div class="ui-state-error ui-corner-all" style="padding:0.1em; width: 200pt;" id='log_alert'>
                                <span class="ui-icon ui-icon-alert" style="float: left; margin-right:1em;"></span>
                                <p id="alert_msg"></p>
                            </div>
                        </div>
                    </div>
                </form>
            </center>
            <center>

                <form id="signup" name="signup" method="post">
                    <p id="signup_title">
                        注册
                    </p>
                    <br />
                    <div id="signup_textbox">
                        <input id="signup_username" class="signup-textbox" type="text" name="username" placeholder="用户名" value="" /><br>
                        <input id="signup_password" class="signup-textbox" type="password" name="password" placeholder="密码" value="" /><br>
                        <input id="signup_email" class="signup-textbox" type="email" name="email" placeholder="电子邮件" value="" /><br>
                        <input  id="checkcode" class="signup-textbox"type="text" name="checkcode" placeholder="验证码" />
                        <img id="checkimg" src="image/getVerify.php" title="看不清？点击刷新" onclick="this.src='image/getverify.php'" />
                    </div>
                    <input id="signup_button" type="button" name="signup" value="注册" onclick="reg()"/>
                    <div class="ui-widget" id="reg_info">
                        <center><div class="ui-state-error ui-corner-all" style="padding:0.1em; width: 200pt;" id='reg_alert'>
                                <span class="ui-icon ui-icon-alert" style="float: left; margin-right:1em;"></span>
                                <p id="reg_msg"></p></center>
                            </div>
                        </div>
                </form>
            </center>

        </header>
        <span id="txtHint"></span>
        <script src="script/jquery.js"></script>
        <script src="script/jquery-ui.min.js"></script>
        <script charset="utf-8" src="script/index.js"></script>
        <?php
        $res = $autoLogin = $head = $username = NULL;
        if (isset($_SESSION['id']) ? $_SESSION['id'] : NULL) {
            $head = $_SESSION['head'];
            $username = $_SESSION['username'];
        } else if (($autoLogin = isset($_COOKIE['autoLogin']) ? $_COOKIE['autoLogin'] : NULL) == "yes") {
            $email = isset($_COOKIE['email']) ? $_COOKIE['email'] : NULL;
            $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : NULL;
            $sql = "select username,head,id from users where email='{$email}' and password='{$password}'";
            if ($email && $password) {
                connect();
                $res = fetchOne($sql);
                $head = $res['head'];
                $username = $res['username'];
                $_SESSION['id'] = $res['id'];
                $_SESSION['username'] = $res['username'];
                $_SESSION['head'] = $res['head'];
            }
        }
        if ($head && $username) {
            $_SESSION['username'] = $res['username'];
            $_SESSION['head'] = $res['head'];
            $_SESSION['id'] = $res['id'];
            echo"<script>document.getElementById('log_reg').innerHTML = \"<a href='selfInfo.php'><img src=data/head/{$head}.jpg id='head'/>你好，{$username}</a>&nbsp;&nbsp;<a href='#'onclick='quit();'>退出</a>\";</script>";
        }
        ?>
    </body>
</html>

