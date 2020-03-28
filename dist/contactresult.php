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

</head>

<body>
<h1>Formulierverwerking</h1>
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

<p>
<a href="https://mydeveloper.sinners.be" class="btn btn-xl btn-light">Terug naar homepagina</a>
</p>

</body>

</html>