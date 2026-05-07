<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true); //var_dump mostra o tipo da variável neste caso booleano
echo '<br>' . var_dump(False); //var_dump mostra o tipo da variável neste caso booleano
echo '<br>' . var_dump('false'); //var_dump mostra o tipo da variável neste caso string
echo '<br>' . is_bool(false); //is_bool mostra se a variável é do tipo booleano ou não, neste caso é do tipo booleano
echo '<br>' . is_bool('true'); //is_bool mostra se a variável é do tipo booleano ou não, neste caso não é do tipo booleano

// fazer as regras de conversões para booleano
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //apenas zero é considerado false, os demais números são considerados true (verdadeiros).
echo '<br>' . var_dump((bool) 20); // neste caso tera o valor verdadeiro, pois é diferente de zero
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.000000001); // neste caso tera o valor verdadeiro, pois é diferente de zero.
echo '<br>' . var_dump((bool) ""); // apenas string vazia é considerada false, as demais são consideradas true (verdadeiras).
echo '<br>' . var_dump((bool) "0"); // a string "0" é considerada false, mesmo que seja uma string não vazia, isso é uma peculiaridade do PHP.
echo '<br>' . var_dump((bool) " "); // todo resto é True, ou seja, mesmo que seja um espaço em branco, ele é considerado verdadeiro.
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");