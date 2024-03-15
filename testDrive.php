<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Test Drive Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styesheet.css">


</head>
<body>
    <!-- Nav -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html">Peugeot</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="./index.php">OUR MODELS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">OFFER</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">TEST DRIVE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./contact.html">CONTACT US</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
  <!--  -->
    <img src="https://www.peugeot.co.th/content/dam/peugeot/thailand/offers/0923/peugeot-offers-09-23.jpg?imwidth=1920" alt="leo season" class="img-fluid" style="width: 100%;">
<!--  -->
    <div class="container-fluid p-5">
      <h1 class="mb-5" style="font-weight: bold;">REGISTER YOUR INTEREST</h1>
      <div class="card p-5 mb-5">

        <form action="#" method="post" class="row g-3 form">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="first_name" placeholder="ชื่อ">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="last_name" placeholder="นามสกุล">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">อีเมล</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="ok@gmail.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">เบอร์ติดต่อ</label>
            <input type="tel" class="form-control" id="exampleFormControlInput1" name="phone_number" placeholder="082-568-4892">
          </div>
          <label for="exampleDataList" class="form-label">สาขาที่สนใจ</label>
          <input class="form-control" list="datalistOptions" id="exampleDataList" name="interested_branch" placeholder="กรุณาเลือกสาขา">
          <datalist id="datalistOptions">
            <option name="สาขาสุขุมวิท" value="สาขาสุขุมวิท">
            <option name="สาขาเกษตรนวมินทร์" value="สาขาเกษตรนวมินทร์">
            <option name="สาขาเยาวราช" value="สาขาเยาวราช">
            <option name="สาขาสยามพารากอน" value="สาขาสยามพารากอน">
            <option name="สาขาธนบุรี-ราชพฤกษ์" value="สาขาธนบุรี-ราชพฤกษ์">
            <option name="สาขามีนบุรี" value="สาขามีนบุรี">
            <option name="สาขาอุบลราชธานี" value="สาขาอุบลราชธานี">
            <option name="สาขาพัทยา" value="สาขาพัทยา">
            <option name="สาขาภูเก็ต" value="สาขาภูเก็ต">
            <option name="สาขาหาดใหญ่" value="สาขาหาดใหญ่">
          </datalist>
          <label for="modelDataList" class="form-label">กรุณาเลือกรุ่นที่สนใจ</label>
          <input class="form-control" list="modellistOptions" id="modelDataList" name="interested_car_model" placeholder="กรุณาเลือกรุ่นที่ท่านสนใจ">
          <datalist id="modellistOptions">
            <option name="2008" value="Peugeot-2008 SUV">
            <option name="3008" value="Peugeot-3008 SUV">
            <option name="5008" value="Peugeot-5008 7-Seat SUV">
            <option name="e-2008" value="Peugeot e -2008">
            <option name="408" value="Peugeot-408">
            </datalist>
          <label for="testDataList" class="form-label">ท่านต้องการ Test Drive หรือไม่</label>
          <input class="form-control" list="testlistOptions" id="testDataList" name="test_drive_interest" placeholder="...">
          <datalist id="testlistOptions">
            <option name="yes" value="ต้องการ Test Drive">
            <option name="no" value="ไม่ต้องการ Test Drive">
            </datalist>
          <label for="timeDataList" class="form-label">ท่านมีแผนที่จะซื้อรถยนต์คันใหม่ภายในระยะเวลา</label>
          <input class="form-control" list="timelistOptions" id="timeDataList" name="buying_timeline" placeholder="ภายในเดือนนี้">
          <datalist id="timelistOptions">
            <option name="1" value="ภายในเดือนนี้">
            <option name="3" value="ระหว่าง 1-3 เดือนนี้">
            <option name=">3" value="มากกว่า 3 เดือนขึ้นไป">
            </datalist>

            <p>ภายใต้พระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562 ในบางกรณี เราจำเป็นจะต้องขอความยินยอมในการใช้ "ข้อมูลส่วนบุคคล" ของท่าน โปรดกดกล่องเพื่อให้ความยินยอมแก่เราในการพัฒนาประสบการณ์ตลอดจนตอบสนองสิ่งที่ท่านต้องการในอนาคตแก่ท่าน</p>
            <p><input type="checkbox" name="agreeCheckbox" id="agreeCheckbox">  ข้าพเจ้ายินยอมให้ บริษัท เบลฟอร์ต ออโตโมบิล (ประเทศไทย) จำกัด ("บริษัทฯ") จัดเก็บรวบรวม และ/หรือใช้ข้อมูลส่วนบุคคลของข้าพเจ้าที่มีอยู่กับบริษัทฯ เพื่อประโยชน์ในการวิเคราะห์วิจัยทางการตลาด และการประชาสัมพันธ์การขาย รวมถึงเพื่อปรับปรุงและพัฒนาผลิตภัณฑ์และการบริการ ทั้งนี้ เพื่อประโยชน์ในการต่างๆ ข้างตัน บริษัทฯ อาจเปิดเผยข้อมูลส่วนบุคคลดังกล่าวให้แก่บริษัทในเครือตัวแทนหรือผู้จัดจำหน่าย รวมถึงผู้รับข้อมูลซึ่งเป็นซัพพลายเออร์ของบริษัทฯ ในต่างประเทศได้ตามความเหมาะสมและจำเป็น ภายใต้มาตรฐานการคุ้มครองข้อมูลส่วนบุคคลที่ปลอดภัยและสอดคล้องกับกฎหมายที่บังคับใช้ในปัจจุบัน และ/หรือที่จะปรับปรุงต่อไปในอนาคต (หากมี)</p>

            <button class="btn btn-primary" name="reg_user" type="submit">ลงทะเบียน</button>
        </form>    
    </div>
    </div>

    



  <!-- FOOTER -->
    <div class="container-fluid">
        <div class="row">
            <a href="./testDrive.html" class="col-md-4 buttuncss" > BOOK A TEST DRIVE</a >
            <a href="#" class="col-md-4 buttuncss">FAQ</a>
            <a href="./contact.html" class="col-md-4 buttuncss">CONTACT</a>
        </div>
    </div>

    <div style="text-align: center; background-color: black; padding: 50px;">
        <img src="https://img.remediosdigitales.com/fe2b8e/peugeot-nuevo-logo-2021_/450_1000.jpg" alt="logo">
        <p style="color: gray;">Privacy Policy | Cookie Preferences</p>
    </div>
    
    <?php
  // ตรวจสอบว่ามีข้อมูลที่ถูกส่งมาหรือไม่
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // รับข้อมูลจากฟอร์มและเก็บไว้ในตัวแปร
      $first_name = $_POST["first_name"];
      $last_name = $_POST["last_name"];
      $email = $_POST["email"];
      $phone_number	 = $_POST["phone_number"];
      $interested_branch = $_POST["interested_branch"];
      $interested_car_model = $_POST["interested_car_model"];
      $test_drive_interest = $_POST["test_drive_interest"];
      $buying_timeline = $_POST["buying_timeline"];
      // ทำสิ่งที่ต้องการกับข้อมูลที่ได้รับ
  }
  ?>
    <?php
  // ตรวจสอบว่ามีข้อมูลที่ถูกส่งมาหรือไม่
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
      // รับข้อมูลจากฟอร์มและเก็บไว้ในตัวแปร
      $first_name = $_GET["first_name"];
      $last_name = $_GET["last_name"];
      $email = $_GET["email"];
      $phone_number	 = $_GET["phone_number"];
      $interested_branch = $_GET["interested_branch"];
      $interested_car_model = $_GET["interested_car_model"];
      $test_drive_interest = $_GET["test_drive_interest"];
      $buying_timeline = $_GET["buying_timeline"];
      // ทำสิ่งที่ต้องการกับข้อมูลที่ได้รับ
  }
  ?>





    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
    </script>
</body>
</html>