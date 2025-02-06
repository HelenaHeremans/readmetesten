<?php 

require_once('./includes/db.php');

try {
    $stmt = $pdo->query("SELECT * FROM beers");
    $beers = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'Error :' . $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bieren</title>
</head>

<body>

    <div class="container mx-auto">
        <h1 class="text-4xl mt-8">Bieren winkel</h1>

        <?php include('./includes/admin-menu.php') ?>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">

            <?php foreach($beers as $beer): ?>
            <?php
                $query = $pdo->prepare('SELECT * FROM brewery WHERE id = :id');
                $query->execute([':id' => $beer['brewery_id']]);
                $brewery = $query->fetch();
            ?>
            <div class="bg-neutral-100 p-4 flex flex-col relative">
                <div class="absolute top-0 inset-x-0 text-center transform -translate-y-1/2 bg-neutral-200 rounded">
                    <a href="bier-aanpassen.php?id=<?= $beer['id'] ?>" class="text-orange-500 underline">aanpassen</a>
                    <a href="bier-verwijderen.php?id=<?= $beer['id'] ?>" class="text-red-500 underline">verwijderen</a>
                </div>
                <div class="flex-1">
                    <header class="mb-4">
                        <p class="text-lg font-semibold"><?= $beer['name'] ?></p>
                        <p class="text-neutral-500 italic text-sm mb-2"><?= $beer['description'] ?></p>
                        <p>Brouwerij: <a href="brouwerij.php?id=<?= $beer['brewery_id'] ?>"
                                class="text-blue-500 underline"><?= $brewery['name'] ?></a></p>
                        <p>Prijs: &euro;<?= $beer['price'] ?> per flesje</p>
                    </header>


                    <?php if($beer['stock'] == 0) : ?>
                    <p class="text-red-500">Niet meer voorradig</p>
                    <?php elseif($beer['stock'] < 5) : ?>
                    <p class="text-orange-500">Nog maar 3 in stock!</p>
                    <?php else : ?>
                    <p class="text-green-500">Voorradig</p>
                    <?php endif ?>
                </div>
                <p class="mt-2"><a href="bestellen.php?id=<?= $beer['id'] ?>"
                        class="bg-green-500 text-green-100 px-2 py-1 rounded inline-block">Bestellen!</a></p>
            </div>
            <?php endforeach ?>


        </div>

        <?php include('./includes/footer.php') ?>
    </div>

</body>

</html>