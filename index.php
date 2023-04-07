<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Document</title>
  </head>
  <body>  

  <?php
    //$variable = 100;
    //$variable2 = 50;
     //echo 'Hello world!'.$variabl2br()";
    
    $nom = 'Smith'; //chaine de caractere
    $prenom = 'John';//chaine de caractere
    $age = 18; //nombre entier
    $adresse = '2 rue de quelque-part, 44000, Nantes'; 
    $estEtudiant = true; //booléen

    echo 'Nom : '.$nom.'<br/>';
    echo 'Prénom : '.$prenom.'<br/>';
    echo 'Âge : '.$age.'<br/>';
    echo 'Adresse : '.$adresse.'<br/>';
    echo 'Est-il étudiant ? : '.$estEtudiant.'<br/>'; 
    //."<br/>"après on évitera, car pas propre
    //echo nl2br est mieux mais Marius ne veut pas qu'on voit ce type  aussi vite

    echo '<br/>';
    echo '-- Opérations mathématiques -- <br/>';
    $a = 5;
    $b = 10;
    $c = 15;

    $resultat = $a + $b;
    echo $resultat.'<br/>';

    $resultat2 = $a * $b;
    echo $resultat2;
    echo '<br/>';
    $resultat3 = $c - $b;
    echo $resultat3.'<br/>';

    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

  ?>

  </body>
  </html>


