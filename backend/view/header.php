<?php
# test connected  
if (!true) {
    
   header('location: ../login.html');
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/logo.png" />
    <title>Cabinie </title>
    
      <!--  Boostrap -->
     <link rel="stylesheet" href="../css/bootstrap.min.css"> 
   <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
    rel="stylesheet"
  />  
        <!--   style  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
      <script src="../js/jquery.min.js" charset="utf-8"></script>  
  
      <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Coda+Caption:wght@800&display=swap" rel="stylesheet">
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Mini <span>Project</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar" role="link" href="profiel.php"> 
         <a href="profiel.php">
            <img src="../images/logo.png" class="mobile_profile_image" alt="">
         </a>
            
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="dashboard.php"><i class="fas  fa-desktop"></i><span>Dashboard</span></a>
        <a href="consultation.php">  <i class="far fa-folder-open"></i> <span>Consultation</span></a>  
        <a href="rendez.php"><i class="fas fa-calendar-check"></i> <span>Rendez-vous</span></a>
        <a href="reception.php"><i class="fas fa-user-plus"></i></i><span>Reception</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info"   > 
        <a href="profiel.php">
          <img src="../images/logo.png" class="profile_image" alt="">
         </a>
        <h4>Admin </h4> 
      </div>
        <a href="dashboard.php" id="dash"><i class="fas   fa-desktop"></i><span>Dashboard</span></a>
        <a href="consultation.php" id="consl">  <i class="far  fa-folder-open"></i> <span>Consultation</span></a>  
        <a href="rendez.php" id="rende"><i class="fas fa-calendar-check"></i> <span>Rendez-vous</span></a>
        <a href="reception.php" id="recep"><i class="fas fa-user-plus"></i></i><span>Reception</span></a>
        <a href="#" id="r"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->




 
 
