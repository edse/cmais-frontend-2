<script>
$(document).ready(function(){
  $(".collapse").collapse();
  $(".dicas").click(function(){
    $(this).prev().toggleClass('icon-minus');
  });
  $('.formas').click(function(){
    $(this).prev().toggleClass('icon-circle-arrow-down');
  });
  $('.col-esquerda a, #voltar').click(function(){ 
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, "slow");
  });
});
</script>
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<!--container-->
<div class="container">
  <?php include_partial_from_folder('sites/central-de-relacionamento', 'global/topo', array('site' => $site,'siteSections' => $siteSections, 'section' => $section)) ?>
  <!--colunas-->
  <div class="row-fluid">
    <!--coluna esquerda-->
    
    <div class="col-esquerda span5">
      <a id="perguntas"></a>
      <h1>PERGUNTAS FREQUENTES</h1>
      
      <p>
        A Central de Relacionamento é uma área
        de atendimento exclusiva para telespectadores
        e ouvintes de nossas emissoras. Queremos  conhecer
        melhor e estreitar nossos laços com o público de nossas
        emissoras, por isso seu contato e a sua opinião são muito
        importantes para a Fundação Padre Anchieta.<br/>
        Antes de enviar sua mensagem, verifique se sua pergunta
        ou informação não está contemplada nos itens 
        <?php if(isset($displays)):?>
        <?php if(count($displays) > 0): ?>
         <?php foreach($displays as $display): ?>
           <?php if(count($display) > 0): ?>
          <a href="#<?php echo $display[0]->Block->getSlug() ?>"><?php echo $display[0]->Block->getDescription() ?>,</a>
           <?php endif; ?>
        <?php endforeach; ?>  
       <?php endif; ?>
       <?php endif; ?>        
           Perguntas Frequentes
        ou em <a href="#">algum</a> dos acessos oferecidos nesta página.
      </p>
    </div>
    <!--/coluna esquerda-->
    <!--coluna direita-->
    
     <div class="col-direita pull-right span7 ">
       
         <?php if(isset($displays)):?>
          <?php if(count($displays) > 0): ?>
      <!-- COLUNA SUB DIR 1 -->
      <?php $i = 1; ?>
       <?php foreach($displays as $display): ?>
          <?php if(count($display) > 0): ?>
         
          
          <a id="<a href="#<?php echo $display[0]->Block->getSlug() ?>">
       
      <div class="coluna-sub cinza-claro-2">
         <span class="titulo bold"><?php echo $display[0]->Block->getDescription() ?></span>
         <!-- COLUNA SUB DIR 2 -->
         <div id="col-sub" class="texto-preto">
          <ul>
          <?php foreach($display as $d): ?>
            <li>
              <i class="icon-circle-arrow-right"></i>  
              <a href="javascript:;" class="formas" data-toggle="collapse" data-target="#a<?php echo $i ?>">
                <?php echo $d->Asset->getTitle() ?>
              </a>
              <div id="a<?php echo $i ?>" class="fundo-cinza collapse in"style="overflow: hidden; clear: both;">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?> <a href="#">link</a> 
              </div>
            </li>
            
            <?php $i++; ?>
            
          <?php endforeach; ?>
          </ul>    
                             
        </div>
        <a id="voltar" class="voltar-perguntas pull-right" href="#a">voltar</a> 
      </div>
        <?php endif; ?>
       <?php endforeach; ?>         
      <!-- /COLUNA SUB DIR 1 -->
       <?php endif; ?> 
    <?php endif; ?>
    </div>   
      
    
   
    <!--/coluna direita-->
  </div>
  <!--/colunas-->  
</div>
<!--container-->