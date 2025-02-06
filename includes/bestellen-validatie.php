<?php 

$name = checkInput($_POST['naam']);
$email = checkInput($_POST['email']);
$address = checkInput($_POST['straat']);
$city = isset($_POST['gemeente']) ? $_POST['gemeente'] : '';
$amount = checkInput($_POST['aantal']);

if(empty($name)) {
    $errors['naam'] = "Naam is verplicht";
}

if(empty($email)) {
    $errors['email'] = "Email is verplicht";
}

if(empty($address)) {
    $errors['straat'] = "Vul je adress in";
}

if(!$city) {
    $errors['gemeente'] = "Gemeente is verplicht";
}

if(empty($amount)) {
    $errors['aantal'] = "Aantal is verplicht";
}