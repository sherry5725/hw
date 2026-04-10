<?php

echo "Your name is".$_POST["name"]."<br/>";

$mGender=$_POST["mGender"];
$mhabits=$_POST["mhabits"];
$mCity=$_POST["mCity"];
$mDate=$_POST["mDate"];
$mColor=$_POST["mColor"];
$pickup_time=$_POST["pickup_time"];
$mDate=$_POST["mDate"];
$comment=$_POST["comment"];


if($mGender=="m"){
    echo "your gender is:男性<br/>";
}else{
    echo "your gender is:女性<br/>";
}

echo "your eating habit:";



foreach($mhabits as $nh1){
    switch($nh1){
        case "Normal":
            echo "正常";
            break;
        case "Vegetarian":
            echo "素食";
            break;
        case "No cows":
            echo "不吃牛";
            break;
        case "No seafood":
            echo "不吃海鮮";
            break;
    }"<br/>";
}

"<br/>";
echo "<br/>你想參加的地點:".$mCity."<br/>";

echo "預計接送時間:".$pickup_time."<br/>";
echo "出生年月日:".$mDate."<br/>";
//echo "選的顏色:".mColor."<br/>";
echo "你選的顏色是:<font color=".$mColor.">這個顏色</font>".$mColor."<br/>";
//for($i=0;$i<count($nhabits);$i++){
//    echo $nhabits[$i]."<br/>";
//}

echo "您的備註:";
echo nl2br(strip_tags($comment));
?>

