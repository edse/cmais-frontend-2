<?php
$now = date('Y-m-d H:i:s');
$schedules = Doctrine_Query::create()
  ->select('s.*')
  ->from('Schedule s')
  ->andWhere('s.date_start <= ?', $now)
  ->andWhere('s.date_end >= ?', $now)  
  ->andWhere('s.channel_id = ?', 1)
	->limit(1)
  ->execute();
	$live = $schedules[0]->Program->Site->getSlug();//Programa Atual
	
//BLOCOS DAS ABAS	
$bs = Doctrine_Query::create()
  ->select('b.*')
  ->from('Block b, Section s')
  ->where('b.section_id = ?', $section->getId())
  ->orderBy('b.display_order asc')
  ->execute();

//ORDENAÇÃO
$order_display = array();
$nome_programa = array();
$i = 0;
if(count($bs) > 0){
  foreach($bs as $b){
    if(strpos($b->slug, "-aba-")){
      if($b->description != "desativado"){
        $order_display[$i] = $b->slug;
        $nome = explode("Aba",$b->title);
        $nome_programa[$i] = $nome[1]; 
        $i++;
      }  
    }
  }
} 	


// DESTAQUE NOTÍCIAS TEXTO (CMAIS/JORNALISMO)
$block = Doctrine::getTable('Block')->findOneById(2078); 
if($block->is_automatic == 1){
	//4 Assets da Seção Notícias Jornalismo
	$assets_afp = Doctrine_Query::create()
	  ->select('a.*')
	  ->from('Asset a, SectionAsset sa')
	  ->where('sa.section_id = ?', 3298)
	  ->andWhere('sa.asset_id = a.id')
	  ->andWhere('a.is_active = ?', 1)
	  ->orderBy('sa.created_at desc')
	  ->limit(4)
	  ->execute();
}
?>

<link rel="stylesheet" href="/portal/css/tvcultura/secoes/jornalismo-novo2013.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<?php 
//$live = "jornaldacultura";
$btn_live = '<span class="live"><i class="ico-setas ico-seta-cima"></i>AO VIVO</span>'; ?>

<!--MENU-PROGRAMAS-->
<div id="menu-programas">
  <div class="menu-programas">
    <h1>Jornalismo</h1>
		<?php if(isset($displays["destaque-menu-programas"])): ?>
			<ul>
				<?php foreach ($displays["destaque-menu-programas"] as $k => $d): ?>
		      <li class="<?php echo $d->getHeadline()?>">
		        <a class="btn-programas btn-<?php echo $d->getHeadline()?><?php if($live == $d->getHeadline()) echo " active"?> " href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>"></a>
			      <?php if($live == $d->getHeadline()) echo $btn_live?> 
		      </li>
				<?php endforeach;?>
			</ul>
		<?php endif;?>      
    
  </div>
</div>
<!--/MENU-PROGRAMAS-->
			
			
<!-- CAPA SITE -->
<div id="capa-site">
  
  <!-- MIOLO -->
  <div id="miolo">
    
    <!--Impostometro-->
    <div class="container-impostometro">
      <div class="banner-impostometro" >
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="728" height="90" id="impostometro" align="middle">
          <param name="movie" value="http://www.impostometro.com.br//painel/embed/impostometro-728x90.swf" />
          <param name="quality" value="high" />
          <param name="bgcolor" value="#000000" />
          <param name="play" value="true" />
          <param name="loop" value="true" />
          <param name="wmode" value="window" />
          <param name="base" value="http://www.impostometro.com.br//api/embed" />
          <param name="scale" value="showall" />
          <param name="menu" value="true" />
          <param name="devicefont" value="false" />
          <param name="salign" value="" />
          <param name="allowScriptAccess" value="sameDomain" />
          <!--[if !IE]>-->
          <object type="application/x-shockwave-flash" data="http://www.impostometro.com.br//painel/embed/impostometro-728x90.swf" width="728" height="90">
            <param name="movie" value="http://www.impostometro.com.br//painel/embed/impostometro-728x90.swf" />
            <param name="quality" value="high" />
            <param name="base" value="http://www.impostometro.com.br//api/embed" />
            <param name="bgcolor" value="#000000" />
            <param name="play" value="true" />
            <param name="loop" value="true" />
            <param name="wmode" value="window" />
            <param name="scale" value="showall" />
            <param name="menu" value="true" />
            <param name="devicefont" value="false" />
            <param name="salign" value="" />
            <param name="allowScriptAccess" value="sameDomain" />
          <!--<![endif]-->
            <a href="http://www.adobe.com/go/getflash">
              <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
            </a>
          <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </object>
      </div>  
    </div>
    <!--Impostometro-->
    
    <!--coluna esquerda-->
    <div class="coluna-esquerda">

		<!-- bloco notícias de texto -->
			<?php	if(isset($assets_afp)):?>
				<?php $count=0; ?>
				<?php	foreach ($assets_afp as $k => $d):?>
							<div class="destaques <?php if($count==3) echo "ultima-noticia" ?>" >
                <a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
                <h2><?php echo $d->getTitle()?></h2>

                <?php if($k == 3):?>
                
                    <p class="s-margem"><?php echo $d->getDescription()?></p>  
                  </a>                  
                  <a class="veja" href="http://cmais.com.br/noticias-jornalismo">+ veja todas as notícias</a>
                <?php else:?>
                    <p><?php echo $d->getDescription()?></p>  
                  </a>                  
                  <div class="linha-hr"></div>
                  <?php $count++?>
                <?php endif;?>
             </div>
			<?php endforeach;?>
		<?php	else:?>
			<?php if(isset($displays["destaques-noticias-texto"])): ?>
				<?php $count=0; ?>
	      	<?php foreach ($displays["destaques-noticias-texto"] as $k => $d): ?>
            <div class="destaques <?php if($count==3) echo "ultima-noticia" ?>" >
                <a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
                <h2><?php echo $d->getTitle()?></h2>

                <?php if($k == 3):?>
                
                    <p class="s-margem"><?php echo $d->getDescription()?></p>  
                  </a>                  
                  <a class="veja" href="http://cmais.com.br/noticias-jornalismo">+ veja todas as notícias</a>
                <?php else:?>
                    <p><?php echo $d->getDescription()?></p>  
                  </a>                  
                  <div class="linha-hr"></div>
                  <?php $count++?>
                <?php endif;?>
             </div>
	     	<?php endforeach;?>
			<?php endif;?>
		<?php endif;?>
		 <!--/ bloco notícias de texto -->

	   <!-- bloco destaque esquerda 1 -->
	  	<div class="destaques-medium">
				<?php if(isset($displays["destaque-esquerda-1"])): ?>
					<?php foreach ($displays["destaque-esquerda-1"] as $k => $d): ?>
	 							<h2><i class="ico-setas ico-seta-direita"></i><?php echo $d->getTitle() ?></h2>
				        
				        <?php if($d->Asset->AssetType->id == 6): /*Verifica se o Asset é de Vídeo*/?> 
				        	<iframe style="width:310px!important;height:233px!important;" src="http://www.youtube.com/embed/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
				        	<p><?php echo $d->getDescription() ?></p>
				        <?php  elseif($d->Asset->AssetType->id == 1 || $d->Asset->AssetType->id == 2): /*Verifica se o Asset é de Conteudo ou Imagem*/?>
									<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
				        		<img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>">
				            <p><?php echo $d->getDescription() ?></p>
			        		</a>				        	
				        <?php endif;?>
	
					<?php endforeach;?>
				<?php endif;?>  
			 </div>
			<!--/ bloco destaque esquerda 1 -->

		<!-- bloco destaque esquerda 2 -->			
		<div class="destaques-small">
				<?php if(isset($displays["destaque-esquerda-2"])): ?>
					<?php foreach ($displays["destaque-esquerda-2"] as $k => $d): ?>
	 							<h2><i class="ico-setas ico-seta-direita"></i><?php echo $d->getTitle() ?></h2>
				        
				        <?php if($d->Asset->AssetType->id == 6): /*Verifica se o Asset é de Vídeo*/?>
				        	<iframe width="310" height="233" src="http://www.youtube.com/embed/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
				        	<p><?php echo $d->getDescription() ?></p>
				        <?php  elseif($d->Asset->AssetType->id == 1 || $d->Asset->AssetType->id == 2): /*Verifica se o Asset é de Conteudo ou Imagem*/?>
									<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
				        		<img src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>">
				            <p><?php echo $d->getDescription() ?></p>
			        		</a>				        	
				        <?php endif;?>	 							
	
					<?php endforeach;?>
				<?php endif;?>  
		</div>
		<!-- /bloco destaque esquerda 2 -->

		<!-- DESTAQUE REPERCUSSÃO ESQUERDA -->
		<div class="frase">
			<?php include_partial_from_folder('sites/cmais','global/repercussao', array('displays' => $displays["destaque-repercussao-esquerda"])) ?>
		</div>
	 <!-- DESTAQUE REPERCUSSÃO ESQUERDA -->
	</div>
	
	
<!--coluna central-->
<div class="coluna-central">

		<!--Destaque abas -->
		<div class="destaques-aba">
			<!-- menu -->
			<div id="menu-destaque-abas">
				 <ul>
				 	<?php //foreach ($order_display as $k => $d): ?>
          <?php for($i=0; $i<4; $i++): ?>  
            <?php
            /*
            <?php if($d == "destaques-aba-jornal-da-cultura") $nome_programa = "Jornal da Cultura"?>
            <?php if($d == "destaques-aba-jc-primeira-edicao") $nome_programa = "JC 1ª Edição"?>
            <?php if($d == "destaques-aba-jc-debate") $nome_programa = "JC Debate"?>
            <?php if($d == "destaques-aba-roda-viva") $nome_programa = "Roda Viva"?>
            */
            ?>
            
            <?php  if($i == 0): ?> 
                    <li class=" s-margem"><a href="#<?php echo $order_display[$i] ?>" class="link-aba active"><?php echo $nome_programa[$i] ?></a></li>
            <?php else: ?>
                    <li><a href="#<?php echo $order_display[$i] ?>" class="link-aba"><?php echo $nome_programa[$i] ?></a></li>
            <?php endif; ?>
            
          <?php endfor; ?>
						
					</ul>
			</div>
			<!-- menu -->
			
			<?php  foreach ($order_display as $k => $d) if(isset($displays[$d]))  include_partial_from_folder('sites/cmais','global/display-abas-jornalismo', array('displays' => $displays[$d], 'id_aba' => "id".$d)); ?>
		</div>
		<!--Destaque abas -->
		
		<!-- Bloco Destaque Repercussão Centro -->		
		<div class="frase">
			<?php include_partial_from_folder('sites/cmais','global/repercussao', array('displays' => $displays["destaque-repercussao-centro"])) ?>
		</div>
		<!--/ Bloco Destaque Repercussão Centro -->
				
		<div class="linha-hr"></div>

			<!-- Bloco destaque notícias com imagem centro -->			
			<?php if(isset($displays["destaque-noticias-com-imagem-centro"])): ?>
				<?php foreach ($displays["destaque-noticias-com-imagem-centro"] as $k => $d): ?>
					<div class="destaque-programas <?php if($k % 2  == 0) echo "s-margem"?>">
						<h2><i class="ico-setas ico-seta-direita"></i><?php echo $d->getTitle() ?></h2>
 							<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
			            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-4-b") ?>" alt="<?php echo $d->getTitle() ?>" width="206">
			            <p><?php echo $d->getDescription() ?></p>
			        </a>
			        
			        <?php if($k == 2):?>
				        <!--banner-->
				        <div class="destaque-programas banner s-margem">
				          <!-- cmais-jornalismo-200x200-b -->
                  <div id='div-gpt-ad-1385985503345-0' style='width:200px; height:200px; margin-top: 20px;'>
                    <script type='text/javascript'>
                      googletag.cmd.push(function() { googletag.display('div-gpt-ad-1385985503345-0'); }); 
                    </script>
                  </div>
				        </div> 
				        <!--banner-->			        
			        <?php endif;?>
			        
			     </div> 
				<?php endforeach;?>
				<?php endif;?>  
			<!-- Bloco destaque notícias com imagem centro -->
		
       <!--/destaque programas-->
       
       <!--bloco form -->
       <div class="destaque-programas">
         <h2>
          <i class="ico-setas ico-seta-direita"></i>
            Envie sua pergunta
          </h2>
          <p>Aqui você pode enviar sua pergunta</p>
          <br>
          <p class="msgAcerto" style="display:none;">Pergunta enviada com sucesso, obrigado!</p>
          <p class="msgErro" style="display:none;">Erro no envio, tente mais tarde!</p>
         <!--form-->
         <form id="destaque-programas" class="form-pergunta" method="post">
           
          <!--Programa-->
          <div class="text-input programa">
            <label class="control-label" for="programa">Selecione o programa:</label>
            <br>
            <select id="programa" name="programa" class="required">
              <option value="">--</option>
              <option value="jcprimeiraedicao">JC Primeira Edição</option>
              <option value="jcdebate">JC Debate</option>
              <option value="jornaldacultura">Jornal da Cultura</option>  
              <option value="cartaoverde">Cartão Verde</option>  
              <option value="rodaviva">Roda Viva</option>  
              <option value="reportereco">Reporter Eco</option>  
              <option value="materiadecapa">Matéria de Capa</option>
              <option value="prontoatendimento">Pronto Atendimento</option>                      
            </select>
          </div>
          <!--/Programa--> 
          
          <!--Nome-->
          <div class="text-input">
            <label class="control-label" for="nome">Seu Nome:</label><br>
            <input type="text" id="nome" name="nome" class="required">
          </div>
          <!--/Nome-->
          
          <!--Email-->
          <div class="text-input">
            <label class="control-label" for="email">Sua Email:</label>
            <input type="text" id="email"  name="email" class="required">
          </div>
          <!--/Email-->
  
          <!--Msg-->
          <div class="text-input">
            <label class="control-label" for="pergunta">Sua Pergunta:</label>
            <textarea id="pergunta" name="pergunta" class="required"></textarea>
          </div>
          <!--/Msg-->
          
          <!--enviar-->
          <div>
            <input type="submit" class="btn" id="enviar" value="Enviar">
          </div> 
          <!--/enviar-->
          
        </form>
        <!--/form-->
       </div>
       <!--/bloco form -->
    
		</div>    
		<!--/coluna central-->
    
    <!--coluna direita-->
    <div class="coluna-direita">
      
      <!--banner-->
       <div class="destaque-programas banner s-margem">
          <!-- cmais-jornalismo -->
          <div id='div-gpt-ad-1385981907491-0' style='width:200px; height:200px;'>
            <script type='text/javascript'>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1385981907491-0'); });
            </script>
          </div>
          
       </div> 
       <!--banner-->
       
				<?php if(isset($displays["destaque-direita"])): ?>
					<?php foreach ($displays["destaque-direita"] as $k => $d): ?>
						<div class="destaque-programas s-margem">
								<h2><i class="ico-setas ico-seta-direita"></i><?php echo $d->getTitle() ?></h2>
								<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
				            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getTitle() ?>" width="206">
				            <p><?php echo $d->getDescription() ?></p>
				        </a>
				     </div>
					<?php endforeach;?>
				<?php endif;?>  
       
       <div class="destaque-programas s-margem extra" style="margin-top:20px!important;"> 
	       <!--previsão do tempo-->
	       <div style="margin-bottom: 10px;">
	       	<h2>Previsão do Tempo</h2>
	       	  <iframe id="previsao-do-tempo-home-jornalismo" src="http://iframe.somarmeteorologia.com.br/tvcultura/index.php" height="240" width="200" frameborder="0" allowtransparency="yes" scrolling="no"></iframe>
	       </div>
	       <!--previsão do tempo-->
      </div>
      
      <div class="destaque-programas s-margem extra"> 
       <h2>Trânsito</h2>
       <!--transito-->
       <div class="iframe-transito s-margem">
         <iframe src="http://cmais.com.br/widgets/transito/index.php" frameborder="0"></iframe>
       </div>
       <!--/transito-->
      </div>
       
      <!--estradas-->
     	<div class="destaque-programas s-margem extra">
        <h2>Estradas</h2>
        
        	<div class="pageload" style="float: right; margin-top: -24px;margin-right: 82px;margin-bottom: 0px;">
        		<img src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." />
        	</div>     
        
          <form id="form-estradas-sp" method="post">
            <select id="select-estradas-sp" style="width: 200px;float: left; margin-bottom: 5px;"> 
				      
				      <option value="http://200.136.27.15/cameras/imagem.php?cam=belenzinho">Belenzinho</option>
				      <option value="http://200.136.27.15/cameras/imagem.php?cam=mpinheiros">Marginal Pinheiros</option>
				      <option value="http://200.136.27.15/cameras/imagem.php?cam=pompeia">Pompéia</option>
				      <option value="http://200.136.27.15/cameras/imagem.php?cam=santana">Santana</option>
				      <option value="http://200.136.27.15/cameras/imagem.php?cam=tiradentes" selected="selected">Av. Tiradentes</option>
				                    
            </select>
          </form>
          <img id="img-estrada-selecionada" src="http://200.136.27.15/cameras/imagem.php?cam=tiradentes" alt="" style="width: 200px;height:160px" />  
        </div>  
       <!--/estradas-->
    </div>
    <!--/coluna direita-->  
    
    
  </div>
  <!-- /MIOLO -->
 
</div>
<!-- / CAPA SITE -->



<script src="http://cmais.com.br/portal/js/dropkick-master/jquery.dropkick-min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>

<script>
$(document).ready(function(){
  $(".destaque-abas").hide();
  $(".destaque-abas:first").fadeIn('fast');
  $("iframe #um").hide();
  //$(".link-aba").not($(".link-aba.active")).click(function(){
  $(".link-aba").click(function(){
    var id_aba = $(this).attr("href");
    id_aba = id_aba.replace("#","");
    
    $(".link-aba").removeClass("active");
    $(this).addClass("active");
    
    $(".destaque-abas").hide();
    $("#id"+id_aba).fadeIn('fast');
  });
  
  $('#select-estradas-sp').dropkick();
  $('#programa').dropkick({
    change: function (value, label) {
         if(value == ""){
           $('.dk_container').find('label.error').show();
         }else{
           $('.dk_container').find('label.error').hide();
         }
      }
  });
  
  $("#select-estradas-sp").change(function(){
    $('#img-estrada-selecionada').attr("src", $(this).val());
  });
  
  var validator = $('.form-pergunta').validate({
    
    submitHandler: function(form){
      $.ajax({
        type: "POST",
        dataType: "text",
        data: $(".form-pergunta").serialize(),
        beforeSend: function(){
          $(".msgAcerto").hide();
          $(".msgErro").hide();
        },
        success: function(data){
          window.location.href="javascript:;";
          if(data == "1"){
            $(".msgAcerto").show();
            $('input, textarea').val('');
            $('#enviar').val('Enviar');
          }
          else {
            $(".msgErro").show();
          }
        }
      });       
    },
    rules:{
      email:{
        required: true,
        email: true
      },
    },
    messages:{
      programa:'campo obrigatório',
      nome:'campo obrigatório',
      email:'campo obrigatório',
      pergunta:'campo obrigatório'
    },
    success: function(label){
    }
  });
  
  
 //******** PLAYER AND REFRESH ********//  
 //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;
  
  onYouTubeIframeAPIReadyPlayer = function(obj, cont) {
    //console.log("start"+cont);
    //console.log("obj:"+obj);
    player[cont] = new YT.Player(obj);
    player[cont].addEventListener("onStateChange", function(res){
      if(res.data == 1){  //ao iniciar o vídeo
        stopRefresh();    //cancela refresh
      }
      if(res.data == 0){  //ao finalizar o vídeo 
      	startRefresh();		//inicia refresh
      }
    });
  }

	//Verifica os Iframes do Youtube
	function onVerifyYoutube(){
	  $('iframe').each(function(i){
	    if($(this).attr('src').indexOf("youtube") != -1){
	      cont++;
	      $(this).attr("id","player"+cont);
	      onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
	    }
	  });
	}
	//Após 2 segundos verifica os Iframes do Youtube
	setTimeout(onVerifyYoutube,2000);
	
	var timeout = setTimeout("location.reload(true);",360000); // Inicia o refresh  
	
	function startRefresh() {
		var timeout = setTimeout("location.reload(true);",360000);
		//console.log("Start Refresh");
	}	
	function stopRefresh() {
	  clearTimeout(timeout);
	  //console.log("Stop Refresh");
	}  
  
//******** Is Playing ??? ********//
  
});

$(function(){
    var imigrantes = 0;
    var anchieta = 0;
    $.ajax({
      url: "/portal/cams.php?s=ecovias",
      dataType: "json",
      success: function(data){
        $.each(data, function(i,data){
          var a = new String(data.src);
          //Imigrantes
          if(a.indexOf("Imigrantes")>=0){
            data.title = "Imigrantes - "+data.title;
            
            if(data.title != "Imigrantes - Planalto"){
	            if(imigrantes==0){
	            	$('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="'+data.src+'" selected="selected">'+data.title+'</a></li>');
	              //$("#img-estrada-selecionada").attr('src', data.src);
	            }
	            else
	              $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="'+data.src+'">'+data.title+'</a></li>');

           	}
						imigrantes++;
          }
          
          //Anchieta
          if(a.indexOf("Anchieta")>=0){
            data.title = "Anchieta - "+data.title;
            if(anchieta==0){
              $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="'+data.src+'" selected="selected">'+data.title+'</a></li>');
              //$("#img-estrada-selecionada").attr('src', data.src);
            }
            else
              $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="'+data.src+'">'+data.title+'</a></li>');
            anchieta++;
          }
          $('#select-estradas-sp').append('<option value="'+data.src+'">'+data.title+'</option>');
        });
        $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="http://www.der.sp.gov.br/img_cameras/name9.jpg">Padre Manoel da Nobrega - Km 292</a></li>');
        $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="http://www.der.sp.gov.br/img_cameras/name2.jpg">Padre Manoel da Nobrega - Km 323</a></li>');
        $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="http://www.der.sp.gov.br/img_cameras/name13.jpg">Padre Manoel da Nobrega - Km 337</a></li>');
        //$('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="http://www.der.sp.gov.br/img_cameras/name3.jpg">Padre Manoel da Nobrega - Km 344</a></li>');


				$('#select-estradas-sp').append('<option value="http://www.der.sp.gov.br/img_cameras/name9.jpg">Padre Manoel da Nobrega - Km 292</option>');
				$('#select-estradas-sp').append('<option value="http://www.der.sp.gov.br/img_cameras/name2.jpg">Padre Manoel da Nobrega - Km 323</option>');
				$('#select-estradas-sp').append('<option value="http://www.der.sp.gov.br/img_cameras/name13.jpg">Padre Manoel da Nobrega - Km 337</option>');
				//$('#select-estradas-sp').append('<option value="http://www.der.sp.gov.br/img_cameras/name3.jpg">Padre Manoel da Nobrega - Km 344</option>');

        interior();
      }
    });
  });
  
  function interior(){
    var ayrtonsenna = 0;
    $.ajax({
      url: "/portal/cams.php?fpa=1&s=ecopistas",
      dataType: "json",
      success: function(data){
        $.each(data, function(i,data){
          var a = data.title.substring(5,data.title.length);
          //Ayrton Senna
          
          if(a != "Ayrton Senna / Km 15"){
	          if(a.indexOf("Ayrton Senna")>=0){
	            if(ayrtonsenna==0){
	              //$("#img-ayrtonsenna").attr('src', data.src);
	              $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="'+data.src+'" selected="selected">'+a+'</a></li>');
	            }
	            else
	              $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="'+data.src+'">'+a+'</a></li>');
	            ayrtonsenna++;
	          }
	
	          $('#select-estradas-sp').append('<option value="'+data.src+'">'+data.title+'</option>');
	        }
        });
        
        $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="http://www.der.sp.gov.br/img_cameras/name25.jpg">Raposo Tavares - Km 12,5</a></li>');
        $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="http://www.der.sp.gov.br/img_cameras/name8.jpg">Raposo Tavares - Km 17</a></li>');
        $('#form-estradas-sp .dk_options_inner').append('<li class=""><a data-dk-dropdown-value="http://www.der.sp.gov.br/img_cameras/name30.jpg">Raposo Tavares - Km 20</a></li>');
        
        
				$('#select-estradas-sp').append('<option value="http://www.der.sp.gov.br/img_cameras/name25.jpg">Raposo Tavares - Km 12,5</option>');
				$('#select-estradas-sp').append('<option value="http://www.der.sp.gov.br/img_cameras/name8.jpg">Raposo Tavares - Km 17</option>');
				$('#select-estradas-sp').append('<option value="http://www.der.sp.gov.br/img_cameras/name30.jpg">Raposo Tavares - Km 20</option>');

        $('#form-estradas-sp .dk_options_inner').show();
        $('.pageload').hide();
      }
    });
  }

</script>  
