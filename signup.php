<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="style/main.css" />
		<link rel="stylesheet" type="text/css" href="style/index.css" />
		<link rel="stylesheet" type="text/css" href="style/signup.css" />
		<title>主页</title>
	</head>
	<body>
		<div id="container">
			<!-- 页面顶部，左侧简介，右侧实现登录功能 -->
			<header>
				<div class="content">
					<div id="top_nav" class="mov_nav">
						<div id="nav_top">

						</div>
						<div id="nav_bar">
							<div id="logo">
								<img src="" alt="" />
							</div>
							<ul id="nav_ul">
								<li><a href="index.php">首页</a></li>
								<li><a href="#">微软俱乐部</a></li>
							</ul>
							<div id="search">
								<form id="search_form" action="" method="post">
									<input id="search_box" type="text" name="search_box" />
									<input id="search_button" type="button" name="search_button" value="搜索" />
								</form>
							</div>
						</div>
					</div>
					<div id="page">

					</div>
				</div>
			</header>
			<div id="page">
				<div class="content signup">
					<p id="signup_title">
						注册
					</p>
					<form name="signup" method="post">
						<br />
						<div id="signup_textbox">
							<input id="signup_username" class="textbox signup-textbox" type="text" name="username" placeholder="用户名" value="" />
							<br />
							<input id="signup_password" class="textbox signup-textbox" type="password" name="password" placeholder="密码" value="" />
							<br />
							<input id="signup_email" class="textbox signup-textbox" type="email" name="email" placeholder="电子邮件" value="" />
							<br />
							<input id="signup_birthday" class="textbox signup-textbox" type="birthday" name="birthday" placeholder="出生日期 xxxx-xx-xx" value="" />
						</div>
							<input id="signup_button" type="button" name="signup" value="点击注册" />
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
