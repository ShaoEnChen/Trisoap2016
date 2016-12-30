<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
    <title>註冊</title>
    <meta name="author" content="2016 NTUIM SA GROUP7">
    <meta name="description" content="">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- custom css -->
    <link href="css/sign.css" rel="stylesheet">
</head>

<body>
<br>
<div class="sign-block">
    <h1>Register</h1>
    <form method="post" action="Create_CUSMAS_finish.php">
        <?php 
        session_start();
        $EMAIL = $_SESSION['EMAIL'];
        $CUSNM = $_SESSION['CUSNM'];
        $CUSBIRTH = $_SESSION['CUSBIRTH'];
        $TEL = $_SESSION['TEL'];
        $CUSADD = $_SESSION['CUSADD'];
        $TAXID = $_SESSION['TAXID'];
        $CUSTYPE = $_SESSION['CUSTYPE'];
        $KNOWTYPE = $_SESSION['KNOWTYPE'];
        $SPEINS = $_SESSION['SPEINS'];
        function checkTYPE($ori, $new){
            if($ori == $new) echo 'selected="selected"';
        }
        ?>
        <input type="text" name="EMAIL" value="<?php echo $EMAIL;?>" placeholder="電子信箱" /></label>
        <input type="text" name="CUSNM" value="<?php echo $CUSNM;?>" placeholder="您的姓名" /></label>
        <input type="password" name="CUSPW1" placeholder="設定密碼" /></label>
        <input type="password" name="CUSPW2" placeholder="再次輸入密碼" /></label>
        <input type="date" name="CUSBIRTH" value="<?php echo $CUSBIRTH;?>" placeholder="生日  ex.1999-8-8" /></label>
        <input type="text" name="TEL" value="<?php echo $TEL;?>" placeholder="聯絡電話" /></label>
        <input type="text" name="TAXID" value="<?php echo $TAXID;?>" placeholder="統一編號(可不填)" /></label>
        <div class="q-select">
            <select name="CUSTYPE" style="width: 49.35%;">
                <option value="">您的膚質</option>
                <option value="A" <?php checkTYPE($CUSTYPE, 'A');?>>乾性</option>
                <option value="B" <?php checkTYPE($CUSTYPE, 'B');?>>中性</option>
                <option value="C" <?php checkTYPE($CUSTYPE, 'C');?>>油性</option>
                <option value="D" <?php checkTYPE($CUSTYPE, 'D');?>>混和性</option>
            </select>
            <select name="KNOWTYPE" style="width: 49.35%;">
                <option value="">如何認識三三</option>
                <option value="A" <?php checkTYPE($KNOWTYPE, 'A');?>>粉絲專頁</option>
                <option value="B" <?php checkTYPE($KNOWTYPE, 'B');?>>親友介紹</option>
                <option value="C" <?php checkTYPE($KNOWTYPE, 'C');?>>媒體宣傳</option>
                <option value="D" <?php checkTYPE($KNOWTYPE, 'D');?>>實體攤位</option>
                <option value="E" <?php checkTYPE($KNOWTYPE, 'E');?>>其它</option>
            </select>
        </div>
        <textarea name="SPEINS" value="<?php echo $SPEINS;?>" placeholder="特殊要求(可不填)"></textarea>
        <button type="submit" class="promise">註冊</button>
    </form>
    <a href="/"><button type="button" class="cancel">取消</button></a>
</div>
</body>
</html>