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
$i = 0;
if(count($bs) > 0){
  foreach($bs as $b){
			if(strpos($b->slug, "-aba-")){
					$order_display[$i] = $b->slug; 
					$i++;
			}
  }
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
    
    <!--coluna esquerda-->
    <div class="coluna-esquerda">
    	
			<!-- bloco notícias de texto -->
			<?php if(isset($displays["destaques-noticias-texto"])): ?>
				<?php foreach ($displays["destaques-noticias-texto"] as $k => $d): ?>
			      <div class="destaques">
			          <h2><?php echo $d->getTitle()?></h2>

			          <?php if($k == 3):?>
				          <a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
				            <p class="s-margem"><?php echo $d->getDescription()?></p>  
				          </a>			          	
			          	<a class="veja" href="http://cmais.com.br/noticias-jornalismo">+ veja todas as notícias</a>
			          <?php else:?>
				          <a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
				            <p><?php echo $d->getDescription()?></p>  
				          </a>			          	
			          	<div class="linha-hr"></div>
								<?php endif;?>
								          	
			       </div>
				<?php endforeach;?>
			<?php endif;?>  
		 <!--/ bloco notícias de texto -->

	   <!-- bloco destaque esquerda 1 -->
	  	<div class="destaques-medium">
				<?php if(isset($displays["destaque-esquerda-1"])): ?>
					<?php foreach ($displays["destaque-esquerda-1"] as $k => $d): ?>
	 							<h2><i class="ico-setas ico-seta-direita"></i><?php echo $d->getTitle() ?></h2>
				        
				        <?php if($d->Asset->AssetType->id == 6): /*Verifica se o Asset é de Vídeo*/?>
				        	<iframe width="310" height="233" src="http://www.youtube.com/embed/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
				        	<p><?php echo $d->getDescription() ?></p>
				        <?php  elseif($d->Asset->AssetType->id == 1): /*Verifica se o Asset é de Conteudo*/?>
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
				        <?php  elseif($d->Asset->AssetType->id == 1): /*Verifica se o Asset é de Conteúdo*/?>
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
				 	<?php foreach ($order_display as $k => $d):?>
				 		<?php if($d == "destaques-aba-jornal-da-cultura") $nome_programa = "Jornal da Cultura"?>
				 		<?php if($d == "destaques-aba-jc-primeira-edicao") $nome_programa = "JC 1ª Edição"?>
				 		<?php if($d == "destaques-aba-jc-debate") $nome_programa = "JC Debate"?>
				 		<?php if($d == "destaques-aba-roda-viva") $nome_programa = "Roda Viva"?>
				 		
						<?php	 if($k == 0): ?> 
										<li class=" s-margem"><a href="#<?php echo $d ?>" class="link-aba active"><?php echo $nome_programa ?></a></li>
						<?php else: ?>
				 						<li><a href="#<?php echo $d ?>" class="link-aba"><?php echo $nome_programa ?></a></li>
				 		<?php endif; ?>
				 		
					<?php endforeach; ?>
						
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
	       	  <iframe id="previsao-do-tempo-home-jornalismo" src="http://www.tempoagora.com.br/selos_iframe/sky_SaoPaulo-SP.html" height="264" width="200" frameborder="0" allowtransparency="yes" scrolling="no"></iframe>
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
          <form id="form-estradas-sp" method="post">
            <select id="select-estradas-sp" style="width: 200px;float: left; margin-bottom: 5px;"> 
              <option value="http://www.dersa.sp.gov.br/santos.jpg" selected="selected">Balsa de Santos - Guarujá</option>
              <option value="http://www.dersa.sp.gov.br/guaruja1.jpg">Balsa de Guarujá - Santos</option>
              <option value="http://www.dersa.sp.gov.br/bertioga/bertioga.jpg">Balsa de Bertioga - Guarujá</option>
              <option value="http://www.dersa.sp.gov.br/saosebastiao.jpg">Balsa de São Sebastião - Ilha Bela</option>
              <option value="http://www.dersa.sp.gov.br/ilhabela.jpg">Balsa de Ilha Bela - São Sebastião</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km12/Camera1-2013-11-27-13h-9m.jpg">Imigrantes - Planalto</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km20/Camera2-2013-11-27-13h-9m.jpg">Imigrantes - Planalto</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km28/Camera3-2013-11-27-13h-10m.jpg">Imigrantes - Balança Planalto</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km32/Camera4-2013-11-27-13h-10m.jpg">Imigrantes - Pedágio Piratininga</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km40/Camera5-2013-11-27-13h-10m.jpg">Imigrantes - Planalto</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km48/Camera6-2013-11-27-13h-11m.jpg">Imigrantes - Serra</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km56/Camera7-2013-11-27-13h-11m.jpg">Imigrantes - Balança Baixada</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Imigrantes-Km59/Camera8-2013-11-27-13h-11m.jpg">Imigrantes - Acesso Baixada</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Anchieta-Km13/Camera9-2013-11-27-13h-12m.jpg">Anchieta - Ribeirão dos Couros</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Anchieta-Km23/Camera10-2013-11-27-13h-9m.jpg">Anchieta - Trevo da Volkswagen</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Anchieta-Km31/Camera11-2013-11-27-13h-9m.jpg">Anchieta - Pedágio Riacho Grande</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Anchieta-Km43/Camera12-2013-11-27-13h-10m.jpg">Anchieta - Serra</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Anchieta-Km55/Camera13-2013-11-27-13h-10m.jpg">Anchieta - Trevo de Cubatão</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Anchieta-Km65/Camera14-2013-11-27-13h-10m.jpg">Anchieta - Entrada Santos</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Conego-Km250/Camera15-2013-11-27-13h-11m.jpg">Pedágio Santos</option>
              <option value="http://www.ecovias.com.br/Content/Cameras/Nobrega-Km280/Camera16-2013-11-27-13h-11m.jpg">Pedágio São Vicente</option>
              <option value="http://www.der.sp.gov.br/img_cameras/name9.jpg">Padre Manoel da Nobrega - Km 292</option>
              <option value="http://www.der.sp.gov.br/img_cameras/name2.jpg">Padre Manoel da Nobrega - Km 323</option>
              <option value="http://www.der.sp.gov.br/img_cameras/name13.jpg">Padre Manoel da Nobrega - Km 337</option>
              <option value="http://www.der.sp.gov.br/img_cameras/name3.jpg">Padre Manoel da Nobrega - Km 344</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km15/Camera30-2013-11-27-13h-10m.jpg">Ayrton Senna / Km 15</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km19/Camera31-2013-11-27-13h-11m.jpg">Ayrton Senna / Km 19</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km32/Camera32-2013-11-27-13h-11m.jpg">Ayrton Senna / Km 32</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km53/Camera33-2013-11-27-13h-11m.jpg">Ayrton Senna / Km 53</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km57/Camera34-2013-11-27-13h-11m.jpg">Ayrton Senna / Km 57</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km60/Camera35-2013-11-27-13h-12m.jpg">Ayrton Senna / Km 60</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km83/Camera36-2013-11-27-13h-9m.jpg">Carvalho Pinto / Km 83</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km92/Camera37-2013-11-27-13h-10m.jpg">Carvalho Pinto / Km 92</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km95/Camera38-2013-11-27-13h-10m.jpg">Carvalho Pinto / Km 95</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km115/Camera39-2013-11-27-13h-10m.jpg">Carvalho Pinto / Km 115</option>
              <option value="http://www.ecopistas.com.br/Content/Cameras/Sp70-Km130/Camera40-2013-11-27-13h-10m.jpg">Carvalho Pinto / Km 130</option>
              <option value="http://www.der.sp.gov.br/img_cameras/name25.jpg">Raposo Tavares - Km 12,5</option>
              <option value="http://www.der.sp.gov.br/img_cameras/name8.jpg">Raposo Tavares - Km 17</option>
              <option value="http://www.der.sp.gov.br/img_cameras/name30.jpg">Raposo Tavares - Km 20</option>
            </select>
          </form>
          <!-- <div class="pageload" style="float: left; margin-top: 6px;"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div> -->
          <img id="img-estrada-selecionada" src="http://www.dersa.sp.gov.br/santos.jpg" alt="Balsa de Santos - Guarujá" style="width: 200px;" />  
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
            $()
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
});
</script>  