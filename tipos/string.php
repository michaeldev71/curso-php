<div class="titulo">String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu Também");
echo '<br>';

// concatenação
echo ("Nós também" . ' somos' . '<br>'); // concatenação com ponto
echo ("Número é " . 123);
echo '<br>' , "Também aceito", " virgulas";

echo '<br>';
echo '"Teste"' . "'teste'" . ' \'Teste\' ' . "\"Teste\" " . "\\";

print("<br>Também existe a Função print");
print "<br>Também existe a Função print";

// algumas funções para String
echo '<br>' . strtoupper('maximizado'); // deixa tudo maiusculo
echo '<br>' . strtolower('MINIMIZADO'); // deixa tudo minusculo
echo '<br>' . ucfirst('só a primeira letra maiúscula'); // só a primeira letra maiuscula
echo '<br>' . ucwords('todas as palavras'); // todas as palavras com a primeira letra maiúscula
echo '<br>' . strlen('Quantas letras?'); // conta a quantidade de caracteres
echo '<br>' . mb_strlen("Eu Também", "UTF-8"); // conta a quantidade de caracteres sem considerar o acentos
echo '<br>' . substr('Só uma parte mesmo', 7,6); // recorta a string, começando no 7 e pegando 6 caracteres
echo '<br>' . str_replace('isso', 'aquilo', 'troca isso isso'); // troca a palavra isso por aquilo