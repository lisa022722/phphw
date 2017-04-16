<?php


$link = mysqli_connect( //link建立連線

		'localhost',//MySQL主機名稱
		'root',     //使用者名稱
		'peihsuan', //密碼
		'php2017'); //預設使用的資料庫名稱
	

if($link){
	echo "DB Connected!";
}else{
	echo "DB Connected Failed";
}




$username=@$_POST["username"];
$gender=@$_POST["gender"];
$bir=@$_POST["bir"];
$phone=@$_POST["phone"];
$list_position=@$_POST["list_position"];
$list_address=@$_POST["list_address"];
$list_contry=@$_POST["list_contry"];
$person=@$_POST["person"];
$day=@$_POST["day"];
$poster=@$_POST["poster"];
$mail=@$_POST["mail"];
$friends=@$_POST["friends"];
$internet=@$_POST["internet"];
$facebook=@$_POST["facebook"];
$others=@$_POST["others"];
$email=@$_POST["email"];
$memo=@$_POST["memo"];
$con1=@$_POST["con1"];
$con2=@$_POST["con2"];
$con3=@$_POST["con3"];
$con4=@$_POST["con4"];
$con5=@$_POST["con5"];
$con6=@$_POST["con6"];






$mysql= "INSERT INTO week8hw(Name,Gender,Birthday,Phone,Position,Address,Joindate,Partner,Message,Email,Bulletin) VALUES ('$username','$gender','$bir','$phone','$list_position','$list_contry' '$con1' '$con2' '$con3' '$con4' '$con5' '$con6' ,'$day','$person',  '$poster'   '$mail'   '$internet'   '$facebook'   '$friends'   '$others' , '$email','$memo')";

$result=mysqli_query($link,$mysql); //丟資料

$result=mysqli_query($link,"SELECT * FROM week8hw" );


echo "<table border=2>";

while($row=mysqli_fetch_assoc($result)){
	
	echo "<tr/>";
	echo "<td>";
	echo @$row["Name"];
	echo "</td><td>";
	echo @$row["Gender"];
	echo "</td><td>";
	echo @$row["Birthday"];
	echo "</td><td>";
	echo @$row["Phone"];
	echo "</td><td>";
	echo @$row["Position"];
	echo "</td><td>";
	echo @$row["Address"];
	echo "</td><td>";
	echo @$row["Joindate"];
	echo "</td><td>";
	echo @$row["Partner"];
	echo "</td><td>";
	echo @$row["Message"];
	echo "</td><td>";
	echo @$row["Email"];
	echo "</td><td>";
	echo @$row["Bulletin"];
	echo "</td></tr>";

}

echo "</table>";




mysqli_close($link);




?>