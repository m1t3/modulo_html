<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $numero = $_POST['numero'];

   function fibonacci($n) {
      $termo1 = 1;
      $termo2 = 1;
      $sequencia = [$termo1, $termo2];

      for ($i = 3; $i <= $n; $i++) {
         $prox = $termo1 + $termo2;
         array_push($sequencia, $prox);
         $termo1 = $termo2;
         $termo2 = $prox;
      }
      return $sequencia;
   }
   $resultado = fibonacci($numero);
   $htmlResultado = "<h3>Sequência de Fibonacci até o número $numero:</h3>";
   $htmlResultado .= "<ul>";
   foreach ($resultado as $valor) {
      $htmlResultado .= "<li>$valor</li>";
   }
   $htmlResultado .= "</ul>";
   echo $htmlResultado;
}
?>