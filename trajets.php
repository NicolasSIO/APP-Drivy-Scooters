<?php

require_once 'header.php';

#Chargment de l'autoload
require_once './vendor/autoload.php';
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpClient\RetryableHttpClient;

#Récupération du client http Symfony
$client = new RetryableHttpClient(HttpClient::create(["verify_peer"=>false,"verify_host"=>false]));
#Requete à notre API pour récupérer les articless
$response = $client->request('GET', 'https://localhost:8000/api/trajets');

#Debbugage de la requete du navigateur
#dump($response->getContent());

#Récupeartion des articles
$trajets = $response->toArray();
?>

<div class="container">
    <div class="row">
        <div class="col-10 mt-4 mx-auto">
            <h3>Mes articles</h3>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Durée (min)</th>
                    <th scope="col">Coût (€)</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($trajets['hydra:member'] as $trajet) { ?>
                    <tr>
                        <td><?php
                            $arrivee = strtotime($trajet['arrivee']);
                            $depart = strtotime($trajet['depart']);
                            $duree = round(abs($arrivee - $depart) / 60, 2);
                            echo $duree;
                            ?>
                        </td>
                        <td>
                            <?=
                            $cout = 1 + ($duree * 0.15);
                            echo substr($cout, strlen($cout), 3);
                            ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php';
?>
