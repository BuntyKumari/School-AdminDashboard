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
	<title>Student Record</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script src="js/index.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top" style="background-color: #02255e; padding: 10px 0px;">
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

<!-- main division starts -->
    <div class="container main_containerr">
      <h3 class="text-center text-primary">Search Student Record</h3><br>
        <form action="" method="post" class="form-horizontal">
        <div class="row">
            <div class="col-md-3">
                <select name="class" class="txtStyle">
                    <option>Select Class</option>

                    <?php
                    $sql = "Select * from class";
                    $data = mysqli_query($con, $sql);


                        while($result = mysqli_fetch_assoc($data))
                        {
                        ?>
                        <option><?php echo $result['ClassName']; ?> </option>
                        <?php
                        }

                    ?>
                </select>
            </div>
            <div class="col-md-3">
               <input type="text" name="rollNo" class="txtStyle" placeholder="Enter Roll No.">
            </div>
            <div class="col-md-3">
               <input type="text" name="stname" class="txtStyle" placeholder="Enter Student Name">
            </div>
            <div class="col-md-3">
               <input type="submit" name="submit" value="Search" class="btn btn-info btn-md btn-style">
            </div>
          </div>
        </form>
      </div>


     <table class="table table-striped" style="width:95%; margin: 0 auto;">
        <tr>
            <thead>
                <th>Roll No.</th>
                <th>Name </th>
                <th>Class </th>
                <th>Gender</th>
                <th>Dob</th>
                <th>Father's Name </th>
                <th>Mother's Name </th>
                <th>Address</th>
                <th>State</th>
                <th>PIN</th>
                <th>Country</th>
                <th>Phone </th>
                <th>Email</th>
                <th>DOA </th>
            </thead>
        </tr>



            <?php
            $class = $_POST['class'];
            $roll = $_POST['rollNo'];
            $name = $_POST['stname'];
        if($class=='1')
            {
                  $sql1 = "select * from class1";
                  $data1 = mysqli_query($con, $sql1);
                 
                  //$total = mysqli_num_rows($data1);
                 // echo $total;

                while($result1 = mysqli_fetch_assoc($data1))
                  {
                    ?>

                    <tr>
                        <td><?php echo $result1['id']; ?></td>
                        <td><?php echo $result1['name']; ?></td>
                        <td><?php echo $result1['class']; ?></td>
                        <td><?php echo $result1['gender']; ?></td>
                        <td><?php echo $result1['dob']; ?></td>
                        <td><?php echo $result1['fname']; ?></td>
                        <td><?php echo $result1['mname']; ?></td>
                        <td><?php echo $result1['address']; ?></td>
                        <td><?php echo $result1['state']; ?></td>
                        <td><?php echo $result1['pin']; ?></td>
                        <td><?php echo $result1['country']; ?></td>
                        <td><?php echo $result1['phone']; ?></td>
                        <td><?php echo $result1['email']; ?></td>
                        <td><?php echo $result1['doa']; ?></td>

                    </tr>
                    <?php

                  }
              }

            else if($class=='2')
            {
                  $sql2 = "select * from class2";
                  $data2 = mysqli_query($con, $sql2);
                 
                  //$total = mysqli_num_rows($data1);
                 // echo $total;

                  while($result2 = mysqli_fetch_assoc($data2))
                  {
                    ?>

                    <tr>
                        <td><?php echo $result2['id']; ?></td>
                        <td><?php echo $result2['name']; ?></td>
                        <td><?php echo $result2['class']; ?></td>
                        <td><?php echo $result2['gender']; ?></td>
                        <td><?php echo $result2['dob']; ?></td>
                        <td><?php echo $result2['fname']; ?></td>
                        <td><?php echo $result2['mname']; ?></td>
                        <td><?php echo $result2['address']; ?></td>
                        <td><?php echo $result2['state']; ?></td>
                        <td><?php echo $result2['pin']; ?></td>
                        <td><?php echo $result2['country']; ?></td>
                        <td><?php echo $result2['phone']; ?></td>
                        <td><?php echo $result2['email']; ?></td>
                        <td><?php echo $result2['doa']; ?></td>

                    </tr>
                    <?php

                  }
              }

            else if($class=='3')
            {
                  $sql3 = "select * from class3";
                  $data3 = mysqli_query($con, $sql3);
                 
                  //$total = mysqli_num_rows($data1);
                 // echo $total;

                  while($result3 = mysqli_fetch_assoc($data3))
                  {
                    ?>

                    <tr>
                        <td><?php echo $result3['id']; ?></td>
                        <td><?php echo $result3['name']; ?></td>
                        <td><?php echo $result3['class']; ?></td>
                        <td><?php echo $result3['gender']; ?></td>
                        <td><?php echo $result3['dob']; ?></td>
                        <td><?php echo $result3['fname']; ?></td>
                        <td><?php echo $result3['mname']; ?></td>
                        <td><?php echo $result3['address']; ?></td>
                        <td><?php echo $result3['state']; ?></td>
                        <td><?php echo $result3['pin']; ?></td>
                        <td><?php echo $result3['country']; ?></td>
                        <td><?php echo $result3['phone']; ?></td>
                        <td><?php echo $result3['email']; ?></td>
                        <td><?php echo $result3['doa']; ?></td>

                    </tr>
                    <?php

                  }
              }

        else if($class=='4')
            {
                  $sql4 = "select * from class4";
                  $data4 = mysqli_query($con, $sql4);
                 
                  //$total = mysqli_num_rows($data1);
                 // echo $total;

                  while($result4 = mysqli_fetch_assoc($data4))
                  {
                    ?>

                    <tr>
                        <td><?php echo $result4['id']; ?></td>
                        <td><?php echo $result4['name']; ?></td>
                        <td><?php echo $result4['class']; ?></td>
                        <td><?php echo $result4['gender']; ?></td>
                        <td><?php echo $result4['dob']; ?></td>
                        <td><?php echo $result4['fname']; ?></td>
                        <td><?php echo $result4['mname']; ?></td>
                        <td><?php echo $result4['address']; ?></td>
                        <td><?php echo $result4['state']; ?></td>
                        <td><?php echo $result4['pin']; ?></td>
                        <td><?php echo $result4['country']; ?></td>
                        <td><?php echo $result4['phone']; ?></td>
                        <td><?php echo $result4['email']; ?></td>
                        <td><?php echo $result4['doa']; ?></td>

                    </tr>
                    <?php

                  }
              }
           
                else if($class=='UKG')
            {
                  $sql5 = "select * from ukg";
                  $data5 = mysqli_query($con, $sql5);
                 
                 // $total = mysqli_num_rows($data5);
                  //echo $total;

                  while($result5 = mysqli_fetch_assoc($data5))
                  {
                    ?>

                    <tr>
                        <td><?php echo $result5['id']; ?></td>
                        <td><?php echo $result5['name']; ?></td>
                        <td><?php echo $result5['class']; ?></td>
                        <td><?php echo $result5['gender']; ?></td>
                        <td><?php echo $result5['dob']; ?></td>
                        <td><?php echo $result5['fname']; ?></td>
                        <td><?php echo $result5['mname']; ?></td>
                        <td><?php echo $result5['address']; ?></td>
                        <td><?php echo $result5['state']; ?></td>
                        <td><?php echo $result5['pin']; ?></td>
                        <td><?php echo $result5['country']; ?></td>
                        <td><?php echo $result5['phone']; ?></td>
                        <td><?php echo $result5['email']; ?></td>
                        <td><?php echo $result5['doa']; ?></td>

                    </tr>
                    <?php

                  }
              }
           else if($class=='LKG')
            {
                  $sql6 = "select * from lkg";
                  $data6 = mysqli_query($con, $sql6);
                 
                  //$total = mysqli_num_rows($data1);
                 // echo $total;

                  while($result6 = mysqli_fetch_assoc($data6))
                  {
                    ?>

                    <tr>
                        <td><?php echo $result6['id']; ?></td>
                        <td><?php echo $result6['name']; ?></td>
                        <td><?php echo $result6['class']; ?></td>
                        <td><?php echo $result6['gender']; ?></td>
                        <td><?php echo $result6['dob']; ?></td>
                        <td><?php echo $result6['fname']; ?></td>
                        <td><?php echo $result6['mname']; ?></td>
                        <td><?php echo $result6['address']; ?></td>
                        <td><?php echo $result6['state']; ?></td>
                        <td><?php echo $result6['pin']; ?></td>
                        <td><?php echo $result6['country']; ?></td>
                        <td><?php echo $result6['phone']; ?></td>
                        <td><?php echo $result6['email']; ?></td>
                        <td><?php echo $result6['doa']; ?></td>

                    </tr>
                    <?php

                  }
              }
         
                  else
                  {

                  }
             
               ?>

       </table>
     </div>
     </form>
 </div>
</div>
</body>
</html>