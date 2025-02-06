<?php

    $name = checkInput($_POST['naam']);
    $description = checkInput($_POST['beschrijving']);
    $brewery = isset($_POST['brouwerij']) ? $_POST['brouwerij'] : '';
    $stock = checkInput($_POST['stock']);
    $price = checkInput($_POST['prijs']);

    if(empty($name)) {
        $errors['naam'] = "Naam is verplicht";
    }
    
    if(empty($description)) {
        $errors['beschrijving'] = "Beschrijving is verplicht";
    }

    if(!$brewery) {
        $errors['brouwerij'] = "Kies een brouwerij";
    }

    if(empty($stock)) {
        $errors['stock'] = "Stock is verplicht";
    }

    if(empty($price)) {
        $errors['prijs'] = "Prijs is verplicht";
    }