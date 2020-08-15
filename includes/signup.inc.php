<?php
/*validates user input, checks if email already exists, inserts new input info into db*/

if(isset($_POST["signup-submit"])){ //checking if came here from click submit
    require 'dbh.inc.php';  //using the $conn variable

    //storing input values from html submit
    $username = $_POST['first_name'];  
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['password-repeat'];

    //validate user input beforehand
    if(empty($username) || empty($email) || empty($password)){
        header("Location: ../p6-signup.php?error=emptyfields&first_name=".$username."&mail=".$email); //if empty field, sends error back in header
        exit(); //stops script if error found
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../p6-signup.php?error=invalidmailname"); //checks if email and name are valid
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../p6-signup.php?error=invalidmail&first_name=".$username); //checks if email valid
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../p6-signup.php?error=name&email=".$email); //checks if name valid
        exit();
    }
    else if($password !== $passwordRepeat){
        header("Location: ../p6-signup.php?error=passwordcheck&first_name=".$username."&mail=".$email); //checks if password valid
        exit();
    }
    else {//initialize db statement / select db values
        $sql = "SELECT emailUsers FROM users WHERE emailUsers=?"; //prepare for every new SQL statement (?) here it's SELECT
        $stmt = mysqli_stmt_init($conn); //prepare statement; prepping the database $conn (stmnt = statement)
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../p6-signup.php?error=sqlerror"); //checks if statement prepare failed
            exit();
        }
        else {//checking if emailUsers already exists in database's 'users' table
            mysqli_stmt_bind_param($stmt, "s", $email); //add s if more than one string; one string because emailUsers=? has one '?'. Binding email to stmt
            mysqli_stmt_execute($stmt); //executing statement into database, will run email inside database for a match
            mysqli_stmt_store_result($stmt); //stores the result we got from database in stmt
            $resultCheck = mysqli_stmt_num_rows($stmt); //nb of rows matched, should be 0 or 1
            if($resultCheck > 0) {
                header("Location: ../p6-signup.php?error=usertaken&email=".$email); //checks if duplicate email
                exit();
            }
            else {//if no duplicate email above, we insert the new info into database
                $sql = "INSERT INTO users (first_nameUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)"; //new SQL statement INSERT
                $stmt = mysqli_stmt_init($conn); //same as above
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../p6-signup.php?error=sqlerror2"); //checks if statement prepare failed
                    exit();
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);    //hasing password (security: if hacker gets in db he'll see all the pw)
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd); //variables inserting
                    mysqli_stmt_execute($stmt);

                    header("Location: ../p6-signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt); //closing statement
    mysqli_close($conn); //closing db connection
}
else{
    header("Location: ../p6-signup.php"); //if user didnt come from 'submit', return to sign up
    exit();
}