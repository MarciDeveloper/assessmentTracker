<?php
//start session management
session_start();
 //connect to the database
 require("../controller/connection.php");
 // check if the user session is set
 if(!isset($_SESSION['user']) == true ) { 
    // message to be displayed if the user is not logged in and try to access authorised areas
    $mssg = urlencode('Please register to access authorised areas');
    //if the user session is not set (i.e. the user is not logged in) redirect to the login page and display the error message
    header('location:login.php?mssg='.$mssg);
 } else { 
     // grant access
    $username = $_SESSION['username'] ;
    $studentID = $_SESSION['studentID']  ;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Tracker | Members</title>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <?php
        global $conn;
        //query to select all categories from the database
        $sql = "SELECT * FROM assess_tracker.student WHERE studentID = '$studentID '  ";
        //prepared statement
        $statement = $conn->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        //display the result for each row using a foreach loop           
        foreach($result as $row):
            $stFirstName = $row['stFirstName'];
            $stLastName = $row['stLastName'];
            $username = $row['username'];
            $email = $row['email'];
            $password = $row['password'];
        endforeach;
        ?>
    <h1 id="membersHead"><em><b>Members</b> area</em> only</h1>
    <div class="container" id="update_student">
         <div data-aos="flip-left" class="card" id="membersCard">
         <img src="images/fly-d-art-photographer-OQptsc4P3NM-unsplash.jpg" class="card-img-top" alt="members image">
            <form action="../controller/student_update_process.php" method="post" id="update_form" >
            <h3 class="card-title">Update your details</h3>
                        <div class="mb-3">
                            <label>First Name* </label>
                            <input id="stFirstName" class="form-control" type="text" name="stFirstName" value="<?php echo $row['stFirstName'] ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Last Name* </label>
                            <input id="stLastName" class="form-control" type="text" name="stLastName" value="<?php echo $row['stLastName'] ?>" required />
                        </div>
                        <div class="mb-3">
                        <label>Username* </label>
                            <input id="username" class="form-control" type="text" name="username" value="<?php echo $row['username'] ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Email* </label>
                            <input id="email" class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>" required />
                        </div>
                        <div class="mb-3">
                            <label>Password* </label>
                            <input id="password" class="form-control" type="password" name="password" value="" required />
                        </div>
                        <div class="mb-3">
                            <input id="studentID" type="hidden" name="studentID" class="btn btn-primary" value="<?php echo $row['studentID'] ?>"  /> 
                        </div>
                        <br>
                        <br>
                        <div id="divSubmit">
                                <input id="memberSubmit" type="submit" value="Update" class="btn btn-primary btn-lg ">

                        </div>

                </form>
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
    <!-- JavaScript AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>