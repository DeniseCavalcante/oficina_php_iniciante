<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php
      
               //variavel
               /*$cor = "amarelo";
               $cor = "vermelho";
               echo $cor;*/
      
               //var_dump mostra o tipo de dado: string, array, float...
               
               /* var_dump(23.45000); */
      
               /* $cor = "amarelo";
               var_dump($cor);*/
      
              /*$nome = "ana";
              echo "ola" . $nome . "!";*/
      
  
              //operadores
      
              /*$a = 3;
              $b = 5;
              
             /* $resultado = $a + $b;
              $resultado = $a - $b;
              
              echo $resultado;*/
      
      
             // estruturas de controle
      
             /*     $a = 5;
              $b = 2;
      
              if($a > $b){
                echo "a maior que b";
              }*/
      
              /* $a = 2;
              $b = 4;
      
              if($a > $b){
                echo "a é igual a b";
              } else if($a == $b){
                echo "a é igual a b";
              } else {
                echo "a é menor que b";
              }*/
      
      
      
              // estrutura de repetição
              /*  $i = 1;
      
              while($i < 10){
                $i = $i + 1;
                echo $i . "<br>";
              }*/
              
             /* $i = 1;
                
              while($i < 10) {
                $i = $i + 1;
                
               if($i%2 == 0) {
                 echo " o valor de $i é par<br>";
               } else {
                 echo "o valor de $i é impar<br>";
               }
              }*/
      
              
              /*for($i=1; $i < 10; $i++) {
                 echo "o valor de i é: $i<br>";
              }*/
     
      
              /*$nome = "ana";
      
              switch ($nome) {
                  case "ana";
                  echo "ola Ana";
                  break;
                  
                  case "pedro";
                  echo " ola pedro";
                  break;
                  
              default:
                  echo "nao sei quem é voce";
                         
              }
      
      
              function soma($a, $b){
                 $resultado = $a + $b;
              return $resultado;
              }
      
                $numero1 = 23;
                $numero2 = 20;
      
                $resultadoFuncao = soma($numero1, $numero2);
                echo $resultadoFuncao;*/
      
              /*$cores = ["vermelho", "azul"];
              echo $cores[1];*/
      
              /*$pessoa = ["nome" => "ana", "idade" => 23];
              echo $pessoa["nome"];*/
      
      
      
              $numeros = [1, 2, 3, 4];
              array_push($numeros, 3);
              echo $numeros[4];
      
              /*$frutas = array("maça", "laranja", "morango");
      
              foreach($frutas as $fruta) {
              echo "A fruta é" . $fruta . "<br>";
                
              }*/
      
              $comidas = array("batata", "chocolate");
              foreach($comidas as $comida){
              echo "$comida<br>";
              }
      
              array_push($comidas, "sopa de cebola");
      
              foreach($comidas as $comida){
              echo "$comida<br>";
              }
      
              array_pop($comidas);
      
              foreach($comidas as $comida){
              echo "$comida<br>";
             }
       
     
        ?>

    </body>
</html>