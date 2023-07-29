
<?php
  session_start();

  $con=mysqli_connect("localhost","root","","tool") or die("Server not connected...");

  if(isset($_SESSION['ausername']))
  {
    $username=$_SESSION['ausername'];
    $sel1="select * from admin where username='$username'";

    $res1=mysqli_query($con,$sel1);
  }

  



  if (isset($_POST['btn']))
  {
    
    $fnm=$_POST['fname'];
    $mnm=$_POST['mname'];
    $lnm=$_POST['lname'];
    $usn=$_POST['usn'];
    $gen=$_POST['gender'];
    $add=$_POST['address'];
    $dno=$_POST['id'];
    $dname=$_POST['dept_name'];
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $mob=$_POST['num'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $sem=$_POST['sem'];
    $unm=$_POST['username'];
    $pwd=$_POST['password'];
    

    $ins="insert into student(fname,mname,lname,usn,gender,address,dept_id,dept_name,pid,pname,mobileno,dob,email,sem,username,password)values('$fnm','$mnm','$lnm','$usn','$gen','$add','$dno','$dname','$pid','$pname','$mob','$dob','$email','$sem','$unm','$pwd')";


    if(mysqli_query($con,$ins))
    {
      header("location:teacherdashboard.php");
    }
    else
    {
      echo mysqli_error();
    }
  }

  if(isset($_POST['logout']))
  {
    unset($_SESSION['username']);
    header("location:landing.php");
  }
?>





<!--HTML file-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="addstudent.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
        <!--Background page start-->
        <input type="checkbox" id="check">
        <!--Header area start-->
       <header>
        <label for="check">
            <i class="fa fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Proctor's <span>Tool</span></h3>
        </div>
        <div class="right_area">
            <a href="landing.php" class="logout_btn">Logout</a>
        </div>
       </header>
       
       <!--Sidebar start-->
       <div class="sidebar">
        <centre>
            <img src="Images/adb.png" class="profile_image" alt="">
        </centre>
        <a href="teacherdashboard.php"><i class="fa fa-user" ></i><span>Dashboard</span></a>
        <a href="addstudent.php"><i class="fa fa-plus-square"></i><span>Student Details</span></a>
       <!-- <a href="#"><i class="fa fa-list"></i><span>Search Proctor</span></a>-->
    <a href="addacademics.php"><i class="fa fa-book" ></i><span>Academics</span></a>
        <a href="addattendance.php"><i class="fa fa-calendar-check-o" ></i><span>Attendance</span></a>
        <!--<a href="#"><i class="fa fa-thumb-tack" ></i><span>Extra Cirruculam</span></a>-->
        <a href="searchstudent.php"><i class="fa fa-search" ></i><span>View Student</span></a>
        <a href="retrieveacademics.php"><i class="fa fa-search" ></i><span>View Academics</span></a>
        <a href="retrieveattendance.php"><i class="fa fa-search" ></i><span>View Attendance</span></a>

    
    </div>

    <div class="content">
        
    </div>
    <!--Background Page ends-->

    <!--Transparent Student Registration Form-->
<!--    <h2>Add Procter's Details</h2>-->

<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()"  >
    <table align="center" cellpadding="10" style="width:40%;height:79%;">
        <th>Add Student Details</th>
        <!--Title-->
       <!-- <tr>
            <td>Title :</td>
            <td>
            <select id="name" name="title">
               <option>Select Option</option>
             <option>Mr</option>
                <option>Ms</option>
                
            </select>
            </td>
          
            
        </tr>-->

      
        <!--FName--> 
       <tr>
            <td>First Name :</td>
            <td><input type="text" id="name" name="fname" placeholder="Enter First Name" required></td>

        </tr>

         
        <!--MName--> 
       <tr>
            <td>Middle  Name :</td>
            <td><input type="text" id="name" name="mname" placeholder="Enter Middle name" required></td>

        </tr>

         
        <!--LName--> 
       <tr>
            <td>Last Name :</td>
            <td><input type="text" id="name" name="lname" placeholder="Enter Last name" required></td>

        </tr>

          
        <!--USN--> 
       <tr>
            <td>USN:</td>
            <td><input type="text" id="name" name="usn" placeholder="Enter USN" required></td>

        </tr>

        <!--Gender-->
        <tr>
            <td>Gender :</td>
            <td>
            <select id="name" name="gender">
               <option>Select Option</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
                
            </select>
            </td>
          <!--  <td><input type="radio" name="gender" >Male <input type="radio" name="gender">Female <input type="radio" name="gender">Others</td>
-->
        </tr>

          
        <!--Address--> 
       <tr>
            <td>Address :</td>
            <td><input type="text" id="name" name="address" placeholder="Enter address" required></td>

        </tr>
        <!--Dept ID NO-->
        <tr>
            <td>Department ID :</td>
            <td>
            <select id="name" name="id">
               <option>Select Option</option>
                <option>101</option>
                <option>102</option>
                <option>103</option>
                <option>104</option>
                <option>105</option>
                <option>106</option>
                <option>None</option>
                
                
            </select>
            </td>
         </tr>
       

         
     <!--Dept_name-->
     <tr>
            <td>Department Name :</td>
            <td>
            <select id="name" name="dept_name">
               <option>Select Option</option>
                <option>Infromation Science and Eng</option>
                <option>Civil Engineering</option>
                <option>Mechanical Engineering</option>
                <option>Computer Science and Eng</option>
                <option>Artificial Intelligence</option>
                <option>Electrical Engineering</option>
                <option>None</option>
                
                
            </select>
            </td>
     </tr>
      <!--Proctor ID--> 
      <tr>
            <td>Proctor ID :</td>
            <td><input type="text" id="name" name="pid" placeholder="Enter Proctor ID" required></td>

        </tr>
     
        <!--Proctor Name--> 
        <tr>
            <td>Proctor Name :</td>
            <td><input type="text" id="name" name="pname" placeholder="Enter Proctor Name" required></td>

        </tr>

      
      
      
      
        <!-- <tr>
            <td>Department ID :</td>
            <td><input type="text" id="name" name="id" placeholder="Enter Department id" required></td>
            
        </tr>-->

     <!--Mobile-->
     <tr>
        <td>Mobile Number :</td>
        <td><input type="text" id="name" name="num" placeholder="Enter mobile number" required></td>
        
    </tr>
   
        <!--Dob-->
        <tr>
        <td>Date of Birth :</td>
        <td><input type="date" id="name" name="dob" required></td>
        
    </tr>
    
    <!--Email-->
    <tr>
        <td>E-mail :</td>
        <td><input type="email" id="name" name="email" placeholder="Enter E-mail address" required></td>
        
    </tr>
 

        <!--Semester-->
      
        <tr>
            <td>Semester :</td>
            <td>
            <select id="name" name="sem">
               <option>Select Option</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                
                
            </select>
            </td>
     </tr>
      
      
        <!--  <tr>
        <td>Semester :</td>
        <td><input type="number" id="name" name="sem" placeholder="Enter Semester" required></td>
        
    </tr>-->
    <!--UserName-->
    <tr>
        <td>Username :</td>
        <td><input type="text" id="name" name="username" placeholder="Enter Username" required></td>
        
    </tr>

    <!--Password-->
    <tr>
        <td>Password :</td>
        <td><input type="password" id="name" name="password" placeholder="Create Password" required></td>
        
    </tr>

    <!--Re Enter Password-->
    <tr>
        <td>Re-Enter Password :</td>
        <td><input type="password" id="name" name="rspd" placeholder="Re-Enter Password" required></td>
        
    </tr>



    </table>
        <center>
        <button type="submit" class="btn btn-success" name="btn" style="opacity:1;color:#ffffff;background:#0437F2;position:absolute;top:750px;right:560px;width:100px;height:30px;font-size:16px;font-weight:600;">REGISTER</button>
</center>

</form>
    </body>
    </html>