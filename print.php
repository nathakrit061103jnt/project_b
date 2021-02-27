<?php
session_start();
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">

    #printable { display: none; }

    @media print
    {
        #non-printable { display: none; }
        #printable { display: block; }
    }
    </style>


<style type="text/css" media="print">
input{
    display:none;
}


</style>

	<title>แสดงรายละเอียด</title>
</head>

<body class="p-3 mb-2 bg-secondary text-dark">
	<?php include("connectdb.php");
									$sql = "SELECT *  FROM services_requests
									INNER JOIN department ON services_requests.dep_id=department.dep_id
									INNER JOIN users_type ON services_requests.ut_id=users_type.ut_id
									INNER JOIN cause ON services_requests.cid=cause.cid
									INNER JOIN brand ON services_requests.bid=brand.bid
									INNER JOIN machine ON services_requests.m_id=machine .m_id
									INNER JOIN machine_type ON services_requests.mtype_id=machine_type.mtype_id
									INNER JOIN title_name ON services_requests.tid=title_name.tid
									where sr_id ='".$_GET['sr_id']."'";
									$rs = mysqli_query($conn,$sql);
									$data = mysqli_fetch_array($rs);
									
									
									
									
									?>	
	<div class="container">
		<div class="row">
			<div class="col">

			</div>
			<div class="col">
				<br>
				<div class="card" style="width: 800px;">
					<div class="card-body">
						<img src="img/logo.png" width="40%">
						<center>
							<h3>แบบฟอร์มขอรับบริการ</h3>
						</center>
						<center>
							<h3>สำนักคอมพิวเตอร์	มหาวิทยาลัยมหาสารคาม</h3>
						</center>
						<br>
						<form id="form1" name="form1" method="post">
							<div class="form-row">
								<div class="col">
									<p>ชื่อ-สกุลผู้แจ้ง :&emsp;<?php echo $data['sr_u_fname_th'] ?></p>
								</div>
								<div class="col">
									<p>ชื่อ-สกุลภาษาอังกฤษ :&emsp;<?php echo $data['sr_u_fname_en'] ?></p>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<p>เลขบัตรประชาชน :&emsp;<?php echo $data['sr_id_card_number'] ?></p>
								</div>
								<div class="form-group col-md-4">
									<p>รหัสนิสิต :&emsp;<?php echo $data['studen_id'] ?></p>
								</div>
								<div class="form-group col-md-2">
									<p>เพศ :&emsp;<?php echo $data['sex'] ?></p>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<p>ประเภทผู้ใช้บริการ :&emsp;<?php echo $data['ut_name'] ?></p>
								</div>
								<div class="col">
									<p>ประเภทเครื่อง :&emsp;<?php echo $data['m_name'] ?></p>
								</div>
							
							</div>
							<div class="form-row">
								<div class="col">
									<p>คณะ/หน่วยงาน :&emsp;<?php echo $data['dep_name'] ?></p>
								</div>
								<div class="col">
									<p>เบอร์โทรศัพท์ :&emsp;<?php echo $data['sr_tel'] ?></p>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<p>ชนิดเครื่อง :&emsp;<?php echo $data['mtype_name'] ?></p>
								</div>
								<div class="col">
									<p>ยี่ห้อ :&emsp;<?php echo $data['bname'] ?></p>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<p>หมาเลขครุภัณฑ์ (เครื่องหน่วยงาน) :&emsp;<?php echo $data['sr_machine_number'] ?></p>
								</div>
								<div class="col">
									<p>ความต้องการรับบริการ  :&emsp;<?php echo $data['cname'] ?></p>
								</div>
								
							</div>
							<div class="form-row">
								<div class="col">
									<p>สาเหตุอื่นๆ :&emsp;<?php echo $data['sr_c_orther'] ?></p>
								</div>
								<div class="col">
									<p>สิ่งที่มาพร้อมเครื่อง :&emsp;<?php echo $data['sr_item_user'] ?></p>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<p>รหัสเข้าเครื่อง: &emsp;<?php echo $data['sr_password_machine'] ?></p>
								</div>
								<div class="col">
									<p>ข้อมูลสำคัญ :&emsp;<?php echo $data['sr_Important_data'] ?> </p>
								</div>
							</div>
							<p align="right">วัน/เดือน/ปี ที่แจ้ง : &emsp;<?php echo $data['day'],"/",$data['month'],"/",$data['year'] ?></p>
							<p align="right">เวลา :&emsp;<?php echo $data['time'] ?></p>
							<div class="col-md">
							<p>
							<br>
							<div class="form-row">
								<div class="col">
									<p>ลงชื่อ(Signature)...................................เจ้าหน้าที่ผู้รับแจ้ง</p>
								</div>
								<div class="col">
									<p>ลงชื่อ(Signature).........................................ผู้ส่งซ่อม/รับคืน</p>
								</div>
							</div>
							<p>-----------------------------------------------------------------------------------------------------------------</p>
							<img src="img/logo.png" width="40%"><br>
							<br>

							<div class="form-row">
								<div class="col">
									<p><b>ชื่อ-สกุลผู้แจ้ง : &emsp;<?php echo $data['sr_u_fname_th'] ?></b>
									</p>
								</div>
								<div class="col">
									<p><b>ชนิดเครื่อง :&emsp;<?php echo $data['mtype_name'] ?></b>
									</p>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<p><b>ยี่ห้อ :&emsp;<?php echo $data['bname'] ?></b>
									</p>
								</div>
								<div class="col">
									<p><b>คณะ/หน่วยงาน : &emsp;<?php echo $data['dep_name'] ?></b>
									</p>
								</div>
							</div>
							<center>
								<p><b>***********กรุณามารับคืนด้วยตนเองเท่านั้นพร้อมบัตรนิสิต/บัตรประชาชน***********</b>
								</p>
							</center>
							<div id="non-printable">
								<center> <button type="button" name="button" class="btn btn-outline-primary" onclick="print();">Print</button>
								</center>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col">

			</div>
		</div>
	</div>
</body>

</html>