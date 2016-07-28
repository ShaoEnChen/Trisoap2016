# Trisoap
UI部分已修改:
1. 登入/註冊、修改資料頁面 (橘色系)
2. 購物車內容、成功加入購物車頁面 (褐色系)
3. 我把methods中不需要的前端的東西都刪掉了

UI未處理的部分:
1. UPDATE CUSMAS1.php尚未包前端
2. 查看訂單尚未處理

UI待修改部分:
1. 背景要換掉
2. 因為我無法使用網頁，所以都是盲改，麻煩試用一下，如果有bug可以順便修改，應該不難改
3. 猜測目前錯誤訊息的部分可能會有沒包上前端的狀況(??? 要試一下

易混淆php解釋：
Update_ORDMAS -> 更改訂單狀態，管理員功能，查看詳細資料會連到View_ORDITEM
View_ORDMAS   -> 查看所有訂單，顧客功能，查看詳細資料會連到View_ORDITEM
View_ORDITEM  -> 查看訂單詳細資料，有返回功能，從Update_ORDMAS來就回Update_ORDMAS，從View_ORDMAS來就回View_ORDMAS

連到歐付寶會交易失敗