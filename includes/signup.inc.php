<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $rpassword = $_POST['rpwd'];

    include_once '../includes/functions.inc.php';
    include_once '../includes/dbh.inc.php';

    if (emptyinput($name, $email, $username, $password, $rpassword) !== false ) {
        header("location: ../pages/signup.php?error?emptyinput ");
        exit();
    }
    if (invalidEmail($email) !== false ) {
        header("location: ../pages/signup.php?error?incorrectemail ");
        exit();
    }
    if (usernameExist($conn, $username) !== false ) {
        header("location: ../pages/signup.php?error?usernameExist ");
        exit();
    }
    if (passwordMatch($password, $rpassword) !== false ) {
        header("location: ../pages/signup.php?error?passwordMatch ");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);

}else {
    header("location: ../pages/signup.php");
}