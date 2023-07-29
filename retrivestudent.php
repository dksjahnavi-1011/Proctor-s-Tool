
<?php
session_start();
error_reporting(0);
    $host="localhost";
    $user="root";
    $password="";
    $db="tool";

    $data=mysqli_connect($host,$user,$password,$db);
    $sql="select * from student";
    $result=mysqli_query($data,$sql);

    if($_GET['proctor_id'])
    {
        $tid=$_GET['student_id'];
        $sql2="delete from student where usn='$tid' ";
        $result2=mysqli_query($data,$sql2);
        
        if($result2)
        {
           header('location:retrievestudent.php');
        }
    }
?>



<!--HTMl file-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Data</title>
    <link rel="stylesheet" href="retrievestudent.css">
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
        <a href="teacherdashboard.php"><i class="fa fa-user" ></i><span>Dashboard</span></a>
        <a href="retrivestudent.php"><i class="fa fa-graduation-cap"></i><span>Student Details</span></a>
       

    
    
    </div>

    <div class="content">
        
    </div>
    
    <div class="content1">
        <h1>View all Student's Data</h1>
    </div>
    
    <table border="1px" style="position:absolute;top:200px;right:20px;width:75%;">
        <tr>
            <th class="table_th">USN</th>
            <th class="table_th">First Name</th>
            <th class="table_th">Middle Name</th>
            <th class="table_th">Last Name</th>
            <th class="table_th">Department ID</th>
            <th class="table_th">Department Name</th>
            <th class="table_th">Semester</th>
            <th class="table_th">Edit/Update</th>
            <th class="table_th">Delete</th>

            
        </tr>
        <?php
            while($info=$result->fetch_assoc())
            {
        ?>
        <tr>
            <td class="table_td"><?php echo "{$info['usn']}" ?></td>
            <td class="table_td"><?php echo "{$info['fname']}" ?></td>
            <td class="table_td"><?php echo "{$info['mname']}" ?></td>
            <td class="table_td"><?php echo "{$info['lname']}" ?></td>
            <td class="table_td"><?php echo "{$info['dept_id']}" ?></td>
             <td class="table_td"><?php echo "{$info['dept_name']}" ?></td>
            <td class="table_td"><?php echo "{$info['sem']}" ?></td>
            <td class="table_td">
                <?php
                echo"
                <a class='btn_edit' href='updatestudent.php?student_id={$info['usn']}'>Edit/Update
                
                </a>";
                ?>

            </td>
            
            <td class="table_td">
                <?php 
                echo"
                <a onClick=\"javascript:return confirm('Are You Sure to Delete This');\" class='btn_delete' href='retrievestudent.php?proctor_id={$info['usn']}'>Delete</a>";
                ?>
                </td>

        </tr>  
        <?php
            }
        ?>
</table>
        
    </centre>

    </body>
    </html>