<?php
include('connection.php');
error_reporting(0);
session_start();
if($_SESSION['username']==false)

{
    header('location:Login.php');
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Student Information</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script src="js/index.js"></script>

    </head>
    <body>
        <!----Navbar ------->
      
<nav class="navbar navbar-inverse navbar-static-top" style="background-color: #02255e; padding: 10px 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span><i class="fa fa-dashboard" style="font-size: 20px;"></i> </span> &nbsp;Dashboard</a>
    </div>
    <ul class="nav navbar-nav">
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="" style="color: white;font-size: 16px;">Welcome : <?php echo $_SESSION['username']; ?></a>
      <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

        <!--- LeftSideBar------->
    
        <div id="sidebar">
            <div class="toggle-btn" onclick="toggleSidebar()">
                <span></span>
                <span></span>
                <span></span>
            </div> 
            <ul ><li><a href="#"><img src="images/profile.png" class="img-circle" style="height: 40px;width:40px;"></a></li></ul>
            <ul>
                 <li><a href="index.php"><span><i class="fa fa-group" style="font-size: 20px;"></i></span> &nbsp;Classes <span><i class="fa fa-caret-right" style="margin-left: 100px;"></i></span></a>
                                   </li>
                <li><a href="NewClass.php"><span class="fa fa-plus-circle"> </span> New Class </a></li>
                <li><a href="#"><span><i class="fa fa-user" style="font-size: 20px;"></i></span> &nbsp;Student <span><i class="fa fa-caret-right" style="margin-left: 100px;"></i></span></a>
                    <ul>
                        <li><a href="studentrecord.php"><span class="fa fa-plus-circle"> </span> Add Student </a></li>
                        <li><a href="StudentSearch.php"><span class="fa fa-list"></span> Search Student </a></li>
                    </ul>
                </li>
            </ul> 
        </div>
    </body>
</html>
