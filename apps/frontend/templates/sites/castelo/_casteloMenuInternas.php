<!--MODAL-->

  <!--TRAVA MOUSE FUNDO-->
  <div class="modal" style="display: none;">modal</div>
  <!--TRAVA MOUSE FUNDO-->
  
  <!--FANCYBOX-->
  <script type="text/javascript">
  $(document).ready(function() {
    $('#fancybox-content a').live('hover', function(){
      $(this).fancybox()
    });
    
    $("a[class*=botao]").not('.botao-porteiro-over').fancybox({
      
       'transitionIn' : 'fadein',
      'transitionOut' : 'fadeout',
            'speedIn' : 600, 
           'speedOut' : 200, 
        'overlayShow' : true,
               'type' : 'iframe'
    });
  });
  </script>
  <!--FANCYBOX--> 
               
  <!--MOUSER OVER / PROXIMA PG E ANTERIOR-->
  <script>
    $(document).ready(function(){
      
      $('div[class*="botao"]').hover(function(){
        $(this).fadeOut('fast');
        $('.'+$(this).attr('class')+'-over').fadeIn('fast'); 
      });
      
      $('a[name*="over"]').mouseleave(function(){
         $('.'+$(this).attr('class')).fadeOut('fast');
         $('div[class*="botao"]').fadeIn('fast');
      });
      
      
      
      //ratinho hall
      $('.botao-ratinho').hover(function(){
        $('.antena').fadeOut('fast');
      });
      
      $('.botao-ratinho-over').mouseleave(function(){
        $('.antena').fadeIn('fast');
      });
      
    });
  </script>
  <!--/MOUSER OVER / PROXIMA PG E ANTERIOR-->
  
  <script type="text/javascript">
  //script menu navegação
  $(document).ready(function(){
    
    $('.bolinhas').hover(function(){
      $('.thumbs').fadeIn('fast');
      $('.anterior, .posterior').fadeOut('fast');
      $(this).fadeOut('fast');  
    });
    
    $('.thumbs').mouseleave(function(){
      $(this).fadeOut('fast');
      $('.anterior, .posterior, .bolinhas').fadeIn('fast');
    });
  });
  
  </script>
  

<!--NAVEGAÇÃO PG A PG-->
  <?php
  $arrayTelas = array(1 => "Home", 2 => "Hall de entrada", 3 => "Hall da escada", 4 => "Quarto do nino", 5 => "Sala de música", 6 => "Biblioteca", 7 => "Cozinha", 8 => "Laboratorio", 9 =>"Quarto da morgana" );
  $arraySlugs = array(1 => "home2", 2 => "hall", 3 => "arvore", 4 => "nino", 5 => "sala-de-musica", 6 => "arquivo", 7 => "cozinha", 8 => "laboratorio", 9 =>"morgana" );
  
  for($i=1;$i<=count($arrayTelas);$i++):
  $pos = strrpos($_SERVER['PHP_SELF'], $arraySlugs[$i]); 
  
  if($pos==true){
  ?>          
  <a href="http://cmais.com.br/castelo/<?php if($i==1){echo $arraySlugs[9];}else{echo $arraySlugs[$i-1];}?>" class="anterior" title="Anterior">
    <img src="/portal/images/capaPrograma/castelo/btn-tela-anterior.png" alt="Tela Anterior" />
  </a>
  
  <a href="http://cmais.com.br/castelo/<?php if($i==9){echo $arraySlugs[1];}else{echo $arraySlugs[$i+1];}?>" class="posterior"  title="Posterior">
    <img src="/portal/images/capaPrograma/castelo/btn-tela-proxima.png" alt="Próxima Tela" />
  </a>
  <?php }?>
  <?php 
  endfor;
  ?>
<!--/NAVEGAÇÃO PG A PG-->
<!--/MODAL-->
<div class="navegacao">
               
              <!--MOUSE OVER -->
              <div class="thumbs" style="display:none;">
                <?php
                for($i=1;$i<=count($arrayTelas);$i++):
                ?>
                  
                    <a href="<?php echo $arraySlugs[$i] ?>" title="<?php echo $arrayTelas[$i] ?>" class="<?php echo $arraySlugs[$i]; $pos = strrpos($_SERVER['PHP_SELF'], $arraySlugs[$i]);if($pos==true) echo " selected"?>"></a>
                  
                <?php endfor;?>
                 
              </div>
              <!--/MOUSE OVER -->
              
              <!--MOUSE OUT / INDICAÇAO DA TELA -->  
              <div class="bolinhas" align="left">
                
                <?php
                                
                foreach($arraySlugs as $t):
                  
                  $pos = strrpos($_SERVER['REQUEST_URI'], $t);
                
                  if ($pos == true) {
                  ?>
                    <img class="on" src="/portal/images/capaPrograma/castelo/img-navegacao-bullet-on.png" />
                  <?php 
                  }else{
                  ?>
                    <img class="off" src="/portal/images/capaPrograma/castelo/img-navegacao-bullet-off.png" />
                  <?php  
                  }
                  
                endforeach;
                ?>

              </div>
              <!--/MOUSE OUT / INDICAÇAO DA TELA -->
                
            </div>