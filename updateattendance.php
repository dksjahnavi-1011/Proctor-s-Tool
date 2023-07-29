<?php
session_start();
error_reporting(0);


$host='localhost';
$user='root';
$password="";
$db="tool";

$data=mysqli_connect($host,$user,$password,$db);
if (isset($_GET['student_id']) && isset($_GET['student1_id']))
{
   $tid=$_GET['student_id'];
   $t1id=$_GET['student1_id'];
    $sql="select * from attendance where usn='$tid'  AND course_id='$t1id'  ";
    $result=mysqli_query($data,$sql);
    $info=$result->fetch_assoc();
}

if (isset($_POST['btn']))
{
   
    $usn=$_POST['usn'];
    $name=$_POST['name'];
    $dno=$_POST['did'];
    $pno=$_POST['pid'];
    $pname=$_POST['pname'];
    $cid=$_POST['cid'];
    $cname=$_POST['cname'];
    $dname=$_POST['dept_name'];
    $tc=$_POST['tc'];
    $ca=$_POST['ca'];

    
     

    $sql2="UPDATE attendance SET usn='$usn', sname='$name',dept_id='$dno',course_id='$cid',course_name='$cname',dept_name='$dname',pid='$pno',pname='$pname',total_classes='$tc',classes_attended='$ca' where usn='$usn'  AND course_id='$cid'  ";
    $result2=mysqli_query($data,$sql2);

    if ($result2) {
        header("location:retrieveattendance.php");
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
    <title>Update Student Attendance</title>
    <link rel="stylesheet" href="updateattendance.css">
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
       
        <a href="addstudent.php"><i class="fa fa-graduation-cap"></i><span>Student Details</span></a>
        <a href="addacademics.php"><i class="fa fa-book" ></i><span>Academics</span></a>
        <a href="addattendance.php"><i class="fa fa-calendar-check-o" ></i><span>Attendance</span></a>
        <a href="searchstudent.php"><i class="fa fa-search" ></i><span>View Student</span></a>
        <a href="retrieveacademics.php"><i class="fa fa-search" ></i><span>View Academics</span></a>

        <a href="retrieveattendance.php"><i class="fa fa-search" ></i><span>View Attendance</span></a>

    
    
    </div>

    <div class="content">
        
    </div>

    <div class="content1">
        <h1 style="top:70px;right:250px;">Update Student Attendance </h1>

        <form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()" action="updateattendance.php" >
    <table align="center" cellpadding="10" style="width:40%;height:75%;top:150px;" >
       <!-- <th>Update Proctor Details</th>-->
       
              <!--USN--> 
       <tr>
            <td>USN:</td>
            <td><input type="text" id="name" name="usn" placeholder="Enter USN"
            value="<?php echo "{$info['usn']}" ?>" required></td>

        </tr>
      
         <!--Name--> 
         <tr>
            <td>Student Name:</td>
            <td><input type="text" id="name" name="name" placeholder="Enter Student Name" 
            value="<?php echo "{$info['sname']}" ?>"required></td>

        </tr>


             <!-- Course ID NO-->
             <tr>
            <td>Course id:</td>
            <td>
            <select id="name" name="cid"value="<?php echo "{$info['course_id']}" ?>">
               <option>Select Option</option>
                <option>1851</option>
                <option>1852</option>
                <option>1853</option>
                <option>1854</option>
                <option>1855</option>
                <option>1856</option>
                <option>1857</option>
                <option>1858</option>
                <option>1859</option>
                
                
            </select>
            </td>
     </tr>
             
       <!-- Course Name--> 
       <tr>
            <td>Course Name:</td>
            <td>
            <select id="name" name="cname">
               <option>Select Option</option>
                <option>ME for IT Industry</option>
                <option>Computer Networks</option>
                <option>DBMS</option>
                <option>Automata Theory</option>
                <option>Python</option>
                <option>Unix Programming</option>
                <option>CN Laboratory</option>
                <option>DBMS Laboratory</option>
                <option>EVS</option>
                
                
            </select>
            </td>
         

        </tr>
           
           
             <!-- <tr>
            <td>Course ID :</td>
            <td><input type="text" id="name" name="cid" placeholder="Enter Course id" required></td>
            
        </tr>-->

             <!--Dept ID NO-->
             <tr>
            <td>Department ID :</td>
            <td>
            <select id="name" name="did" value="<?php echo "{$info['dept_id']}" ?>">
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
            <td>Department ID :</td>
            <td><input type="text" id="name" name="did" placeholder="Enter Department id" required></td>
            
        </tr>-->


        <!--Dept_name-->
     <tr>
            <td>Department Name :</td>
            <td>
            <select id="name" name="dept_name" value="<?php echo "{$info['dept_name']}" ?>">
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
            <td>Proctor ID:</td>
            <td><input type="text" id="name" name="pid" placeholder="Enter Proctor ID"
            value="<?php echo "{$info['pid']}" ?>" required></td>

        </tr>

        
        <!--Proctor Name--> 
       <tr>
            <td>Proctor Name:</td>
            <td><input type="text" id="name" name="pname" placeholder="Enter Proctor Name" 
            value="<?php echo "{$info['pname']}" ?>"required></td>

        </tr>

            

            

            <!--Total classes-->
            <tr>
            <td>Total Classes :</td>
            <td><input type="text" id="name" name="tc" placeholder="Enter Total Classes"
            value="<?php echo "{$info['total_classes']}" ?>" required></td>
            
        </tr>

               <!--Classes Attended-->
               <tr>
            <td>Classes Attended :</td>
            <td><input type="text" id="name" name="ca" placeholder="Enter Classes Attended"
            value="<?php echo "{$info['classes_attended']}" ?>" required></td>
            
        </tr>

        

        
       


    </table>
    <center>
        <button type="submit" class="btn btn-success" name="btn" style="opacity:1;color:#ffffff;background:#0437F2;position:absolute;top:750px;right:560px;width:100px;height:30px;font-size:16px;font-weight:600;">UPDATE</button>
</center>
        
</form>

    </div>

 


    </body>
    </html>