<?php
session_start();
?>
<meta charset="utf-8">
<?php
if(isset($_GET['sr_id'])){
	include("connectdb.php");
	$sql = "delete from services_requests where sr_id = '".$_GET['sr_id']."'";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่ได้");
	
	echo "<script>";
	echo "window.location = 't.php'";
	echo "</script>>";
}
?>