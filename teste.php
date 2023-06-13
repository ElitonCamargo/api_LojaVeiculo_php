<?php
// http://www.htaccesseditor.com/pt.shtml#a_errorPage
require_once "./model/Montadora.php";
$montadora = new Montadora();

//  *** cadastrar ***
// $montadora->nome = "Chryslers";
// $montadora->logotipo = "logo_chrysler.png";
// var_dump($montadora->cadastrar(), $montadora->getErro());


// *** alterar ***
// $montadora->id = 1;
// $montadora->nome = "Volkswagen";
// $montadora->logotipo = "logo_volkswagen.png";
// var_dump($montadora->alterar());


// *** excluir ***
// $montadora->id = 11;
// var_dump($montadora->excluir());

// *** consultar todos com filtro ***
// var_dump($montadora->consultar('c'));


// *** consultar por id ***
// var_dump($montadora->consultarPorId(7), $montadora);


require_once './model/Categoria.php';
$categoria =  new Categoria();

// *** cadastrar ***
// $categoria->tipo = "E";
// $categoria->icone = "log_e.png";
// var_dump($categoria->cadastrar());

// *** alterar ***
// $categoria->id = 6;
// $categoria->tipo = "Esport";
// $categoria->icone = "logo_esport.png";
// var_dump($categoria->alterar());


// *** Excluir ***
// $categoria->id = 7;
// var_dump($categoria->excluir());


// *** consultar todos com filtro ***
// var_dump($categoria->consultar());


// *** consultar por id ***
// var_dump($categoria->consultarPorId(6), $categoria);



require_once "./model/Veiculo.php";
$veiculo = new Veiculo();

