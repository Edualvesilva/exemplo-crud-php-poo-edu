<?php
namespace ExemploCrudPoo;
 abstract class Utilitarios{
   
    public static function formatarPreco($valor):string {
        $valorFormatado = number_format($valor, 2, ",", ".");
        return "R$ " . $valorFormatado;
    }

    public static  function calcularTotal($valor,$qtd):string {
        $total = $valor * $qtd;
        return self::formatarPreco($total);
    }

}



?>