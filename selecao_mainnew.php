<html>

      <div id="selecao"  class="janela_selecao" style="position:absolute;background-color:<?=$cor_menu_esquerda?>;width:15%; height:30%; left:43%; top:20%;  display:none; border: 1px solid #aaaaaa; z-index:50  ">

            <div style="position: absolute; height:95%; top:3%; width:96%; left:2%"> 



                   <!--botão de fechar-->   
                  <div  Onclick="window.parent.div_esconde('selecao');" style="background-image: url('../images/<?=$image_folder?>/cancel.png'); background-repeat: no-repeat;  background-size: 100% 100%;  position: absolute; top:2%; height:13%; left:83%; width:15%; cursor:pointer">
   
                  </div> 

                    <!--botão de ajustar--> 
                    <div  id="selecao_bt_ajuste" onclick="selecao_mostra_ajuste();" style="background-image: url('../images/<?=$image_folder?>/ajustar.png'); background-repeat: no-repeat;  background-size: 100% 100%;   position: absolute; top:87%; height:13%; left:83%; width:15%; cursor:pointer">
                                          
                    </div>


                   <!--itens-->   
                  <div id="dv_selecao_infovet_itens"   style="position: absolute;top:0%;left:0%; width:80%; height:90%; cursor:pointer;background-color:white; overflow-y: scroll; display:block">  
                                                                
                                
                        
                 </div> 


                  
                  <!--consulta-->    
                  <div contentEditable='true' id='dv_selecao_input' onKeyUp=selecao_filtra();  style='position: absolute;top:92%; background-color:white; height:7%; border:1px solid; left:1%; width:70%; cursor:pointer'>

                           
                  </div>   
  
                 
            </div>

           


            <div style="position: absolute; display:none; height:95%; top:3%; width:96%; left:2%"> 
                  <iframe id="frame_selecao" frameborder="0" scrolling="no" src="selecao.php" width="100%" height="100%">
                        
                  </iframe>
            <div style="position: absolute; height:95%; top:3%; width:96%; left:2%"> 

      </div>
</html>      
      
