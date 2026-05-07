<div class="titulo">Tipos de conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX +1);
echo '<br>';
var_dump(1+1.0);
echo '<br>';
var_dump((float) 3); // aqui esta sendo convertido o valor inteiro para float (não perde informação)
echo '<br>';

// float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8); // aqui esta sendo convertido o valor float para inteiro (perde informação)
echo '<br>';
var_dump(intval('2.999')); // aqui esta sendo convertido o valor string para inteiro (perde informação) mesmo que seja um número, o valor é convertido para inteiro, ou seja, perde a parte decimal
echo '<br>';
var_dump((int) round(2.8)); // aqui esta sendo convertido o valor para inteiro, mas antes é arredondado para o valor mais próximo, ou seja, 3.0, e depois convertido para inteiro, ou seja, 3
echo '<br>';

// Operações com string
echo '<p> Strings</p>';
var_dump(3 + '2');
echo '<br>';
var_dump('3' + '2');
echo '<br>';
var_dump ("3" . 2); // aqui esta sendo concatenado o valor string com o valor inteiro, ou seja, o valor inteiro é convertido para string e depois concatenado, resultando em "32"
echo '<br>', is_string("3" . 2); // aqui esta sendo verificado se o resultado da concatenação é uma string, ou seja, o valor inteiro é convertido para string e depois concatenado, resultando em "32", que é uma string
echo '<br>', is_string("3" + 2);
echo '<br>';
var_dump(1 + (int)"cinco"); //aqui o resultado será int(1), mas não mostrará nenhum erro, pois o PHP tenta converter a string para um número, mas como a string não é um número, o resultado é 0, e o resultado final é 1 + 0 = 1
echo '<br>';
var_dump(1 + "5 cinco"); //aqui o resultado será int(6), pois o PHP tenta converter a string para um número, mas como a string começa com um número, o resultado é 5, e o resultado final é 1 + 5 = 6
echo '<br>';
var_dump(1 + "2+5"); //aqui o resultado será int(3), pois o PHP tenta converter a string para um número, mas como a string começa com um número, o resultado é 2, e o resultado final é 1 + 2 = 3
echo '<br>';
var_dump(1 + "3.2"); //aqui o resultado será float(4.2), pois o PHP tenta converter a string para um número, mas como a string começa com um número, o resultado é 3.2, e o resultado final é 1 + 3.2 = 4.2
echo '<br>';
var_dump(1 + "-3.2e2"); //aqui o resultado será float(-319), pois o PHP tenta converter a string para um número, mas como a string começa com um número, o resultado é -3.2e2, e o resultado final é 1 + (-3.2e2) = 1 + (-320) = -319
echo '<br>';
var_dump((int) "10.5"); //aqui o resultado será int(10), pois o PHP tenta converter a string para um número, mas como a string começa com um número, o resultado é 10, e o resultado final é 10, pois a parte decimal é descartada
echo '<br>';
var_dump((float) "10.5"); //aqui o resultado será float(10.5), pois o PHP tenta converter a string para um número, mas como a string começa com um número, o resultado é 10.5, e o resultado final é 10.5, pois a parte decimal é mantida
echo '<br>';