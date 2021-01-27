<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
echo date("m/d/Y");
echo "<br><br>";



## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
echo date("m-d-y");
echo "<br><br>";



## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
setlocale(LC_TIME, ["fr", "fra", "fr_FR"]);
echo strftime("%A %j %B %Y");
echo "<br><br>";

## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.

echo time()."<br>";
echo mktime(10, 0, 0, 7, 2, 2016);
echo "<br><br>";



##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.

$today = new DateTime("2021-01-27");
$otherDay = new DateTime("2016-05-16");
$interval = $otherDay->diff($today);

echo $interval->format("%d-%m-%Y");
echo "<br><br>";



##Exercice 6 Afficher le nombre de jours dans le mois de février de l'année 2016.

echo  date('t',mktime(0, 0, 0, 2, 1, 2016));
echo "<br><br>";



##Exercice 7 Afficher la date du jour + 20 jours.

$today->modify("+20 day");
echo $today->format("d-m-Y");
echo "<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$today = new DateTime("2021-01-27");
$today->modify("-22 day");
echo $today->format("d-m-Y");
echo "<br><br>";


## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date php</title>
</head>
<body>
    <label for="day">Jours: </label>
    <select name="day" id="day">
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
        <option value="">5</option>
        <option value="">6</option>
        <option value="">7</option>
        <option value="">8</option>
        <option value="">9</option>
        <option value="">10</option>
        <option value="">11</option>
        <option value="">12</option>
        <option value="">13</option>
        <option value="">14</option>
        <option value="">15</option>
        <option value="">16</option>
        <option value="">17</option>
        <option value="">18</option>
        <option value="">19</option>
        <option value="">20</option>
        <option value="">21</option>
        <option value="">22</option>
        <option value="">23</option>
        <option value="">24</option>
        <option value="">25</option>
        <option value="">26</option>
        <option value="">27</option>
        <option value="">28</option>
        <option value="">29</option>
        <option value="">30</option>
        <option value="">31</option>
    </select>
    <label for="month">Mois: </label>
    <select name="month" id="month">
        <option value="">Janvier</option>
        <option value="">Fevrier</option>
        <option value="">Mars</option>
        <option value="">Avril</option>
        <option value="">Mai</option>
        <option value="">Juin</option>
        <option value="">Juillet</option>
        <option value="">Aout</option>
        <option value="">Septembre</option>
        <option value="">Octobre</option>
        <option value="">Novembre</option>
        <option value="">Decembre</option>
    </select>

</body>
</html>