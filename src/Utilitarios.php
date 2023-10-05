<?php
namespace ExemploCrudPoo;
 class Utilitarios{
   
    public static function formatarPreco($valor):string {
        $valorFormatado = number_format($valor, 2, ",", ".");
        return "R$ " . $valorFormatado;
    }

    public function calcularTotal($valor,$qtd):string {
        $total = $valor * $qtd;
        return $this->formatarPreco($total);
    }

}



?>