
<?php
session_start();
error_reporting(0);
   /* $host="localhost";
    $user="root";
    $password="";
    $db="tool";*/
    
    $connection=mysqli_connect("localhost","root","","tool");
    
    $sql="select * from student";
    $result=mysqli_query($connection,$sql);

    if($_GET['student_id'])
    {
        $tid=$_GET['student_id'];
        $sql2="delete from student where usn='$tid' ";
        $result2=mysqli_query($connection,$sql2);
        
        if($result2)
        {
           header('location:adminstudent.php');
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
    <link rel="stylesheet" href="adminstudent.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>

        <input type="checkbox" id="check">
        <!--Header area start-->
       <header style="z-index: 999 !important;">
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
       <!-- <a href="#"><i class="fa fa-list"></i><span>Search Proctor</span></a>-->
       <a href="retrieveteacher.php"><i class="fa fa-search" ></i><span>View Proctor</span></a>
        <a href="adminstudent.php"><i class="fa fa-search" ></i><span>View Student</span></a>
       
    
    </div>

    <div class="content" >
        
    </div>
    
    <div class="content1">
        <h1>View Student Data</h1>
    </div>

    <!--Filter-->
    
    <!--teacher-->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Search Data by USN/Student Name/Dept_ID/Proctor ID<h4>
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


                    <table class="table" border="1px" style="position:absolute;top:300px;right:-1100px;width:75%;overflow;">
  <thead>
    <tr>
      <th scope="col">USN</th>
      <th scope="col">First Name</th>
      <th scope="col">Middle Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Dept_ID</th>
      <th scope="col">Dept_Name</th>
      <th scope="col">Proctor ID</th>
      <th scope="col">Proctor Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Sem</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile No</th>
      <th scope="col">DOB</th>
      <th scope="col">Email</th>
      <th scope="col">UserName</th>
      <th scope="col">Password</th>
     
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
        $query="SELECT * FROM student WHERE CONCAT(usn,fname,dept_id,dept_name,pid,pname) LIKE '%$value_filter%' ";
        $query_run=mysqli_query($connection,$query);

        if(mysqli_num_rows($query_run)>0)
            {
               
                while($row=mysqli_fetch_array($query_run))
                {
                    
                    ?>
                      <tr>
                      <td><?php echo $row['usn']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td ><?php echo $row['mname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['dept_id']; ?></td>
                    <td><?php echo $row['dept_name']; ?></td>
                    <td><?php echo $row['pid']; ?></td>
                    <td><?php echo $row['pname']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['sem']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['Mobileno']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    
                    <td >
                <?php
                echo"
                <a class='btn_edit' href='updatestudentadmin.php?student_id={$row['usn']}'>Edit/Update
                
                </a>";
                ?>

            </td>

            <td >
                <?php 
                echo"
                <a onClick=\"javascript:return confirm('Are You Sure to Delete This');\" class='btn_delete' href='adminstudent.php?student_id={$row['usn']}'>Delete</a>";
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
                    <td colspan="18">No Record Found</td>
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