<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>API</title>
</head>
<body>  

<?php

/*echo "coucou";*/

//Préparation de l'appel d'API
$curl = curl_init();

//Paramétrage de l'appel d'API
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10, //max de redirections
  CURLOPT_TIMEOUT => 0, //au bout de combien de tps la requ^te tombe en échec : ici illimité
  CURLOPT_FOLLOWLOCATION => true, //je suis s'il y a des cgt d'URL
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, // version hhtp - en ce moment est dev le http 2, qui est une réponse instantané
  CURLOPT_CUSTOMREQUEST => 'GET', //type de request
));

//On exécute l'appel d'API
$response = curl_exec($curl);

//On ferme la liaison avec l'API
curl_close($curl);
 
//On décode la réponse de l'API
$responseJson = json_decode($response);
//On extrait l'objet "cat" de la réponse d'API
$cat = $responseJson[0];
//On extrait l'URL de l'image du chat
$imgUrl = $cat->url;
//Debug - Afficher le contenu d'une vaiable  --très mauvais pratique car il existe un debuggeur, mais tt le monde le fait
//var_dump($cat->url);


?>

<img src="<?php echo $imgUrl ?>"/>


</body>
</html>
