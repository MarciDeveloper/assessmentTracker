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
    <title>Assessment Tracker | Register</title>
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
            </div>
            </div>
        </div>
    </nav>
    <h1 id="registerHead"><em> Register your student profile</em></h1>
    <div class="container" id="register">
        <div class="card" id="registerCard">
            <img src="images/danielle-macinnes-IuLgi9PWETU-unsplash.jpg" class="card-img-top" alt="register image">
            <form id="registerForm" action="../controller/register_process.php" method="post">
                <h3 class="card-title">Register your profile</h3>
                <div class="mb-3">
                    <label for="stFirstName" class="form-label">First Name</label>
                    <input type="text" name="stFirstName" class="form-control" id="stFirstName" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="stLastName" class="form-label">Last Name</label>
                    <input type="text" name="stLastName" class="form-control" id="stLastName" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div id="regSubmit">
                    <button id="registerSubmit" type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            </div>
        </div>
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