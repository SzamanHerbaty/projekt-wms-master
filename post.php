<?php
include_once('functions.php');
include_once('database.php');
$id = $_GET['id'] ?? -1;
$post = getPost($id);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?> - <?=$post['title']?></title>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
</head>
<body>
    <?php
    printNavbar();
    ?>
    <main class="container mt-5">
        <h2><?=$post['title']?></h2>
        <h5 class="text-muted"><?=$post['categoryName']?></h5>
        <h5 class="text-muted"><?=$post['firstName']?> <?=$post['lastName']?>, <?=$post['createdAt']?></h5>
        <p>
            <?=$post['content']?>
        </p>
    </main>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>