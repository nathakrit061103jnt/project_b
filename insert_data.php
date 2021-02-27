<?php date_default_timezone_set('asia/bangkok');?>

<div class="col-md-3">
    <input id="txt_year" name="txt_year" type="text" class="form-control input-md" value="<?=(date(" Y") + 543);?>"
        hidden="">
</div>
<div class="col-md-3">
    <input id="txt_time" name="txt_time" type="text" class="form-control input-md" value="<?=date(" h: i: s a");
?>" hidden="">
</div>

<?php

if (isset($_POST["inser_C1_tSubmit"])) {
    include_once "./connectdb.php";
    $sql = "INSERT INTO `services_requests` (`sr_id`, `tid`, `sr_u_fname_th`, `sr_u_fname_en`,
          `sr_email`, `sr_tel`,`m_id`,`studen_id`, `dep_id`, `bid`, `mtype_id`, `sr_item_user`, `sr_Important_data`,
          `sr_password_machine`, `cid`, `sr_c_orther`, `sr_id_card_number`, `ut_id`, `sr_machine_number`,
          `sr_user_position`,`status`,`day`,`month`,`year`,`time`)
          VALUES (NULL,'{$_POST["tid"]}', '{$_POST["sr_u_fname_th"]}', '{$_POST["sr_u_fname_en"]}', '{$_POST["sr_email"]}',
          '{$_POST["sr_tel"]}','{$_POST["m_id"]}','{$_POST["studen_id"]}','{$_POST["dep_id"]}', '{$_POST["bid"]}', '{$_POST["mtype_id"]}','{$_POST["sr_item_user"]}',
          '{$_POST["sr_Important_data"]}', '{$_POST["sr_password_machine"]}', '{$_POST["cid"]}', '{$_POST["sr_c_orther"]}',
          '{$_POST["sr_id_card_number"]}', '1', NULL, NULL,'กำลังดำเนินการซ่อม','" . date("d") . "','" . date("m") . "','" . date("Y") . "'+543,'" . date("H:i") . "') ;";

    mysqli_query($conn, $sql) or die("บันทึกข้อมูล ไม่ได้");

    echo "<script>";
    echo "window.location='t.php';";
    echo "</script>>";
}

if (isset($_POST["inser_C2_tSubmit"])) {
    include_once "./connectdb.php";
    $sql = "INSERT INTO `services_requests` (`sr_id`, `tid`, `sr_u_fname_th`, `sr_u_fname_en`,
          `sr_email`, `sr_tel`,`m_id`, `dep_id`, `bid`, `mtype_id`, `sr_item_user`, `sr_Important_data`,
          `sr_password_machine`, `cid`, `sr_c_orther`, `sr_id_card_number`,`ut_id`, `sr_machine_number`,
          `sr_user_position`,
          `status`,`day`,`month`,`year`,`time`)
          VALUES (NULL,'{$_POST["tid"]}', '{$_POST["sr_u_fname_th"]}', '{$_POST["sr_u_fname_en"]}', '{$_POST["sr_email"]}',
          '{$_POST["sr_tel"]}', '{$_POST["m_id"]}', '{$_POST["dep_id"]}', '{$_POST["bid"]}', '{$_POST["mtype_id"]}','{$_POST["sr_item_user"]}',
          '{$_POST["sr_Important_data"]}', '{$_POST["sr_password_machine"]}', '{$_POST["cid"]}', '{$_POST["sr_c_orther"]}',
          NULL, '2','{$_POST["sr_machine_number"]}','{$_POST["sr_user_position"]}','กำลังดำเนินการซ่อม','" . date("d") . "','" . date("m") . "','" . date("Y") . "'+543,'" . date("H:i") . "');";
    mysqli_query($conn, $sql) or die("บันทึกข้อมูล ไม่ได้");

    echo "<script>";
    echo "window.location='t.php';";
    echo "</script>>";

}