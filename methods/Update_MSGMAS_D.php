<title>三三吾鄉手工皂 公開中留言</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
include("Helper/mysql_connect.php");
$EMAIL = $_SESSION['EMAIL'];
$CUSIDT = $_SESSION['CUSIDT'];
$number = 0;

if($EMAIL != null && $CUSIDT == 'A'){
    echo "公開中留言：<br>";
    echo "<form name=\"form\" method=\"post\" action=\"Update_MSGMAS_finish.php\">";
    $queryMSGMAS = "SELECT * FROM MSGMAS WHERE MSGSTAT='D' AND ACTCODE='1'";
    $result = mysql_query($queryMSGMAS);
    while($row = mysql_fetch_array($result)){
    	echo "留言編號:".$row['MSGNO']." 顧客編號:".$row['EMAIL']." 留言文字:".$row['MSGTXT']." 留言照片/影片:";
        // 顯示影片或照片
        echo " 建立日期:".$row['CREATEDATE']." 發佈日期:".$row['PUBLICDATE']." ";
        $MSGNO = $row['MSGNO'];
        $MSGNOnumber = 'MSGNO' . "$number";
        echo "<input type=\"hidden\" name=\"$MSGNOnumber\" value=\"$MSGNO\" />";
        $MSGSTATnumber = 'MSGSTAT' . "$number";
        echo "留言狀態：<select name=\"$MSGSTATnumber\" >";
        echo "<option value=\"D\">公開中</option>";
        echo "<option value=\"E\">典藏</option>";
        echo "<option value=\"F\">刪除</option>";
        echo "</select> <br>";
        $number += 1;
    }
    echo "<input type=\"submit\" name=\"button\" value=\"儲存\" />";
    echo "</form>";
    $_SESSION['number'] = $number - 1;
?>
<a href="Update_MSGMAS.php">返回</a> <br>
<?php
}
else{
    ?>
    <script>
    alert("您無權限觀看此頁面!");
    </script>
    <meta http-equiv=REFRESH CONTENT=0.5;url=../Homepage/index.php>
    <?
}