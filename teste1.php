<?php
// exemplo chamada simples
function minhafuncao()
{
	   echo "minha fun��o! <br>\n";
}
call_user_func('minhafuncao');
// declara��o de classe
class MinhaClasse
{
	   function MeuMetodo()
	   {
		      echo "Meu m�todo! <br>\n";
	   }
}
// chamada de m�todo est�tico
call_user_func(array('MinhaClasse', 'MeuMetodo'));
// chamada de m�todo
$obj = new MinhaClasse();
call_user_func(array($obj, 'MeuMetodo'));
?>

