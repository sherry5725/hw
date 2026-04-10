<html>

<head>

<meta charset="UTF-8">
<title>Summer Camp Registration Form</title>

</head>
<body>

<form action="result.php" method="POST">

<font size=6 color=black>【未來創客】AI 程式機器人夏令營</font></br>
<h4>在 AI 快速發展的時代，邏輯運算與程式思維是孩子未來的超能力！</br>
    【未來創客】夏令營將帶領孩子從零開始，透過圖像化積木程式（<a href="https://steam.oxxostudio.tw/category/scratch/code/blocks.html">Scratch</a>/<a href="https://steam.oxxostudio.tw/category/python/info/start.html">Python</a>）
    結合實體機器人操作，讓生硬的程式碼變成會動的酷炫玩具。我們鼓勵孩子動手做、試錯
    與解題，在五天的營隊中完成專屬自己的智能作品！</br>
    活動地點:台北、台中、高雄。</br>
    活動日期	2026 年 7 月 6 日至 7 月 10 日</br>
    活動時間	09:00 - 17:00（提供延後接送至 18:00）</br>
    招生對象	國小四年級至國中一年級（零基礎可）</br>
    活動地點</br>
    台北:星光科技大樓 (台北市中山區XX路566號)</br>
    台中:快樂科技大樓（台中市北區ＯＯ路 345 號）</br>
    高雄:創客科技大樓（高雄市楠梓區ＯＯ路 123 號）</br>
    報名費用	NT$ 6,500（含機器人教具材料費、午餐、保險）</br>
</h4>

<font size="2"color="orange"><I><b>特別驚喜</b></I>： 營隊最後一天舉辦「小小創客發表會」，每位學員都能將自己親手組裝編程的「AI 循跡小車」帶回家！</font></br>
<img src="https://swf.com.tw/images/books/esp32_app/ESP32_Bot.jpg" width="200"></img></br>
<center>以下為報名資料表</center>
<hr>
Name:<input type="text" placeholder="your name" name="name" value=""><br/>
Gender:
男<input type="radio" name="mGender" value="m">
女<input type="radio" name="mGender" value="f" check><br>
Which region do you want to participate in?:<select name="mCity" >
<option value="Taipei">台北</option>
<option value="Taichung">台中</option>
<option value="Kaohsiung">高雄</option>
</select>
<br>
Eating habits:
Normal<input type="checkbox" name="mhabits[]" value="Normal">
Vegetarian<input type="checkbox" name="mhabits[]" value="Vegetarian">
No cows<input type="checkbox" name="mhabits[]" value="No cows">
No seafood<input type="checkbox" name="mhabits[]" value="No seafood">
<br>
程式經驗值: <br>
新手 <input type="range" name="experience" min="0" max="10" value="0"> 老手<br><br>
選擇您的營隊衣服顏色 (T-shirt Color): 
<input type="color" name="mColor" value="m"><br><br>
Pick-up Time, 17:00-18:00: 
<input type="time" name="pickup_time" min="17:00" max="18:00" value="17:00"><br>
Your email:<input type="email" name="mEmail" value="m"><br>
Date of birth:<input type="date" name="mDate" value="m"><br>

Remarks:<textarea name="comment" rows="10" cols="20">
    input
</textarea></br>
<input type="submit"><input type="reset">

</form>
</body>

</html>

