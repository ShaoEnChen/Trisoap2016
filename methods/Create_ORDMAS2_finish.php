<meta charset="utf-8">
<link rel="shortcut icon" href="../Homepage/img/misc/favicon.png">
<?php
session_start();
include_once("Helper/mysql_connect.php");
include_once("Helper/handle_string.php");
include_once("Helper/sql_operation.php");
include_once("Helper/update_price.php");
include_once("Helper/redirect.js");
include_once("Helper/analyticstracking.php");
$EMAIL = $_SESSION['EMAIL'];
$DISCOUNT = $_SESSION['DISCOUNT'];
$CUSADD_1 = input('CUSADD_1');
$CUSADD_2 = input('CUSADD_2');
$CUSADD_3 = input('CUSADD_3');
$CUSADDid = input('CUSADDid');
$ORDINST = input('ORDINST');
$PAYTYPE = input('PAYTYPE');
$message = '';
if($EMAIL != null){
    if($CUSADDid == 'Y'){
        if($CUSADD_1 != null && $CUSADD_2 != null && $CUSADD_3 != null){
            $CUSADD = $CUSADD_1.$CUSADD_2.$CUSADD_3;
            $sql = "UPDATE CUSMAS SET CUSADD='$CUSADD' WHERE EMAIL='$EMAIL'";
            mysql_query($sql);
        }
        else{
            $message .= '請完整填寫您的通訊地址 \n';
        }
    }
    if($PAYTYPE != null){
        $_SESSION['PAYTYPE'] = $PAYTYPE;
    }
    else{
        $message .= '請選擇付款方式 \n';
    }
    if($message != ''){
        ?>
        <script>
        redirect("Create_ORDMAS2.php");
        alert("<?php echo $message;?>");
        </script>
        <?php 
    }
    else{
        $row = select('OWNMAS', 'COMNM', 'Trisoap');
        $ORDNOG = $row['NORDNOG'];
        date_default_timezone_set('Asia/Taipei');
        $CREATEDATE = date("Y-m-d H:i:s");
        $UPDATEDATE = date("Y-m-d H:i:s");
        $USEDATE = date("Y-m-d H:i:s");
        $ORDTYPE = 'G';
        $total = 0;
        $sql = mysql_query("SELECT * FROM ORDITEMMAS where ORDNO = 100000000 AND EMAIL = '$EMAIL'");  //get item amount
        while ($fetch = mysql_fetch_array($sql)) {
            $ITEMNO = $fetch['ITEMNO'];
            $queryPrice = mysql_query("SELECT * FROM ITEMMAS where ITEMNO = '$ITEMNO'");  //get item amount
            $fetchPrice = mysql_fetch_array($queryPrice);
            $total += $fetchPrice['PRICE'] * $fetch['ORDAMT'];
        }
        $SHIPFEE = $total >= 777 ? 0 : 70;
        $sql = "INSERT INTO ORDMAS (ORDNO, ORDTYPE, EMAIL, ORDINST, SHIPFEE, CREATEDATE, UPDATEDATE) values ('$ORDNOG', '$ORDTYPE', '$EMAIL', '$ORDINST', '$SHIPFEE', '$CREATEDATE', '$UPDATEDATE')";
        if(mysql_query($sql)){
            $sql = "UPDATE OWNMAS SET NORDNOG=NORDNOG+1 where COMNM='Trisoap'";
            mysql_query($sql);
            $sql = "UPDATE ORDITEMMAS SET ORDNO = $ORDNOG WHERE ORDNO = 100000000 AND EMAIL = '$EMAIL'";
            mysql_query($sql);
            if($DISCOUNT != null){
                $queryDCTSTAT = search('DCTSTAT', 'DCTMAS', 'DCTID', $DISCOUNT);
                if($queryDCTSTAT == 0){
                    ?>
                    <script>
                    alert("此兌換卷已被使用");
                    </script>
                    <?php 
                }
                else{
                    $sql = "UPDATE ORDMAS SET DCTID = '$DISCOUNT' WHERE ORDNO = '$ORDNOG'";
                    mysql_query($sql);
                    if($queryDCTSTAT == 1){
                        $sql = "UPDATE DCTMAS SET DCTSTAT = 0 WHERE DCTID = '$DISCOUNT'";
                        mysql_query($sql);
                    }
                    $sql = "UPDATE DCTMAS SET USEDATE = '$USEDATE' WHERE DCTID = '$DISCOUNT'";
                    mysql_query($sql);
                }
                unset($_SESSION['DISCOUNT']);
            }
            update_price($ORDNOG);
            $_SESSION['ORDNO'] = $ORDNOG;
            ?>
            <script>
            redirect("cashing_test.php");
            alert("訂單建立成功，將為您導向歐付寶頁面。");
            </script>
            <?php 
        }
        else{
            ?>
            <script>
            redirect("Create_ORDMAS2.php");
            alert("訂單建立失敗");
            </script>
            <?php 
        }
    }
}
else{
    ?>
    <script>
    redirect("/");
    alert("您無權限觀看此頁面!");
    </script>
    <?php 
}
?>