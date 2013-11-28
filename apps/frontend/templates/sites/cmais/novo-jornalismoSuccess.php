<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => @$asset, 'section' => $section)) ?>

<style>
	#header 		{ margin:0px auto; width: 980px; margin-top: 50px; min-height: 80px; height: auto; text-align: left}
  #container 	{ margin:0px auto; width: 980px; min-height: 1200px; height: auto; text-align: left}
  
  #container .repercussao	h2{ color: #666666; text-align: center;}
  #container .repercussao	p{ color: #000; text-align: left;}
	
	#content-esquerda { float: left; width: 315px;}
	#content-esquerda p {line-height: 20px; margin-bottom: 20px; font-size: 14px; color: #000; text-align: left; margin-bottom: 8px; overflow: hidden; max-height: 60px;width: 96%;font-family: Arial}
	#container h2 {color: #0a5b88; font-size: 20px; font-family: Arial; text-align: left; margin-top: 4px; max-height: 70px; overflow: hidden; float: left}
	#container h3 {color: #0a5b88; font-size: 18px; font-family: Arial; text-align: left; margin-top: 4px; max-height: 25px; overflow: hidden;}
	
	#container .linha-hr {width: 100%; height: 1px; background: url('/portal/images/capaPrograma/culturafm/novahome/linha-pontilhada.jpg') repeat-x;}	
	#content-esquerda .vermais{ color: #0a5b88;font-weight: bold;}
	#content-esquerda .box_esquerda { float: left; max-width: 315px; margin-top: 10px}
	#content-esquerda .seta {width: 10px; height: 16px; background: url('/portal/images/capaPrograma/culturafm/novahome/seta-2.png') no-repeat; float: left; margin-top: 4px}
	
	#centro 	{ float: left; width: 435px; margin-left: 10px; }
	#direita 	{ float: left; width: 200px; margin-left: 10px;}
	
	#menu-destaque-abas {background: white; float: left; width: 420px; padding: 5px}
	#menu-destaque-abas li a{color: #0a5b88; font-weight: bold; display: inline; margin-right: 10px;height: 25px;float:left;border-top: 4px solid #fff; padding-top:5px; margin-bottom:5px;}
	#menu-destaque-abas li a:hover{border-top: 3px solid #0a5b88; text-decoration: none}
	
	.banner_publicidade_200x200 {float: left; width: 200px; height: 200px; background: #e3e3e3}

	.box_direita {float: left;width:200px}
	.box_centro { float: left; width: 435px; margin-bottom: 20px;}
	.destaque_programas { float: left; width: 206px; margin-right: 10px;}
	.menu_programas {width: 970px; float:left;margin-bottom:30px}
	.menu_programas li{color: red; display: inline; margin-right: 20px;}
	
	#form-contato {float: left; padding: 5px; font: 14px arial};
	#form-contato input {font: 14px arial};
	
</style>


<div id="header">
	<div class="menu_programas">
		<!-- MENU PROGRAMAS -->
			<ul>
				<?php if(isset($displays["destaque-menu-programas"])): ?>
					<?php foreach ($displays["destaque-menu-programas"] as $k => $d): ?>
			        <li class="<?php echo $d->getHeadline()?>">
			          <a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>"><?php echo $d->getTitle()?></a>
			        </li>
					<?php endforeach;?>
				<?php endif;?>  
			</ul>
		<!-- MENU PROGRAMAS -->
	</div>	
</div>

<div id="container">
	<div id="content-esquerda">
			<!-- NOTÍCIAS DE TEXTO -->
			<?php if(isset($displays["destaques-noticias-texto"])): ?>
				<?php foreach ($displays["destaques-noticias-texto"] as $k => $d): ?>
			        <!--item-->
			        <article>
			          <h2><?php echo $d->getTitle()?></h2>
			          <a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
			            <p><?php echo $d->getDescription()?></p>  
			          </a>
			          <div class="linha-hr"></div>
			        </article>
			        <!--item-->
				<?php endforeach;?>
			<?php endif;?>  
			<a href="#" class="vermais">+ veja todas as notícias</a>
		 <!-- NOTÍCIAS DE TEXTO -->

		<!-- DESTAQUE ESQUERDA 1 -->			
		<div class="box_esquerda">
			<?php if(isset($displays["destaque-esquerda-2"])): ?>
				<?php foreach ($displays["destaque-esquerda-2"] as $k => $d): ?>
 							<h3><i class="seta"></i><?php echo $d->getTitle() ?></h3>
 							<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
			          <article>
			            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-4-b") ?>" alt="<?php echo $d->getTitle() ?>" width="315">
			            <p><?php echo $d->getDescription() ?></p>
			          </article>
			        </a>
				<?php endforeach;?>
			<?php endif;?>  
		</div>
		<!-- DESTAQUE ESQUERDA 1 -->

		<!-- DESTAQUE ESQUERDA 2 -->			
		<div class="box_esquerda">
			<?php if(isset($displays["destaque-esquerda-2"])): ?>
				<?php foreach ($displays["destaque-esquerda-2"] as $k => $d): ?>
 							<h3><i class="seta"></i><?php echo $d->getTitle() ?></h3>
 							<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
			          <article>
			            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-4-b") ?>" alt="<?php echo $d->getTitle() ?>" width="315">
			            <p><?php echo $d->getDescription() ?></p>
			          </article>
			        </a>
				<?php endforeach;?>
			<?php endif;?>  
		</div>
		<!-- DESTAQUE ESQUERDA 2 -->

		<!-- DESTAQUE REPERCUSSÃO ESQUERDA -->
		<div class="box_esquerda">
			<?php include_partial_from_folder('sites/cmais','global/repercussao', array('displays' => $displays["destaque-repercussao-esquerda"])) ?>
		</div>
	 <!-- DESTAQUE REPERCUSSÃO ESQUERDA -->
	</div>
	
	
	<div id="centro">
		<div id="menu-destaque-abas">
			<ul>
				<?php if(isset($displays["destaques-aba-jornal-da-cultura"])) ?>
					<li><a href="#aba-jornal-da-cultura" class="link-aba">Jornal da Cultura</a></li>
				<?php if(isset($displays["destaques-aba-jc-primeira-edicao"])) ?>
					<li><a href="#aba-jc-primeira-edicao" class="link-aba">JC 1ª Edição</a></li>
				<?php if(isset($displays["destaques-aba-jc-debate"])) ?>
					<li><a href="#aba-jc-debate" class="link-aba">JC Debate</a></li>
				<?php if(isset($displays["destaques-aba-roda-viva"])) ?>
				 <li><a href="#aba-roda-viva" class="link-aba">Roda Viva</a></li>
			</ul>
		</div>	
		
		<?php 
		if(isset($displays["destaques-aba-jornal-da-cultura"])) 
			include_partial_from_folder('sites/cmais','global/display-abas-jornalismo', array('displays' => $displays["destaques-aba-jornal-da-cultura"], 'id_aba' => "jornal-da-cultura"));
		if(isset($displays["destaques-aba-jc-primeira-edicao"]))
			include_partial_from_folder('sites/cmais','global/display-abas-jornalismo', array('displays' => $displays["destaques-aba-jc-primeira-edicao"], 'id_aba' => "jc-primeira-edicao"));
		if(isset($displays["destaques-aba-jc-debate"])) 
			include_partial_from_folder('sites/cmais','global/display-abas-jornalismo', array('displays' => $displays["destaques-aba-jc-debate"], 'id_aba' => "jc-debate"));
		if(isset($displays["destaques-aba-roda-viva"])) 
			include_partial_from_folder('sites/cmais','global/display-abas-jornalismo', array('displays' => $displays["destaques-aba-roda-viva"], 'id_aba' => "roda-viva"));
		?>
				
		<div class="linha-hr"></div>
		<!-- DESTAQUE REPERCUSSÃO CENTRO -->
		<?php include_partial_from_folder('sites/cmais','global/repercussao', array('displays' => $displays["destaque-repercussao-centro"])) ?>
	  <!-- DESTAQUE REPERCUSSÃO CENTRO -->
		<div class="linha-hr"></div>
		
		<!-- DESTAQUE NOTÍCIAS COM IMAGENS CENTRO -->			
			<?php if(isset($displays["destaque-noticias-com-imagem-centro"])): ?>
				<?php foreach ($displays["destaque-noticias-com-imagem-centro"] as $k => $d): ?>
					<div class="destaque_programas">
						<h3><?php echo $d->getTitle() ?></h3>
 							<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
			          <article>
			            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-4-b") ?>" alt="<?php echo $d->getTitle() ?>" width="206">
			            <p><?php echo $d->getDescription() ?></p>
			          </article>
			        </a>
			     </div>  
				<?php endforeach;?>
			<?php endif;?>  
		<!-- DESTAQUE NOTÍCIAS COM IMAGEM CENTRO -->

		<div class="banner_publicidade_200x200">
			Espaço Publicitário
		</div>
		
 			<!--form-->  
      <form id="form-pergunta" method="post">
        <!--Nome-->
        <div class="control-group span8">
          <label class="control-label" for="nome">Nome</label>
          <input type="text" id="nome" value="Nome" name="nome" data-default="Nome"  placeholder="Nome">
        </div>
        <!--/Nome-->
        
        <!--Idade-->
        <div class="control-group idade span2">
        	<label class="control-label" for="nome-programa">Selecione o programa:</label>
	 					<select id="opcao-via-2" class="required">
	          	<option value="Jornal da Cultura" selected="selected">Jornal da Cultura</option>
	          	<option value="Jornal da Cultura">JC Debate</option>        	        	
						</select>
        </div>
        <!--/Idade-->
        
        <!--Email-->
        <div class="control-group span8">
          <label class="control-label" for="email"></label>
          <input type="text" id="email"  value="Email" name="email" placeholder="Email">
        </div>
        <!--/Email-->

        <!--Msg-->
        <div class="control-group span12 msg">
          <label class="control-label" for="pergunta"></label>
          <textarea id="pergunta" name="pergunta" data-default="Sua Pergunta" placeholder="Sua Pergunta">Sua Pergunta</textarea>
        </div>
        <!--/Msg-->
        
        <!--enviar-->
        <div class="control-group span11">
          <input type="submit" class="btn" id="enviar" value="Enviar"></input>
        </div> 
        <!--/enviar-->
        
      </form>
      <!--/form-->
      
	</div>
	<!-- 	DIV CENTRO -->
		
		
	<div id="direita">
		<div class="banner_publicidade_200x200">
				<h3 style="margin-top: 70px; margin-left: 10px; color:gray">Espaço Publicitário</h3>
		</div>
	
		<!-- DESTAQUE DIREITA -->			
			<?php if(isset($displays["destaque-direita"])): ?>
				<?php foreach ($displays["destaque-direita"] as $k => $d): ?>
					<div class="box_direita">
							<h3><?php echo $d->getTitle() ?></h3>
							<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
			          <article>
			            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getTitle() ?>" width="200">
			            <p><?php echo $d->getDescription() ?></p>
			          </article>
			        </a>
			     </div>
				<?php endforeach;?>
			<?php endif;?>  
		<!-- DESTAQUE DIREITA -->	
		
		
		<div class="box_direita">
				<div class="banner_publicidade_200x200">
					<h3>Previsão do Tempo</h3>
				</div>				
	  </div>

		<div class="box_direita">
				<h3>Trânsito em SP</h3>
	  </div>
		
    <div class="box_estradas" style="margin-top:10px; float: left">
    <h3>Estradas</h3>
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
	
	</div>		
	
</div>

<script>
	$(document).ready(function(){
		 $(".destaque-abas").hide();
		 $("#jornal-da-cultura").fadeIn('fast');
		
			$(".link-aba").click(function(){
				var id_aba = $(this).attr("href");
				id_aba = id_aba.replace("#aba-","");
				$(".destaque-abas").hide();
				$("#"+id_aba).fadeIn('fast');
			});
			
			$("#select-estradas-sp").change(function(){
				$('#img-estrada-selecionada').attr("src", $(this).val());
			});
				
		});
</script>

