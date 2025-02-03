<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title><?= htmlspecialchars($pokemon->name); ?></title>
</head>

<body>
    <h1><?= htmlspecialchars($pokemon->name); ?></h1>

    <img src="<?= $pokemon->getImageUrl(); ?>"
        alt="<?= htmlspecialchars($pokemon->name); ?>">

    <br>
    <a href="/">Tillbaka till Pokédex</a>
</body>

</html>

</html>