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
        //je déclare mon tableau
        $monTableau=array('voiture', 5, 'toto',78, 'document');
        echo'<pre>';
        print_r($monTableau);
        echo'</pre>';

        echo $monTableau[2];
        echo '<br/>';

        foreach ($monTableau as $valeur) {
            echo $valeur.'<br/>';
        }

        $monTableauAssociatif=array(
            'clef'=>'valeur',
            'nom'=>'Smith',
            'prenom'=>'John',
            'age'=>'25',
        );

        echo'<pre>';
        print_r($monTableauAssociatif);
        echo'</pre>';

        echo $monTableauAssociatif['prenom'];
        echo'<br/>';

        $tailleDeMonTableau = sizeof($monTableauAssociatif);
        echo $tailleDeMonTableau;

        for($i = 0; $i < $tailleDeMonTableau; $i++){
            echo'<br/>';
            echo $i;
        }

    ?>

    </body>
  </html>

