<!DOCTYPE html>
<html>
<head>
	<title>Mes notes perso de PHP</title>
</head>
<body>
	Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello world !";

          $prenom="Helmut"; 
          echo "Bonjour $prenom,\n ça farte ?";

          $texte = "hello" . 'World !';
          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;

          //saut de ligne
          echo"<br>";

          //cree un tableau
          $mon_tableau = array();
          $mon_tableau[0] = '11';
          $mon_tableau[1] = '22';
          $mon_tableau[2] = '33';

          //remplir un tableau 1
          $coordonnees['prenom'] = 'François';
          $coordonnees['nom'] = 'Dupont';
          echo ' prenom :' . $coordonnees['prenom'];
          echo ' <br> nom :' . $coordonnees['nom'];

          echo "<br>";

          //remplir un tableau 2
          $coordonnees = array ('prenom' => 'Lucas', 'nom' => 'Oui');

          echo "<br>";

          //remplir un tableau 3
          $tableau2 = array('1', '2', '3');
          echo 'tableau 2 : ';
          var_dump($tableau2);

          echo"<br>";

          //affichage recommandé
          var_dump($coordonnees);

          echo "<br><br>";

          echo 'prenom 2 : ' . $coordonnees['prenom'];

          //affichage si tableau d'entier :
          //echo 'prenom 3 : ' . $coordonnees[0];

          echo "<br><br>";

          foreach ($coordonnees as $cle => $valeur){
            echo 'foreach : ' . "$cle : $valeur <br>";
          }

          echo "<br>";

          for ($i = 0; $i < count($mon_tableau); $i++) {
            echo "$i : " . $mon_tableau[$i] . "<br>";
          }

          echo "<br>";

          //test ecriture
          $prenom = "Marc";

          echo '1 : ' . "Bonjour " . $prenom . "<br>";
          echo '2 : ' . "Bonjour $prenom" . "<br>";
          echo '3 : ' . 'Bonjour $prenom' . "<br>";
          echo '4 : ' . $prenom . "<br>";
          echo '5 : ' . "$prenom" . "<br>";

          echo "<br><br>";
          ?>
</body>
</html>