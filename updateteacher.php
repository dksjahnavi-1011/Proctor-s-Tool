<?php
session_start();
error_reporting(0);


$host='localhost';
$user='root';
$password="";
$db="tool";

$data=mysqli_connect($host,$user,$password,$db);
if ($_GET['proctor_id'])
{
   $tid=$_GET['proctor_id'];
    $sql="select * from teacher where proctorid='$tid' ";
    $result=mysqli_query($data,$sql);
    $info=$result->fetch_assoc();
}

if (isset($_POST['btn']))
{
    $ttl=$_POST['title'];
    $nm=$_POST['name'];
    $gen=$_POST['gender'];
   
     $id=$_POST['id'];
     $email=$_POST['email'];
     $dob=$_POST['dob'];
     $mob=$_POST['num'];
   
     $dno=$_POST['dept_id'];
     $dname=$_POST['dept_name'];
     $usn=$_POST['username'];
     $pwd=$_POST['pword'];

    $sql2="UPDATE teacher SET title='$ttl', proctorname='$nm', gender='$gen', proctorid='$id',email='$email',dob='$dob',mobileno='$mob', dept_id='$dno',dept_name='$dname',username='$usn',password='$pwd' where proctorid='$idno'  ";
    $result2=mysqli_query($data,$sql2);

    if ($result2) {
        header("location:retrieveteacher.php");
    }
}

?>

<!--HTML file-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Proctor Details</title>
    <link rel="stylesheet" href="updateteacher.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>

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
        <a href="admindashboard.php"><i class="fa fa-user" ></i><span>Dashboard</span></a>
        <a href="addteacher.php"><i class="fa fa-plus-square"></i><span>Add Proctor</span></a>
        <a href="retrieveteacher.php"><i class="fa fa-search" ></i><span>View Proctor</span></a>
        <a href="adminstudent.php"><i class="fa fa-search" ></i><span>View Student</span></a>
    
    
    </div>

    <div class="content">
        
    </div>

    <div class="content1">
        <h1>Update Proctor Data </h1>

        <form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()" action="updateteacher.php" >
    <table align="center" cellpadding="10" >
       <!-- <th>Update Proctor Details</th>-->
        <!--Title-->
        <tr>
            <td>Title :</td>
            <td>
            <select id="name" name="title"  value="<?php echo "{$info['title']}" ?>">
               <option>Select Option</option>
                <option>Dr</option>
                <option>Mr</option>
                <option>Ms</option>
                <option>Mrs</option>
            </select>
            </td>
           <!-- <td><input type="radio" name="title">Dr. <input type="radio" name="title">Mr. <input type="radio" name="title">Ms. <input type="radio" name="others">Mrs. </td>-->
            
        </tr>

      
        <!--Name--> 
       <tr>
            <td>Proctor's Name :</td>
            <td><input type="text" id="name" name="name" placeholder="Enter Proctor's name" 
            value="<?php echo "{$info['proctorname']}" ?>"
            required></td>

        </tr>

        <!--Gender-->
     <tr>
            <td>Gender :</td>
            <td>
            <select id="name" name="gender"  value="<?php echo "{$info['gender']}" ?>">
               <option>Select Option</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
                
            </select>
            </td>-->
          <!--  <td><input type="radio" name="gender" >Male <input type="radio" name="gender">Female <input type="radio" name="gender">Others</td>-->

        </tr>
        <!--ID NO-->
        <tr>
            <td>Proctor's ID :</td>
            <td><input type="text" id="name" name="id" placeholder="Enter Proctor's id" 
            value="<?php echo "{$info['proctorid']}" ?>"
            required></td>
            
        </tr>

         <!--Email-->
    <tr>
        <td>E-mail :</td>
        <td><input type="email" id="name" name="email" placeholder="Enter E-mail address" 
        value="<?php echo "{$info['email']}" ?>"
        required></td>
        
    </tr>
    <!--Dob-->
    <tr>
        <td>Date of Birth :</td>
        <td><input type="date" id="name" name="dob" 
        value="<?php echo "{$info['dob']}" ?>"required></td>
        
    </tr>
    <!--Mobile-->
   <tr>
        <td>Mobile Number :</td>
        <td><input type="text" id="name" name="num" placeholder="Enter mobile number" 
        value="<?php echo "{$info['mobileno']}" ?>"required></td>
    
    </tr>

        <!--Dept_id-->
       <tr>
            <td>Department ID :</td>
            <td>
            <select id="name" name="dept_id"  value="<?php echo "{$info['dept_id']}" ?>">
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
       
        <!--<tr>
        <td>Department id</td>
        <td><input type="text" id="name" name="dept_id" placeholder="Enter Dept_id" required></td>
        
    </tr>-->


     <!--Dept_name-->
     <tr>
            <td>Department Name :</td>
            <td>
            <select id="name" name="dept_name"  value="<?php echo "{$info['dept_name']}" ?>">
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
       
    <!--UserName-->
   <tr>
        <td>Username :</td>
        <td><input type="text" id="name" name="username" placeholder="Enter Username" 
        value="<?php echo "{$info['username']}" ?>" required></td>
        
    </tr>

    <!--Password-->
   <tr>
        <td>Password :</td>
        <td><input type="password" id="name" name="pword" placeholder="Create Password" 
        value="<?php echo "{$info['password']}" ?>" required></td>
        
    </tr>

    <!--Re Enter Password-->
  <!--  <tr>
        <td>Re-Enter Password :</td>
        <td><input type="password" id="name" name="rspd" placeholder="Re-Enter Password" required></td>
        
    </tr>-->

    </table>
    <center>
        <button type="submit" class="btn btn-success" name="btn" style="opacity:1;color:#ffffff;background:#0437F2;position:absolute;top:730px;right:560px;width:100px;height:30px;font-size:16px;font-weight:600;">UPDATE</button>
</center>
        
</form>

    </div>

 


    </body>
    </html>