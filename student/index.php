<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: /online-attendance-management-system-1.0/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/online-attendance-management-system-1.0/css/main.css">

</head>
<!-- head ended -->

<!-- body started -->
<body>

<!-- Menus started-->
<header>

  <h1>Online Attendance Management System 1.0</h1>
  <div class="navbar">
  <a href="index.php">Home</a>
  <a href="students.php">Students</a>
  <a href="report.php">My Report</a>
  <a href="account.php">My Account</a>
  <a href="/online-attendance-management-system-1.0/logout.php">Logout</a>

</div>

</header>
<!-- Menus ended -->

<center>

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="row">
    <div class="content">
      <p>Be attentive and be regular :)</p>
    <img src="/online-attendance-management-system-1.0/img/tcr.png" height="200px" width="300px" />

  </div>

</div>
<!-- Contents, Tables, Forms, Images ended -->

</center>

</body>
<!-- Body ended  -->

</html>
