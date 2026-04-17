<?php

if(isset($_COOKIE['uName'])){
    echo $_COOKIE['uName']." welcome back";
    echo "<a href='cookiedel.php'>刪除cookie</a>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>夏令營報名系統 - 登入</title>
</head>
<body>
    <h2>夏令營報名系統</h2>
    <p>測試帳號 -> 學生：student | 教師：teacher | 管理員：admin</p>
    <form action="login.php" method="POST">
        ID: <input type="text" name="uName" required><br><br>
        Password: <input type="password" name="uPwd" required><br><br>
        <input type="submit" value="登入">
    </form>
</body>
</html>