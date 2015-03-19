<?php
session_start();
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" style="text/css" href="style/selfInfo.css"/>
    <link rel=stylesheet type=text/css href="style/jquery-ui.min.css"/>
    
    <title>个人中心</title>
</head>
<body>
    <img src="image/self_background.jpg" id="top_background"/>
    <img  id="head" src="data/head/3.jpg"/>
    <div id="left_nav" >
        <span id="button1" class="left_button">我的文章</span></br>
        <span id="button2"class="left_button">与我相关</span></br>
        <span id="button3"class="left_button">个人资料</span></br>
        <span id="button4"class="left_button">设&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;置</span></br>
    </div>
    <div id="right_block">
        
    </div>
    <script src="script/jquery.js"></script>
    <script src="script/jquery-ui.min.js"></script>
    <script src="script/selfInfo.js"></script>
</body>

