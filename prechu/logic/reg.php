<?php
require_once 'db.php';

$login = trim(htmlentities($_POST['login']));
$pwd = trim(htmlentities($_POST['password']));
$email = trim(htmlentities($_POST['email']));

if( !empty($login) && !empty($pwd) && !empty($email) )
{
    // CHECK FOR WRONG INPUT
    if( strlen($login) > 20 )
    {
        die("Password should be less than 20 characters.");
    }
    if( strlen($pwd) < 6 )
    {
        die("Password should be at least 6 characters long.");
    }

    if( !filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        die("Wrong email format");
    }

    $sql_check = 'SELECT EXISTS(SELECT login FROM users WHERE login = ?)';
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute([$login]);

    if( $stmt_check->fetchColumn() )
    {
        die("User with this login already exists");
    }
    
    //SIGN IN
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO users(login,password,email) VALUES(?,?,?)';
    $stmt = $pdo->prepare($sql);
    $params = [$login, $pwd, $email];
    $stmt->execute($params);

    header("Location: ../signin.php");
    
} else {
    echo "Wrong input";
}