<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <?php
          //creation categories
          $marque = array ('Renault', 'Merco', 'Ferrari', 'Tesla');
          $couleur = array ('bleu', 'rouge', 'violet', 'orange');
          $immatriculation = array ('256AB34', '548EC85', '48RO94', '99PQ885');

          //affichage
          echo 'Voiture ' . $immatriculation[0] . ' de marque ' . $marque[0] . ' (couleur ' . $couleur[0] . ')'; 

          //saut de ligne
          echo "<br> <br>";

          //voiture-tableau
          $voituretableau = ['immatriculation' => '256AB34', 'marque' => 'Renault', 'couleur' => 'bleu'];

          //affichage
          echo print_r($voituretableau) . "<br>";
          echo var_dump($voituretableau) . "<br><br>";

          //affichage html
          echo "Voiture " . $voituretableau["immatriculation"] . " de marque " . $voituretableau["marque"] . " (couleur " . $voituretableau["couleur"] . ") <br>";

          //ajout d'autre voiture-tableau
          $voituretableau2 = ['immatriculation' => '786GZ65', 'marque' => 'Tesla', 'couleur' => 'rouge' ];
          $voituretableau3 = ['immatriculation' => '945KZ85', 'marque' => 'Citroën', 'couleur' => 'jaune'];
          $voituretableau4 = ['immatriculation' => '145AW54', 'marque' => 'Toyota', 'couleur' => 'vert'];
          $voituretableau5 = ['immatriculation' => '335LK01', 'marque' => 'Ferrari', 'couleur' => 'blanc'];

          echo "<br> <br>";

          //creation du tableau de voitures
          $voitures = [ $voituretableau , $voituretableau2, $voituretableau3, $voituretableau4, $voituretableau5 ];

          //affichage test
          echo var_dump($voitures) . "<br>";

          echo "<br> <br>";

          //affiachage voitures
          echo "<p>" . 'Liste des voitures :' . "<p>";
          foreach ($voitures as $cle => $voiture){
            echo "<ul>";
            echo "Voiture n° " . ($cle + 1) . " : <br>";
            foreach ($voiture as $key => $value) {
              echo $key . " : " . $value . "<br>";
            }
            echo "</ul>";
          }
        ?>
    </body>
</html> 