<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<!-- SEO相关 by:帕尼-->
<meta http-equiv="content-type" content="charset=utf-8">

<!-- 基础JS框架 -->
<script type="text/javascript" src="../static/jquery-1.11.0.min.js"></script>

<!-- 风格框架 -->
<link rel="stylesheet" href="../static/css/bootstrap.min.css">
<link rel="stylesheet" href="../static/css/main.css">

<!-- 扩展JS框架 -->
<script src="../static/js/bootstrap.min.js"></script>

<!-- 描述 -->
<title>北京市大峪中学IES系统</title>
</head>
<body>

<!-- 导航栏 -->
<nav>
  <ul class="nav">
	<p class="logo"><img src="./static/image/logo.png"></img></p>
    <li>后台</li>
    <li>工具</li>
    <li>习题</li>
    <li>讲义</li>
  </ul>
</nav>

<!-- 登录框 -->
<div class="content">
	<div class="login-box">
		<div class="login-box-title">
			<p>欢迎登录IES</p>
		</div>
		<div class="login-box-body">
			<form >
				<div class="input-group">
					<span class="input-group-addon">账号</span>
					<input type="text" class="form-control" placeholder="">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">密码</span>
					<input type="password" class="form-control" placeholder="">
				</div>
				<br>
				<button type="button" class="btn btn-success">登录</button>
			</form>
		</div>
	</div>
</div>

<!-- 页脚背景 -->
<div class="foot"></div>

</body>
</html>