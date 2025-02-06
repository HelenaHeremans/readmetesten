<div class="text-orange-500 mb-6">
    Je moet de volgende bieren bijbestellen:
    <?php foreach($beers as $beer) :?>
    <?php
    $query = $pdo->prepare('SELECT * FROM brewery WHERE id = :id');
    $query->execute([':id' => $beer['brewery_id']]);
    $brewery = $query->fetch();
    ?>
    <?php if($beer['stock'] < 5) { echo $beer['name'] . ' (' . $brewery['name'] . '),'; 
    }?>
    <?php endforeach ?>
</div>

<div class="mt-4 mb-12 flex gap-4">
    <a href="bier-toevoegen.php" class="text-blue-500 underline">Nieuw bier toevoegen</a>
    <a href="orders-beheren.php" class="text-blue-500 underline">Orders beheren</a>
</div>