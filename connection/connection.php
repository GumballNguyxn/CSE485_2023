<?php 
$host = 'localhost' ;
$db = 'btth01_cse485' ;
$use = 'root' ;
$pass = '' ;
//buoc 1 ket noi DB server
    try{
        $conn = new PDO("mysql:host=$host;dbname=$db",$use ,$pass) ;
        //buoc 2 : thuc hien truy van
        // $sql = " SELECT * FROM baiviet" ;
        // $stmt = $conn->prepare($sql) ;
        // $stmt->execute() ;
        // $baiviet = $stmt->fetchAll() ;
        // print_r($baiviet)  ;
    }catch(PDOException $e){
        echo $e->getMessage() ;
        echo 'conection failed!!!' ;
    }

?>