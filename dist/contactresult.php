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
    echo "<p> Ingevuld bij telefoonnummer: " . $_POST["onderwerp"] . "</p>\n";
} else {
    echo "<p> Onderwerp werd niet ingevuld </p>\n";
}

if (isset($_POST["vraag"]) && $_POST["vraag"] != "") {
    echo "<p> Ingevuld bij vraag: " . $_POST["vraag"] . "</p>\n";
} else {
    echo "<p> Er is geen vraag ingevuld </p>\n";
}