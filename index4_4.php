<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <style>
    h2{
      margin:25px 10px;
      font-weight:bold;
      font-family: 'Prompt', sans-serif;
      text-align:center;
    }
    h3{
      font-weight:bold;
      font-family: 'Prompt', sans-serif;
    }
    h4{
      font-size:17px;
      font-family: 'Prompt', sans-serif;
    }
    button {
      font-family: 'Prompt', sans-serif;
    }
    a{
      font-family: 'Prompt', sans-serif;
    }
    text {
        font-family:helvetica,sans-serif;
        font-size:14px;    
      }
    label{
      font-family: 'Prompt', sans-serif;
    }
    </style>
    <link rel="icon" type="image/png" sizes="16x16" href="img/cc.png">
    <title>งานซ่อมบำรุงคอมพิวเตอร์ </title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->



<!-- เมนู -->
<nav class="navbar navbar-expand-lg navbar navbar-light bg-ligh">
  <!-- Logo -->
  
  <nav class="navbar navbar navbar-light bg-ligh">
    <a class="navbar-brand" href="index3.php">
     <center><img src="img/logo.png" width="185" height="50"></center>
    </a>
  </nav> 
  <!-- Logo -->
   
      
    </ul>
    </div>
  </nav>
<!-- Logo -->


<!-- เมนู -->
<!-- Custom styles for this template -->
 
<link href="css/simple-sidebar.css" rel="stylesheet">
  <div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right shadow" id="sidebar-wrapper">
      <h3><div class="sidebar-heading"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> :&nbsp;<?=$_SESSION['name']?></div></h3>
      <div class="list-group list-group-flush ">
      <?php
     if($_SESSION['status'] != "กลาง"){
?>
        <a href="formss.php" class="list-group-item list-group-item-action bg-light"hidden="">กรอกแบบฟอร์มแจ้งซ่อม</a>
        <a href="index3_1.php" class="list-group-item list-group-item-action bg-light"hidden="">รายการส่งซ่อม</a>
        <a href="index3_2.php" class="list-group-item list-group-item-action bg-light"hidden="">รายการที่ซ่อมเสร็จ</a>
        <a href="login2.php" class="list-group-item list-group-item-action bg-light"hidden="">ออกจากระบบ</a>
<?php }
    else{
		  ?>
		  <a href="formss.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg> &nbsp;กรอกแบบฟอร์มแจ้งซ่อม</a>
        <a href="index4_1.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg> &nbsp;รายการส่งซ่อม</a>
        <a href="index4_2.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
  <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019l.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
</svg> &nbsp;รายการที่ซ่อมเสร็จ</a>
        <a href="login2.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>  &nbsp;ออกจากระบบ</a>
 <?php }

      if($_SESSION['status'] != "สูง"){
		  ?>
		    <a href="formss.php" class="list-group-item list-group-item-action bg-light"hidden="">กรอกแบบฟอร์มแจ้งซ่อม</a>
        <a href="index4_1.php" class="list-group-item list-group-item-action bg-light"hidden="">รายการส่งซ่อม</a>
        <a href="index4_2.php" class="list-group-item list-group-item-action bg-light"hidden="">รายการที่ซ่อมเสร็จ</a>
        <a href="index6.php" class="list-group-item list-group-item-action bg-light"hidden="">เพิ่มผู้ดูแลระบบ</a>
        <a href="login2.php" class="list-group-item list-group-item-action bg-light"hidden="">ออกจากระบบ</a>
<?php }
    else{
		  ?>
		    <a href="formss.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg> &nbsp;กรอกแบบฟอร์มแจ้งซ่อม</a>

		<a href="index4_1.php" class="list-group-item list-group-item-action bg-primary text-white shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg> &nbsp;รายการส่งซ่อม</a>

        <a href="index4_2.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wrench" viewBox="0 0 16 16">
  <path d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019l.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z"/>
</svg> &nbsp;รายการที่ซ่อมเสร็จ</a>

        <a href="index6.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>  &nbsp;เพิ่มผู้ดูแลระบบ</a>

        <a href="login2.php" class="list-group-item list-group-item-action bg-light shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>  &nbsp;ออกจากระบบ</a>
        <?php }
?>
      </div>
    </div>
<!-- /#sidebar-wrapper -->


    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow">
        <button class="btn btn-light shadow" id="menu-toggle"><img src="img/Untitled-1.png" width="30" height="20"></button>
      </nav>
    <br>
    <div class="container-fluid">
        <h2 class="box-title">รายการข้อมูลการซ่อมบำรุง</h2>
    <br>        
      <form method="post" action="index4_3.php">
       <div class="form-row align-items-center">
        <div class="col-auto">
         <h3><input type="text" name="search" class="form-control mb-2 shadow" id="inlineFormInput" placeholder="กรอกชื่อ"></h3>
      </div>
      <div class="col-auto">
         <button type="submit" class="btn btn-outline-primary mb-2 shadow">ค้นหา</button>
      </div>
    </div>
</form>
                      
      <br>
      <form method="post" action="index4_4.php">	  
        <div class="row">
          <div class="col-auto">
      <label for="moth">เดือน</label>
      <h3>
        <select id="moth" name="moth" class="form-control shadow">
          <option value="01">มกราคม</option>
          <option value="02">กุมภาพันธ์</option>
          <option value="03">มีนาคม</option>
          <option value="04">เมษายน</option>
          <option value="05">พฤษภาคม</option>
          <option value="06">มิถุนายน</option>
          <option value="07">กรกฎาคม</option>
          <option value="08">สิงหาคม</option>
          <option value="09">กันยายน</option>
          <option value="10">ตุลาคม</option>
          <option value="11">พฤศจิกายน</option>
          <option value="12">ธันวาคม</option>
        </select>
        </div>
      </h3>
      
        <div class="col-auto">
      <label for="day">วัน</label>
      <h3>
        <select id="day" name="day" class="form-control shadow">
          <option value="01">1</option>
          <option value="02">2</option>
          <option value="03">3</option>
          <option value="04">4</option>
          <option value="05">5</option>
          <option value="06">6</option>
          <option value="07">7</option>
          <option value="08">8</option>
          <option value="09">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        </div>
        </h3>
        
         <div class="col-auto ">
      <label for="year">ปี</label>
      <h3>
        <select id="year" name="year" class="form-control shadow">
          <option value="2562">2562</option>
          <option value="2563">2563</option>
          <option value="2564">2564</option>
          <option value="2565">2565</option>
          <option value="2566">2566</option>
          <option value="2567">2567</option>
          <option value="2568">2568</option>
          <option value="2569">2569</option>
          <option value="2570">2570</option>
          <option value="2571">2571</option>
          <option value="2572">2572</option>
        </select>
        </div>  
        </h3>

      
        </div>
        <br>
        <div>
         <button type="submit" name="Submit" class="btn btn-outline-primary mb-2 shadow">ค้นหา</button>
        </div>
        </form>		        
  
  <br>
  <meta charset="utf-8">
  <table class="table shadow-lg" name="t1" style="width: 100%;">
         
                                          <tr>
                                              <th width="14%"> <center><a>เลขที่รายการ</th></a> </center>
                                              <th width="15%"> <center><a>ชื่อ-สกุล</th></a> </center>
                                              <th width="16%"> <center><a>ประเภทผู้ใช้บริการ</th></a> </center>
                                              <th width="18%"> <center><a>รายละเอียด</th></a> </center>
                                              <th width="15%"> <center><a>วันที่รับบริการ</th></a> </center>
                                              <th width="18%"> <center><a>สถานะ</th></a> </center>
                                          
                                          </tr>
<tbody>
<?php include("connectdb.php");
$sql = "SELECT * FROM services_requests INNER JOIN users_type ON services_requests.ut_id=users_type.ut_id where day = '".$_POST['day']."' or month = '".$_POST['month']."' 
and year = '".$_POST['year']."' ORDER BY `services_requests`.`sr_id` DESC";
$rs = mysqli_query($conn,$sql);
        
while($data = mysqli_fetch_array($rs)){

	?>
<tr>
  <td><center><a><?php echo $data['sr_id'] ?></td></a> </center>
  <td class="txt-oflo"><center><a><?php echo $data['sr_u_fname_th'] ?></td></a> </center>
  <td><center><a><?php echo $data['ut_name'] ?></td></a> </center>
   <td class="txt-oflo"><center><a href="show.php?sr_id=<?=$data['sr_id'];?>">แสดงรายละเอียด</a></td></center>
  <td><center><a><?php echo $data['day'],"/",$data['month'],"/",$data['year'] ?></td></a> </center>
  <td><span class="text-danger"><center><a><?php echo $data['status'] ?></span></td></a> </center>
  <td><a href="print.php?id=<?=$data['id'];?>"><img src="img/print.png" width="20" height="20"></a></td>
</tr>
</tbody>
<?php }		
	?>
</table>
        </div>
      </div>
    </div>
        <!-- /#wrapper -->
        
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <!-- Menu Toggle Script -->
        <script>
          $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
          });
        </script>

</body>

</html>