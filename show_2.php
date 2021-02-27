<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>แสดงรายละเอียด</title>
</head>

<body class="p-3 mb-2 bg-secondary text-dark">
	<?php include("connectdb.php");
									$sql = "SELECT * FROM success
									INNER JOIN machine ON success.m_id=machine.m_id
									where `success`.s_id ='".$_GET['s_id']."'";
									$rs = mysqli_query($conn,$sql);
									$data = mysqli_fetch_array($rs);
									?>
	<div class="container">
	 <div class="row">
    <div class="col">
      
    </div>
    <div class="col">
		<br>
<div class="card"  style="width: 700px;">
  <div class="card-body">
	  <center><h3>แบบฟอร์มขอรับบริการ</h3></center>
	<center><h3>สำนักคอมพิวเตอร์	มหาวิทยาลัยมหาสารคาม</h3></center>
<br>
<br>

<form id="form1" name="form1" method="post">
	<div class="form-row">
    <div class="col">
  <p><b>ชื่อ-สกุลผู้แจ้ง : </b>&emsp;<?php echo $data['name'] ?></p>
		</div>
    <div class="col">	<p> คณะ/หน่วยงาน : &emsp;<?php echo $data['dep'] ?></p>
		</div>
  </div>
  <p>เพศ : &emsp;<?php echo $data['sex'] ?></p>
	<div class="form-row">
    <div class="col">
		<p>ประเภทผู้ใช้บริการ :  &emsp;<?php echo $data['type'] ?> </p>
		</div>
    <div class="col"> <p> ประเภทเครื่อง : &emsp;<?php echo $data['m_name'] ?></p>		
		</div>
  </div>
	<div class="form-row">
    <div class="col">
  <p>ยี่ห้อ :  &emsp;<?php echo $data['brand'] ?></p></div>
    <div class="col"><p> ผู้ซ่อม : &emsp;<?php echo $data['admin'] ?></p>
		</div>
  </div>
  <p>ผลการซ่อม : &emsp;<?php echo $data['result'] ?></p>
	<br>
<p align = 'right'>วัน/เดือน/ปี ที่ซ่อมเสร็จ : &emsp;<?php echo $data['day'],"/",$data['month'],"/",$data['year'] ?></p>
</form>
	  <center> <a href="index4_2.php"> <button type="button" class="btn btn-secondary">ย้อนกลับ</button></a></center>
	  	  </div>
</div>
		</div>
    <div class="col">
      
    </div>
  </div>
</div>
</body>
</html>