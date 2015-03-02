<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style/model_sheet.css" />
		<link rel="stylesheet" type="text/css" href="style/signup_sheet.css">
		<script type="text/javascript" src="script/signup.js"></script>
		<title>模板</title>
	</head>
	<body>
		<div id="container">
			<div id="left">
				<div id="left_head">
					<div id="left_head_img">
						<img src="image/Club.png" />
					</div>
					<div id="left_head_txt">
						Club 名称
					</div>
				</div>
				<div id="left_body">
					<button class="left_body_button">
						文章
					</button>
					<button class="left_body_button">
						热点讨论
					</button>
				</div>
				<div id="left_foot">
					<button class="left_foot_button">
						登录/个人信息
						<img src="image/userImg.png">
					</button>
                                    <a class="left_foot_button" id="register_button" href="login.php">
						注册/退出
					</a>
				</div>
			</div>
			<div id="middle">
				<div id="middle_head">
					<p>
						文章/热点讨论
					</p>
				</div>
				<div id="middle_body">
					<div class="middle_body_textcard">
						
					</div>
				</div>
				<div id="middle_foot">
					
				</div>
			</div>
			<div id="right">
				
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
						<img src="image/Club.png" />
					</div>
					<div id="signup_form_button">
						<input id="signup_button" type="submit" name="signup_button" value="注册" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>