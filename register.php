<?php
session_start();
 include 'code.php';
 
 
if (isset($_POST['sub'])) {    
  $sql = "SELECT phone FROM users WHERE  = '$phone'";
       $q = $conn->prepare($sql);
       $q->execute();
       $data = $q->fetch();
       $errors = [];
       echo 'lol';
 if ($data) {
  
      $errors[] = "<h3 class='center container text-warning'>هذا رقم موجود بالفعل</h3>";
        echo $errors;
        
    }
    
      
  }
  if (empty($errors)) {
          echo "تم الادخال";
            $sql = "INSERT INTO users(name, sname, phone, password, email) VALUES ('$name', '$sname', '$phone' , '$pass', '$email')";
                $conn->exec($sql);
               
               
             
                  
              }else {
                echo 'في غلط يا كبير';
              } 
?>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>al3bidatwebsite</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  
  <link rel="stylesheet" href="cdn_modules/bootstrap@5.2.3/css/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="container">
 
  
 <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary p-2 rounded ">
      <a class="navbar-brand p-2" href="">رابطة شباب </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
  </div>
  

 </div>
  <div class="center container font-wight-bold">


      <span>لتسحيل الدخول الرجاء ادخال المعلومات المطلوبة ادناه</span>
    </div>
  
 <div class="login">
   <form method="post" id="login" action="index.php">
     <input required placeholder="الاسم" type="text" name="name" id="">
     <input placeholder="لقب" type="text" name="Sname" id="">
     <input required placeholder="رقم الهاتف" type="text" name="phone" id="">
     <input placeholder="البريد الاكتروني (اختياري)" type="email" name="email" id="">
     <input required placeholder="كلمة سر" type="password" name="pass" id="">
     <br>
     <input class="btn btn-primary" name="submit" type="submit" value="حفظ">
   </form>
 </div>

<footer>
 <div class="footer">
   <div class="wats">
     <p ><a class="link" href="">مجموعة الواتس(للطوارء فقط)</a></p>
     <p class="wats"><a class="link" href="">قروب التعارف</a></p>
     
   </div>
 </div>
 </footer>
 <script src="cdn_modules/bootstrap@5.2.3/js/bootstrap.min.js"></script>
  <script src="main.js"></script>
</body>
</html>