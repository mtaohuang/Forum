<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="style/login_sheet.css" />
        <link rel="stylesheet" type="text/css" href="style/signup_sheet.css">
        <script type="text/javascript" src="script/signup.js"></script>
        <title>登录</title>
    </head>
    <body>
        <div id="container">
            <div id="right">
                <div id="right_content">
                    <form id="login_form" name="login_form" action="login_process.php" method="post">
                        <div id="login_form_textbox">
                            <input class="textbox" type="email" name="username" placeholder="电子邮箱" />
                            <input class="textbox" type="password" name="password" placeholder="密码" />
                        </div>
                        <div id="login_form_checkbox">
                            <input id="checkbox" type="checkbox" name="autoFlag" value="1"/>
                            记住用户名和密码

                        </div>
                        <div id="login_form_button">	
                            <input id="login" type="submit" name="login" value="登录" />
                            <input id="signup" type="button" name="signup" value="注册" onclick="displayLayer()" />
                        </div>	
                    </form>
                </div>
            </div>
            <div id="left">
                <div id="left_head"></div>
                <div id="left_body">
                    <p>
                        欢迎使用 Club 系统
                    </p>
                </div>
                <div id="left_foot"></div>
            </div>
        </div>
        <div id="signup_layer">
            <div id="signup_layer_shade">

            </div>
            <button id="signup_back" onclick="hideLayer()">
                <img src="image/signup_close.png">
            </button>
            <div id="signup_box">
                <form id="signup_form">
                    <div id="signup_form_textbox">
                        <input class="textbox" type="email" name="username" placeholder="电子邮箱" />
                        <input class="textbox" type="password" name="password" placeholder="密码" />
                        <input class="textbox" type="password" name="password_check" placeholder="重复确认密码" />
                        <input class="textbox checkcode" type="text" name="checkcode" placeholder="验证码" />
                        <img src="image/getVerify.php" alt="验证码" onclick="image / getverify.php"/>
                    </div>
                    <div id="signup_form_button">
                        <input id="signup_button" type="submit" name="signup_button" value="注册" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

