<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
include("Helper/mysql_connect.php");
include("Helper/sql_operation.php");
include("Helper/handle_string.php");
include("Helper/mail.mail.php");
$EMAIL = $_SESSION['EMAIL'];
$CUSIDT = $_SESSION['CUSIDT'];
$message = null;

if($EMAIL != null && $CUSIDT == 'A'){
        $ORDNO = input('ORDNO');
        $ORDSTAT = input('ORDSTAT');
        date_default_timezone_set('Asia/Taipei');
        $UPDATEDATE = date("Y-m-d H:i:s");
        $sql = "UPDATE ORDMAS SET ORDSTAT='$ORDSTAT', UPDATEDATE='$UPDATEDATE' WHERE ORDNO='$ORDNO'";
        if(mysql_query($sql)){
                $queryEMAIL = search('EMAIL', 'ORDMAS', 'ORDNO', $ORDNO);
                $queryName = search('CUSNM', 'CUSMAS', 'EMAIL', $queryEMAIL);
                $COMADD = search('COMADD', 'OWNMAS', 'COMNM', 'Trisoap');
                $COMEMAIL = search('COMEMAIL', 'OWNMAS', 'COMNM', 'Trisoap');
                mail_receive_order($queryEMAIL, $ORDNO, $queryName, $COMADD, $COMEMAIL);
                ?>
                <script>
                alert("儲存成功");
                </script>
                <?
        }
        else{
                ?>
                <script>
                alert("儲存失敗");
                </script>
                <?
        }
        ?><meta http-equiv=REFRESH CONTENT=0.5;url=Update_ORDMAS_E.php><?
}
else{
        ?>
        <script>
        alert("您無權限觀看此頁面!");
        </script>
        <meta http-equiv=REFRESH CONTENT=0.5;url=../Homepage/index.php>
        <?
}
?>