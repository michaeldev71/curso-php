<div class="titulo">Desafio String</div>

<?php 

// Enunciado:
// Avliando o método da documentação string,
// qual o método que a posição do texto 'abc'
// na string 'AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>'; // 
echo stripos('!AbcaBcabc', 'abc') . '<br>'; // stripos é case insensitive, ou seja, não diferencia maiúscula de minúscula
echo strpos (strtolower('!AbcaBcabc'), 'ABC') . '<br>'; // outra forma de fazer a mesma coisa, convertendo tudo para minúsculo