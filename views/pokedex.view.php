<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Pokedex</title>
</head>

<body>
    <ul>
        <?php foreach ($pokemons as $pokemon): ?>
            <li>
                <a href="/pokemon?id=<?= $pokemon->id; ?>">
                    <?= htmlspecialchars($pokemon->name); ?>
                </a>
                <img src="<?= $pokemon->getImageUrl(); ?>" alt="<?= htmlspecialchars($pokemon->name); ?>">
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>