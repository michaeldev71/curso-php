<div class="titulo">Operações Aritméticas</div>

<?php 

echo 1+1, '<br>';
var_dump(1 + 1); 
echo '<br>';
echo 1+2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
var_dump (2*5);
echo '<br>';
echo 7/4, '<br>';
echo intdiv(7,4), '<br>'; //intdiv() mostra o resultado da divisão sem a parte decimal, sendo assim, força numero inteiro
echo round (7/4), '<br>'; //round() arredonda o resultado da divisão para o inteiro mais próximo
echo 7 % 4, '<br>'; //mostra o resto da divisão
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
//echo 7 / 0, '<br>'; se o numero for dividido por zero, o resultado é infinito
//echo intdiv(7, 0), '<br>'; //se o numero for dividido por zero, o resultado é um erro fatal
echo 4 ** 2, '<br>'; //o operador ** é usado para calcular a potência, ou seja, o resultado de 4 elevado a 2
// Prioridade de precedências de operadores em ordem no PHP:
// 1. Parênteses ()
// 2. Exponenciação (**)
// 3. Multiplicação (*) e Divisão (/) e Resto (%)
// 4. Adição (+) e Subtração (-)
echo '<p>preceência</p>';
echo 2 + 3 * 4, '<br>'; //o resultado é 14, pois a multiplicação tem precedência sobre a adição
echo (2 + 4) * 4, '<br>'; //o resultado é 24, pois os parênteses tem a maior precedência, ou seja, são resolvidos primeiro
echo 2 + 3 * 4 ** 2, '<br>'; //o resultado é 50, pois a exponenciação tem precedência sobre a multiplicação e a adição
echo ((2 + 3) * 4) ** 2, '<br>'; //o resultado é 400, pois os parênteses tem a maior precedência, ou seja, são resolvidos primeiro, depois a multiplicação em parenteses e por fim a exponenciação
