<?php
//start session management
session_start();
 //connect to the database
 require("../controller/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Tracker | About</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
    <link rel="stylesheet" href="css/assess.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link"  href="login.php">Login</a>
                <!-- if the User is logged in, display Assessment and Members hyperlinks -->
                <?php
                if( isset($_SESSION['user']) == true ) { 
                echo "<a class='nav-link' href='assess.php'>Assessments</a>";
                echo "<a class='nav-link' href='members.php'>Members</a>";
                }
                ?>
                <a class="nav-link" href="about.php">About</a>
                <a class="nav-link" href="logout.php">Logout</a>
                <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
            </div>
            </div>
        </div>
    </nav>
    <div class="container" id="aboutContainer">
        <h1 id="aboutHead">We make your life easier</h1>
        <p>This Application was created to allow Users to Enroll into Assessments</p>
        <p>Assessment times can be challenging and stressful.</p>
        <p>It is also satisfying at the same time, use this Web App to plan your Assessments.</p>
        <img id="aboutPic" src="images/xps-kLfkVa_4aXM-unsplash.jpg" alt="challenging studies">
    </div>
    <footer class="page-footer font-small blue">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-auto">&copy; <?php echo date("Y");?> Copyright:
                <h2 id= foot>Caccamo Marcello </h2>
            </div>
            <!-- Copyright -->
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>