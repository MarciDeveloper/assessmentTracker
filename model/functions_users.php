<?php

//create a function to retrieve salt

function retrieve_salt($username)
{
    global $conn;
    $sql = "SELECT * FROM assess_tracker.student WHERE username = :username";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $result = $statement->fetch();
    $statement->closeCursor();
    return $result;
}

//create a function to login
function login($username, $password)
{
    global $conn;
    $sql = "SELECT * FROM assess_tracker.student WHERE username = :username AND password = :password ";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $result = $statement->fetchAll();
    $statement->closeCursor();
    $count = $statement->rowCount();	
    return $count;
}


// <!-- create a function to add a new student -->

function add_student($stFirstName, $stLastName, $username, $email, $password, $salt)
{
    global $conn;
    $sql = "INSERT INTO assess_tracker.student (username, password, salt, stFirstName, stLastName, email) VALUES (:username, :password, :salt, :stFirstName, :stLastName, :email)";
    $statement = $conn->prepare($sql);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':salt', $salt);
    $statement->bindValue(':stFirstName', $stFirstName);
    $statement->bindValue(':stLastName', $stLastName);
    $statement->bindValue(':email', $email);
    $result = $statement->execute();
    $statement->closeCursor();
    return $result;  
    
    }


?> 