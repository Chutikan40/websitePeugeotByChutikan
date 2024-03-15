
<?php
// ข้อมูลสำหรับการเชื่อมต่อกับฐานข้อมูล MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "member_db"; // ชื่อฐานข้อมูล

// ทำการเชื่อมต่อกับ MySQL
$conn = new mysqli($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
} else {
    echo "การเชื่อมต่อสำเร็จแล้ว";
}

// รับข้อมูลจากแบบฟอร์ม
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$interested_branch = $_POST["interested_branch"];
$interested_car_model = $_POST["interested_car_model"];
$test_drive_interest = $_POST["test_drive_interest"];
$buying_timeline = $_POST["buying_timeline"];

// เตรียมคำสั่ง SQL INSERT
$sql = "INSERT INTO testdrive (first_name, last_name, email, phone_number, interested_branch, interested_car_model, test_drive_interest, buying_timeline) 
VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$interested_branch', '$interested_car_model', '$test_drive_interest', '$buying_timeline')";

// ทำการเพิ่มข้อมูลลงในตาราง
if ($conn->query($sql) === TRUE) {
    echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// ปิดการเชื่อมต่อ
$conn->close();
?>
