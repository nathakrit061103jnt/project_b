<?php

if (isset($_POST["inser_C1_tSubmit"])) {
    include_once "./connect_db.php";
    $sql = "INSERT INTO `services_requests` (`sr_id`, `tid`, `sr_u_fname_th`, `sr_u_fname_en`,
          `sr_email`, `sr_tel`, `dep_id`, `bid`, `mtype_id`, `sr_item_user`, `sr_Important_data`,
          `sr_password_machine`, `cid`, `sr_c_orther`, `sr_id_card_number`, `ut_id`, `sr_machine_number`,
          `sr_user_position`, `sr_std_id`)
          VALUES (NULL,'{$_POST["tid"]}', '{$_POST["sr_u_fname_th"]}', '{$_POST["sr_u_fname_en"]}', '{$_POST["sr_email"]}',
          '{$_POST["sr_tel"]}', '{$_POST["dep_id"]}', '{$_POST["bid"]}', '{$_POST["mtype_id"]}','{$_POST["sr_item_user"]}',
          '{$_POST["sr_Important_data"]}', '{$_POST["sr_password_machine"]}', '{$_POST["cid"]}', '{$_POST["sr_c_orther"]}',
          '{$_POST["sr_id_card_number"]}', '1', NULL, NULL,'{$_POST["sr_std_id"]}');";

    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('บันทึกข้อมูลสำเร็จ')";
        echo "</script>";
        // header('Location: forms.php');

    } else {
        $ms = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>";
        echo "alert('ไม่สามารถบันทึกข้อมูลได้ {$ms}')";
        echo "</script>";

    }
    mysqli_close($conn);
}

if (isset($_POST["inser_C2_tSubmit"])) {
    include_once "./connect_db.php";
    $sql = "INSERT INTO `services_requests` (`sr_id`, `tid`, `sr_u_fname_th`, `sr_u_fname_en`,
          `sr_email`, `sr_tel`, `dep_id`, `bid`, `mtype_id`, `sr_item_user`, `sr_Important_data`,
          `sr_password_machine`, `cid`, `sr_c_orther`, `sr_id_card_number`, `ut_id`, `sr_machine_number`,
          `sr_user_position`, `sr_std_id`)
          VALUES (NULL,'{$_POST["tid"]}', '{$_POST["sr_u_fname_th"]}', '{$_POST["sr_u_fname_en"]}', '{$_POST["sr_email"]}',
          '{$_POST["sr_tel"]}', '{$_POST["dep_id"]}', '{$_POST["bid"]}', '{$_POST["mtype_id"]}','{$_POST["sr_item_user"]}',
          '{$_POST["sr_Important_data"]}', '{$_POST["sr_password_machine"]}', '{$_POST["cid"]}', '{$_POST["sr_c_orther"]}',
          '0', '2', '{$_POST["sr_machine_number"]}', '{$_POST["sr_user_position"]}','0');";

    if (mysqli_query($conn, $sql)) {
        echo "<script>";
        echo "alert('บันทึกข้อมูลสำเร็จ')";
        echo "</script>";
        // header('Location: formss.php');

    } else {
        $ms = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo "<script>";
        echo "alert('ไม่สามารถบันทึกข้อมูลได้ {$ms}')";
        echo "</script>";
        // header("Location: formss.php");
    }
    mysqli_close($conn);

}