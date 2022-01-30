<?php

include_once("selecao.js");
include_once("cabecalho.php"); 
include_once("selecao.class.php"); 

$query=$_GET["query"];
$componente=$_GET["componente"];
$componente_hidden=$_GET["componente_hidden"];

$obj_selecao = new Selecao();

$obj_selecao -> __set("query","$query");
$obj_selecao -> __set("componente","$componente");
$obj_selecao -> __set("componente_hidden","$componente_hidden");

if (substr_count($query,'from relatorios') != "False" ){

  $obj_selecao -> __set("base","ConexaoCep");

}else{

  $obj_selecao -> __set("base","Conexao");

}

if (isset($_GET["div_ajuste"])){
  $div_ajuste=$_GET["div_ajuste"];
  $obj_selecao -> __set("div_ajuste","$div_ajuste");
}
else{

  $obj_selecao -> __set("div_ajuste","0");

}

$itens = $obj_selecao -> getItens();

echo("<script>

      
        alert('rodou');
        
        
     </script>");

?>