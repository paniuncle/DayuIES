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
	<div class="ccs-box">
		<div class="ccs-box-head">
			<form>
				<span class="ccs-gac">年级</span>
				<span class="ccs-gac">
					<select class="form-control grade" name="grade">
						<option value="C1">初一</option>
						<option value="C2">初二</option>
						<option value="C3">初三</option>
						<option value="G1">高一</option>
						<option value="G2" selected="selected">高二</option>
						<option value="G3">高三</option>
						<option value="Y1">预留1</option>
						<option value="Y2">预留2</option>
						<option value="Y3">预留3</option>
					</select>
				</span>
				<span class="ccs-gac">班级</span>
				<span class="ccs-gac">
					<select class="form-control grade" name="grade">
						<option value="Cl1">一班</option>
						<option value="Cl2" selected="selected">二班</option>
						<option value="Cl3">三班</option>
						<option value="Cl4">四班</option>
						<option value="Cl5">五班</option>
						<option value="Cl6">六班</option>
						<option value="Cl7">七班</option>
						<option value="Cl8">八班</option>
						<option value="Cl9">九班</option>
					</select>
				</span>
				<button type="button" class="btn btn-success">查找讲义</button>
			</form>
		</div>
		<div class="ccs-box-body" data-spy="scroll" data-target="#navbar-example" data-offset="0">
				<table class="table table-striped">
				  <caption>我拥有的讲义</caption>
				  <thead>
					<tr>
					  <th style="width:65%">讲义名称</th>
					  <th style="width:20%">日期</th>
					  <th style="width:15%">创建人</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>认识立体几何</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>立体几何的表面积和体积</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>简易逻辑</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>圆锥曲线</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>双曲线</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>椭圆</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>圆</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>积分</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
					<tr>
					  <td>集合</td>
					  <td>2016年9月28日</td>
					  <td>冯云霞</td>
					</tr>
				  </tbody>
				</table>		
		</div>
	</div>
</div>

<!-- 页脚背景 -->
<div class="foot"></div>

</body>
</html>