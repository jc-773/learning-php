<?php
require "database_connection.php";

$stmt = $pdo->prepare("SELECT * from posts");

$stmt->execute();

$posts = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, intial-scale=1.0">
    <script src="https://cdn.tailwinds.com">
    </script>
    <title>Blog</title>
</head>

<body class="bg-gray-100">
    <header>
        <h1>My blog example</h1>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <?php foreach ($posts as $post) : ?>
            <div class="md my-4">
                <div class="rounded-lg shadow-md">
                    <div class="p-4">
                        <h2 class=" text-xl font-semibold">
                            <a href="post.php?id=<?= $post['id'] ?>"> <?= $post["title"] ?></a>
                        </h2>
                        <p class="text-gray-700 text-lg mt-2"><?= $post["body"] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <a href="create_form.php"> FORM EXAMPLE </a>
</body>

</html>