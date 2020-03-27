<?php
function getCountries(){
    $pdo = new PDO("mysql:host=localhost;dbname=bulletinboard", "MyRoot", "");

//запрос с метками

//подготовить запрос
    $statement = $pdo->prepare("SELECT * FROM country ORDER BY name");

//выполняем запрос
    $statement->execute();
    $countries = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $countries;
}

function getCountryByID($id){
    $pdo = new PDO("mysql:host=localhost;dbname=bulletinboard", "MyRoot", "");

//запрос с метками

//подготовить запрос
    $statement = $pdo->prepare("SELECT * FROM country WHERE country.id =".$id);

//выполняем запрос
    $statement->execute();
    $countries = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $countries;
}