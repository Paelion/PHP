<?php

echo "------------------- EXO 1 ------------------- <br> <br>";
## Je voudrais pouvoir afficher "Je suis en cours de PHP" DANS UNE BALISE <p> HTML

?>
    <!doctype html>
    <body>
    <p>Je suis en cours de PHP</p>
    </body>
<?php


echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA VALEUR DE $a DANS UN INPUT HTML
$a = "IIM";

?>
    <!doctype html>
    <body>
    <input type="text" value="<?php echo $a ?>">
    <br>
    </body>
<?php

echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA VALEUR DE $a DANS LE HTML MAIS SANS UTILISER ECHO
## TIPS : https://stackoverflow.com/questions/2020445/what-does-mean-in-php
$a = "IIM";

?>
    <!doctype html>
    <body>
    <?= $a; ?>
    <br>
    </body>
<?php

echo "------------------- EXO 3 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE MON TABLEAU $a DANS UN ELEMENT <p> HTML
## !TIPS : UTILISER FOREACH
$a = ["Tomate", "Melon", "Banane", "Orange", "Fraise", "Mangue", "Poire", "Framboise"];

?>
    <!doctype html>
    <body>
    <?php
    foreach ($a as $item => $value) {
        echo "<p> $value </p> ";
    }
    ?>
    </body>
<?php


echo "------------------- EXO 4 ------------------- <br> <br>";
### JE VOUDRAIS CREE UN FORMULAIRE HTML AVEC COMME METHOD POST
### JE VEUX METTRE UN INPUT DEDANS AVEC COMME VALEUR LA VALEUR DE $a JE VEUX UN BOUTON QUI PERMET DE SOUMMETRE LE FORMULAIRE
### JE VEUX QUE VOUS AFFICHIEZ LA VALEUR DE L'INPUT QUAND ON SOUMMET LE FORMULAIRE
$a = "Midi";
?>
    <!doctype html>
    <body>
    <form method="post">
        <input name="midi" type="text" value="<?= $a; ?>">
        <input type="submit">
    </form>
    <?php echo $_POST["midi"] . "<br>" ?>
    </body>
<?php


echo "------------------- EXO 4 ------------------- <br> <br>";
### JE VOUDRAIS CREE UN FORMULAIRE HTML AVEC COMME METHOD POST
### JE VEUX METTRE UN SELECTEUR A PLUSIEURS ENTREE DEDANS AVEC ET UN BOUTON QUI PERMET DE SOUMMETRE LE FORMULAIRE
### JE VEUX QUE VOUS AFFICHIEZ TOUT LES VALEURS DU SELECTEUR SELECTIONNER <?P<aQUAND ON SOUMMET LE FORMULAIRE
$a = "Midi";
?>
    <!doctype html>
    <body>
    <form method="post">
        <select name="select">
            <option value="choix1">choix1</option>
            <option value="choix2">choix2</option>
            <option value="choix3">choix3</option>
        </select>
        <input type="submit">
    </form>
    <?php echo $_POST["select"] . "<br>" ?>
    </body>
<?php








