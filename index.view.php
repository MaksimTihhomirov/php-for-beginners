<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

    <h1>Laracasts</h1>

    <ul>
        <?php foreach ($topics as $topic) : ?>
            <li><?= $topic ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>