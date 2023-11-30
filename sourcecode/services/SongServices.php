<?php 
require_once ('/xampp/htdocs/project_php/btth01/models/Songs.php'); 
class SongServices {
    
    public function getSong($tenbaihat) {
        $host = 'localhost' ;
        $db = 'btth01_cse485' ;
        $use = 'root' ;
        $pass = '' ;
        try{
            $conn = new PDO("mysql:host=$host;dbname=$db",$use ,$pass) ;
           //buoc 2 : thuc hien truy van
            $sql = "SELECT ten_bhat, ten_tloai, tomtat, ten_tgia  
            FROM baiviet INNER JOIN tacgia on baiviet.ma_tgia = tacgia.ma_tgia
            INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai 
            WHERE ten_bhat = N'$tenbaihat'" ;
            $stmt = $conn->prepare($sql) ;
            $stmt->execute() ;
            $songs = $stmt->fetchAll() ;
            // $stmt = $conn->query($sql) ;

            // $songs = [];
            // while ($row = $stmt->fetch()) {
            //     $song = new Songs($row['ten_bhat'], $row['ten_tloai'], $row['tomtat'], $row['ten_tgia'],);
            //     $songs[]  = $song ;
            // }
            return $songs ;
            
        }catch(PDOException $e){
            echo $e->getMessage() ;
            echo 'conection failed!!!' ;
            return $song = [] ;
        }
        
}
    public function getAllSong() {
        $host = 'localhost' ;
        $db = 'btth01_cse485' ;
        $use = 'root' ;
        $pass = '' ;
        $conn = new PDO("mysql:host=$host;dbname=$db",$use ,$pass) ;
        //buoc 2 : thuc hien truy van
         $sql = "SELECT ten_bhat, ten_tloai, tomtat, ten_tgia  
         FROM baiviet INNER JOIN tacgia on baiviet.ma_tgia = tacgia.ma_tgia
         INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai "
          ;
        $stmt = $conn->query($sql) ;

            $songs = [];
            while ($row = $stmt->fetch()) {
                $song = new Songs($row['ten_bhat'], $row['ten_tloai'], $row['tomtat'], $row['ten_tgia'],);
                $songs[]  = $song ;
            }
            return $songs ;
    }
}
