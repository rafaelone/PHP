<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
  <body>
  <?php
      
      // Questão 1
      
      echo "<h2>Questão 1</h2>";
        echo "Letra C";
      echo "<br>";
      // Questão 2
      
      echo "<h2>Questão 2</h2>";
        echo "Letra D";
      echo "<br>";
      // Questão 3
      
      echo "<h2>Questão 3</h2>";
          $antonio= 1.50;
          $antonioC= 0.02;

          $bernardo = 1.20;
          $bernardoC= 0.03;
          
          $i=0;
          while ($bernardo < $antonio) {
            $bernardo += + $bernardoC;
            $antonio += + $antonioC;
            $i++;
          }

          echo "Bernardo sera maior que Anosntonio em ", number_format($final,2) ," Anos";
  
      echo "<br>";
      // Questão 4
      
      echo "<h2>Questão 4</h2>";
      
      echo "<br>";
      // Questão 5
      
      echo "<h2>Questão 5</h2>";
      
      echo "<br>";
      // Questão 6
      
      echo "<h2>Questão 6</h2>";
    
      echo "<br>";
  ?>

  </body>
  


</html>
