<!DOCTYPE html>
<html>
<title>BOT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">

  <a href="<?php echo base_url("index.php/seller_ctrl/index");?>">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right">Logout</span>
  </a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:180px;" id="mySidebar"><br>
  <div class="w3-container">
    <!-- <div class="w3-bar">
    <span class="w3-center"><font color="white">Admin</font></span>
  </div> -->
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-bar">
      <h4><span class="w3-right"><strong>Admin</strong></span></h4>
      <!-- <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a> -->
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="<?php echo base_url("index.php/seller_ctrl/dash") ?>" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Home</a>
    <a href="<?php echo base_url("index.php/seller_ctrl/insert") ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-square fa-fw"></i>  Insert</a>
    <a href="<?php echo base_url("index.php/seller_ctrl/search") ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-edit fa-fw"></i>  Update</a>
    <a href="<?php echo base_url("index.php/seller_ctrl/delete") ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-remove fa-fw"></i>  Delete</a>
    <a href="<?php echo base_url("index.php/seller_ctrl/view") ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  View</a>
    <!-- <a href="<?php echo base_url("index.php/seller_ctrl/convert") ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  excel</a> -->
    <a href="<?php echo base_url("Classes/excel.php") ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  excel</a>
    <a href="<?php echo base_url("index.php/seller_ctrl/excel_converter") ?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  excel converters</a>
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a> -->
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a> -->
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->


  <!-- Footer -->
  <div class="w3-container w3-padding-6 w3-light-grey">
    <h4>Bot Platform</h4>
    <!-- <p>Powered by  <a href="#" target="_blank">Advocacy</a></p> -->
  </div>

  <!-- End page content -->


<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
