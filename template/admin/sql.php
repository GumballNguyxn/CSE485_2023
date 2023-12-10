<?php 
    $sqluser = "SELECT COUNT(*) FROM users";
    $stmtuser = $conn->prepare($sqluser);
    $stmtuser->execute();
    $numberOfUser = $stmtuser->rowCount();
    $sqlcategory = "SELECT COUNT(*) FROM theloai";
    $stmtcate = $conn->prepare($sqlcategory);
    $stmtcate->execute();
    $numberOfCategory = $stmtcate->rowCount();
    $sqlauthor = "SELECT COUNT(*) FROM tacgia";
    $stmtauthor = $conn->prepare($sqlauthor);
    $stmtauthor->execute();
    $numberOfAuthor = $stmtauthor->rowCount();
    $sqlarticle = "SELECT COUNT(*) FROM baiviet";
    $stmtarticle = $conn->prepare($sqlarticle);
    $stmtarticle->execute();
    $numberOfArticle = $stmtarticle->rowCount();
?>