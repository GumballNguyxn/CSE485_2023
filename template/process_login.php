<?php
include("db_connect.php");
if(isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    try{
        $sql = "SELECT * FROM users WHERE (username = '$user' OR email='$user')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $row = $stmt->fetch();
            $pass_saved = $row['pass'];
            if(password_verify($pass, $pass_saved)){
                session_start();
                $_SESSION['isLogined'] = $user;
                header("Location:admin/index.php");
            }else{
                $error = "Password invalid";
                header("Location:login.php?error=$error");
            }
        }else{
            $error = "Username not found";
            header("Location:login.php?error=$error");
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>