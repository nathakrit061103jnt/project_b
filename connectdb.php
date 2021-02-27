<meta charset="utf-8">
<?php
$host = "localhost";
$user = "u333428387_root";
$pwd = "Taey0995121214";
$db = "u333428387_ccservice";

$conn = mysqli_connect($host, $user, $pwd) or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysqli_query($conn, "use $db") or die("เลือก db ไม่ได้");

mysqli_query($conn, "set names utf8");

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ccservice";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// mysqli_set_charset($conn, "utf8");

?>