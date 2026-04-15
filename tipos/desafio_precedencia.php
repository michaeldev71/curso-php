<div class="titulo">Desafio de Precedência</div>
<?php
echo '<p>1. Qual o valor será impresso?</p>';
$denominador = (-8 + 2 ** 3);

if ($denominador == 0) {
    echo "Não é possível dividir por zero<br>";
} else {
    echo 2 + 5 * 3 + (12 / 6) / $denominador;
}
echo '<p>O resultado dara INF</p>';

echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a)', (1+2) * 20 - 15, '<br>';
echo 'b)', 4 * 5 ** 2, '<br>'; echo '<p>este é o resultado</p>';
echo 'c)', 2 ** 3 ** 4 / 1e25, '<br>';
echo 'd)', 3 + (3 * 8) / 2 - 3;
