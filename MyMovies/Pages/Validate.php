@page
@{
    ViewData["Title"] = "Validate";
}

<?php

require_once('Connect.php');

//define a flag variable
$ok = true;

// grab the information from the form and also validate

if(empty(trim($_POST['username']))) {
    echo "<p> Please provide your username! </p>";
    $ok = false;
}
else {
    $uname = trim($_POST['username']);
}


if(empty(trim($_POST['password']))) {
    echo "<p> Please provide your password! </p>";
    $ok = false;
}
else {
    $upassword = trim($_POST['password']);
}

//validate the credentials

if($ok === true ) {
    //set up query to see if a username matches
    $sql = "SELECT user_id, username, password FROM users WHERE username = :username";
    //prepare
    $stmt = $db->prepare($sql);
    //bind
    $stmt->bindParam(':username', $uname);
    //execute
    $stmt->execute();
    if($stmt->rowCount() == 1){
        if($row = $stmt->fetch()) {
            $id = $row['user_id'];
            $user_name = $row['username'];
            $hashed_password = $row['password'];
            if(password_verify($upassword, $hashed_password)) {
                //password matches
                session_start();
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $user_name;
                //direct user to restricted page
                header('location:Games');
            }
        }
    }
    else {
        echo "<p> Sorry something went wrong! </p>";
    }
}
$stmt->closeCursor();

?>


