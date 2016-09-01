<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
    <title>三三社企-新增商品</title>
    <meta name="author" content="2016 NTUIM SA GROUP7">
    <meta name="description" content="">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- custim css -->
    <link href="css/sign.css" rel="stylesheet">
    <link href="css/single.css" rel="stylesheet">
</head>

<body>
<br>
<div class="sign-block" style="width: 350px;">
<h1>新增商品</h1>
<?php
session_start();
include_once("Helper/mysql_connect.php");
$EMAIL = $_SESSION['EMAIL'];
$CUSIDT = $_SESSION['CUSIDT'];

if($EMAIL != null && $CUSIDT == 'A'){
	?>
    <form name="form" method="post" action="Create_ITEMMAS_finish.php">
    <label for="ITEMNO">商品編號：<input type="text" name="ITEMNO" /> </label>
	<label for="ITEMNM">商品名稱：<input type="text" name="ITEMNM" /> </label>
	<label for="ITEMAMT">商品數量：<input type="text" name="ITEMAMT" /> </label>
	<label for="PRICE">商品價格：<input type="text" name="PRICE" /> </label>
	<label for="DESCRIPTION">商品描述：<input type="text" name="DESCRIPTION" /> </label>
    <label for="PW">請再次輸入您的密碼：<input type="password" name="PW" /></label>
    <button type="submit" class="promise">確定</button>
    </form>
    <a href="Update_ITEMMAS.php"><button type="button" class="cancel">取消</button></a>
    <?
}
else{
	?>
	<script>
    redirect("../Homepage/index.php");
	alert("您無權限觀看此頁面!");
	</script>
	<?
}
?>
</div>
</body>
</html>