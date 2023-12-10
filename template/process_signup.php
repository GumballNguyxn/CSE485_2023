<?php
include("db_connect.php");
if(isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $cfpass = $_POST['cfpass'];

    try{
        if($pass != $cfpass){
            $error = "Confirm password does not match password";
            header("Location:signup.php?error=$error");
        }
        else{
            $sql = "SELECT * FROM users WHERE (username = '$user' OR email='$user')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $row = $stmt->fetch();
                $user_saved = $row['user'];
                if($user == $user_saved){
                    $error = "Username or Email has already existed";
                    header("Location:signup.php?error=$error");
                }else{
                    password_hash($pass, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO users(username,pass) VALUES ('$user', '$pass')";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $success = "Sign up successful!";
                    header("Location:login.php?success=$success");
                }
            }
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>