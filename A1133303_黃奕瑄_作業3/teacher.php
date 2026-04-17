<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=='teacher'){
        echo "<h1>Welcome! teacher</h1>";
        echo "<h2>教師管理後台</h2>";
        echo "<p>這裡可以查看學生名單</p>";
        echo"<a href='logout.php'>logout</a>";

    }else{
        echo "<h1>非法登入，三秒後回登入頁面</h1>";
        header("Refresh:5;url=web.php");
    }
}else{
    echo "<h1>非法登入，三秒後回登入頁面</h1>";
    header("Refresh:5;url=web.php");
}
?>
