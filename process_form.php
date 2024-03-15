<?php
// เช็คว่ามีการส่งข้อมูลมาโดย POST หรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากแบบฟอร์มและเก็บไว้ในตัวแปร
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $interested_branch = $_POST["interested_branch"];
    $interested_car_model = $_POST["interested_car_model"];
    $test_drive_interest = $_POST["test_drive_interest"];
    $buying_timeline = $_POST["buying_timeline"];
    // ทำสิ่งที่ต้องการกับข้อมูลที่ได้รับ
    // เช่น เพิ่มข้อมูลลงในฐานข้อมูล MySQL
    // เป็นต้น
}
?>
