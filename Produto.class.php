<?php
class Produto
{
    public $Codigo;
    public $Descricao;
    public $Quantidade;
    private $Preco;
    const MARGEM = 10;

    # m�todo construtor de um Produto
    function __construct($Codigo, $Descricao, $Quantidade, $Preco)
    {
          $this->Codigo    = $Codigo;
          $this->Descricao = $Descricao;
          $this->Quantidade= $Quantidade;
          $this->Preco     = $Preco;
    }

    # intercepta a obten��o de propriedades
    function __get($propriedade)
    {
          echo "Obtendo o valor de '$propriedade' :<br>\n";
          if ($propriedade == 'Preco')
          {
                 return $this->$propriedade * (1 + (self::MARGEM / 100));
          }
    }

    # intercepta a chamada � m�todos
    function __call($metodo, $parametros)
    {
        echo "Voc� executou o m�todo: {$metodo}<br>\n";
        foreach ($parametros as $key => $parametro)
        {
            echo "\tPar�metro $key: $parametro<br>\n";
        }
    }
}
?>
