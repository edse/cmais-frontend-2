<!--MODAL-->

  <!--TRAVA MOUSE FUNDO-->
  <div class="modal" style="display: none;">modal</div>
  <!--TRAVA MOUSE FUNDO-->
  
  <!--FANCYBOX-->
  <script type="text/javascript">
  var $b = jQuery.noConflict();
  $b(document).ready(function() {
    $b('#fancybox-content a').live('hover', function(){
      $b(this).fancybox()
    });
    
    $b("a[class*=botao]").not('.botao-porteiro-over').fancybox({
      'transitionIn'  : 'fadein',
      'transitionOut' : 'fadeout',
      'speedIn'   : 600, 
      'speedOut'    : 200, 
      'overlayShow' : true
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
      
      $('a[class*=nav]').hover(function(){
        $('.'+$(this).attr('class')+' img').fadeIn('fast');
      });
      
      $('a[class*=nav]').mouseleave(function(){
        $('.'+$(this).attr('class')+' img').fadeOut('fast');
      });
    
      
    });
  </script>
  <!--/MOUSER OVER / PROXIMA PG E ANTERIOR-->
  
  <script type="text/javascript">
  //script menu navegação
  $(document).ready(function(){
    
    $('.bolinhas').hover(function(){
      $('.thumbs').fadeIn('fast');
      $(this).fadeOut('fast');  
    });
    
    $('.thumbs').mouseleave(function(){
      $(this).fadeOut('fast');
      $('.bolinhas').fadeIn('fast');
    });
  });
  
  </script>
  
<!--NAVEGAÇÃO PG A PG-->
<a hef="#" class="nav-Esquerda" title="Anterior">
  <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-anterior.png" alt="Tela Anterior" style="display: none;" />
</a>
<a hef="#" class="nav-Direita" title="Próxima">
  <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-proxima.png" alt="Próxima Tela" style="display: none;"/>
</a>
<!--/NAVEGAÇÃO PG A PG-->

<!--/MODAL-->
<div class="navegacao">
              
              <!--MOUSE OVER -->
              <div class="thumbs" style="display:none;">
                
                <?php
                $arrayTelas = array(1 => "Home", 2 => "Hall de entrada", 3 => "Hall da escada", 4 => "Quarto do nino", 5 => "Sala de música", 6 => "Biblioteca", 7 => "Cozinha", 8 => "Laboratorio", 9 =>"Quarto da morgana" );
                $arraySlugs = array(1 => "home2", 2 => "hall", 3 => "arvore", 4 => "nino", 5 => "sala-de-musica", 6 => "arquivo", 7 => "cozinha", 8 => "laboratorio", 9 =>"morgana" );
                for($i=1;$i<=count($arrayTelas);$i++):
                ?>
                  <a href="<?php echo $arraySlugs[$i] ?>" title="<?php echo $arrayTelas[$i] ?>" class="<?php echo $arraySlugs[$i];?>"></a>
                <?php 
                endfor;
                ?>
                 
              </div>
              <!--/MOUSE OVER -->
              
              <!--MOUSE OUT / INDICAÇAO DA TELA -->  
              <div class="bolinhas" align="left">
                
                <?php
                                
                foreach($arraySlugs as $i):
                  
                  $pos = strrpos($_SERVER['REQUEST_URI'], $i);
                
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