<?php 

try {
    $stmt = $pdo->query("SELECT * FROM brewery");
    $breweries = $stmt->fetchAll();
} catch (PDOException $e) {
    echo 'Error :' . $e->getMessage();
}
?>

<div>
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name='naam' value="<?= $name ?>" class="w-full bg-neutral-100 p-2 block">

    <?php if (isset($errors['naam'])) : ?>
    <div class="text-red-500">
        <?= $errors['naam'] ?>
    </div>
    <?php endif ?>
</div>

<div>
    <label for="beschrijving">Korte beschrijving:</label>
    <input type="text" id="beschrijving" name="beschrijving" value="<?= $description ?>"
        class="w-full bg-neutral-100 p-2 block">

    <?php if (isset($errors['beschrijving'])) : ?>
    <div class="text-red-500">
        <?= $errors['beschrijving'] ?>
    </div>
    <?php endif ?>
</div>

<div>
    <label for="brouwerij">Brouwerij:</label>
    <select id="brouwerij_id" name="brouwerij" class="w-full bg-neutral-100 p-2 block">
        <option disabled selected>-- Kies een brouwerij</option>
        <?php foreach($breweries as $brewery) : ?>
        <option value="<?=$brewery['id'] ?>"
            <?= (isset($beer['brewery_id'])) && ($beer['brewery_id'] == $brewery['id']) ? 'selected' : '' ?>>
            <?= $brewery['name'] ?>
        </option>
        <?php endforeach ?>
    </select>

    <?php if (isset($errors['brouwerij'])) : ?>
    <div class="text-red-500">
        <?= $errors['brouwerij'] ?>
    </div>
    <?php endif ?>
</div>

<div>
    <label for="stock">Stock:</label>
    <input min=0 type="number" id="stock" name="stock" value="<?= $stock ?>" class="w-full bg-neutral-100 p-2 block">

    <?php if(isset($errors['stock'])) : ?>
    <div class="text-red-500">
        <?= $errors['stock'] ?>
    </div>
    <?php endif ?>
</div>

<div>
    <label for="prijs">Prijs:</label>
    <input min=0 type="number" id="prijs" name="prijs" value="<?= $price ?>" class="w-full bg-neutral-100 p-2 block">

    <?php if (isset($errors['prijs'])) : ?>
    <div class="text-red-500">
        <?= $errors['prijs'] ?>
    </div>
    <?php endif ?>
</div>