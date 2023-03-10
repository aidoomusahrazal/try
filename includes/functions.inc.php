<?php 

function emptyinput($name, $email, $username, $password, $rpassword) {
    $result = null;

    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($rpassword) ) {
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function invalidEmail($email) {
    $result = null;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else {
        $result = false;
    }

    return $result;
}

function usernameExist($conn, $username) {
    $result = null;

    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    $stmt = mysqli_stmt_init($conn);

    if ( !mysqli_stmt_prepare($stmt, $sql) ) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData) ){
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function passwordMatch($password, $rpassword) {
    $result = null;

    if ($password !== $rpassword) {
        $result = true;
    }else {
        $result = false;
    }

    return $result;
}

function createUser($conn, $name, $email, $username, $password) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if ( !mysqli_stmt_prepare($stmt, $sql) ) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pages/signup.php?error=none");
    exit();
}