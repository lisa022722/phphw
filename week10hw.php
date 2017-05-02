

		<form action=""  enctype="multipart/form-data"  method="post">


		

		<?php

		$uploadnum=$_POST["uploadnum"];


			for($a=1;$a<=$uploadnum;$a++){
		?>	
				<input type="file" name="file[]" ><br/><br/>
		<?php
			}
		?>
			
		
		<input type="submit" name="file" value="上傳檔案">


		<?php
			if(isset($_FILES["file"])){
			echo "檔案名稱:".$_FILES["file"]["name"][$a]."<br/>";
			echo "暫存檔名:".$_FILES["file"]["tmp_name"][$a]."<br/>";
			echo "檔案尺寸:".$_FILES["file"]["size"][$a]."<br/>";
			echo "檔案種類:".$_FILES["file"]["type"][$a]."<br/>";

			$name=$_FILES["file"]["name"][$a];
			$tmp=$_FILES["file"]["tmp_name"][$a];
			if(!empty($name)){
				copy($tmp,$name);
				echo "檔案上傳成功<br>";
			}else{
				echo "檔案上傳失敗";
				}

			}		
		?>

</form>




