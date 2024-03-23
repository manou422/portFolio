<?php
    include "liseret.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title> PortFolio </title>
</head>
<body>
<div class="page">
        <h1> L'entreprise d'acceuil </h1>
    <?php
        $contenu = "Elle a été créée le 01/12/2021.
        Elle est constituée de10 à 19 salariés qui se compose de : 
        un commercial, un Customer Succes manager, la chef de marketing et communication, une assistante marketing et communication, un comptable, deux linguistes informaticiens, deux comptables- développeurs web et cinq développeurs web.
        Son application est un outil de comptabilité augmentée et de gestion financière qui permet d'accéder à une comptabilité en temps réel.
        Cette solution numérique vise à faciliter le travail des experts comptables et d'accéder à des données stratégiques pour les entreprises.";
        
        echo "<p>"."Je travaille actuellement chez Bobbee, petite startup de 10 à 19 salariés, qui a pour but de trouver des solutions pour les experts comptables et leurs clients.";
        $elements = explode("\n", $contenu);
        echo "<p><ul>";
        foreach ($elements as $element) {
            echo "<li>$element</li>";
        }
        echo "</ul></p>";
    ?>
        <p><a href="https://bobbee.co/"><button> Lien du site </button></a>
    </div>
</body>
</html>