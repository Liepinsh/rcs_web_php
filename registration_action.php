<?php

session_start();

$errors = [];

if (isset($_POST['username']) && strlen($_POST['username']) == 0) {
    $errors[] = 'Please enter username.';
}
if (isset($_POST['password']) && strlen($_POST['password']) < 8) {
    $errors[] = 'Password must be at least 8 symbols long.';
}
if (isset($_POST['password'])
    && isset($_POST['password2'])
    && $_POST['password'] != $_POST['password2']
    ){
    $errors[] = 'Passwords must match.';
}
if (isset($_POST['firstName']) && strlen($_POST['firstName']) == 0) {
    $errors[] = 'Please enter first name.';
}
if (isset($_POST['lastName']) && strlen($_POST['lastName']) == 0) {
    $errors[] = 'Please enter last name.';
}

if (count($errors) > 0) {
    //rainy day scenario
    $_SESSION['flash']['errors'] = $errors;
    header('Location: index.php?page=register');
} else {
    //sunny day scenario
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rcs_web_server";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    if ($conn) {
        $sql = "INSERT INTO users SET 
            email = :email,
            password = :password, 
            name = :name, 
            surname = :surname
        ";
        $query = $conn->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        $query->execute([
            ':email' => $_POST['username'],
            ':password' => sha1($_POST['password']),
            ':name' => $_POST['firstName'],
            ':surname' => $_POST['lastName'],
             ]);
        // $query->exec($sql);
        $_SESSION['flash']['success'] = 'Registration was successfull!';
        header('Location: index.php?page=register');
    }
}