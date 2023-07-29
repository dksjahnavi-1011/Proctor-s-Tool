
<?php
session_start();
error_reporting(0);
   /* $host="localhost";
    $user="root";
    $password="";
    $db="tool";*/
    
    $connection=mysqli_connect("localhost","root","","tool");
    
    $sql="select * from attendance";
    $result=mysqli_query($connection,$sql);

    if(isset($_GET['student_id']) && isset($_GET['student1_id']))
    {
        $tid=$_GET['student_id'];
        $t1id=$_GET['student1_id'];
        
        $sql2="delete from attendance where usn='$tid' AND course_id='$t1id' ";
        $result2=mysqli_query($connection,$sql2);
        
        if($result2)
        {
           header('location:retrieveattendance.php');
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
    <title>View Student Attendance</title>
    <link rel="stylesheet" href="retrieveattendance.css">
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
       <!-- <a href="addteacher.php"><i class="fa fa-plus-square"></i><span>Add Proctor</span></a>
        <a href="retrieveteacher.php"><i class="fa fa-search" ></i><span>View Proctor</span></a>-->
    
    
    </div>

    <div class="content">
        
    </div>
    
    <div class="content1">
        <h1>View Student Attendance</h1>
    </div>

    <!--Filter-->
    
    <!--teacher-->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" >Search Data by USN/Student Name/Dept_ID/Proctor ID/Course ID<h4>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" >
                                    <input type="text" name="filter value" class="form-control" placeholder="Type to Search..." >                   
                                </div>
                            </div>
                                <div class="col-md-6" >
                                    <button type="submit" name="filter_btn" class="btn-submit">Search</button>
                                </div>
                        </div>
                    </form>


                    <table class="table" border="1px" style="position:absolute;top:300px;right:-500px;width:75%;overflow;">
  <thead>
    <tr>
      <th scope="col">USN</th>
      <th scope="col">Name</th>
      <th scope="col">Department ID</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">Department Name</th>
      <th scope="col">Proctor ID</th>
      
      <th scope="col">Proctor Name</th>
      <th scope="col">Total Classes</th>
      <th scope="col">Classes Attended</th>
      <th scope="col">Percentage</th>
     
     
      <th scope="col">Edit/Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
      
    if(isset($_POST['filter_btn']))
    {
       /* $connection=mysqli_connect("localhost","root","","tool");*/
        $value_filter=$_POST['filter_value'];
        $query="SELECT * FROM attendance WHERE CONCAT(usn,sname,dept_id,dept_name,pid,pname,course_id) LIKE '%$value_filter%' ";
        $query_run=mysqli_query($connection,$query);

        if(mysqli_num_rows($query_run)>0)
            {
               
                while($row=mysqli_fetch_array($query_run))
                {
                    
                    ?>
                      <tr>
                      <td><?php echo $row['usn']; ?></td>
                    <td><?php echo $row['sname']; ?></td>
                    <td ><?php echo $row['dept_id']; ?></td>
                    <td><?php echo $row['course_id']; ?></td>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['dept_name']; ?></td>
                    
                    <td><?php echo $row['pid']; ?></td>
                    <td><?php echo $row['pname']; ?></td>
                    <td><?php echo $row['total_classes']; ?></td>
                    <td><?php echo $row['classes_attended']; ?></td>
                    <td><?php echo $row['percentage']; ?></td>
                    
                    
                    <td >
                <?php
                echo"
                <a class='btn_edit' href='updateattendance.php?student_id={$row['usn']} && student1_id={$row['course_id']}'>Edit/Update
                
                </a>";
                ?>

            </td>

            <td >
                <?php 
                echo"
                <a onClick=\"javascript:return confirm('Are You Sure to Delete This');\" class='btn_delete' href='retrieveattendance.php?student_id={$row['usn']} && student1_id={$row['course_id']}'>Delete</a>";
                ?>
                </td>

                        
                     </tr>

                    <?php
                }
            }
            else
            {   
                ?>
                <tr>
                    <td colspan="13">No Record Found</td>
            </tr>
              <?php
            }
          
    }
    ?>
 
  
  </tbody>
</table>

                </div>
        </div>
    </div>      



    <!--searchteacher-->



    </centre>

</body>
</html>