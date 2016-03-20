<meta charset="UTF-8">
<?php
	include 'conn.php';
	$chosen=$_POST['chosen'];
	$new_des=$_POST['new_des'];
	$new_web=$_POST['new_web'];

	if (!$new_des) {
		 die("<script>alert('名称不能为空！！');history.go(-1);</script>");
	}	
	if (!$new_web) {
		 die("<script>alert('地址不能为空！！');history.go(-1);</script>");
	}

	$sql="UPDATE web_list SET descripsion ="."'".$new_des."'".",website ="."'".$new_web."'"." WHERE descripsion="."'".$chosen."'";
	$res=$dbh->query($sql);
	if($res){
		echo"<script>alert('网址更新成功！！');location.href='http://localhost/web.php'</script>";
	}
?>