<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
    <title>三三社企-使用折價卷</title>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='css/sign.css' rel='stylesheet' type='text/css'>
    <link href='css/single.css' rel='stylesheet' type='text/css'>
</head>

<body>
<?
session_start();
include_once("Helper/handle_string.php");
if($_SESSION['from'] != null){
    $from = $_SESSION['from'];
}
else{
    $from = input('from');
    $type = input('type');
    $_SESSION['from'] = $from;
    $_SESSION['type'] = $type;
}
?>
<br>
<div class="sign-block" style="width: 350px;">
    <h1>使用折價卷</h1>
    <form name="form" method="post" action="discount_finish.php">
        <label for="number">請輸入兌換碼：<input type="text" name="DISCOUNT" id="number" /></label>
        <button type="submit" class="promise">確定</button>
    </form>
    <?
    if($from == 'oc'){
        ?><a href="Order_Confirm.php"><button type="button" class="cancel">取消</button></a><?
    }
    elseif($from == 'vp'){
        ?><a href="View_Purchase.php"><button type="button" class="cancel">取消</button></a><?
    }
    ?>
</div>
</body>
</html>