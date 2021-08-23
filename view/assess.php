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
    <title>Assessment Tracker | Assessments</title>
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
                <a class="nav-link" href="assess.php">Assessments</a>
                <a class="nav-link" href="about.php">About</a>
                <a class="nav-link" href="members.php">Members</a>
                <a class="nav-link" href="logout.php">Logout</a>
                <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
            </div>
            </div>
        </div>
    </nav>
    <section class="banner">
            <img src="images/eli-francis-_M-DrbiNFa4-unsplash.jpg" alt="study">
    </section>
    <h1 class="assessTitles">Welcome back <em><?php echo $username ?></em>, manage your Assessments </h2>
    <hr id="header_line">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="assessTitles">All Assessments</h2>
               <ul class="list-group col">
                <?php   
                    //query the database
                    $sql = "SELECT * FROM assess_tracker.assessment INNER JOIN assess_tracker.unit ON assess_tracker.assessment.unitID = assess_tracker.unit.unitID";
                    //prepared statement
                    $statement = $conn->prepare($sql);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    $statement->closeCursor();
                    //display the result for each row using a foreach loop           
                    foreach($result as $row):
                        $assessID = $row['assessID'];
                        $assessName = $row['assessName'];
                        $assessDescription = $row['assessDescription'];
                        $assessDueDate = $row['assessDueDate'];
                        $unitID = $row['unitID'];
                        $unitName = $row['unitName'];
                        echo "<li class='list-group-item'><h3>".$row['unitName']."</h3><h4>".$row['assessName']."</h4><p> " . $row['assessDescription'] .  "</p><p> Due Date: " . $row['assessDueDate'] . "</p><div class='col-md-12 text-center'> <a href='../controller/assess_enrol_process.php?assessID=$assessID&studentID=$studentID&unitID=$unitID' class='btn btn-secondary btn-lg btn-block' role='button'>Enrol</a></div></li>"; 
                    endforeach;
                ?>
             </ul>
         </div>
        <div class="col">
            <h2 class="assessTitles">Enrolled Assessments</h2>
                <ul class="list-group col">
                        <?php   
                            //query the database
                            $sql = "SELECT * FROM assess_tracker.enrol INNER JOIN assess_tracker.assessment ON assess_tracker.enrol.assessID = assess_tracker.assessment.assessID WHERE studentID = '$studentID' ";
                            //prepared statement
                            $statement = $conn->prepare($sql);
                            $statement->execute();
                            $result = $statement->fetchAll();
                            $statement->closeCursor();
                            //display the result for each row using a foreach loop           
                            foreach($result as $row):
                                $enID = $row['enID'];
                                $studentID = $row['studentID'];
                                $date = $row['date'];
                                $assessID = $row['assessID'];
                                $unitID = $row['unitID'];
                                $assessName = $row['assessName'];
                                echo "<li class='list-group-item'><h4>Assessment number: " .$row['assessID']."</h4><h3>Assessment type: " .$row['assessName']."</h3><p> Student: ".$_SESSION['username']."</p><p> Enrollment date: " . $row['date'] .  "</p><div class='col-md-12 text-center'><a href='../controller/delete_assess_process.php?enID=$enID' class='btn btn-danger btn-lg btn-block' role='button'>Delete</a></div> </li>"; 
                            endforeach;
                        ?>
                </ul>
            </div>
        </div>
    </div>
   
        <footer>
              <h2 id= foot>Assessment Tracker &copy; <?php echo date("Y"); ?>, Caccamo Marcello </h2>
        </footer>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>