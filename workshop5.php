<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div style="display:flex;">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()) : ?>
            <div style="padding: 15px; text-align: center">
                <a href="db.php?username=<?= $row["username"] ?>">
                    <img src='img/<?= $row["username"] ?>.jpg' width='100'>
                </a><br>
                <?= $row["username"] ?><br>
            </div>
        <?php endwhile; ?>
    </div>
</body>

</html>