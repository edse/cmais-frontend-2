<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	 <title><?php echo $site->getTitle() ?></title>
	<!-- SCRIPTS -->
    <script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/messages_ptbr.js" type="text/javascript"></script>
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.min.js"></script>
    <script src="http://cmais.com.br/portal/js/jquery.maskedinput-1.3.min.js"></script>
    <script src="http://cmais.com.br/portal/js/libs/modernizr-2.5.3-respond-1.1.0.min.js" type="text/javascript"></script>
  	<script>
      $(".collapse").collapse();
      
      $(document).ready(function(){
        $(".dicas").click(function(){
          $(this).prev().toggleClass('icon-minus');
        });
        $('.formas').click(function(){
          $(this).prev().toggleClass('icon-circle-arrow-down');
        });
      });
    </script>  
	<!-- /SCRIPTS -->
      
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/style.css">
    <!-- /CSS BOOTSTRAP -->
      
    <!-- CSS SIC -->
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <!-- /CSS SIC-->
</head>
<body>
 
    <!-- DIV CRIADA SOMENTE PRA MUDAR O RESIZE DA PG -->
    <div id="centralizar">  
        <!-- CAPA SITE -->
        <div id="capa-site">
          
          <?php include_partial_from_folder('sites/sic', 'global/topo', array('site' => $site,'siteSections' => $siteSections, 'section' => $section)) ?>
         	<!-- CORPO SITE -->
     		<div id="corpo-sic">
                <!-- COLUNA ESQUERDA -->
                <div class="float col-400-sic">
                	
                    <?php if(isset($displays["acesso-a-informacao"])): ?>
            		<?php if(count($displays["acesso-a-informacao"]) > 0): ?>
          			<h2><?php echo $displays["acesso-a-informacao"][0]->Block->getTitle() ?></h2>
          
              		<?php foreach($displays["acesso-a-informacao"] as $d): ?>
          			<span class="pergunta"><?php echo $d->getTitle() ?></span>
          			<p>
       				<?php echo $d->getDescription() ?>
            		<a href="<?php echo $d->retriveUrl() ?>" class="leiamais" title="Leia mais">Leia +</a>
          			</p>
          
              		<?php endforeach; ?>
            
            		<?php endif; ?>
         			<?php endif; ?>
          
         			 <?php if(isset($displays["oriente-se"])): ?>
            		 <?php if(count($displays["oriente-se"]) > 0): ?>
         		<!-- COLUNA SUB ESQ 1 -->
          		<div class="coluna-sub-1 cinza-claro texto-branco m30">
            	<h4><?php echo $displays["oriente-se"][0]->Block->getTitle() ?></h4>
            	<p class="texto-branco"><?php echo $displays["oriente-se"][0]->Block->getDescription() ?></p>
            
            	<?php foreach($displays["oriente-se"] as $d): ?>
                        
            		<!-- COLUNA SUB ESQ 2 -->
            		<div id="accodion" class="coluna-sub-1 box-dicas cinza-escuro">
            			<i class="icon-plus icon-white"></i>
                        <a href="javascript:;" class="dicas" data-toggle="collapse" data-target="#<?php echo $d->getId() ?>">
                            <h4><?php echo $d->getTitle() ?></h4>
                        </a>
                        <div id="risco-2"></div>
                        <div id="<?php echo $d->getId() ?>" class="box-hide collapse on" style="overflow: hidden; clear: both;">
                        	<?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>
                		</div>   
            		</div>
            		<!-- /COLUNA SUB ESQ 2 -->
					  <?php endforeach; ?>
                  </div>           
                  <!-- /COLUNA SUB ESQ 1 -->
                    <?php endif; ?>
                  <?php endif; ?>
          
                </div>
                <!-- COLUNA ESQUERDA -->
 				<!-- COLUNA DIREITA -->
        <div class="float col-585-sic">
          
          <?php if(isset($displays["formas-de-atendimento"])): ?>
            <?php if(count($displays["formas-de-atendimento"]) > 0): ?>
          
          <!-- COLUNA SUB DIR 1 -->
          <div class="coluna-sub-1 cinza-claro-2 ">
            <span class="titulo bold"><?php echo $displays["formas-de-atendimento"][0]->Block->getTitle() ?></span>
            <!-- COLUNA SUB DIR 2 -->
            
              
      
            <div id="formas-de-contato" class="texto-preto">
              <ul>
                  
               <?php foreach($displays["formas-de-atendimento"] as $d): ?> 
                  <li>
                    <i class="icon-circle-arrow-right"></i>  
                    <a href="javascript:;" class="formas" data-toggle="collapse" data-target="#<?php echo $d->getId() ?>">
                      <?php echo $d->getTitle() ?>
                    </a>
                    <div id="<?php echo $d->getId() ?>" class="fundo-cinza collapse on"style="overflow: hidden; clear: both;">
                      <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>
                    </div>
                  </li>
                <?php endforeach; ?>
              </ul>                        
            
                
            </div>
            
             
              
          </div>           
          <!-- /COLUNA SUB DIR 1 -->
            <?php endif; ?>
          <?php endif; ?>

          <?php if(isset($displays["acompanhar-solicitacao"])): ?>
            <?php if(count($displays["acompanhar-solicitacao"]) > 0): ?>
          <h2><?php echo $displays["acompanhar-solicitacao"][0]->Block->getTitle() ?></h2>
          
              <?php foreach($displays["acompanhar-solicitacao"] as $d): ?>
          <span class="pergunta"><?php echo $d->getTitle() ?></span>
          <p>
        <?php echo $d->getDescription() ?>
            <a href="<?php echo $d->retriveUrl() ?>" class="leiamais" title="Leia mais">Leia +</a>
          </p>
          
              <?php endforeach; ?>
            
            <?php endif; ?>
          <?php endif; ?>
          
        </div>  
        <!-- /COLUNA DIREITA -->

          
          </div>
          <!-- CAPA SITE -->
      </div>
      <!-- DIV CRIADA SOMENTE PRA MUDAR O RESIZE DA PG -->
</body>
</html>