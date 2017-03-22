<!DOCTYPE html>
<html>
	<head>
	<style>
body{
	background-image:url(../tushu.jpg);
	
}
#content_body{
	width:100%;
	font-size:36px;
	color: #0FF;
}

</style>
		<meta charset="UTF-8">
		<title>图书管理</title>
	</head>
	<body>
		<div id="global" width="100%">
			<div id="content_menu">
				<ul class="nav">
				    <li font-size="32px"><a href="library.php">返回</a></li>
				</ul>
			</div>
			<div id="content_body">
               	<form action="library.addfile.php" id="add" method="get">
                	<table width="400px" >
                		<tbody>
            	    			<tr>
            	    				<td><p align="center">添加新书</p></td>
            	    			</tr>
            	    			<tr>
            	    				<td width="200px">书名</td>
            	    				<td width="300px"><input type="text" name="book_name"/></td>
            	    			</tr>
            	    			<tr>
            	    				<td >介绍</td>
            	    				<td width="400px">
            	    					<input width="300px" type="text" name="content"/>
            	    				</td>
            	    			</tr>
            	    			<tr>
            	    				<td>价格</td>
            	    				<td><input type="text"/ name="price"></td>
            	    			</tr>
            	    			<tr>
            	    				<td width="500px" align="right"><input type="submit" value="提交"/></td>
            	    			</tr>
                		</tbody>
                	</table>
                </form>
			</div>
			<div id="floor"></div>
		</div>
	</body>
</html>