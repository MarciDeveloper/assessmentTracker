<?php
//start session management
session_start();
 //connect to the database
 require("controller/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Tracker | Home</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/index.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
<div>
        <div class="inner"> 
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link"  href="view/login.php">Login</a>
                            <!-- if the User is logged in, display Assessment and Members hyperlinks -->
                            <?php
                            if( isset($_SESSION['user']) == true ) { 
                            echo "<a class='nav-link' href='view/assess.php'>Assessments</a>";
                            echo "<a class='nav-link' href='view/members.php'>Members</a>";
                            }
                            ?>
                            <a class="nav-link" href="view/about.php">About</a>
                            <a class="nav-link" href="view/logout.php">Logout</a>
                        </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <h1 id="begin">The Portal to manage your Assessments</h1>
                    <!-- If the User is logged in, display the Assessments button, otherwise display the login button. -->
                    <?php
                            if( isset($_SESSION['user']) == true ) { 
                        // grant access to the authorised areas if logged in
                        echo "<div class='col-md-12 text-center'><a href='view/assess.php' type='button' class='btn btn-secondary'>Assessments</a></div> ";
                    } else {
                        echo "<div class='col-md-12 text-center'><a href='view/login.php' type='button' class='btn btn-secondary'>Login</a></div> ";
                    }
                    ?>
                </div>
                <footer class="page-footer font-small blue mt-3">
                    <!-- Copyright -->
                    <div style="padding-top: 600px;" class="footer-copyright text-center py-auto">&copy; <?php echo date("Y");?> Copyright:
                        <h2 id= foot>Caccamo Marcello </h2>
                    </div>
                    <!-- Copyright -->
                </footer>
        </div>
        <div class="overlay"></div>
        <div class="background">
            <canvas id="hero-canvas" width="1920" height="1080"></canvas>
        </div>
       
    
<!-- Footer -->
<script src="./view/js/animations.js">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>