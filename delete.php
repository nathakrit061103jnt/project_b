<?php
session_start();
?>
<meta charset="utf-8">
<?php
if(isset($_GET['a_id'])){
	include("connectdb.php");
	$sql = "delete from admin where a_id = '".$_GET['a_id']."'";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้");
	
	echo "<script>";
	echo "window.location = 'index6.php'";
	echo "</script>>";
}
?>
