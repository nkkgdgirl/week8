<?php
    $pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <form action="">
        <input type="text" name="keyword">
        <input type="submit">
    </form>
    <div style="display:flex">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
        if (!empty($_GET))
            $value = '%' . $_GET["keyword"] . '%';
        $stmt->bindParam(1, $value);
        $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
            <div style="padding: 15px; text-align: center">
                <img src='img/<?= $row["username"] ?>.jpg' width='100'> <br>
                ชื่อสมาชิก: <?= $row["name"] ?><br>
                ที่อยู่ :<?= $row["address"] ?><br>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>