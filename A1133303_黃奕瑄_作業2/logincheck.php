<?php

$fID="aaa";
$fPWD="12345678";
if(isset($_POST["uID"])&&isset($_POST["uPWD"])){
    
    $uID=$_POST["uID"];
    $uPWD=$_POST["uPWD"];

    if($fID==$uID && $fPWD==$uPWD){
        header("Location: A1133303_hw2.php");
        exit();
    }else{
        echo"失敗";
        header("Refresh:2;url=login.php");
        exit();

    }
}

?>