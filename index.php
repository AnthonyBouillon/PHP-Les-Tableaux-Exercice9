<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les tableaux Exercice 9</title>
  </head>
  <body>
    <?php
        $department = array('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme');
        //  tableau est comme sont index et sa valeur ?
        foreach ($department as $key => $value) {
          echo $key . '' .$value . ' ';
        }
     ?>
  </body>
</html>
