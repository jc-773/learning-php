<?php
require "database_connection.php";

$stmt = $pdo->prepare("SELECT * from posts");

$stmt->execute();

$results = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
</head>

<body>
    <header>
        <h1>My blog example</h1>
    </header>
    <?php foreach ($results as $post) : ?>
        <div>
            <p>
                <?= $post["title"] ?>
            </p>
        </div>
    <?php endforeach ?>
</body>

</html>