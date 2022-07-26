<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include __DIR__ . '/database.php'; ?>
    <header>
        <div>
            <img src="https://www.geekslab.it/wp-content/uploads/2019/03/logo-spotify.png" class="logo" alt="logo">
        </div>
        <div>

        </div>
    </header>
    <div class="container_disk">
        <?php foreach($database as $disk) { ?>
            <div class="disc p-3 text-center">
                <img src=<?php echo $disk['poster']; ?> alt=<?php echo $disk['title']; ?> />
                <h3><?php echo $disk['title']; ?></h3>
                <p><?php echo $disk['author']; ?></p>
                <p class="year"><?php echo $disk['year']; ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>