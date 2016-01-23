<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Header</h1>
    <?php if(isset($text)): ?>
        <?php foreach($text as $item) : ?>
            <h2><a href="index.php?id=<?php echo $item['id']; ?>"> <?php echo $item['title'] ?></a></h2>
            <p><?php echo $item['post'] ?></p>
        <?php endforeach; ?>

    <?php endif; ?>


    <h6></h6>
</body>
</html>