<?php
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>管理员登录</title>
        <link rel="stylesheet" style="text/css" href="../style/admin_Login.css" />
        <script src="../script/admin_Login.js"></script>
    </head>
    <body>
        <div>
            <form id="info" action="process.php" method="post"></br>
                用户名:&nbsp;<input class="textbox"type="email" name="email" required="true"></br>
                密码:&nbsp;&nbsp;&nbsp;<input class="textbox" type="password" name="password" required="true"></br>
                验证码:&nbsp;<input id="verify" type="text" name="verify" required="true">
                <img width="83px" height="30px" title="看不清？点击刷新" src="../image/getVerify.php" onclick="this.src='../image/getverify.php'"></br>
                <input type="submit" value="登录" id="loginBtn">
                <input type="button" value="注册管理员" id="regBtn" onclick="adminReg();">
            </form>
            
        </div>
    </body>
</html>
