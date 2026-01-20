<?php
$isLoggedIn = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basic PHP demo</title>
</head>

<body>
    <div id="1">
        <?php if ($isLoggedIn) : ?>
            <h1>You are logged in</h1>
        <?php else : ?>
            <h1>You ain't logged in</h1>
        <?php endif; ?>
    </div>
</body>

</html>