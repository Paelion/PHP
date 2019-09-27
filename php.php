<?php
<<<<<<< HEAD

echo "------------------- EXO 1 ------------------- <br><br>Je suis en cours de PHP <br>";
=======
require __DIR__ . '/vendor/autoload.php';
echo "------------------- EXO 1 ------------------- <br> <br>";
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732
## Je voudrais pouvoir afficher "Je suis en cours de PHP"
echo "Je suis en cours de PHP";

echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER "PLUS" si $a est superieure a 30;
$a = 31;
<<<<<<< HEAD
if ($a > 30){
    echo "PLUS <br>";
}

=======
if ($a > 30) {
    echo "PLUS";
}
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732

echo "------------------- EXO 2 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA TAILLE DE LA STRING QUE CONTIENT $a;
$a = "anticonstitutionnellement";
echo strlen($a). "<br>";

echo strlen($a);

echo "------------------- EXO 3 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
## SEULEMENT JE VOUDRAIS FAIRE UN SAUT DE LIT APRES CHAQUE ENTREE;
$a = ["Tomate", "Melon", "Banane", "Orange"];
<<<<<<< HEAD
foreach($a as $item => $value) {
    echo $value . "<br>";
}
=======

foreach ($a as $item) {
    echo $item;
    echo "<br> <br>";
}

>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732

echo "------------------- EXO 4 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
## JE VOUDRAIS AFFICHER LA CLE DU TABLEAU AVANT DAFFICHER LENTREE DU TABLEAU
## !TIPS regarder la propierete *key* de la fonction foreach
$a = ["Tomate", "Melon", "Banane", "Orange"];

<<<<<<< HEAD
foreach($a as $key => $value) {
    echo $key;
    echo $value . "<br>";
=======
foreach ($a as $key => $item) {
    echo "clé : $key, valeur : $item";
    echo "<br> <br>";
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732
}

echo "------------------- EXO 5 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
### MAIS SEULEMENT SI LA TAILLE DE LA STRING FAIT PLUS DE 6 ET EN REVENANT A LA LIGNE A CHAQUE FOIS
$a = ["Tomate", "Melon", "Banane", "Orange", "Fraise", "Mangue", "Poire", "Framboise"];

<<<<<<< HEAD
foreach($a as $item => $value) {
    if(strlen($value ) > 6){
        echo $value . "<br>";
    }
}


=======
foreach ($a as $item) {
    if (strlen($item) > 6) {
        echo $item;
        echo "<br>";
    }
}
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732

echo "------------------- EXO 6 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER CHAQUE ENTREE DE LA VARIABLE $a;
### MAIS SANS UTILISER _LE MOT CLE FOREACH ET EN REVENANT A LA LIGNE A CHAQUE FOIS
$a = ["Tomate", "Melon", "Banane", "Orange", "Fraise", "Mangue", "Poire", "Framboise"];
for ($i = 0; $i < count($a); $i++) {
    echo $a[ $i ];
    echo "<br>";
}
echo implode($a, " <br> ");


$i = 0;
while ($i < count($a)) {
    echo $a[ $i ];
    $i++;
}

 for($i = 0; $i < count($a); $i++) {
     echo $a[ $i ];
     echo "<br>";
 }
//ou

 while ($i <= count($a)){
     echo $a [$i];
     $i++;
 }

echo "------------------- EXO 7 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA VALEUR "name" du tableau $a
# TIPS : https://www.php.net/manual/fr/function.array.php
$a = ["name" => "Thomas"];
<<<<<<< HEAD
print_r($a["name"]);
echo "<br>";
=======
echo $a["name"];
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732

echo "------------------- EXO 7 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER LA PHRASE "Je suis à L"iim" EN UTILISANT LA VARIABLE $a DANS LA STRING;
$a = "IIM";
<<<<<<< HEAD
echo "je suis à l' $a . <br>";
=======
echo "je suis a l'" . $a;
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732


echo "------------------- EXO 8 ------------------- <br> <br>";
### JE VOUDRAIS REMPLACER "GOOGLE" PAR "AMAZON" DANS LA VARIABLE $a ET AFFICHER LA VARIABLE $a
$a = "GOOGLE est la plus grande entreprise du monde";
<<<<<<< HEAD
echo str_replace("GOOGLE","AMAZONE", $a) . "<br>";
=======
echo str_replace("GOOGLE", "AMAZON", $a);
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732


echo "------------------- EXO 9 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER "TERNAIRE" SI $a est EGAL A "PHP" SANS UTILISE IF OU ELSE
## !TIPS : CHERCHER LES CONDITIONS *TERNAIRES* EN PHP
$a = "PHP";

<<<<<<< HEAD
echo $a === "PHP" ? 'TERNAIRE' : 'faux';
echo "<br>";

=======
$a = ($a === "PHP") ? "TERNAIRE" : "FAUX";
echo $a;
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732

echo "------------------- EXO 10 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION HELLO
function hello()
{
    echo "Halo";
}
echo hello() . "<br>";


echo "------------------- EXO 11 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION HELLO2 ET RECUPERER LE RESULTAT DE LA FONCTION DANS UNE VARIABLE $a ET ENSUITE AFFICHER $a
function hello2()
{
    return "Halo";
}
$a = hello2();
echo $a . "<br>";

echo "------------------- EXO 12 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER UNE PHRASE AVEC TOUTES LES ENTREES DU TABLES $a AVEC UN ESPACE ENTRE CHAQUE MOT;
$a = ["Le", "PHP", "c", "'", 'est', 'super'];

foreach($a as $item => $value) {
    echo $value . " " ;
}

echo "<br>";

echo "------------------- EXO 13 ------------------- <br> <br>";
### JE VOUDRAIS RECUPERER UN TABLEAU DEPUIS LA STRING $a;
$a = "Le PHP c'est trop bien";

$b = array($a);
var_dump($b);
echo "<br>";

echo "------------------- EXO 14 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION DISPLAY QUI AFFICHER L'ARGUMENT PASSER A LA FUNCTION
## ATTENTION VOUS DEVEZ CREE LA FUNCTION DISPLAY

#display("Display");

function display()
{
    echo "Display";
}
echo display() . "<br>";

echo "------------------- EXO 15 ------------------- <br> <br>";
### JE VOUDRAIS EXECUTER LA FUNCTION AVERAGE QUI FERAS LA MOYENNE DU TABLEAU PASSER EN PARAMETRE
#TIPS : chercher la function array_sum() sur la doc de PHP

#average([2, 2, 4]);

$a = [2, 2, 4];
echo array_sum ($a) / count($a);
echo "<br>";




echo "------------------- EXO 16 ------------------- <br> <br>";
### JE VOUDRAIS AFFICHER
# "i = 1" si est $i égal 1
# "i = 2" si $i est égal a 2
# "i = 3" si $i est égal a 3
# SI AUCUN DES CAS ALORS AFFICHER = "Aucune des posibilités"
## je veux que vous utilisiez le SWITCH de php
## !TIPS : https://www.php.net/manual/fr/control-structures.switch.php
switch ($i) {
    case 0:
        echo "i égal 1";
        break;
    case 1:
        echo "i égal 2";
        break;
    case 2:
        echo "i égal 3";
        break;
    default:
        echo "Aucune des posibilités";
}
echo "<br>";


echo "------------------- EXO 17 ------------------- <br> <br>";
### Si j'execute la function inverse en lui donnant 0 en parametre, la function me renvoie une Exception, je voudrais pouvoir recuperer cette exception et l'afficher
## !TIPS : UTILISER TRY CATCH EN PHP : https://www.php.net/manual/fr/language.exceptions.php
function inverse($x)
{
    if (!$x) {
        throw new Exception('Division par zéro.');
    }
    
    return 1 / $x;
}

try {
    echo inverse(0);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage();
}

echo "<br>";


echo "------------------- EXO 18 ------------------- <br> <br>";
## JAI DEUX VARIABLES $a et $b
## JE VEUX EXECUTER UNE FONCTION QUI AFFECTERA A $a LA VALEUR DE $b ET$b LA VALEUR DE $a
## CETTE FUNCTION SAPPEL MY_SWAP
function my_swap($a, $b)
{

<<<<<<< HEAD
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
=======
}
>>>>>>> 1eb327489e9f26703dad73c70a1ced472a841732

$a = 10;
$b = 20;
my_swap($a, $b);






