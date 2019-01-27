                  <?php
                   include("config.php");
$ID='3';

$selected = mysqli_select_db($con, "proschol_pro")  
or die("Could not select Database");  
if(isset($_POST['btn_upload']))
{
  $filetmp = $_FILES["passport"]["tmp_name"];
  $filename = $_FILES["passport"]["name"];
  $filepath = "uploads/images/".$ID;

  $filetmp = $_FILES["sign"]["tmp_name"];
  $filename = $_FILES["sign"]["name"];
  $filepath2 = "uploads/sign/".$ID;

  $filetmp = $_FILES["aadhar"]["tmp_name"];
  $filename = $_FILES["aadhar"]["name"];
  $filepath3 = "uploads/aadhar/".$ID;

  $filetmp = $_FILES["tenmarks"]["tmp_name"];
  $filename = $_FILES["tenmarks"]["name"];
  $filepath4 = "uploads/TenMark/".$ID;

  $filetmp = $_FILES["twelvemarks"]["tmp_name"];
  $filename = $_FILES["twelvemarks"]["name"];
  $filepath5 = "uploads/TwelveMark/".$ID;
  
  move_uploaded_file($filetmp,$filepath);
  
  $sql = "INSERT INTO users (Photo,Sign,Card,Ten,Twelve) VALUES ('$filepath','$filepath2','$filepath3','$filepath4','$filepath5')" ;
  $result = mysqli_query($sql);
}
?>