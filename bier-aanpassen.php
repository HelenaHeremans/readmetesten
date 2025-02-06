<?php 

require_once('./includes/db.php');

//controleren als er een id is en het een nummer is
if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('Onjuist id');
} 


//id in de variabele id steken
$id = $_GET['id'];

//alle id's van bieren ophalen
try {
    $stmt = $pdo->prepare("SELECT * FROM beers
    WHERE id=:id");
    $stmt->execute([
        ':id' => $id
    ]);
    $beer = $stmt->fetch();
} 
catch (PDOException $e) {
    echo 'Error :' . $e->getMessage();
}


//controleren als er een bier is
if(!$beer){
    die('Bier niet gevonden');
}


//variabelen invullen met de al bestaande info
$errors = [];
$name = $beer['name'];
$description = $beer['description'];
$price = $beer['price'];
$stock = $beer['stock'];
$brewery = $beer['brewery_id'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    include './includes/bier-validatie.php';

    //deze keer niet inserten zoals bij toevoegen maar de info updaten
    if(empty($errors)) {
        try{
            $stmt = $pdo->prepare("UPDATE beers
            SET name=:naam, description=:beschrijving, price=:prijs, stock=:stock, brewery_id=:brewery_id
            WHERE id=:id
            ");
            $stmt->execute([
                ':naam' => $name,
                ':beschrijving' => $description,
                ':prijs' => $price,
                ':stock' => $stock,
                ':brewery_id' => $brewery,
                ':id' => $id
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

        <p class="text-2xl font-semibold">Bier aanpassen</p>

        <div class="mt-4 mb-12">
            <a href="index.php" class="text-blue-500 underline">Terug naar overzicht</a>
        </div>

        <div class="">
            <form method="post" class="grid gap-4 max-w-lg">
                <?php include('./includes/bier-formulier.php') ?>
                <div class="flex items-center gap-4">
                    <input type="submit" value="Aanpassen"
                        class="cursor-pointer p-2 bg-orange-500 text-orange-100 inline-block">
                    <a href="index.php" class="text-blue-500 underline">annuleren</a>
                </div>
            </form>
        </div>

        <?php include('./includes/footer.php') ?>
    </div>

</body>

</html>