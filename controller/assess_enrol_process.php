<?php
//connect to the database
require('connection.php');
// Require function
require_once("../model/functions_assessments.php");
// Fetch the data required
$unitID = $_GET['unitID'];
$assessID = $_GET['assessID'];
$studentID = $_GET['studentID'];
$date = date('Y-m-d H:i:s');
if(empty($assessID) || empty($studentID) || empty($date) || empty($unitID)  ) 
{ 
    echo '<script type="text/javascript">alert("All fields are required.")</script>' ;
     // Redirect the browser window back to the add customer page
    echo "<script>setTimeout(\"location.href = '../index.php';\",2000);</script>";
} else {
    //call the add_assess() function
    $result = add_assess( $assessID, $studentID, $date, $unitID);
    // Redirect the browser window back to the add customer page
    header("location: ../view/assess.php");
    // }
}
?>