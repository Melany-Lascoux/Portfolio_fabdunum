<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pattaya|Indie Flower|Josefin Slab|Mate SC|Open Sans">
    <link href="portfolio.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Portfolio de Mélany Lascoux</title>
</head>
<body>
    <div class="title">
        <h1>Mélany Lascoux</h1>
            <h2>Bienvenue sur mon Portfolio</h2>
    </div>    


    <div class="navbar">
        <a href="profil.php" class="<?php if ($titre=="profil") {echo "active";}?>">Profil</a>
        <a href="competences.php" class="<?php if ($titre=="competences") {echo "active";}?>">Compétences</a>
        <a href="contact.php" class="<?php if ($titre=="contact") {echo "active";}?>">Contact<a>
    </div>