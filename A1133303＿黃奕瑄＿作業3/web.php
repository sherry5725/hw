<?php

if(isset($_COOKIE['uName'])){
    echo $_COOKIE['uName']." welcome back";
    echo "<a href='cookiedel.php'>刪除cookie</a>";
}

?>
<form action="login.php" method="POST">

ID:<input type="text" name="uName"><br/>
Password:<input type="password" name="uPwd"></br>
<input type="submit">


<?php
echo time();

?>


</form>