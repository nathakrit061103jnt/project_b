<?php
if (isset($_GET["sr_id"])) {
    $sr_id = $_GET["sr_id"];
    ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta value="<?=$item["sr_u_fname_th"];?>" name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <style type="text/css">
    input[type="text"] {
        font-size: 1.3em;
    }

    input[type="password"] {
        font-size: 1.3em;
    }

    input[type="submit"] {
        font-size: 1.5em;
    }

    .oc {
        display: table;
        width: 100%;
        height: 100%;
    }

    .ic {
        display: table-cell;
        vertical-align: middle;
        height: 100%;
    }

    h2 {
        margin: 25px 10px;
        font-weight: bold;
        font-family: 'Prompt', sans-serif;
        text-align: center;
        font-size: 27px;
    }

    form {
        display: block;

        border: 0px solid red;
        padding: 0 0 25px 0;
        width: 600px;
        font-family: 'Prompt', sans-serif;
        font-size: 14px;
        margin: 10px auto;
        border-radius: 20px;
    }

    .fel,
    .fer,
    .fec {
        text-align: center;
        width: 350px;
        margin: 0 auto;
        padding: 10px;
    }

    .fel {
        text-align: left;
    }

    .fer {
        text-align: center;
    }

    a {
        font-family: 'Prompt', sans-serif;
    }

    h1 {
        font-weight: white;
        font-size: 0px;
        margin: 0;
        padding: 0px 0px;
        text-align: center;
        border-radius: 0px 0px 0px 0px;
    }

    p {
        margin: 15px auto;
        width: 75%;
        text-align: left;

    }

    h4 {
        margin: 25px 10px;
        font-weight: bold;
        font-family: 'Prompt', sans-serif;
        text-align: center;

    }


    h5 {
        margin: 30px 10px;
        font-weight: bold;
        text-align: center;

    }

    label {
        font-size: 17px;
    }

    h3 {
        margin: 25px 10px;
        font-weight: bold;
        text-align: center;
        color: #000000;
        font-size: 13px;
    }
    </style>
    <title>
        งานซ่อมบำรุงคอมพิวเตอร์
    </title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <table width="90%" height="600" align="center" cellpadding="0" cellspacing="0">


        <!-- เมนู -->
        <nav class="navbar navbar-expand-lg navbar navbar-light bg-ligh">
            <a class="navbar-brand" href="#"></a>
            <!-- Logo -->

            <nav class="navbar navbar navbar-light bg-ligh">
                <a class="navbar-brand" href="t.php">
                    <img class="mb-2" src="img/logo.png" alt="" width="240" height="65">
                </a>
            </nav>
            <!-- Logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                    <li class="nav-item">
                        <a class="nav-link" href="t.php">ตรวจสอบสถานะการซ่อม<span class="sr-only">(current)</span></a>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">ออกจากระบบ<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- เมนู -->

        <!-- รูปตังอย่าง -->
        <td align="left" bgcolor="#FFFFFF">
            <div class="card ">
                <h2>แบบฟอร์มขอรับบริการ
                    <br>สำนักคอมพิวเตอร์ มหาวิทยาลัยมหาสารคาม
                </h2>
                <h4>Service From of Malntenance Computer system Mahasarakham University</h4>

                <?php
include_once "./connect_db.php";
    ?>

                <form action="update_data.php" method="post">
                    <?php
$sql_i = "SELECT * FROM services_requests WHERE sr_id='$sr_id'";
    $result_i = mysqli_query($conn, $sql_i);

    while ($item = mysqli_fetch_assoc($result_i)) {
        ?>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="title_name">คำนำหน้าชื่อ</label>
                            <select id="tid" required name="tid" class="form-control">
                                <!-- <option selected>เลือก</option> -->
                                <?php
$sql = "SELECT * FROM title_name";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {?>
                                <option value="<?=$row["tid"];?>" <?php
if ($item["tid"] = $row["tid"]) {
            echo "selected";
        }
            ?>><?=$row["tname"];?></option>
                                <?php
}

        ?>
                            </select>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="inputEmail4">ชื่อ-สกุล</label>
                            <input required type="text" class="form-control" name="sr_u_fname_th"
                                placeholder="กรอกชื่อ-นามสกุล" value="<?=$item["sr_u_fname_th"];?>">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputPassword4">ชื่อ-สกุล ภาษาอังกฤษ</label>
                            <input type="text" class="form-control" value="<?=$item["sr_u_fname_en"];?>"
                                name="sr_u_fname_en" required placeholder="Name-Surname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">E-mail</label>
                            <input type="email" class="form-control" value="<?=$item["sr_email"];?>" name="sr_email"
                                required placeholder="กรอก E-mail">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">รหัสนิสิต</label>
                            <input type="text" required class="form-control" value="<?=$item["sr_std_id"];?>"
                                name="sr_std_id" placeholder="กรอกรหัสนิสิต">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">เบอร์โทรศัพท์</label>
                            <input type="text" required class="form-control" value="<?=$item["sr_tel"];?>" name="sr_tel"
                                placeholder="กรอกเบอร์โทรศัพท์">
                        </div>
                    </div>

                    <div class="form-group col-md-15">
                        <label for="Dep">คณะ/หน่วยงาน</label>
                        <select required name="dep_id" class="form-control">
                            <!-- <option selected>เลือก</option> -->
                            <?php

        $sql = "SELECT * FROM department";
        $rs = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_array($rs)) {
            ?>
                            <option value="<?=$data['dep_id'];?>" <?php
if ($data['dep_id'] == $item['dep_id']) {
                echo "selected";
            }
            ?>><?=$data['dep_name'];?></option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="brand">ยี่ห้อ</label>
                            <select required name="bid" class="form-control">
                                <!-- <option selected>เลือก</option> -->

                                <?php

        $sql = "SELECT * FROM brand";
        $rs = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_array($rs)) {
            ?>
                                <option value="<?=$data['bid'];?>" <?php
if ($data['bid'] == $item['bid']) {
                echo "selected";
            }
            ?>><?=$data['bname'];?></option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="machine_type">ระบุชนิดเครื่อง</label>
                            <select required name="mtype_id" class="form-control">
                                <!-- <option selected>เลือก</option> -->
                                <?php

        $sql = "SELECT * FROM machine_type";
        $rs = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_array($rs)) {
            ?>
                                <option value="<?=$data['mtype_id'];?>" <?php
if ($data['mtype_id'] == $item['mtype_id']) {
                echo "selected";
            }
            ?>><?=$data['mtype_name'];?></option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputEmail4">สิ่งที่มาพร้อมเครื่อง</label>
                            <input type="nameincluded" class="form-control" required
                                value="<?=$item["sr_u_fname_th"];?>" name="sr_item_user"
                                placeholder="ไม่มีให้ใส่เครื่องหมาย">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputCity">ข้อมูลสำคัญที่ต้องเก็บ</label>
                            <input type="text" class="form-control" required value="<?=$item["sr_u_fname_th"];?>"
                                name="sr_Important_data" placeholder="เช่น Drive D">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCity">รหัสเข้าเครื่อง</label>
                            <input type="text" value="<?=$item["sr_u_fname_th"];?>" name="sr_password_machine" required
                                class="form-control" placeholder="ไม่มีให้ใส่เครื่องหมาย(-)">
                        </div>
                        <div class="col-md-6">
                            <label for="cause">สาเหตุเบื้องต้น</label>
                            <select id="" name="cid" required class="form-control">
                                <!-- <option selected>เลือก</option> -->
                                <?php

        $sql = "SELECT * FROM cause";
        $rs = mysqli_query($conn, $sql);

        while ($data = mysqli_fetch_array($rs)) {
            ?>
                                <option value="<?=$data['cid'];?>" <?php
if ($data['cid'] == $item['cid']) {
                echo "selected";
            }
            ?>><?=$data['cname'];?></option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputCity">สาเหตุอื่นๆ</label>
                            <input required type="text" value="<?=$item["sr_u_fname_th"];?>" name="sr_c_orther"
                                class="form-control" placeholder="ไม่มีให้ใส่เครื่องหมาย(-)">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputCity">เลขบัตรประชาชน 13 หลัก</label>
                            <input type="text" required class="form-control" value="<?=$item["sr_u_fname_th"];?>"
                                name="sr_id_card_number" placeholder="เฉพาะนิสิตที่นำมาติดตั้ง Windows/Microsoft 365">
                        </div>

                        <input type="hidden" class="form-control" value="<?=$item["sr_u_fname_th"];?>" name="sr_id"
                            value="<?=$sr_id?>">

                    </div>
                    <div align="center">
                        <button type="submit" value="<?=$item["sr_u_fname_th"];?>" name="update_C1_tSubmit"
                            class="btn btn-warning">เเก้ไขข้อมูล</button>
                        <a href="./index.php" type="button" class="btn btn-danger">ยกเลิก</a>
                    </div>

                    <?php
}
    ?>
                </form>
        </td>
        <!-- รูปตังอย่าง -->

        <?php
}
?>