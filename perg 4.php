<?php
function sequenciacrescente($array)
{
  $count = 0; // contador de sequencias puladas
  $testados = []; // lista pra armazenas os testados e verificar o penultimo
  $maior = false;
 
  foreach($array as $numero)    
  {
    $count += count($testados) >= 1 && $numero <= $testados[count($testados) - 1] ? 1 : 0 ;
    $count += $maior !== false && $maior == $numero && !(count($array) <= 2 ) ? 1 : 0 ;
 
    $maior = $numero > $maior ? $numero : $maior;
    
    array_push($testados, $numero);
  }
 
  return $count > 1 ? false : true; // problema se tiver mais de um
}


//Se o valor é mostrado não condiz com o valor dado no enunciado, verificando se há falhas na função, no meu código houve 2 que não funcionaram.

echo (sequenciacrescente([1, 3, 2, 1]) != false ? '[1, 3, 2, 1] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 3, 2]) != true ? '[1, 3, 2] = False <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 2, 1, 2]) != false ? '[1, 2, 1, 2] = True<br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([3, 6, 5, 8, 10, 20, 15])!= false ? '[3, 6, 5, 8, 10, 20, 15] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 1, 2, 3, 4, 4])!= false ? '[1, 1, 2, 3, 4, 4] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 4, 10, 4, 2])!= false ? '[1, 4, 10, 4, 2] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([10, 1, 2, 3, 4, 5])!= true ? '[10, 1, 2, 3, 4, 5] = False <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 1, 1, 2, 3])!= false ? '[1, 1, 1, 2, 3] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([0, -2, 5, 6])!= true ? '[0, -2, 5, 6] = False <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 2, 3, 4, 5, 3, 5, 6])!= false ? '[1, 2, 3, 4, 5, 3, 5, 6] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([40, 50, 60, 10, 20, 30])!= false ? '[40, 50, 60, 10, 20, 30] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 1])!= true ? '[1, 1] = False <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 2, 5, 3, 5])!= true ? '[1, 2, 5, 3, 5] = False <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 2, 5, 5, 5])!= false ? '[1, 2, 5, 5, 5] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([10, 1, 2, 3, 4, 5, 6, 1])!= false ? '[10, 1, 2, 3, 4, 5, 6, 1] = True <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 2, 3, 4, 3, 6])!= true ? '[1, 2, 3, 4, 3, 6] = False <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([1, 2, 3, 4, 99, 5, 6])!= true ? '[1, 2, 3, 4, 99, 5, 6] = False <br>' . PHP_EOL : '' ) ;
echo (sequenciacrescente([123, -17, -5, 1, 2, 3, 12, 43, 45])!= true ? '[123, -17, -5, 1, 2, 3, 12, 43, 45] <br> = False' . PHP_EOL : '' ) ;
echo (sequenciacrescente([3, 5, 67, 98, 3])!= true ? '[3, 5, 67, 98, 3] = False <br>' . PHP_EOL : '' ) ;