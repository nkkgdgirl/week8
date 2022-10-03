<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); ?>
<html>

<head>
    <meta charset="utf-8">
</head>
<?php

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<div style="display:flex">
    <div>
        <img src='img/<?= $row["username"] ?>.jpg' width='200'>
    </div>
    <div style="padding: 15px">
        <h2><?= $row["username"] ?></h2>
        ชื่อสมาชิก: <?= $row["name"] ?><br>
        ที่อยู่ :<?= $row["address"] ?><br>
        อีเมล์ :<?= $row["email"] ?>
    </div>
</div>
</body>

</html>