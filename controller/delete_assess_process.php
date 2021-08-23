<?php
// Require database connection
require('connection.php');
// Require function
require_once("../model/functions_assessments.php");
// Fetch the data required
$enID = $_GET['enID'];
//call the delete_assess() function
$result = delete_assess($enID);
if(!$result) {
    echo ("Query error: " . mysqli_error($conn));
    exit;
    }
    else {
    // Redirect the browser window back to the add customer page
    header("location: ../view/assess.php");
    }

?>