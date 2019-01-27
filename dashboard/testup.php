
<?php


mysqli_connect("localhost:3306", "proschol_admin", "Inspiron@123","proschol_pro")or die("cannot connect to server"); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="testup.php" method="post" enctype="multipart/form-data">
<input type="file" name="file_img" />
<input type="submit" name="btn_upload" value="Upload">	
</form>

<?php
$ID=5;
if(isset($_POST['btn_upload']))
{
	$filetmp = $_FILES["file_img"]["tmp_name"];
	$filename = $_FILES["file_img"]["name"];
	$filetype = $_FILES["file_img"]["type"];
	$filepath = "uploads/".$id;
	
	move_uploaded_file($filetmp,$filepath);
	
	$sql = "INSERT INTO users (Photo) VALUES ('$filepath')";
	$result = mysqli_query($sql);
}
?>

</body>
</html>
