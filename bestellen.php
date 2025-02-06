<?php 

require_once('./includes/db.php');

//controleren als er een id is en het een nummer is
if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Onjuist id');
} 

//id in de variabele id steken
$id = $_GET['id'];

$errors = [];
$name = $email = $address = $city = $amount = '';

if($_SERVER('REQUEST_METHOD') == 'POST') {
    
    include('./includes/bier-validatie.php');
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

        <p class="text-2xl font-semibold">Bier bestellen</p>

        <div class="mt-4 mb-12">
            <a href="index.php" class="text-blue-500 underline">Terug naar overzicht</a>
        </div>

        <div class="bg-green-500 text-green-100 p-4 rounded inline-block my-4">
            Jouw bestelling is geplaatst!
        </div>

        <p class="text-xl">
            Je plaatst een bestelling voor het bier: "Duvel".
        </p>

        <p>
            Brouwerij: <a href="brouwerij.php?id=1" class="text-blue-500 underline">Moortgat</a>
        </p>

        <div class="mt-12">
            <form method="post" class="grid gap-4 max-w-lg">
                <?php include('./includes/bestel-formulier.php') ?>
                <div class="flex items-center gap-4">
                    <input type="submit" value="Bestellen maar"
                        class="cursor-pointer p-2 bg-green-500 text-green-100 inline-block">
                    <a href="index.php" class="text-blue-500 underline">annuleren</a>
                </div>
            </form>
        </div>

        <?php include('./includes/footer.php') ?>
    </div>

</body>

</html>