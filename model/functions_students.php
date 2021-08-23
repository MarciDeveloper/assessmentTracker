<?php
function update_student($studentID, $stFirstName, $stLastName, $username, $email, $password, $salt)
{
    global $conn;
    $sql = "UPDATE assess_tracker.student SET username = :username , password = :password,  salt = :salt , stFirstName = :stFirstName,  stLastName = :stLastName , email = :email WHERE studentID = :studentID ";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':studentID', $studentID);
    $statement->bindValue(':stFirstName', $stFirstName);
    $statement->bindValue(':stLastName', $stLastName);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':salt', $salt);
    $statement->bindValue(':email', $email);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;  
    
    }

?>

