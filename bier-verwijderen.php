<?php

require_once('./includes/db.php');


//controleren als er een id is en het een nummer is
if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Onjuist id');
} 

//id in de variabele id steken
$id = $_GET['id'];


try {
    
    //alle bieren ophalen waar id = id
    $stmt = $pdo->prepare("SELECT beers.*, 
    brewery.name AS brewery_name, 
    brewery.id AS brewery_id
    FROM beers
    JOIN brewery ON beers.brewery_id = brewery.id 
    WHERE beers.id = :id");
    $stmt->execute([
        ':id' => $id
    ]);
    $beer = $stmt->fetch();
    
    //als er geen bier gevonden is --> foutmelding
    if(!$beer) {
        die("Bier niet gevonden");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $stmt = $pdo->prepare("DELETE FROM beers WHERE id=:id");
        $stmt->execute([':id' => $id]);
        header('location: index.php');
        exit;
    }
} 
catch (PDOException $e) {
    echo 'Error :' . $e->getMessage();
}
//alle bijhorende orders verwijderen

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

        <p class="text-2xl font-semibold">Bier verwijderen</p>

        <div class="mt-4 mb-12">
            <a href="index.php" class="text-blue-500 underline">Terug naar overzicht</a>
        </div>

        <div class="">
            <form method="post" class="grid gap-8 max-w-4xl">
                <p class="text-xl">
                    Ben je zeker dat je <?= $beer['name'] ?> van brouwerij "<a
                        href="brouwerij.php?id=<?= $beer['brewery_id'] ?>"
                        class="text-blue-500 underline"><?= $beer['brewery_name'] ?></a>" wilt
                    verwijderen?
                </p>
                <p>
                    Deze handeling verwijderd ook alle bijhorende orders.
                </p>
                <div class="flex items-center gap-4">
                    <input type="submit" value="Verwijderen"
                        class="cursor-pointer p-2 bg-red-500 text-red-100 inline-block">
                    <a href="index.php" class="text-blue-500 underline">annuleren</a>
                </div>
            </form>
        </div>

        <?php include('./includes/footer.php') ?>
    </div>

</body>

</html>