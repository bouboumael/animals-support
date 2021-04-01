<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals Support PDO</title>
</head>

<body>
    <h1>Animal listing</h1>
    <button><a href="/?sort=name">Sort by name</a></button>
    <button><a href="/?sort=weight">Sort by weight</a></button>
    <section>
        <ul>
            <?php foreach ($animals as $animal) : ?>
                <li><?= $animal->image . $animal->name . ' - ' . $animal->weight . 'kg' ?></li>
            <?php endforeach ?>
        </ul>
    </section>
</body>

</html>