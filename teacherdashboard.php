<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="teacherdashboard.css">
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
            <img src="Images/tdb1.png" class="profile_image" alt="">
        </centre>
        <a href="teacherdashboard.php"><i class="fa fa-user"></i><span>Dashboard</span></a>
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
        <h2 style="color:#666666; position: absolute;top:150px; right: 350px; font-size: 50px;font-weight: 800;">Welcome to Proctor's tool</h2>
        <h3 style=" color: #666666; position: absolute;top:220px;right: 600px;font-size: 30px;  font-weight: 700;">Hello Proctor</h3>

</div> 


    
    
   
   


    </body>
    </html>