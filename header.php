<?php

#Chargment de l'autoload
require_once './vendor/autoload.php';
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\RetryableHttpClient;

#Récupération du client http Symfony
$client = new RetryableHttpClient(HttpClient::create(["verify_peer"=>false,"verify_host"=>false]));
#Requete à notre API pour récupérer les articless
$response = $client->request('GET', 'https://localhost:8000/api/users');

#Debbugage de la requete du navigateur
#dump($response->getContent());

#Récupeartion des articles
$users = $response->toArray();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinette</title>
    <script src = "sw.js"> </script>
    <script src = "index.js"> </script>
    <link rel = "manifest" href = "manifest.webmanifest">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header class="header">

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

        <ul class="menu">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./signin.php">Connexion</a></li>
            <li><a href="./signup.php">Inscription</a></li>
            <li><a href="./trajets.php">Trajets</a></li>
            <li><a href="./paiement.php">Paiement</a></li>
            <li><a href="./promotions.php">Promotions</a></li>
        </ul>

    </header>