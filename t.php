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
    <link rel="icon" type="image/png" sizes="16x16" href="img/cc.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
  
    <style>
    html,body{

background-size: cover;
background-repeat: no-repeat;
width: 100%;
 height: auto;
font-family: 'Numans', sans-serif;
}
table{
        background-color: rgba(255, 251, 251, 0.75) !important;
        background: #FFFFFF;
        background-size: cover;
        background-repeat: no-repeat;
        font-family: 'Numans', sans-serif;
        border:0px solid red;
        padding:0 0 25px 0;
        max-width: 980px;
        width: 100%;
        margin:0px auto;
        font-family:helvetica,sans-serif;
        font-size:13px ;
        margin:10px auto;
     
       
      }
  
  form{
        display:block;
        background-size: cover;
        background-repeat: no-repeat;
   
        font-family: 'Numans', sans-serif;
        border:0px solid red;
        padding:0 0 25px 0;
        width:85%;
        font-family:helvetica,sans-serif;
        font-size:14px;
        margin:10px auto;
        border-radius:20px;
      }
    h2{
      font-family: 'Prompt', sans-serif;
      font-size:33px;
      margin:25px 10px;
      text-align:center;
    }
    input {
      font-family: 'Prompt', sans-serif;
    }
    a {
      font-family: 'Prompt', sans-serif;
    }
    th{
      font-family: 'Prompt', sans-serif;
      
    }
    p{
      font-family: 'Prompt', sans-serif;
      
    }
    h5{
      margin:5px 10px;
      font-weight:bold;
      text-align:left;
      
    }
    .btnSubmit{
    width: 100%;
    border-radius: 40px;
    padding: 2.5%;
    border: none;
    cursor: pointer;
    }
    .btn {
    border-radius: 40px; 
    }
    </style>
    <link rel="icon" type="image/png" sizes="16x16" href="img/cc.png">
    <title>งานซ่อมบำรุงคอมพิวเตอร์ </title>
  </head>
 <body background="img/11.jpg" >

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
<nav class="navbar navbar-light " style="background-color:;">
<!-- Logo -->
  <a class="navbar-brand" href="t.php">
  <center><img class="mb-2" src="img/logo.png" alt="" width="240" height="65"></center> 
  </a>
<!-- Logo -->
  <button class="navbar-toggler bg-light shadow-sm " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
          <li class="nav-item">
             <a class="nav-link" href="forms.php"> <center><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>&nbsp;กรอกแบบฟอร์มแจ้งซ้อมสำหรับนิสิต<span class="sr-only">(current)</span></a> </center>
             <li class="nav-item">
             <a class="nav-link" href="formss.php"> <center><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>&nbsp;กรอกแบบฟอร์มแจ้งซ้อมสำหรับบุคลากร<span class="sr-only">(current)</span></a> </center>
          <li class="nav-item">
             <a class="nav-link" href="index.php"> <center><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>&nbsp;ออกจากระบบ<span class="sr-only">(current)</span></a> </center>        
        </li>
     </ul>
  </div>
</nav>
<!-- เมนู -->



<br><h2>ตรวจสอบสถานะการซ่อม</h2>
<P Align=center></P>
<br>
<br>

<center><form class="form-horizontal" method="post">
<fieldset>
<div class="col-md-4 mb-2 ">
<div class="input-group form-group shadow ">
                
                </div>
               <input  class=" btnSubmit shadow  text-center" name="Uname" id="Uname"   placeholder="Readonly input here..." readonly value="<?=$_SESSION['name'] ?>">
              </div>
              
  
    <br>
    </div>
    <a><button type="Submit" name="Submit" id="Submit" class="btn btn-primary shadow  mb-3 " ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z.172-.051a.5.5 0 0 1 .708 0l12 12a.5.5 0 0 1-.708.708l-12-12a.5.5 0 0 1 0-.708z"/>
</svg>&nbsp;แสดงข้อมูล</button></a> 
    <a href="t.php" onClick="" > <button type="button" class="btn btn-danger shadow  mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg>&nbsp;ยกเลิกแสดงข้อมูล</button></a>
	</center>	

</form>
<div class="container">
  <div class="row">
    <div class="col">
		
		
    </div>
  
	

  <meta charset="utf-8">   
<table class="table shadow-lg " name="t1" style="width: 100%;">
    
                                    <thead>
                                        <tr>
                                            <th width="14%"><center><a>ชื่อ</th></a> </center>
										    <th width="15%"><center><a>คณะ</th></a> </center>
                                            <th width="5%"><center><a>ยี่ห้อ</th</a> </center>
                                            <th width="15%"><center><a>วัน/เดือน/ปี </th></a> </center>
                                            <th width="11%"><center><a>สถานะ</th></a> </center>
                                            <th width="10%"><center><a>หมายเหตุ</th></a> </center>
                                            <th width="5%"><center><a></th></a> </center>
                                        </tr>
                                    </thead>
                                    <tbody>

										<?php 
  include("connectdb.php");
  if(isset($_POST['Submit'])){
			
			$sql = "SELECT * FROM services_requests INNER JOIN department ON services_requests.dep_id=department.dep_id INNER JOIN brand ON services_requests.bid=brand.bid where sr_u_fname_th LIKE '%".$_POST['Uname']."%' ORDER BY `services_requests`.`sr_id` DESC";		
			$rs = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($rs) ;
			
			while($data = mysqli_fetch_array($rs)){
				if($num == 0){
			echo "<script>" ;
			echo "alert('ไม่พบบข้อมูล?');";
			echo "</script>";	
			
			}
			else {
			
	?> 
										
										
<tr>
      <td><span class="txt-oflo"><center><a><?php echo $data['sr_u_fname_th']; ?></sapn></td></a> </center>
			<td class="txt-oflo"><center><a><?php echo $data['dep_name']; ?></td></a> </center>
      <td class="txt-oflo"><center><a><?php echo $data['bname']; ?></td>  </a> </center>
      <td class="txt-oflo"><center><a><?php echo $data['day'],"/",$data['month'],"/",$data['year'] ?></td></a> </center>
      <td><span class="text-success"><center><a><?php echo $data['status']; ?></span></td></a> </center>
      <td class="txt-oflo"><center><a><?php echo $data['report']; ?></td></a> </center>
      <td><a href="delete2.php?sr_id=<?=$data['sr_id'];?>" onClick="return confirm('ยืนยันการลบ?');"><img src="img/bin.png" width="20" height="20"></a></td>
 </tr>	
<?php		
			}
    }
  }
?>
</tbody>
</table>




    <div class="col">
    </div>
  </div>
</div>
<br>

<form>
<div class=" text-white "> 
<h5><br><strong><p align = 'left'>กรุณาอ่านข้อบังคับก่อนกรอกแบบฟอร์ม</p></strong></h5>
<p align = 'left'>&nbsp;&nbsp;&nbsp;&nbsp;1.ระบบตรวจสอบบัญชีผู้ใช้เป็นไปตามพระราชบัญญัติว่าด้วยการกระทำความผิดเกี่ยวกับคอมพิวเตอร์ พ.ศ. 2550 ซึ่งกำหนดให้ผู้ให้บริการต้องเก็บรักษาข้อมูลผู้ใช้เป็นเวลาอย่างน้อย 90 วันเพื่อให้สามารถระบุตัวตนของผู้ใช้ อินเทอร์เน็ต ระหว่างนิสิตและบุคลากรของมหาวิทยาลัยมหาสารคาม</p>
<p align = 'left'>&nbsp;&nbsp;&nbsp;&nbsp;2.หากนิสิตนำอุปกรณ์มาซ่อม เช่น คอมพิวเตอร์ โน๊ตบุ๊ค นิสิตต้องหาอุปกรณ์ที่ต้องการจะซ่อมมาเอง</p>
<p align = 'left'>&nbsp;&nbsp;&nbsp;&nbsp;3.ทางศูนย์คอมพิวเตอร์มหาวิทยาลัยมหาสารคาม จะไม่มีการเก็บค่าบริการจากนิสิต</p>
<p align = 'left'>&nbsp;&nbsp;&nbsp;&nbsp;4.หากนิสิตทำการกรอกแบบฟอร์มแจ้งซ่อมเสร็จแล้ว โปรดนำอุปกรณ์ เช่น คอมพิวเตอร์ โน๊ตบุ๊คมาติดต่อที่หน่วยบริการเทคโนโลยีและสารสนเทศ ห้อง B 311 ชั้น 3 ศูนย์คอมพิวเตอร์วิทยบริการอาคาร B  หมายเลขโทรศัพท์ 0 4375 4352 ต่อ 2455 เปิดวันจันทร์ - ศุกร์เวลา 08.30 - 20.30 น. เสาร์ - อาทิตย์ 08.30 - 16.30 น. ปิดทำการในวันหยุดนักขัตฤกษ์</p>
  </form>  
</body>
</html>
