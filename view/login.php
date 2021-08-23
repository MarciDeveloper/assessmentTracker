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
    <title>Assessment Tracker | Login</title>
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
    <h1 id="loginHead"><em> Login to access all the areas</em></h1>
    <div class="container" id="login">
        <div class="card" id="loginCard">
        <img src="images/thought-catalog-505eectW54k-unsplash.jpg" class="card-img-top" alt="login image">
            <form id="loginForm" action="../controller/authentication.php" method="post">
                <h3 class="card-title">Welcome back, please Login</h3>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" 
                    value="<?php echo (isset($_POST['remember_me']));?>" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember" value="1">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <div id="logSubmit">
                    <button id="loginSubmit" type="submit" name="submit" class="btn btn-primary btn-lrg">Login</button>
                </div>
                <hr>
                <p>Do you need to <a href="register.php">register?</a></p>
            </form>
            </div>
            <br>
            <!-- if the User is not logged in, display error message -->
            <?php
                if(isset($_GET['mssg'])) {
                    $mssg = $_GET['mssg'];
                    echo '<p style="color:red;text-align:center; text-shadow: 1px 1px black;">' . $mssg . '</p>';
                }
            ?>
            <br>
            <?php
                    //display a user message if there is an error
                    if(isset($_SESSION['error']))
                    { 
                        echo '<div class="error">';
                        echo '<p style="color:red;text-align:center; text-shadow: 1px 1px black;"><i class="far fa-thumbs-down"></i>' . $_SESSION['error'] . '</p>'; 
                        echo '</div>';
                        //unset the session named 'error' else it will show each time you visit the page
                        unset($_SESSION['error']);
                    }
                    //display a user message if action is successful
                    elseif(isset($_SESSION['success'])) 
                    { 
                        echo '<div class="success">';
                        echo '<p style="color:green;text-align:center;  text-shadow: 1px 1px black;"><i class="far fa-thumbs-up"></i>' . $_SESSION['success'] . '</p>'; 
                        echo '</div>';
                        //unset the session named 'success' else it will show each time you visit the page
                        unset($_SESSION['success']);
                    } 
           ?>
        </div>
   </div>
        <footer>
              <h2 id= foot>Assessment Tracker &copy; <?php echo date("Y"); ?>, Caccamo Marcello </h2>
        </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>