<?php
include('connection.php');
error_reporting(0);
session_start();
if($_SESSION['username']==false)

{
    header('location:Login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

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
                 <li><a href="#"><span><i class="fa fa-group" style="font-size: 20px;"></i></span> &nbsp;Classes <span><i class="fa fa-caret-right" style="margin-left: 100px;"></i></span></a>
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
  
        <script>
       
</script>

<div class="container-fluid" >

    <div class="row row_style">
            <h3 class="text-center text-danger">Class Details</h3>
             <form class="form-horizontal" method="post" action="">
             <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 10px 100px;">
                   
                        <label for="className">Class</label>
                        <div class="form-group input-group col-md-12">
                            <input type="text" name="className" class="txtStyle" placeholder="Enter the Class Name..">
                        </div>


                        <label for="description">Description</label>
                        <div class="form-group input-group col-md-12">
                            <input type="text" name="description" class="txtStyle" placeholder="Enter the Description..">
                        </div>
                        <div class="form-group input-group col-md-12">
                        <input type="submit" name="submit" value="Save" class="btn btn-primary btn-style"></div>

                        <?php
                        include('connection.php');
                        error_reporting(0);  // for removing unwanted errors


                        //declaring variable for assigning the text box values 
                        //or whatever value sent through the form, will be recieved by these two variables.
                        $class = $_POST['className'];
                        $desc = $_POST['description'];  

                        // sql insert statemnt

                            // first value is autoincreemnt from thetable so no need to insert here it will blank
                        // checking if button is cliked or not, then the value will be inserted other wise not

                        if(isset($_POST['submit']))
                        {
                            


                                    // checking if the query is successfully executed
                                    if($result)
                                    {
                                        echo "<p class='text-center text-success' >Class details added</p>";
                                    }
                                    else
                                    {
                                        echo "<p class='text-center text-danger'>Not added</p>";
                                    }

                        }

                        ?>

             </form>


            </div>
    </div>
    </div>
    </body>
</html>
