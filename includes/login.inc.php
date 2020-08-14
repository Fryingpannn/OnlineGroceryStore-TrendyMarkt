<?php

if(isset($_POST['login-submit'])){ //checking if user got here from submit button and not from URL
    require 'dbh.inc.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    if(empty($email) || empty($password)){
        header("Location: ../p5-signin.php?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){ //checking if $sql is good to go with $stmt, prepare statement
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{ //grab info we got from $sql;
            mysqli_stmt_bind_param($stmt, "s", $email); //include statement that we want to send ($stmt) + tell what kind of data sent + actual data to bind
            mysqli_stmt_execute($stmt); //executing previous params
            $result = mysqli_stmt_get_result($stmt); //info we got from db are now in $result (matches?)
            if($row = mysqli_fetch_assoc($result)){ //storing $result into an associative array to allow php manipulation
                $pwdCheck = password_verify($password, $row['pwdUsers']); //checking if user entered pwd is same as the one in db. (will hash the user input pwd prior)
                if($pwdCheck == false){
                    header("Location: ../p5-signin.php?error=wrongpwd");
                    exit();
                }
                else if($pwdCheck == true){ //we want lock in user if success login: need session, global variable that has info of user.
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userName'] = $row['first_nameUsers'];
                    $_SESSION['userEmail'] = $row['emailUsers'];

                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../p5-signin.php?error=wrongpwd");
                    exit();
                }
            }
            else{ //if $result is empty
                header("Location: ../p5-signin.php?error=emailDNE");
                exit();
            }
        }
    }
}
else {
    header("Location: ../index.php");
    exit();
}