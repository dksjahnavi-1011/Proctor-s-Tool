<!--Landing Page-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proctor System Management</title>
    <!--custom css link-->
    <link rel="stylesheet" href="landing.css">
  <!--  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <section class="header">
        <nav>
           <!-- <a heref="landing.html"><img src="Images/l2.png"></a>-->


            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="landing.php">HOME</a></li>
                    <li><a href="login.php">ADMIN</a></li>
                    <li><a href="login.php">FACULTY</a></li>
                    <li><a href="login.php">STUDENT</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()";></i>
        </nav>

        <div class="text-box">
            <a heref="landing.html"><img src="Images/l2.png"></a>
            <h1>Proctor's Tool</h1>
            <p>The Proctor's Tool is a system that manages information which typically involves students personal information, academic proctor report, and reports of the student.
                It aims at standardizing data, consolidating data and ensuring data integrity. </p>
            <a href="login.php" class="hero-btn">LOGIN</a>
        </div>
        
         
    </section>
    
    
    <!--Javascript function-->
    <script>
        var navlinks=document.getElementById("navlinks");

        function showmenu(){
            navlinks.style.left="0";
        }  

        function hidemenu(){
            navlinks.style.left="-200px";
        }  
        
        </script>
  
</body>

</html>