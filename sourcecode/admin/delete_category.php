<?php
require 'connect.php';
    
$id = $_GET['id'];

$sql = "DELETE FROM theloai WHERE ma_tloai = :id";

try {
    $statement = $connect->prepare($sql);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    header("Location: category.php");
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

?>