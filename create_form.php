<?php
require "database_connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (username, password) VALUES (:username, :password)";

    $stmt = $pdo->prepare($sql);
    $params = ["username" => $username, "password" => $password];
    $stmt->execute($params);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>

<body>
    <form method="POST" action="">
        <div>
            <h1>Username:</h1>
            <input placeholder="username" name="username">
        </div>
        <div>
            <h1>Password:</h1>
            <input placeholder="password" name="password">
        </div>
        <div>
            <button type="submit" name="submit">Submit </button>
        </div>
    </form>
</body>