
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
    
   
    $usn=$_POST['usn'];
    $name=$_POST['sname'];
    $cid=$_POST['cid'];
    $cname=$_POST['cname'];
    $dno=$_POST['did'];
    $dname=$_POST['dept_name'];
    $pname=$_POST['pname'];
    $pid=$_POST['pid'];
    $ia1=$_POST['ia1'];
    $ia2=$_POST['ia2'];
    $ia3=$_POST['ia3'];
    $em=$_POST['extm'];
   
    
    

    $ins="insert into academics(usn,sname,course_id,course_name,dept_id,dept_name,pid,pname,ia_1,ia_2,ia_3,external_marks)values('$usn','$name','$cid','$cname','$dno','$dname','$pid','$pname','$ia1','$ia2','$ia3','$em')";


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
    <title>Add Academics</title>
    <link rel="stylesheet" href="addacademics.css">
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

<form class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit="return validate()" >
    <table align="center" cellpadding="10">
        <th>Add Academic Details</th>
     

         

    

          
        <!--USN--> 
       <tr>
            <td>USN:</td>
            <td><input type="text" id="name" name="usn" placeholder="Enter USN" required></td>

        </tr>

      <!--  SName-->
       <tr>
            <td>Student Name :</td>
            <td><input type="text" id="name" name="sname" placeholder="Enter Student Name" required></td>

        </tr>

             <!-- Course ID NO-->
             <tr>
            <td>Course id :</td>
            <td>
            <select id="name" name="cid">
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
             
             
             
           <!--  <tr>
            <td>Course ID :</td>
            <td><input type="text" id="name" name="cid" placeholder="Enter Course id" required></td>
            
        </tr>-->

             <!--Dept ID NO-->
             <tr>
            <td>Department ID :</td>
            <td>
            <select id="name" name="did">
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
          
             <!--  <tr>
            <td>Department ID :</td>
            <td><input type="text" id="name" name="did" placeholder="Enter Department id" required></td>
            
        </tr>-->


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
            <td>Proctor ID:</td>
            <td><input type="text" id="name" name="pid" placeholder="Enter Proctor ID" required></td>

        </tr>

        
        <!--Proctor Name--> 
       <tr>
            <td>Proctor Name:</td>
            <td><input type="text" id="name" name="pname" placeholder="Enter Proctor Name" required></td>

        </tr>


            <!--IA-1-->
            <tr>
            <td>IA-1 Marks :</td>
            <td><input type="text" id="name" name="ia1" placeholder="Enter IA-1 Marks(Max 30)" required></td>
            
        </tr>

               <!--IA-2-->
               <tr>
            <td>IA-2 Marks :</td>
            <td><input type="text" id="name" name="ia2" placeholder="Enter IA-2 Marks(Max 30)" required></td>
            
        </tr>

               <!--IA-3-->
               <tr>
            <td>IA-3 Marks :</td>
            <td><input type="text" id="name" name="ia3" placeholder="Enter IA-3 Marks(Max 30)" required></td>
            
        </tr>

                <!--External Marks-->
                <tr>
            <td>External Marks :</td>
            <td><input type="text" id="name" name="extm" placeholder="Enter External Marks" required></td>
            
        </tr>

          
      
       

        <!--Semester
        <tr>
        <td>Semester :</td>
        <td><input type="number" id="name" name="sem" placeholder="Enter Semester" required></td>
        
    </tr>-->
   



    </table>
        <center>
        <button type="submit" class="btn btn-success" name="btn" style="opacity:1;color:#ffffff;background:#0437F2;position:absolute;top:750px;right:560px;width:100px;height:30px;font-size:16px;font-weight:600;">REGISTER</button>
</center>

</form>
    </body>
    </html>