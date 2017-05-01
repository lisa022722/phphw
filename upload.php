



<?php




header('content-type:text/html;charset=utf-8');
	
	$uploadnum=$_POST['uploadnum'];
	



	echo "上傳".$uploadnum."個檔案"."<br/>";







	if ($_FILES["file"]["error"] > 0){
　		echo "Error: " . $_FILES["file"]["error"];
	}else{
		echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";
		echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";
		echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";
		echo "暫存名稱: " . $_FILES["file"]["tmp_name"];
	}






?>

		<input id="file" name="file" type="file">
		<input id="submit" name="submit" type="submit" value="開始上傳檔案">
		<br/>


