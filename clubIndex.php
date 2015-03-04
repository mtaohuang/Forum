<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
require_once ROOT.'/lib/common.php';
require_once ROOT.'/lib/mysql.func.php';
if($_COOKIE["autoLogin"]=='yes')
{
    alertMes("自动登录");
    $sql='select * from users where id='.$_COOKIE["id"];
    if(($information=fetchAll($sql))!=NULL){
        print_r($information);
    }
}
?>
﻿<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style/club_index.css" />
		<link rel="stylesheet" type="text/css" href="style/login_signup.css" />
		<link rel="stylesheet" type="text/css" href="style/action_bar.css" />
		<script type="text/javascript" src="script/main.js"></script>
		<script type="text/javascript" src="script/login_signup.js"></script>

		<title></title>
	</head>
	<body>
		<div id="container">
			<div id="left">
				<div id="left_head">
					<!--俱乐部Logo-->
					<div id="left_head_img">
						<img src="image/" />
					</div>
					<!--此处是俱乐部名称-->
					<div id="left_head_txt">
						
					</div>
				</div>
				<div id="left_body">
					<button id="left_body_article" onclick="displayContent('left_body_article', 'left_body_discussion')">
						文章
					</button>
					<button id="left_body_discussion" onclick="displayContent('left_body_discussion', 'left_body_article')">
						热点讨论
					</button>
				</div>
				<div id="left_foot">
					<!--用户登录时显示left_foot_profile和left_foot_exit，未登录显示left_foot_login和left_foot_signup-->
					<button id="left_foot_profile">
						<!--用户头像-->
						<div id="left_foot_profile_img">
							<img src="image/">
						</div>
						<!--用户昵称-->
						<div id="left_foot_profile_username">
							
						</div>
					</button>
					<button id="left_foot_exit">
						退出
					</button>
					<button id="left_foot_login" onclick="displayLayer('login_layer')">
						登录
					</button>
					<button id="left_foot_signup" onclick="displayLayer('signup_layer')">
						注册
					</button>
				</div>
			</div>
			<div id="middle">
				<div id="middle_head">
					<p id="middle_head_title">
						
					</p>
				</div>
				<div id="middle_body">
					<div class="middle_body_textcard">
						<!--标题-->
						<div class="title">
							<p></p>
						</div>
						<!--内容简介-->
						<div class="brief">
							<p></p>
						</div>					
					</div>
				</div>
				<div id="middle_foot">
					
				</div>
			</div>
			<div id="right">
				<div id="right_head">
					<!--标题-->
					<p id="right_head_title">
						
					</p>
				</div>
				<div id="right_body">
					<!--内容-->
					<div id="right_body_content">
										
					</div>
					<!--评论-->
					<div id="right_body_comment">
										
					</div>
				</div>
				<div id="right_foot">
					
				</div>
			</div>
			<div id="action_bar">
				<div id="action_bar_shade">
					
				</div>
				<button id="action_bar_search" onclick="boxDisplay('search_panel')">
					<img src="image/search.png" />
				</button>
				<button id="action_bar_like">
					<img src="image/like_before.png" />
				</button>
				<button id="action_bar_collect">
					<img src="image/collect_before.png" />
				</button>			
				<button id="action_bar_reply" onclick="boxDisplay('reply_panel')">
					<img src="image/reply.png" />
				</button>				
			</div>
			<div id="search_panel">
				<div id="search_panel_shade">
					<form id="search_form" name="search_form">
						<input id="search_box" type="text" name="keywords" placeholder="搜索" />
					</form>
				</div>
			</div>
			<div id="reply_panel">
				<div id="reply_panel_shade">
					<form id="reply_form" name="reply_form">
						<textarea id="reply_box" name="reply" placeholder="回复"></textarea>
					</form>
				</div>
			</div>
		</div>
		<div id="signup_layer">
			<div id="signup_layer_shade">
				
			</div>
			<button id="close_layer" onclick="hideLayer('signup_layer')">
				<img src="image/close.png">
			</button>
			<div id="signup_box">
				<form id="signup_form" name="signup_form">
					<div id="signup_form_textbox">
						<input class="textbox" id="signup_username" type="email" name="username" placeholder="电子邮箱" />
						<input class="textbox" id="signup_password" type="password" name="password" placeholder="密码" />
						<input class="textbox" id="signup_password_check" type="password" name="password_check" placeholder="重复确认密码" />
						<input class="textbox checkcode" id="signup_checkcode" type="text" name="checkcode" placeholder="验证码" />
						<!--验证码-->
                        <img id="checkcode" src="image/getVerify.php" />
					</div>
					<div id="signup_form_button">
						<input id="signup_button" type="submit" name="signup_button" value="注册" />
					</div>
				</form>
			</div>
		</div>
		<div id="login_layer">
			<div id="login_layer_shade">
				
			</div>
			<button id="close_layer" onclick="hideLayer('login_layer')">
				<img src="image/close.png">
			</button>
			<div id="login_box">
                    <form id="login_form" name="signup_form" action="login_process.php" method="POST">
					<div id="login_form_textbox">
						<input class="textbox" id="login_username" type="email" name="username" placeholder="电子邮箱" />
						<input class="textbox" id="login_password" type="password" name="password" placeholder="密码" />
						<input class="textbox checkcode" id="login_checkcode" type="text" name="checkcode" placeholder="验证码" />
						<!--验证码-->
                        <img id="checkcode" src="image/getVerify.php" />
						<br /><br /><br /><br />
						&nbsp;&nbsp;
						<input id="checkbox" type="checkbox" name="autoFlag" value="1" />
						记住用户名和密码
					</div>
					<div id="login_form_button">
						<input id="login_button" type="submit" name="login_button" value="登录" onclick="login()" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>