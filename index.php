<h1>Partie 2 : Les conditions</h1>

<h2>Exercice 1</h2>

<p>Créer une variable age et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>

<?php 
$age = 19;

if($age >= 18){
    echo 'vous êtes majeur !';
} else {
    echo 'vous êtes mineur !';
}
?>



<h2>Exercice 2</h2>
<p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.  
Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!. 

Bonus : L'écrire de deux manières différentes.</p>

<?php
$isEasy = false;

if($isEasy){
    echo 'C\'est facile !';
} else {
    echo 'C\'est difficile !';
}

echo '<br>' . '2eme facon' . '<br>';
echo ($isEasy) ? 'c\'est facile !' : 'C\'est difficile !';
?>


<h2>Exercice 3</h2>
<p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :

    Homme
    Femme


En fonction de l'âge et du genre afficher la phrase correspondante :

    Vous êtes un homme et vous êtes majeur
    Vous êtes un homme et vous êtes mineur
    Vous êtes une femme et vous êtes majeure
    Vous êtes une femme et vous êtes mineur  


Gérer tous les cas. </p>

<?php
$age = 31;
$gender = strtolower('Homme');

if($gender == 'homme' && $age>0){
    if($age >= 18 && $age < 120){
        echo 'vous êtes un homme et majeur';
    } else {
        echo 'vous êtes un homme et mineur';
    }
} else if($gender == 'femme' && $age>0) {
    if($age >= 18 && $age < 120){
        echo 'vous êtes une femme et majeure';
    } else {
        echo 'vous êtes une femme et mineure';
    }
} else {
    echo 'vous n\'avez pas renseigné au moins un des paramètres';
}
?>


<h2>Exercice 4</h2>
<p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.

Magnitude 	Phrase
1 	Micro-séisme impossible à ressentir.
2 	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.
3 	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.
4 	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.
5 	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.
6 	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.
7 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.
8 	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.
9 	Séisme capable de tout détruire sur une très vaste zone.

Gérer tous les cas.  
Utilser autre chose que des if else.</p>

<?php
$magnitude = 5;

switch($magnitude){
    case 1:
        echo 'Micro-séisme impossible à ressentir.';
    break;

    case 2:
        echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
    break;

    case 3:
        echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
    break;

    case 4:
        echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
    break;

    case 5:
        echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
    break;

    case 6:
        echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
    break;

    case 7:
        echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
    break;

    case 8:
        echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
    break;

    case 9:
        echo 'Séisme capable de tout détruire sur une très vaste zone.';
    break;

    default:
        echo 'La terre n\'a pas survécu';
}

?>


<h2>Exercice 5</h2>
<p>Traduire ce code avec des if et des else :</p>

    <"?php
      echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?>

<?php
    var_dump($gender);

    if($gender != 'Homme'){
        echo 'C\'est une développeuse !!!';
    } else { 
        echo 'C\'est un développeur !!!';
    }
?>


<h2>Exercice 6</h2>
<p>Traduire ce code avec des if et des else : </p>
   <"?php
      echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>

<?php
var_dump($age);
    if($age >= 18){
        echo 'Tu es majeur';
    } else {
        echo 'Tu n\'es pas majeur';
    }

?>



<h2>Exercice 7</h2>
<p>Traduire ce code avec des if et des else : </p>
    <"?php
      echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>

<?php
if(!$isok){
    echo 'c\'est pas bon !!!';
} else {
    echo 'c\'est ok !!';
}
?>

<h2>Exercice 8</h2>
<p>Traduire ce code avec des if et des else : </p>
    <"?php
      echo ($isOk) ? 'c\'est ok !!' : 'c\'est pas bon !!!';
    ?>

<?php
if($isOk == true){
    echo 'c\'est ok !!';
} else {
    echo 'c\'est pas bon !!!';
}
?>

