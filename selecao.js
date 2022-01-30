<script>
            
            
          
            
            function  cliclou_item(componente,componente_hidden,id,texto)
            {
                  
                    //coloca o valor do select dentro do input text
                    window.parent.document.getElementById(componente).value=texto;
                    
                    //coloca o valor do select no componente escondido
                    window.parent.document.getElementById(componente_hidden).value=id;

                    
                    
                   //coloca o foco sempre no componente que recebe o valor (escondido) para o caso de querer simular o onchange que é horrível no javascript, como é escondido o usuário não pode entrar, então sei que mudou
                    window.parent.document.getElementById(componente_hidden).focus();                    
                  
                    
                    
                    //esconde o select (div dele)  afinal o usuário já escolheu
                    window.parent.document.getElementById('selecao').style.display = 'none';
       
                     
            }

            function selecao_mostra_ajuste(div){

                        window.parent.div_mostra(div);
                        window.parent.document.getElementById('selecao').style.display='none';

            }


            function selecao_filtra(){


                        let items = parent.frame_selecao.document.getElementById('dv_selecao_infovet_itens').innerHTML;
                        alert(items);

                        let html = window.parent.document.getElementById('frame_selecao').contentWindow.document.body.innerText;
                        var arr_itens = html.split("@;@");
                        
                        alert( arr_itens[3] ); // irá imprimir: Usando

            }


            function selecao_aciona(itens){

                alert('oi3');    

                window.parent.document.getElementById('selecao').style.display='block';
              
              
            }

            
</script> 