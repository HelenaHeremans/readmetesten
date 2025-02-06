<?php 

require('./includes/db.php');

$errors = [];
$name = $description = $brewery = $stock = $price = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    include './includes/bier-validatie.php';

    if(empty($errors)) {
        try{
            $stmt = $pdo->prepare("INSERT INTO beers
            (name, description, price, stock, brewery_id)
            VALUES (:naam, :beschrijving, :prijs, :stock, :brewery_id)
            ");
            $stmt->execute([
                ':naam' => $name,
                ':beschrijving' => $description,
                ':prijs' => $price,
                ':stock' => $stock,
                ':brewery_id' => $brewery
            ]);
            header('location: index.php');
            exit;
        }
        catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        
    }

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

        <p class="text-2xl font-semibold">Bier toevoegen</p>

        <div class="mt-4 mb-12">
            <a href="index.php" class="text-blue-500 underline">Terug naar overzicht</a>
        </div>

        <div class="">
            <form method="post" class="grid gap-4 max-w-lg">
                <?php include('./includes/bier-formulier.php') ?>
                <div class="flex items-center gap-4">
                    <input type="submit" value="Toevoegen"
                        class="cursor-pointer p-2 bg-green-500 text-green-100 inline-block">
                    <a href="index.php" class="text-blue-500 underline">annuleren</a>
                </div>
            </form>
        </div>

        <?php include('./includes/footer.php') ?>
    </div>

</body>

</html>