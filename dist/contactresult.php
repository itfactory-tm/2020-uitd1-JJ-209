<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyDeveloper - Formulierverwerking</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#f38800">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#f6f6f6">
 <!-- CSS: Bootstrap, stylish portfolio, FA5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="/css/stylish-portfolio.min.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:800&display=swap" rel="stylesheet">
    <!--    CSS: Bootstrap-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- CSS: eigen stylesheet -->
    <link rel="stylesheet" href="/css/webBureau.css">


</head>

<body>
<div class="container">
<h1 style="color:orangered">Formulierverwerking</h1>
<hr>
<?php
    if (isset($_POST["voornaam"]) && $_POST["voornaam"] != "") {
        echo "<p> Ingevuld bij voornaam: " . $_POST["voornaam"] . "</p>\n";
    } else {
        echo "<p> Voornaam werd niet ingevuld </p>\n";
    }

if (isset($_POST["achternaam"]) && $_POST["achternaam"] != "") {
    echo "<p> Ingevuld bij achternaam: " . $_POST["achternaam"] . "</p>\n";
} else {
    echo "<p> Achternaam werd niet ingevuld </p>\n";
}

if (isset($_POST["email"]) && $_POST["email"] != "") {
    echo "<p> Ingevuld bij email: " . $_POST["email"] . "</p>\n";
} else {
    echo "<p> Email werd niet ingevuld </p>\n";
}

if (isset($_POST["telefoonnummer"]) && $_POST["telefoonnummer"] != "") {
    echo "<p> Ingevuld bij telefoonnummer: " . $_POST["telefoonnummer"] . "</p>\n";
} else {
    echo "<p> Telefoonnummer werd niet ingevuld </p>\n";
}

if (isset($_POST["onderwerp"]) && $_POST["onderwerp"] != "") {
    echo "<p> Ingevuld bij onderwerp: " . $_POST["onderwerp"] . "</p>\n";
} else {
    echo "<p> Onderwerp werd niet ingevuld </p>\n";
}

if (isset($_POST["vraag"]) && $_POST["vraag"] != "") {
    echo "<p> Ingevuld bij vraag: " . $_POST["vraag"] . "</p>\n";
} else {
    echo "<p> Er is geen vraag ingevuld </p>\n";
}
?>

<h3>
<a class="btn btn-primary btn-xl js-scroll-trigger" href="../index.html" class="btn btn-xl btn-light">Terug naar homepagina</a>
</h3>
</div>
</body>

</html>