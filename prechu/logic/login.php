<?php
require_once 'db.php';

$login = trim(htmlentities($_POST['login']));
$pwd = trim(htmlentities($_POST['password']));


if( !empty($login)  && !empty($pwd) )
{
    $sql = 'SELECT login, password FROM users WHERE login = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login]);

    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if( $user )
    {
        if( password_verify($pwd, $user->password) )
        {
            header('Location: ../index.php');
            $_SESSION['user_login'] = $user->login;
        } else {
            die("Wrong inpust");
        }
    } else {
        die("User doesn't exist");
    }

} else {
    die("Wrong input");
}