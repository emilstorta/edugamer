<?php
session_start();

/* Localhost database */
/*
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS =  '';
$DATABASE_NAME = 'login';
*/

/* Online database */
$DATABASE_HOST = 'k-grum.com.mysql';
$DATABASE_USER = 'k_grum_com';
$DATABASE_PASS =  '9dGu5mrgCqod37DbjPsziZM7';
$DATABASE_NAME = 'k_grum_com';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    die ('failed to connect to MySql: ' . mysqli_connect_error());
}

if (!isset($_POST['username']) OR !isset($_POST['password'])){
    die ('Udfyld venligst både brugernavn og kodeord');
} else {
    $stmt = $con->prepare('SELECT * FROM accounts WHERE username = "'. $_POST['username'] . '" AND password = "' . $_POST['password'] .'"');
    $stmt->execute();
    $stmt->store_result();
    

    if ($stmt->num_rows > 0) {
        $stmt->bind_result( $password);
        $stmt->fetch();
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        header('Location: home.php');
    
    } else {
        echo 'Incorrect username!';
        header("Location: index.php?l=f");
    }
}

$stmt->close();

?>