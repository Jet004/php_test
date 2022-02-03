<?php
require $_SERVER["DOCUMENT_ROOT"].'/model/userModel.php';

if($_GET['page'] === 'register'){
    if(isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['confirm'])){ 
        if($_POST['password'] === $_POST['confirm']){
            $res = createUser($conn, $_POST['email'], $_POST['phone'], $_POST['password']);
            echo "Registration successful: please <a href='?page=login'>log in</a> to continue";
        } else {
            echo "Password fields must match";
        }
    }
}

if($_GET['page'] === 'login'){
    if(isset($_POST['email']) && isset($_POST['password'])){ 
        $res = getLoginCredentials($conn, $_POST['email']);
        if(count($res) === 1){
            if($res[0]['password'] === $_POST['password']){
                $_SESSION['loggedIn'] = true;
                echo "Login successful! But there isn't anything else to do on this app. You can't even log out! But we did set some seesion variables.";
            } else {
                echo "Login unsuccessful. Username or password incorrect.";
            }
        } else {
            echo "Unexpected Error: Please contact the site administrator if this problem persists";
        }  
       
    }
}

?>