
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

<!-- main division starts -->
    <div class="container main_container">
    <form action="" method="post">
    	<div class="table-responsive">
        <h4 class="text-center"><b style="color: green;">Student Details</b> </h4>
        	<table class="table table-borderless" style="border-color: #fff;">
            	
            	<tr>
                	<td> <label> Class </label></td>
                    <?php
					$sql = "select * from class ";
					$data = mysqli_query($con, $sql);				
					?>
                    <td><select name="class" id="class" class="txtStyle">
                    	<option> Select class </option>
                		<?php
                    	while($result = mysqli_fetch_assoc($data))
						{
					      ?>
                          <option><?php echo $result['ClassName']; ?> </option>
						<?php
						}
						?>
                        
                        
                        
                    </select></td>
                </tr>
            
                <tr>
                	<td><label> Student Name </label> </td>
                    <td><input type="text" name="stName" id="rollNo" class="txtStyle" placeholder="Enter Student Name"/></td>
                </tr>
                <tr>
                	<td><label> Gender</label> </td>
                    <td><input type="radio" name="gender" value="male"> Male &nbsp; &nbsp;
                    <input type="radio" name="gender" value="female"> Female
                    </td>
                </tr>
                <tr>
                	<td><label> Date of Birth</label> </td>
                    <td><input type="date" name="dob" id="rollNo" class="txtStyle"/></td>
                </tr>
                <tr>
                	<td> <label> Father's Name </label></td>
                    <td><input type="text" name="fname" id="fname" class="txtStyle" placeholder="Enter Father's Name" /></td>
                </tr>
                <tr>
                	<td><label> Mother's Name </label> </td>
                    <td><input type="text" name="mname" id="mname" class="txtStyle" placeholder="Enter Mother's Name" /></td>
                </tr>
                <tr>
                	<td> <label> Address </label> </td>
                    <td>
                    	<textarea name="address" placeholder="Enter Address" class="txtAreaStyle">
                    		
                    	</textarea>
                    </td>
                </tr>
                <tr>
                	<td><label> State </label> </td>
                    <td><select name="state" class="txtStyle">
                    	<option>Select State</option>
		                <option>Andhra Pradesh</option>
						<option>Arunachal Pradesh</option>
						<option>Assam</option>
						<option>Bihar</option>
						<option>Chhattisgarh</option>
						<option>Goa</option>
						<option>Gujarat</option>
						<option>Haryana</option>
						<option>Himachal Pradesh</option>
						<option>Jammu & Kashmir</option>
						<option>Jharkhand</option>
						<option>Karnataka</option>
						<option>Kerala</option>
						<option>Madhya Pradesh</option>
						<option>Maharashtra</option>
						<option>Manipur</option>
						<option>Meghalaya</option>
						<option>Mizoram</option>
						<option>Nagaland</option>
						<option>Odisha</option>
						<option>Punjab</option>
						<option>Rajasthan</option>
						<option>Sikkim</option>
						<option>Tamil Nadu</option>
						<option>Telangana</option>
						<option>Tripura</option>
						<option>Uttarakhand</option>
						<option>Uttar Pradesh</option>
						<option>West Bengal</option>

                    </select></td>
                </tr>
                <tr>
                	<td><label>PIN</label></td>
                	<td><input type="number" name="pin" placeholder="Enter PIN" class="txtStyle"> </td>
                </tr>
                <tr>
                	<td><label> Country </label> </td>
                    <td><input type="text" name="country" id="country" class="txtStyle" placeholder="Enter Country Name" /></td>
                </tr>
                <tr>
                	<td><label> Phone No. </label> </td>
                    <td><input type="phone" maxlength="10" name="phoneNo" id="phoneNo" class="txtStyle" placeholder="Enter Phone no." /></td>
                </tr>
                <tr>
                	<td><label> Email (Optional) </label> </td>
                    <td><input type="email" name="email" id="email" class="txtStyle" placeholder="Enter Email" /></td>
                </tr>
                <tr>
                	<td></td>
                	<td><input type="submit" name="submit" value="Save Record" class="btn btn-success btn-lg btnStyle" > &nbsp; <input type="reset" name="reset" value="Reset" class="btn btn-danger btn-lg btnStyle "></td>
                </tr>
  </table>

             <?php

             if(isset($_POST['submit']))
             {
             	 $class = $_POST['class'];
				
				 $name = $_POST['stName'];
				 $gender = $_POST['gender'];
				 $dob = $_POST['dob'];
				 $fname = $_POST['fname'];
				 $mname = $_POST['mname'];
				 $address = $_POST['address'];
				 $country = $_POST['country'];
				 $state = $_POST['state'];
				 $pin = $_POST['pin'];
				 $phone = $_POST['phoneNo'];
				 $email = $_POST['email'];
				 $today = date('d-m-Y');

				if($name!="" && $fname!="" &&$email!="" && $phone !="")
				{

					if($class=='1')
					{

						$sql ="INSERT INTO class1 VALUES ('$class', '', '$name', '$gender', '$dob', '$fname', '$mname', '$address', '$state', '$pin', '$country', '$phone', '$email', '$today')";
						$data = mysqli_query($con, $sql);
					}
					else if($class=='2')
					{

						$sql1 ="INSERT INTO class2 VALUES ('$class', '', '$name', '$gender', '$dob', '$fname', '$mname', '$address', '$state', '$pin', '$country', '$phone', '$email', '$today')";
						$data1 = mysqli_query($con, $sql1);
					}
					else if($class=='3')
					{

						$sql2 ="INSERT INTO class3 VALUES ('$class', '', '$name', '$gender', '$dob', '$fname', '$mname', '$address', '$state', '$pin', '$country', '$phone', '$email', '$today')";
						$data2 = mysqli_query($con, $sql2);
					}
					else if($class=='4')
					{

						$sql5 ="INSERT INTO class4 VALUES ('$class', '', '$name', '$gender', '$dob', '$fname', '$mname', '$address', '$state', '$pin', '$country', '$phone', '$email', '$today')";
						$data5 = mysqli_query($con, $sql5);
					}
					else if($class=='ukg')
					{

						$sql3 ="INSERT INTO ukg VALUES ('$class', '', '$name', '$gender', '$dob', '$fname', '$mname', '$address', '$state', '$pin', '$country', '$phone', '$email', '$today')";
						$data3 = mysqli_query($con, $sql3);
					}
					else 
					{

						$sql4 ="INSERT INTO lkg VALUES ('$class', '', '$name', '$gender', '$dob', '$fname', '$mname', '$address', '$state', '$pin', '$country', '$phone', '$email', '$today')";
						$data4 = mysqli_query($con, $sql4);
					}

					
					if($data)
					{
						echo "<h5 class='text-center text-success'>Student details added.</h5>";
					}
					else
					{
						echo "<h5 class='text-center text-danger'>Failed to save.</h5>";
					}

				}

             }

             ?>
                		
          
        	
        </div>
    </form>
</div>
</body>
</html>
        