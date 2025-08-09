<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les capitales</title>
</head>
<body>
    <?php
    #monCode
    
        function capitale($France, $japon, $allemagne, $italie, $angleterre, $autrePays){
            return "La capitale de la France est $France<br>";
            return "La capitale du japon est $japon<br>";
            return "La capitale de l'Allemagne est $allemagne<br>";
            return "La capitale de l'italie est $italie<br>";
            return "La capitale de l'Angleterre est $angleterre<br>";
            return "$autrePays";
    }
?>

   <!-- echo capitale('Paris', 'Tokyo', 'Berlin', 'Rome', 'Londres', 'Impossible de trouver la capitale pour ce pays');
    //erreur(s) dans mon code, return retourne une valeur puis quitte la fonction donc tous les returns suivants ne seront pas executés. Je dois donc coder un seul return.-->

  <?php

   #amelioration
    function uneCapitale($France, $japon, $allemagne, $italie, $angleterre, $autrePays) {

            $resultat = "La capitale de la France est $France<br>";
            $resultat .="La capitale du japon est $japon<br>";
            $resultat .="La capitale de l'Allemagne est $allemagne<br>";
            $resultat .="La capitale de l'italie est $italie<br>";
            $resultat .="La capitale de l'Angleterre est $angleterre<br>";
            $resultat .= "$autrePays";

            return $resultat;
    } 
  
    echo uneCapitale('Paris', 'Tokyo', 'Berlin', 'Rome', 'Londres', 'Impossible de trouver la capitale pour ce pays' );


?>
    
 <?php

      function TheCapitale($France, $japon, $allemagne, $italie, $angleterre, $autrePays) {

            $resultat = "La capitale de la France est $France<br>";
            $resultat .="La capitale du japon est $japon<br>";
            $resultat .="La capitale de l'Allemagne est $allemagne<br>";
            $resultat .="La capitale de l'italie est $italie<br>";
            $resultat .="La capitale de l'Angleterre est $angleterre<br>";
            $resultat .= "$autrePays";

            return $resultat;
    } 
  
    echo TheCapitale('Paris', 'Tokyo', 'Berlin', 'Rome', 'Londres', 'Impossible de trouver la capitale pour ce pays<br><br><br>' );

?>


 <?php

      #correction
      function oneCapital($pays) {
       $pays= strtoupper($pays);

        switch ($pays) {
            case 'FRANCE':
            return 'Paris';
            break;

            case 'JAPON':
            return 'Tokyo';
            break;

            case 'ALLEMAGNE':
            return 'Berlin';
            break;

            case 'ITALIE':
            return 'Rome';
            break;

            case 'ANGLETERRE':
            return 'Londres';
            break;

            default:
            return 'Impossible de trouver la capitale pour ce pays';

        }
      }

      echo oneCapital('JAPON');

?>
</body>
</html>