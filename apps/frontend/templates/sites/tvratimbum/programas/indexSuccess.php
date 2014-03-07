<?php 
$assets = $pager->getResults();
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css?nocache=123" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2014.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrocel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    startclock();
  })
  var timeID=null;
  var timerRunning=false;
  function stopclock (){
    if(timerRunning)
      clearTimeout(timerID);
    timerRunning=false;
  }
  function startclock(){
    stopclock();
    showtime();
  }
  function showtime() {
    var now=new Date();
    var hours= now.getHours();
    var minutes= now.getMinutes();
    var timeValue=""+ hours;
    timeValue += ((minutes<10) ? ":0" : ":") + minutes
    document.clock.face.value= timeValue
    timerID = setTimeout("showtime()",1000);
    timerRunning = true;
  }
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/programas">Programas</a><span>&gt;&gt;</span><a href="<?php $site->retriveUrl()?>"><?php echo $site->getTitle()?></a>
        </div>
        <div id="box-programas-programaEscolhido">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="<?php echo $site->retriveUrl()?>" class="enunciado"><?php echo $site->getTitle()?></a>
            </div>
            <div class="programaEscolhido-info">
              <img alt="<?php echo $site->retriveUrl()?>" src="http://midia.cmais.com.br/programs/<?php echo $site->Program->getImageLive() ?>" />
              <div class="box-infos">
                <?php /*
                <div class="horario">
                  <p><?php echo html_entity_decode($site->Program->getSchedule())?></p>
                </div>
                 */ ?>
                <?php /*
                <div class="btn-episodeo">
                  <span class="picote"></span>
                  <a href="<?php echo $site->retriveUrl()?>/episodios">Episódios</a>
                </div>
                */ ?>
                <?php
                  $sec = Doctrine_Query::create()
                    ->select('s.*')
                    ->from('Section s')
                    ->where('s.slug = ?', "programacao")
                    ->andWhere('s.site_id = ?', $site->getId())
                    ->fetchOne();
                  if($sec):
                ?>
                <div class="btn-diario">
                  <span class="picote"></span>
                  <a href="http://tvratimbum.cmais.com.br/grade">Diário de programação</a>
                </div>
                
                <?php endif; ?>
                <p class="breve"><?php if($site->Program->getLongDescription()!=""):?><?php echo html_entity_decode($site->Program->getLongDescription())?><?php else:?><?php echo html_entity_decode($site->Program->getDescription())?><?php endif;?></p>
              </div>
            </div>
            <hr />
           
          </div>
         
          <div class="ganchos"></div>
         
         
          <?php
            $assets = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a')
              ->where('a.site_id = ?', $site->getId())
              ->andWhere('a.asset_type_id = ?', 20)
              ->andWhere('a.is_active = ?', 1)
              ->orderBy('a.title')
              ->execute();
          ?>
          <?php if($assets): ?> 
          <?php include_partial_from_folder('tvratimbum','global/personagens-carrossel', array('displays' => $assets)) ?>
          <span class="picote"></span>
          <?php endif; ?>
        </div>       
          
		<?php 
			$assets = $pager->getResults();
		?>
                  
     
        <?php if(count($pager) > 1): ?> 
          <?php foreach($pager->getResults() as $d): ?>	        
        <div class="assets">
           <h3><?php echo $d->getTitle() ?></h3>
	       <p><?php echo html_entity_decode($d->AssetContent->render()) ?></p>
        </div>
        <?php endforeach; ?> 
        <?php endif; ?> 
        
       
       
        <?php if($pager->haveToPaginate()): ?> 

        <!-- PAGINACAO -->
        
        <div class="paginacao-programa">
          <a class="btn primeira" href="javascript: goToPage(1);" title="Primeira"><span></span>Primeira</a>
          <div class="paginas">
            <a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a>
            <p><span><?php echo $pager->getPage() ?></span> de <span><?php echo $pager->getLastPage() ?></span></p>
            <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" title="Próxima"></a>
          </div>
          <a class="btn ultima" href="javascript: goToPage(<?php echo $pager->getLastPage() ?>);" title="Última"><span></span>Última</a>
        </div>    
        
         <form id="page_form" action="" method="post">
		    <input type="hidden" name="return_url" value="<?php echo $url?>" />
		    <input type="hidden" name="page" id="page" value="" />
		    <input type="hidden" name="term" id="term" value="<?php echo $term ?>" />
		    <input type="hidden" name="filter" id="filter" value="<?php echo $filter ?>" />
		 </form>
  
  <script>
     function goToPage(i){
       $("#page").val(i);
       $("#page_form").submit();
     }
  </script>
     
       <?php endif; ?>
      
      <!-- /PAGINACAO -->
       
      </div>
      
      <div class="coluna">
        <div id="box-noAr">
          <?php include_partial_from_folder('tvratimbum','global/live') ?>
          <span class="picote"></span>
          <?php include_partial_from_folder('tvratimbum','global/next') ?>
          <span class="picote"></span>
          <?php include_partial_from_folder('tvratimbum','global/important') ?>
          <span class="picote"></span>
        </div>
       
       
       
        	 
        <ul class="menu-secao">
          <li class="videos"><a href="http://tvratimbum.cmais.com.br/videos" title="Vídeos" >Vídeos</a></li>
          <li class="jogos"><a href="
          	<?php
          	if ($site->id == '1230'):
			echo "http://tvratimbum.cmais.com.br/seleciona-jogos?site_id=1230&section_id=2473";
			elseif ($site->id == '8'):
			echo "http://tvratimbum.cmais.com.br/seleciona-jogos?site_id=8&section_id=585";	
			elseif ($site->id == '13'):
			echo "http://tvratimbum.cmais.com.br/seleciona-jogos?site_id=13&section_id=1071";
			elseif ($site->id == '35'):
          	echo "http://tvratimbum.cmais.com.br/seleciona-jogos?site_id=35&section_id=1053";
			elseif ($site->id == ''):
          	echo "http://tvratimbum.cmais.com.br/jogos";
			endif;
          	?>
          	" title="Jogos">Jogos</a></li>
          <li class="atividades"><a href="http://tvratimbum.cmais.com.br/atividades" title="Atividades">Atividades</a></li>
          <li class="imagens"><a href="http://tvratimbum.cmais.com.br/imagens" title="Imagens">Imagens</a></li>
          <li class="baixar"><a href="http://tvratimbum.cmais.com.br/baixar" title="Baixar">Baixar</a></li>
          <li class="especial"><a href="http://tvratimbum.cmais.com.br/especial" title="Especial">Especial</a></li>
        </ul>
        
       

        
        <?php if(isset($displays['concurso-cultural'])):?> 
        <?php if(count($displays['concurso-cultural']) > 0): ?>
        <div class="assets" id="concurso-cultural">
          <h3><?php echo $displays['concurso-cultural'][0]->Asset->getTitle() ?></h3>
          <p><?php echo $displays['concurso-cultural'][0]->Asset->getDescription() ?></p>
          <!--MSG ACERTO-->
            <div style="display:none" class="msgAcerto">
              <p>Mensagem enviada com sucesso</p>
            </div>  
            <!--/MSG ACERTO-->
            <!--MSG ERRO-->
            <div style="display:none" class="msgErro">
              <p>Preencha os campos abaixo.</p>
            </div> 
            <!--/MSG ERRO-->
          <form id="form-contato" method="post" action="">
            <label for="nome_crianca">Nome da criança</label>
            <input type="text" name="nome_crianca" id="nome_crianca" />
            
            <label for="nome_resp">Nome dos pais ou responsável</label>
            <input type="text" name="nome_resp" id="nome_resp" />
            <div class="cidade">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade"/>
            </div>
            <div class="estado">
              <label for="estado">Estado</label>
              <input type="text" name="estado" id="estado" />
            </div>
            <label for="email" style="float:left;">Email</label>
            <input type="text" name="email" id="email" />
            
            <label for="resposta">Resposta</label>
            <textarea id="resposta" name="resposta" onKeyDown="limitText(this,400,'#textCounter');"></textarea>
            <p class="txt-10"><span id="textCounter">400</span> caracteres restantes</p>
            
            <div class="termos">
              <p class="bold">TERMOS E CONDIÇÕES</p>
              <p><?php echo html_entity_decode($displays['concurso-cultural'][0]->Asset->AssetContent->render()) ?></p>
            </div>
            
            <label for="termos"><input type="radio" class="radio" id="termos" name="termos" />Declaro que li e estou de acordo comos <a href="#">Termos e Condições</a>.</label>
            
            <input type="submit" value="enviar" id="enviar" class="btn-enviar"/>
            <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
             
          </form>
       
          
        </div>  
           <?php endif; ?>
        <?php endif; ?> 
        
        
        <?php if(isset($displays["voce-sabia"])) include_partial_from_folder('tvratimbum','global/display-1c-vocesabia', array('displays' => $displays["voce-sabia"])) ?>
        
        <?php /*
        <hr />
        <?php include_partial_from_folder('tvratimbum','global/display-1c-recadinhos', array('site_id' => $site->getId())) ?>
        */ ?>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>

<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('input#enviar').click(function() {
      $(".msgAcerto, .msgErro").hide();
    });
    var validator = $('#form-contato').validate({
      submitHandler : function(form) {
        $.ajax({
          type : "POST",
          dataType : "text",
          data : $("#form-contato").serialize(),
          beforeSend : function() {
            $('input#enviar').attr('disabled', 'disabled');
            $(".msgAcerto").hide();
            $(".msgErro").hide();
            $('img#ajax-loader').show();
          },
          success : function(data) {
            $('input#enviar').removeAttr('disabled');
            window.location.href = "#";
            if(data == "1") {
              $("#form-contato").clearForm();
              $(".msgAcerto").show();
              $('img#ajax-loader').hide();
            } else {
              $(".msgErro").show();
              $('img#ajax-loader').hide();
            }
          }
        });
      },
      rules : {
        nome_crianca : {
          required : true,
          minlength : 2
        },
        nome_resp : {
          required : true,
          minlength : 2
        },
        email : {
          required : true,
          email : true
        },
        cidade : {
          required : true,
          minlength : 3
        },
        estado : {
          required : true,
          minlength : 2
        },
        termos : {
          required : true
        },
        resposta : {
          required : true
        }
      },
      messages : {
        nome_crianca : "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
        nome_resp : "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
        email : "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
        cidade : "Este campo &eacute; obrigat&oacute;rio.",
        estado : "Este campo &eacute; obrigat&oacute;rio.",
        termos : "Este campo &eacute; obrigat&oacute;rio.",
        resposta : "Este campo &eacute; obrigat&oacute;rio."
      },
      success : function(label) {
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  });
  // Contador de Caracters
  function limitText(limitField, limitNum, textCounter) {
    if(limitField.value.length > limitNum)
      limitField.value = limitField.value.substring(0, limitNum);
    else
      $(textCounter).html(limitNum - limitField.value.length);
  }
</script>