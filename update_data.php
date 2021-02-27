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

if (isset($_POST["update_C1_tSubmit"])) {
    include_once "./connectdb.php";
    $sql = "UPDATE `services_requests`
           SET `tid` ='{$_POST["tid"]}', `sr_u_fname_th`='{$_POST["sr_u_fname_th"]}',
           `sr_u_fname_en`='{$_POST["sr_u_fname_en"]}', `sr_email`='{$_POST["sr_email"]}',
          `sr_tel`='{$_POST["sr_tel"]}', `dep_id`='{$_POST["dep_id"]}', `bid`='{$_POST["bid"]}',
          `mtype_id`='{$_POST["mtype_id"]}',`sr_item_user`='{$_POST["sr_item_user"]}',
          `sr_Important_data`='{$_POST["sr_Important_data"]}', `sr_password_machine`='{$_POST["sr_password_machine"]}',
          `cid`='{$_POST["cid"]}', `sr_c_orther`='{$_POST["sr_c_orther"]}',
          `sr_id_card_number`='{$_POST["sr_id_card_number"]}',`studen_id`='{$_POST["studen_id"]}',
           `status`='กำลังดำเนินการซ่อม',`day`='" . date("d") . "',`month`='" . date("m") . "',`year`='" . date("Y") . "'+543,
           `time`='" . date("H:i") . "'

          WHERE `services_requests`.`sr_id` = '{$_POST["sr_id"]}';";

    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('เเก้ไขข้อมูลสำเร็จ')";
        echo "</script>";
        // header('Location: forms.php');

    } else {
        $ms = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>";
        echo "alert('ไม่สามารถเเก้ไขข้อมูลได้ {$ms}')";
        echo "</script>";

    }
    mysqli_close($conn);
}

if (isset($_POST["update_C2_tSubmit"])) {
    include_once "./connectdb.php";
    $sql = "UPDATE `services_requests`
           SET `tid` ='{$_POST["tid"]}', `sr_u_fname_th`='{$_POST["sr_u_fname_th"]}',
          `sr_u_fname_en`='{$_POST["sr_u_fname_en"]}', `sr_email`='{$_POST["sr_email"]}',
          `sr_tel`='{$_POST["sr_tel"]}', `dep_id`='{$_POST["dep_id"]}', `bid`='{$_POST["bid"]}',
          `mtype_id`='{$_POST["mtype_id"]}',`sr_item_user`='{$_POST["sr_item_user"]}',
          `sr_Important_data`='{$_POST["sr_Important_data"]}', `sr_password_machine`='{$_POST["sr_password_machine"]}',
          `cid`='{$_POST["cid"]}', `sr_c_orther`='{$_POST["sr_c_orther"]}',
           `sr_machine_number`='{$_POST["sr_machine_number"]}', `sr_user_position`='{$_POST["sr_user_position"]}',
           `status`='กำลังดำเนินการซ่อม',`day`='" . date("d") . "',`month`='" . date("m") . "',`year`='" . date("Y") . "'+543,
           `time`='" . date("H:i") . "'
           WHERE `services_requests`.`sr_id` = '{$_POST["sr_id"]}';";

    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('เเก้ไขข้อมูลสำเร็จ')";
        echo "</script>";
        // header('Location: formss.php');

    } else {
        $ms = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>";
        echo "alert('ไม่สามารถเเก้ไขข้อมูลได้ {$ms}')";
        echo "</script>";
        // header("Location: formss.php");
    }
    mysqli_close($conn);

}