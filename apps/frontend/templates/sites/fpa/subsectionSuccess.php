<?php 
$assets = $pager->getResults();
?>
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container licitacoes-subsecoes">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span7">
      <!--texto subseção-->
      <h1><?php echo $section->getTitle(); ?></h1>
      <!-- p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p -->
      <!--/texto subseção-->
      <!-- assets relacionados a subseção -->
      <div class="accordion" id="accordion2">
        <?php foreach($pager->getResults() as $k=>$d): ?>
        <?php $related = $d->retriveRelatedAssetsByAssetTypeId(1); ?>
        <!-- item -->  
        <div class="accordion-group item">
          <!-- titulo -->
          <div class="accordion-heading">
            <a class="accordion-toggle licitacoes" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $k ?>">
              <?php echo $d->getTitle() ?>
            </a>
          </div>
          <!-- /titulo -->
          <!-- corpo -->
          <div id="collapse<?php echo $k ?>" class="accordion-body collapse"x>
            <div class="accordion-inner">
              <?php echo html_entity_decode($d->AssetContent->render()) ?>
              <?php $download = $d->retriveRelatedAssetsByRelationType('Download');?>
              
              <?php
               if(count($download)>0):
                 if(isset($download)): 
                  for($i=0; $i<count($download); $i++):
                    if($download[$i]->asset_type_id==8): ?>
                      <input type="hidden" name="fileid_<?php echo $download[$i]->AssetFile->getId()?>" id="fileid_<?php echo $download[$i]->AssetFile->getId()?>" value="<?php echo $download[$i]->AssetFile->getId()?>" >
						<?php  elseif($download[$i]->asset_type_id==2): ?>
												<input type="hidden" name="fileid_<?php echo $download[$i]->AssetFile->getId()?>" id="fileid_<?php echo $download[$i]->AssetFile->getId()?>" value="<?php echo $download[$i]->AssetFile->getId()?>" >
						<?php	 endif;
                  endfor;
                 endif;
               endif; 
            	?>
            	<div class="msgAcerto" id="statusMsg_0" style="display:none"> </div>
				<div class="msgErro" id="statusMsg_1" style="display:none"> </div>
            	<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
							  Link do arquivo
							</button>
				   
            </div>
          </div>
          <!-- /corpo -->
        </div>
        <!-- item -->
        <?php endforeach; ?>
      </div>
      <!-- /assets relacionados a subseção -->
      <!-- paginacao -->
      <?php if($pager->haveToPaginate()): ?>
      <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
      <div class="pagination pagination-centered">
        <ul>
           <li>
            <?php if($pager->getPage() == $pager->getFirstPage()): ?>
            <span class="prev">
              <i class="icon-circle-arrow-left pull-left"></i>
              Anterior
            </span>   
            <?php else:?> 
            <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="prev">
              <i class="icon-circle-arrow-left pull-left"></i>
              Anterior
            </a> 
            <?php endif ?>
          </li>
          <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
              <li><a class="active" href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
            <?php else: ?>
              <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
          <li>
            <?php if($pager->getPage() == $pager->getLastPage()): ?>
            <span class="next">
              <i class="icon-circle-arrow-right pull-right"></i>
              Próxima
            </span>  
            <?php else: ?>
            <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="next">
              <i class="icon-circle-arrow-right pull-right"></i>
              Próxima
            </a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <form id="page_form" action="" method="post">
        <input type="hidden" name="return_url" value="<?php echo $url?>" />
        <input type="hidden" name="page" id="page" value="" />
      </form>
      <script>
        function goToPage(i){
          $("#page").val(i);
          $("#page_form").submit();
        }
      </script>
      <?php endif; ?>
      <!-- /paginacao -->
      <!-- voltar historico -->
      <div class="span3">
        <a class="voltar" href="<?php echo $site->retriveUrl() ?>/<?php echo $section->Parent->getSlug(); ?>">
          <i class="icon-circle-arrow-left"></i>
          Voltar
        </a>
      </div>
      <!--voltar historico-->

      
        
    </div>
    <!-- /ESQUERDA-->
    
    <!--DIREITA-->
    <div class="col-direita span4">
      
      <!--CONFIRA VAGAS-->  
      <a href="http://www2.tvcultura.com.br/licitacoes/regulamento_compras_contratos.pdf" class="inscricao btn btn-primary" title="Regulamento de compras e contratos." target="_blank">
        <p>REGULAMENTO DE COMPRAS E CONTRATOS</p>
        <hr>
        <p>Confira as Condições</p>
        <p></p>
      </a>
      <!--/CONFIRA VAGAS-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--colunas-->
</div>
<!--CONTAINER-->
  
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       <form id="form-modal" class="form-horizontal" action="http://app.cmais.com.br/actions/fpa/licitaform.php" method="post">
				<fieldset>
				

				<!-- Form Name -->
				<legend><?php echo $section->getTitle(); ?></legend>
				<p>Preencha o formulário para receber em seu e-mail o anexo com o edital.</p>
				

				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nome">Nome</label>  
				  <div class="col-md-4">
				  <input id="nome" name="nome" type="text" placeholder="nome" class="form-control input-md" required="">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="email">E-mail</label>  
				  <div class="col-md-4">
				  <input id="email" name="email" type="text" placeholder="e-mail" class="form-control input-md" required="">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="telefone">Telefone</label>  
				  <div class="col-md-4">
				  <input id="telefone" name="telefone" type="text" placeholder="telefone" class="form-control input-md" required="">
				    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="enviar"></label>
				  <div class="col-md-4">
				    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
				  </div>
				</div>
				
				</fieldset>
	</form>

      </div>
     
    </div>
  </div>
</div>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$('#nome').focus(function(){ 		if($(this).val() == "Nome") {  $(this).val(''); }; 	});
  $('#nome').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Nome'); 	};	});
  $('#email').focus(function(){ 	if($(this).val() == "Email") {  $(this).val(''); }; });
  $('#email').focusout(function(){ 	if($(this).val() == ''){ $(this).val('Email'); 	 };	});
	  
		 var validator = $('#form-modal').validate({
		 	submitHandler: function(form){
          //resgatando a página que a pessoa
          url = window.location;
          $('#urlElement').attr('value',url.href);
        	form.submit();
        },
			rules:{ 
				nome:{ 
			 	required: true,
			  	minlength: 3
				},
       	email: {
          required: true,
          email: true
       	},
        telefone: {
        	required: true
        }
      },
     	messages:{
        nome:{ 
         	required: "O campo nome é obrigatorio.",
          minlength: "O campo nome deve conter no mínimo 3 caracteres."
        },
        email: {
        	required: "O campo email é obrigatorio.",
      		email: "O campo email deve conter um email válido."
     		},
       	telefone: {
          required: "O campo telefone é obrigatorio."
										
       	}
			},
			
			success: function(label){
        }
			  
  	});
  	 	function getURLParameter(name) {
			return decodeURI(
		        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
		    );
		}
		
	  var success = getURLParameter("success");
	  var error = getURLParameter("error");

	  if(success == 2){
	    $(".msgAcerto").show();
	    $(".msgAcerto").html("<p> Mensagem enviada, verifique o edital em seu email</p>");
	   // $(".msgAcerto").scrollTo('#statusMsg_0');
	  }

  
	});
	
	function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
      //$(obj).addClass("error");
  }
</script>


    