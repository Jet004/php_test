<?php
function createUser($conn, $email, $phone, $password){
    $sql = "INSERT INTO php_test.users(email, phone, password) VALUES(?, ?, ?)";
    $query = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $out = $query->execute(array($email, $phone, $password));
    return $out;
}

function getLoginCredentials($conn, $email){
    $sql = "SELECT email, password FROM php_test.users WHERE email = ?";
    $query = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $out = $query->execute(array($email));
    if($out === true){
        return $query->fetchAll();
    }
    return false;
}

?>