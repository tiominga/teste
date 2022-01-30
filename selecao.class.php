<?php

    include_once("conexao/conexao.class.php");  
    include_once("conexao/conexao_cep.class.php");  

    Class Selecao{

        private $query;
        private $componente;
        private $componente_hidden;
        private $base;
        private $div_ajuste;



        public function __get($campo){

            echo ("$campo<br>");
            return $this -> $campo;


        }

        public function __set($campo,$valor){

            $this -> $campo = $valor;            

        }



        private function setEliminaErros(){


            //procura por erros

            $query = $this -> query;

            $query=str_replace(", where"," where",$query); 
            $query=str_replace(",)",")",$query);
            $query=str_replace("§","%",$query); //por algum motivo se mandar % da erro então § neste caso substitui o %
            $query=str_replace("§","'",$query); 
           
            

            $this -> __set("query","$query");

        }


        private function setRetornaRes(){

            $query = $this -> query;

            $obj_conexao = new $this -> base;

            $conn = $obj_conexao -> getConexao();

            $res = $conn -> query("$query");          

            return $res;

        }


        private function setItens(){

            
            $res = $this -> setRetornaRes();

            $top = 0;
            $cont = 0;
            $itens="";
            $componente = $this -> componente;
            $componente_hidden = $this -> componente_hidden;

            while ($linha = $res -> FETCH(PDO::FETCH_ASSOC)){

                if ($cont % 2 == 0){ $cor = "cor_nao"; } else { $cor = "cor_sim"; }

                $cod_id = $linha["cod_id"];
                $valor = $linha["valor"];

                $itens.="<div class='selecao_item' onclick=\"cliclou_item('$componente','$componente_hidden',this.id,this.innerText);\" id=\"$cod_id\" style='position:absolute; background-color:$cor; height=10%; width:99%; left:0%; top:$top%'><lable class='font_combo' title=\"$valor\">$valor</label></div>";
                $cont++;
                $top=$top+14;

            }

            return $itens;
            
        }




        public function getItens(){


            $this -> setEliminaErros();

            return $this -> setItens();



        }







    }





?>