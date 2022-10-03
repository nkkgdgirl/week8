<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<?php

    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo " ชื่อสมาชิก : " . $row ["name"] . "<br>" ;
        echo "ที่อยู่: " . $row ["address"] . "<br>" ;
        echo " อีเมลล์ : " . $row ["email"] . "<br>" ."<hr>";
    }

?>