<?php
    require '../connect.php';    //重载一次php文件


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>图书管理</title>
		<style>

#id1{

}
.nav{
	display:inline;
		

}
a:link{
	Text-decoration:none;
}
#content_menu{
	text-align:right;
	margin-right: 30%;
	font-size:36px;

}
body{
	background-image: url(../beijing.png);
}

</style>
	</head>
	<body>
		<div id="id1">
			<div id="heading"><h1 align="center"><strong>图书管理系统</strong></h1></div>
			<div id="content_menu">
				<ul class="nav">
				    <li><a href="library.borrow.php">借书</a></li>
				    <li><a href="library.return_book.php">还书</a></li>
				    <li><a href="library.find_book.php">查找图书</a></li>
				    <li><a href="library.add.php">添加图书</a></li>
				    <li><a href="library.manage.php">图书管理</a></li>
				</ul>
			</div>
			<div id="content_body">
				<div id="name">
					<table border="1">
					</table>
				</div>
			</div>
			<div id="floor"></div>
		</div>
	
	</div>
	</body>
</html>