<?php
session_start();
error_reporting(0);


$host='localhost';
$user='root';
$password="";
$db="tool";

$data=mysqli_connect($host,$user,$password,$db);
if ($_GET['student_id'])
{
   $tid=$_GET['student_id'];
    $sql="select * from student where usn='$tid' ";
    $result=mysqli_query($data,$sql);
    $info=$result->fetch_assoc();
}

if (isset($_POST['btn']))
{
    $usn=$_POST['usn'];
    $fnm=$_POST['fname'];
    $mnm=$_POST['mname'];
    $lnm=$_POST['lname'];
    $dno=$_POST['id'];
    $dname=$_POST['dept_name'];
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $gen=$_POST['gender'];
    $sem=$_POST['sem'];
    $addr=$_POST['address'];
    $mob=$_POST['num'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $usern=$_POST['username'];
     $psd=$_POST['password'];
     

    $sql2="UPDATE student SET usn='$usn', fname='$fnm', mname='$mnm', lname='$lnm',dept_id='$dno',dept_name='$dname',pid='$pid',pname='$pname',gender='$gen',sem='$sem',address='$addr',Mobileno='$mob',dob='$dob',email='$email',username='$usern',password='$psd' where usn='$usn'  ";
    $result2=mysqli_query($data,$sql2);

    if ($result2) {
        header("location:adminstudent.php");
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
    <title>Update Student Details</title>
    <link rel="stylesheet" href="updatestudent.css">
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
        <a href="adminstudent"><i class="fa fa-search" ></i><span>View Student</span></a>
        

    
    
    </div>

    <div class="content">
        
    </div>

    <div class="content1">
        <h1 style="top:70px;right:350px;">Update Student Data </h1>

        <form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()" action="updateadminstudent.php" >
    <table align="center" cellpadding="10" style="width:40%;height:75%;top:150px;" >
       <!-- <th>Update Proctor Details</th>-->
       
              <!--USN--> 
       <tr>
            <td>USN:</td>
            <td><input type="text" id="name" name="usn" placeholder="Enter USN"
            value="<?php echo "{$info['usn']}" ?>" required></td>

        </tr>
      
        <!--FName--> 
       <tr>
            <td>First Name :</td>
            <td><input type="text" id="name" name="fname" placeholder="Enter First name" 
            value="<?php echo "{$info['fname']}" ?>"
            required></td>

        </tr>

          
        <!--MName--> 
       <tr>
            <td>Middle Name :</td>
            <td><input type="text" id="name" name="mname" placeholder="Enter Middle name" 
            value="<?php echo "{$info['mname']}" ?>"
            required></td>

        </tr>

          
        <!--LName--> 
       <tr>
            <td>Last Name :</td>
            <td><input type="text" id="name" name="lname" placeholder="Enter Last name" 
            value="<?php echo "{$info['lname']}" ?>"
            required></td>

        </tr>

             <!--Dept ID NO-->
             <tr>
            <td>Department ID :</td>
            <td>
            <select id="name" name="id"  value="<?php echo "{$info['dept_id']}" ?>">
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

     
      <!--Proctor ID--> 
      <tr>
            <td>Proctor ID :</td>
            <td><input type="text" id="name" name="pid" placeholder="Enter Proctor ID"
            value="<?php echo "{$info['pid']}" ?>" required></td>

        </tr>
     
        <!--Proctor Name--> 
        <tr>
            <td>Proctor Name :</td>
            <td><input type="text" id="name" name="pname" placeholder="Enter Proctor Name" 
            value="<?php echo "{$info['pname']}" ?>"required></td>

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
            </td>
          <!--  <td><input type="radio" name="gender" >Male <input type="radio" name="gender">Female <input type="radio" name="gender">Others</td>
-->
        </tr>

         
        <!--Semester-->
      
        <tr>
            <td>Semester :</td>
            <td>
            <select id="name" name="sem"  value="<?php echo "{$info['sem']}" ?>">
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
        <!--Address--> 
       <tr>
            <td>Address :</td>
            <td><input type="text" id="name" name="address" placeholder="Enter address" 
            value="<?php echo "{$info['address']}" ?>"required></td>

        </tr>



      
      
      


     <!--Mobile-->
     <tr>
        <td>Mobile Number :</td>
        <td><input type="text" id="name" name="num" placeholder="Enter mobile number" 
        value="<?php echo "{$info['Mobileno']}" ?>"required></td>
        
    </tr>
   
        <!--Dob-->
        <tr>
        <td>Date of Birth :</td>
        <td><input type="date" id="name" name="dob"
        value="<?php echo "{$info['dob']}" ?>" required></td>
        
    </tr>
    
    <!--Email-->
    <tr>
        <td>E-mail :</td>
        <td><input type="email" id="name" name="email" placeholder="Enter E-mail address" 
        value="<?php echo "{$info['email']}" ?>"required></td>
        
    </tr>
 

      
      
        <!--  <tr>
        <td>Semester :</td>
        <td><input type="number" id="name" name="sem" placeholder="Enter Semester" required></td>
        
    </tr>-->
    <!--UserName-->
    <tr>
        <td>Username :</td>
        <td><input type="text" id="name" name="username" placeholder="Enter Username" 
        value="<?php echo "{$info['username']}" ?>"required></td>
        
    </tr>

    <!--Password-->
    <tr>
        <td>Password :</td>
        <td><input type="password" id="name" name="password" placeholder="Create Password"
        value="<?php echo "{$info['password']}" ?>" required></td>
        
    </tr>

        

        
       


    </table>
    <center>
        <button type="submit" class="btn btn-success" name="btn" style="opacity:1;color:#ffffff;background:#0437F2;position:absolute;top:750px;right:560px;width:100px;height:30px;font-size:16px;font-weight:600;">UPDATE</button>
</center>
        
</form>

    </div>

 


    </body>
    </html>