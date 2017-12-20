<?php
echo 'Mon premier script en PHP';
// on déclare une variable avec $
$fruit = "fraise";
$number = 12;
// mais si on inclus un chiffre dans une variable ça bloque
//$5toto = "test";
// cette variable ne fonctionne pas

//pour déclarer un tableau:
$voiture = array();
$voiture [0] = "Honda";
$voiture [1] = "Subaru";
$voiture [2] = "Toyota";
//ou
$voiture = array();
$voiture [] = "Honda";
$voiture [] = "Subaru";
$voiture [] = "Toyota";
// l'indexation ce fait automatiquement, on peut aussi personalisé l'indexation avec des termes unique (chaine de caractère)
//afficher une variable:
$date_du_jour = date("d-m-Y");
$heure_courante = date("H:i");
echo 'Nous sommes le : ';
echo $date_du_jour;
echo ' Et il est : ';
echo $heure_courante;
/*Voici la liste des paramètres possibles pour la fonction date() :

    a : "am" (matin) ou "pm" (après-midi)
    A : "AM" (matin) ou "PM" (après-midi)
    d : Jour du mois, sur deux chiffres (éventuellement avec un zéros) : "01" à "31"
    D : Jour de la semaine, en trois lettres (et en anglais) : par exemple "Fri" (pour Vendredi)
    F : Mois, textuel, version longue; en anglais, i.e. "January" (pour Janvier)
    h : Heure, au format 12h, "01" à "12"
    H : heure, au format 24h, "00" à "23"
    g : Heure, au format 12h sans les zéros initiaux, "1" à "12"
    G : Heure, au format 24h sans les zéros initiaux, "0" à "23"
    i : Minutes; "00" à "59"
    j : Jour du mois sans les zéros initiaux: "1" à "31"
    l : Jour de la semaine, textuel, version longue; en anglais, i.e. "Friday" (pour Vendredi)
    L : Booléen pour savoir si l'année est bissextile ("1") ou pas ("0")
    m : Mois; i.e. "01" à "12"
    n : Mois sans les zéros initiaux; i.e. "1" à "12"
    M : Mois, en trois lettres (et en anglais) : par exemple "Jan" (pour Janvier)
    s : Secondes; i.e. "00" à "59"
    S : Suffixe ordinal d'un nom
*/

// pour les variables prédéfini voir http://www.lephpfacile.com/cours/4-les-variables-predefinies

//pour concaténer une chaine de caractère:

$nom = "LA GLOBULE";
echo 'Bonjour ' . $nom . ' !';


?>