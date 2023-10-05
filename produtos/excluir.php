<?php
use ExemploCrudPoo\Produtos;
require_once "../vendor/autoload.php";
$produto = new Produtos;
$produto->setId($_GET["id"]);
$produto->excluirProduto();
header("location:visualizar.php");