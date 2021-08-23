

<?php
//create a function to add a assessment
function add_assess( $assessID, $studentID, $date , $unitID)
{
    global $conn;
    $sql = "INSERT INTO assess_tracker.enrol ( assessID, studentID, date , unitID) VALUES  ( :assessID, :studentID, :date , :unitID)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':assessID', $assessID);
    $statement->bindValue(':studentID', $studentID);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':unitID', $unitID);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;   
}

?>

<?php
//create a function to delete an existing assessment
function delete_assess($enID)
{
    global $conn;
    $sql = "DELETE FROM assess_tracker.enrol WHERE enID = :enID ";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':enID', $enID);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;		
}





