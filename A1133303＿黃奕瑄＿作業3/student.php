<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=='student'){
        echo "<h1>Welcome! student</h1>";
        echo "<a href='logout.php'>logout</a>";
    }else{
        echo "<h1>非法登入，三秒後回登入頁面</h1>";
        header("Refresh:3;url=web.php");
    }
}else{
    echo "<h1>非法登入，三秒後回登入頁面</h1>";
    header("Refresh:3;url=web.php");
}
?>