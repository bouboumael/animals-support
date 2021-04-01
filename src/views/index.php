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
    <section>
        <ul>
            <?php foreach ($animals as $animal) : ?>
                <li><?= $animal->image . $animal->name . '-' . $animal->weight ?></li>
            <?php endforeach ?>
        </ul>
    </section>
</body>

</html>