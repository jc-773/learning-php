<?php
require "database_connection.php";

$id = $_GET["id"] ?? null;

if (!$id) {
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM posts WHERE id =  :id";
$stmt = $pdo->prepare($sql);
$params = ["id" => $id];
$stmt->execute($params);
$result = $stmt->fetch();

?>

<!DOCTYPE html>

<head>
    <title>
        Post <?= $result["id"] ?>
    </title>
</head>

<body>
    <div>
        <p> Post <?= $result["id"] ?></p>
    </div>
</body>