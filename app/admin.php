<?php
function login($username,$password) { 
    include_once 'sql.php';

    $db = connect();
    $row = getLogin($db, $username);

    if($row === false) {
        return -1;
    }
    
    $hashedPwdCheck = password_verify($password, $row['pass']);
    if($hashedPwdCheck == false) {
        return -1;
    } elseif ($hashedPwdCheck == true) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['user'];
        return 0;
    }

}