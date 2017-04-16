<HTML>
<?php

$username=@$_GET["username"];
$gender=@$_GET["gender"];
$bir=@$_GET["bir"];
$phone=@$_GET["phone"];
$list_position=@$_GET["list_position"];
$list_address=@$_GET["list_address"];
$list_contry=@$_GET["list_contry"];
$person=@$_GET["person"];
$day=@$_GET["day"];
$poster=@$_GET["poster"];
$mail=@$_GET["mail"];
$friends=@$_GET["friends"];
$internet=@$_GET["internet"];
$facebook=@$_GET["facebook"];
$others=@$_GET["others"];
$email=@$_GET["email"];
$memo=@$_GET["memo"];
$con1=@$_GET["con1"];
$con2=@$_GET["con2"];
$con3=@$_GET["con3"];
$con4=@$_GET["con4"];
$con5=@$_GET["con5"];
$con6=@$_GET["con6"];





echo "姓名:" .$username."<br/>";
echo "<br/>";
echo "性別:" .$gender."<br/>";
echo "<br/>";
echo "生日:"  . $bir."<br/>";
echo "<br/>";
echo "電話:" .$phone. "<br/>";
echo "<br/>";
echo "職業:" .$list_position ."<br/>";
echo "<br/>";
echo "住址:" .$list_contry .$con1."鄉鎮市區".$con2."道路/街名".$con3."巷".$con4."弄".$con5."號".$con6."樓"."<br/>";
echo "<br/>";
echo "參加日期:" .$day. "<br/>";
echo "<br/>";
echo "攜伴參加:" .$person. "位" ."<br/>";
echo "<br/>";
echo "訊息來源:".$poster;
echo $mail=="" ? "":"&".$mail;
echo $internet=="" ? "":"&".$internet;
echo $facebook=="" ? "":"&".$facebook;
echo $friends=="" ? "":"&".$friends;
echo $others=="" ? "":"&".$others;
echo "<br/>";
echo "<br/>";
echo "電子郵件:" .$email. "<br/>";
echo "<br/>";
echo "備註:" .$memo. "<br/>";







?>
</HTML>