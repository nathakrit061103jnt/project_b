<?php
	@session_start();
?>   
<meta charset="utf-8">
<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/cc.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <style type="text/css">
   html,body{

background-size: cover;
background-repeat: no-repeat;
width: 100%;
font-family: 'Numans', sans-serif;
}
	  input[type="text"] {
		font-size:1.3em;
		}
	  input[type="password"] {
		font-size:1.3em;
		}
		input[type="submit"] {
		font-size:1.3em;
		}
      .oc{
        display:table;
        width:100%;
        height:100%;
      }
      .ic{
        display:table-cell;
        vertical-align:middle;
        height:100%;
      }
      form{
        display:block;
       
        border:0px solid red;
        padding:0 0 25px 0;
        width:500px;
        font-family:helvetica,sans-serif;
        font-size:14px;
        margin:20px auto;
        border-radius:20px;
      }
      .fel,.fer,.fec{
        text-align:center;
        width:350px;
        margin:0 auto;
        padding:10px;
      }
      .fel{
        text-align:left;
      }
      .fer{
        text-align:center;
        font-family:helvetica,sans-serif;
      }
      h1{
        font-weight:white;
        font-size:0px;
        margin:0;
        padding:0px 0px;
        text-align:center;
        border-radius:0px 0px 0px 0px;
      }
      p{
        margin:15px auto;
        width:75%;
        text-align:left;
      }
      ul{
        margin:15px auto;
        width:75%;
      }
      h2{
        margin:25px 10px;
        font-family: 'Prompt', sans-serif;
        text-align:center;
      }
      h4{
        margin:25px 10px;
        font-weight:bold;
        text-align:center;
        
      }
    }
      h5{
        margin:30px 10px;
        font-weight:bold;
        text-align:center;
        
      }
      label,h2{
        font-size:17px;
      }
      a{
        font-family: 'Prompt', sans-serif;
        font-size:18px;
      }
      h3{
        margin:25px 10px;
        font-weight:bold;
        text-align:center;
        color: #000000;
        font-size:13px;
      }
      h6{
        font-size:14px;
        font-family: 'Prompt', sans-serif;
      }
      .logo{
        background: center 25px url(img/logo.png) no-repeat;
        padding-top:0px;
      }
      .card{
        height: 560px;
        margin-top: auto;
        margin-bottom: auto;
        width: 500px;
        background-color: rgba(0,0,0,0.8) !important;
       }
	 
	</style>

     <title>
		   งานซ่อมบำรุงคอมพิวเตอร์ 
     </title>
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
    <nav class="navbar navbar-light shadow" style="background-color:#00BFFF;">
<!-- Logo -->
    <a class="navbar-brand" href="#">
    </a>
<!-- Logo -->

  <button class="navbar-toggler bg-light shadow-sm " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link text-dark" href="index.php"><center><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>&nbsp;สำหรับนิสิต</a></center>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="login2.php"><center><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>&nbsp;สำหรับผู้ดูแลระบบ</a></center>
      </li>
  </div>
</nav>
<!-- เมนู -->
  <table width="100%" height="60" align="center" cellpadding="5" cellspacing="0">

  <tbody><tr>

  <!-- Logo -->

  <!-- login -->
    <td valign="top" bgcolor="">
    <form method="post">

  <center>
  <br><br><br>
  <div class="card shadow-lg " >
  <br><center><img src="img/logo.png"  width="300" height="80"></center>
  <form method="post">
          <div class="card-header text-white">
          <h2>
           กรุณาล็อคอินก่อนเข้าใช้งาน <br>(สำหรับนิสิต)
         </h2>
          </div>
          <div class="card-body ">
              <div class="input-group form-group ">
                <div class="input-group-prepend shadow">
                  <span class="input-group-text ">
                    <i class="fas fa-user "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> </i>
                  </span>
                </div>
                <input  class="form-control shadow "  name="user" id="user" type="text"  placeholder="Username" required="">
              </div>

              <div class="input-group form-group">
                <div class="input-group-prepend shadow">
                  <span class="input-group-text">
                    <i class="fas fa-key"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg></i>
                  </span>
                </div>
                <input  class="form-control shadow " name="password" id="password" type="password" placeholder="Password" required="">
              </div>
                <div class="col-6">
                <button type="Submit" name="Submit" id="Submit" class="btn btn-primary shadow-lg" >Login </button>
                </div>
                <br>
              <div class="w-full text-center text-white "> 
    <h6>                       
              <br><center>กรุณาอ่านก่อนเข้าใช้งาน </center>
              <center>การให้บริการระบบเครือข่ายคอมพิวเตอร์และอินเทอน์เน็ต อยู่ภายใต้กฏหมายพระราช บัญญัติว่าด้วยการกระทำผิดเกี่ยวกับคอมพิวเตอร์ พ.ศ. 2550 , 2560</center><br>
	            <center>พบปัญหาการใช้งานติดต่อ</center>
              <center>งานบริการ สำนักคอพิวเตอร์  มหาวิทยาลัยมหาสารคาม</center>
              <center>โทรศัพท์ 0-4375-4352  ภายใน 2455 </center>
    </h6>
            </form>
          </div>
          </center>	      
  <!-- login -->
      

  
  <!-- เชื่อมฐานข้อมูล -->
  <?php
if (isset($_POST['Submit'])) {
	include("connectdb.php");
	$sql = "select * from users where username='".$_POST['user']."' and pwd='".($_POST['password'])."' limit 1" ;
		$rs = mysqli_query($conn,$sql) ;
		$data = mysqli_fetch_array($rs);
		$num = mysqli_num_rows($rs) ;
		if($num > 0) {
			$_SESSION['b_id'] = $data['b_id'];	
			$_SESSION['name'] = $data['name'];	
			$_SESSION['status'] = $data['status'];
			echo "<script>";
      echo "window.location='t.php';";
			echo "</script>";
		}
			else {
			echo "<script>" ;
			echo "alert('Username หรือ Password ไม่ถูกต้อง');"; 
			echo "</script>";	
			exit;
		}
	
}
?>	
<!-- เชื่อมฐานข้อมูล -->  
</body>
</html>