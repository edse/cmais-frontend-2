<?php
$sections = Doctrine_Query::create()
  ->select('s.*')
  ->from('Section s')
  ->where('s.site_id = 976')
  ->andWhere('s.slug IN ("home2","hall","arvore","nino","sala-de-musica","arquivo","cozinha","laboratorio","morgana")')
  ->orderBy('s.display_order ASC')
  ->execute();
?>
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
    
    $("a[class*=botao]").not('.botao-porteiro-over, .botao-valdirene-over').fancybox({
      
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
      $('.anteriorC, .posterior').fadeOut('fast');
      $(this).fadeOut('fast');  
    });
    
    $('.thumbs').mouseleave(function(){
      $(this).fadeOut('fast');
      $('.anteriorC, .posterior, .bolinhas').fadeIn('fast');
    });
  });
  
  </script>
  

<!--NAVEGAÇÃO PG A PG-->
  <?php for($i=0; $i<count($sections); $i++): ?>
    <?php if($sections[$i]->getSlug() == $section->getSlug()): ?>
      <?php if($i > 0): ?>
        <?php if ($sections[$i-1]->getSlug() == 'home2'): ?>
  <a href="<?php echo "/" . $site->getSlug(); ?>" class="anteriorC" title="Anterior">
    <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-anterior.png" alt="Tela Anterior" />
  </a>
        <?php else: ?>
  <a href="<?php echo "/" . $site->getSlug() . '/' . $sections[$i-1]->getSlug(); ?>" class="anteriorC" title="Anterior">
    <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-anterior.png" alt="Tela Anterior" />
  </a>
        <?php endif; ?>
      <?php endif; ?>

      <?php if($i < count($sections)): ?>
        <?php if($sections[$i+1]->getSlug() != ''): ?>
  <a href="<?php echo "/" . $site->getSlug() . '/' . $sections[$i+1]->getSlug(); ?>" class="posterior"  title="Próxima">
    <img src="http://cmais.com.br/portal/images/capaPrograma/castelo/btn-tela-proxima.png" alt="Próxima Tela" />
  </a>
        <?php endif; ?>
      <?php endif; ?>
    <?php endif; ?>
  <?php endfor; ?>
<!--/NAVEGAÇÃO PG A PG-->
<!--/MODAL-->
<div class="navegacao">
               
              <!--MOUSE OVER -->
              <div class="thumbs" style="display:none;">
                <?php for($i=0; $i<count($sections); $i++): ?>
                  <?php if($sections[$i]->getSlug() != ''): ?>
                    <?php if ($sections[$i]->getSlug() == 'home2'): ?>
                    <a href="<?php echo "/" . $site->getSlug() ?>" title="<?php echo $sections[$i]->getTitle() ?>" class="<?php echo $sections[$i]->getSlug() ?> <?php if($section->getSlug() == $sections[$i]->getSlug()): ?>selected<?php endif; ?>"></a>
                    <?php else: ?>
                    <a href="<?php echo "/" . $site->getSlug() . '/' . $sections[$i]->getSlug() ?>" title="<?php echo $sections[$i]->getTitle() ?>" class="<?php echo $sections[$i]->getSlug() ?> <?php if($section->getSlug() == $sections[$i]->getSlug()): ?>selected<?php endif; ?>"></a>
                    <?php endif; ?>
                  <?php endif; ?>
                <?php endfor;?>
                 
              </div>
              <!--/MOUSE OVER -->
              
              <!--MOUSE OUT / INDICAÇAO DA TELA -->  
              <div class="bolinhas" align="left">
                <?php for($i=0; $i<count($sections); $i++): ?>
                  <?php if($sections[$i]->getSlug() != ''): ?>
                    <?php if($sections[$i]->getSlug() == $section->getSlug()): ?>
                    <img class="on" src="http://cmais.com.br/portal/images/capaPrograma/castelo/img-navegacao-bullet-on.png" />
                    <?php else: ?>
                    <img class="off" src="http://cmais.com.br/portal/images/capaPrograma/castelo/img-navegacao-bullet-off.png" />
                    <?php endif; ?>
                  <?php endif; ?>                   
                <?php endfor;?>

              </div>
              <!--/MOUSE OUT / INDICAÇAO DA TELA -->
                
            </div>