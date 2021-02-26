<form action="welcome.php" method = "post" enctype="multipart/form-data">
<label for="name">Name:-</label>
<input type ="text" name = "name" id="name" ><br>
<label for="eml">Email:-</label> 
<input type="email" name = "data1" id="eml"><br>
<label for="pwd">Password:-</label>
<input type="password" name = "data2" id="pwd"><br>
<label for = "img">Picture</label>
<input type="file" name = "data4" id="img"><br>
<input type = "submit" name = "data3">
</form>
<?php
if(isset($_POST["data3"]))
{$name = $_FILES["data4"]["name"];
$sz =  $_FILES['data4']['size']/(1024*1024);
if($sz>2)
	echo"File is too large";
else
{move_uploaded_file($_FILES['data4']['tmp_name'],$_FILES['data4']['name']);
echo "File is uploaded";

}

}

?>