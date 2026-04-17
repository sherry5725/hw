<?php
session_start();

$sID='student';
$sPWD='1133303';

$tID='teacher';
$tPWD='1122334';

$aID='admin';
$aPWD='123456';

$uID=$_POST['uName'];
$uPwd=$_POST['uPwd'];

// 設定 cookie 存活時間為一天
$date=strtotime("+1 day",time());

if($uID==$sID && $uPwd==$sPWD){
    $_SESSION['login']='student';
    setcookie("uName",$uID,$date);
    header("Refresh:0;url=student.php");
}elseif($uID==$tID && $uPwd==$tPWD){
    $_SESSION['login']='teacher';
    setcookie("uName",$uID,$date);
    header("Refresh:0;url=teacher.php");
}elseif($uID==$aID && $uPwd==$aPWD){
    $_SESSION['login']='admin';
    setcookie("uName",$uID,$date);
    header("Refresh:0;url=admin.php");
}else{
    echo "Login Failed!";
    header("Refresh:3;url=index.php");
}

?>