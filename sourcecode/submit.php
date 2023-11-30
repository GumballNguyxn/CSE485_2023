<?php 
    session_start();
    include('connect.php');
    if (isset($_POST['btLogin'])) 
    {
        if (isset($_POST['txtUser']) && isset($_POST['txtPass'])) {
            if (empty($_POST['txtUser']) && empty($_POST['txtPass'])){
                $message = 'Vui lòng điền username và password';
            } else {
                $username = $_POST['txtUser'];
                $password = $_POST['txtPass'];
            }
        }
        
        $sql = " SELECT * FROM users WHERE username= '".$username."' AND userpassword= '".$password."'";
        $stsm = $conn->prepare($sql);
        $stsm->execute();
        $users = $stsm->fetchAll();

        foreach ($users as $user):
            if ($user["username"] == $username){
                if ($user["password"] == $password){
                    $_SESSION['username'] = $username;
                    header('Location:index.php');
                }
                else {
                    echo "Mật khẩu không đúng. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }
            }
            else {
                echo "Tên tài khoản không đúng. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
        endforeach; 
    }
?>