<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">

  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb bread-tv">
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico/joguinhos">Joguinhos</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Nome do Joguinho</li>
  </ul>
  <!-- /breadcrumb-->
  <!--row conteudo -->
  <div class="row-fluid conteudo">
    <!-- col direita -->
    <div class="span4 col-dir">
      <a class="logo" href="/cocorico/tvcocorico"><img class="span12" src="/portal/images/capaPrograma/cocorico/tvcoco.png" /></a>
      
      <!-- tv cocorico -->
      
      <?php
  	//$displays = array();
 	$blocks = Doctrine_Query::create()
   	->select('b.*')
    ->from('Block b, Section s')
    ->where('b.section_id = s.id')
    ->andWhere('s.slug = ?', "home")//mudar para home quando for no ar
    ->andWhere('b.slug = ?', 'destaque-tv-cocorico') 
    ->andWhere('s.site_id = ?', $site->id)
    ->execute();

  if(count($blocks) > 0){
    $displays_tv_cocorico['destaque-tv-cocorico'] = $blocks[0]->retriveDisplays();
  }
?>

      <div class="tvcoco span12">
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <?php if(isset($displays_tv_cocorico['destaque-tv-cocorico'])):?>
          <?php if(count($displays_tv_cocorico['destaque-tv-cocorico']) > 0): ?>
            <?php
              $display_img_src = $displays_tv_cocorico['destaque-tv-cocorico'][0]->retriveImageUrlByImageUsage('original');
              if ($display_img_src == '') {
                $related = $displays_tv_cocorico['destaque-tv-cocorico'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('original');
              }
            ?>
            
        <a class="convidado span12" href="<?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->retriveUrl() ?>" title="Próximo convidado: <?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>"><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>" /><?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?><span class="mais"></span></a>
          <?php endif; ?>
        <?php endif; ?>
        <!-- enquete -->
        <?php
 		 $displays_home = array();
 		 $blocks = Doctrine_Query::create()
  		 ->select('b.*')
  		 ->from('Block b, Section s') 
    	 ->where('b.section_id = s.id')
    	 ->andWhere('s.slug = ?', "home")//mudar para home quando for no ar
      	 ->andWhere('b.slug = ?', 'enquete') 
     	 ->andWhere('s.site_id = ?', $site->id)
     	 ->execute();

  		if(count($blocks) > 0){
    	$displays_home['enquete'] = $blocks[0]->retriveDisplays();
  }

        //pergunta bloco enquete - 1º destaque
        $q = $displays_home['enquete'][0]->Asset->AssetQuestion->getQuestion();

        //doctrine para respostas
        $respostas = Doctrine_Query::create()
          ->select('aa.*')
          ->from('AssetAnswer aa')
          ->where('aa.asset_question_id = ?', (int)$displays_home["enquete"][0]->Asset->AssetQuestion->id)
          ->execute();
          
        //imagens respectivas das respostas
        $imgs = $respostas[0]->Asset->retriveRelatedAssetsByAssetTypeId(2);
        $img_0 = "http://midia.cmais.com.br/assets/image/original/".$imgs[0]->AssetImage->file.".jpg";
        $imgs = $respostas[1]->Asset->retriveRelatedAssetsByAssetTypeId(2);
        $img_1 = "http://midia.cmais.com.br/assets/image/original/".$imgs[0]->AssetImage->file.".jpg";
    
        ?>
         <div class="enquete span12">
         	 
          <h3>enquete do dia</h3>
          <p><?php echo $q;?></p>
          <!--Pergunta-->
          <form method="post" id="e<?php echo $respostas[0]->Asset->getId()?>" class="form-voto navbar-form pull-left span12" style="min-width:296px; ">
            <?php 
            $form = new BaseForm();
            echo $form->renderHiddenFields();
            ?>
            <div class="versus"></div>
            <?php for($i=0; $i<count($respostas); $i++): ?>
            <div class="span6 <?php if($i>0)echo "last"?>">
              <label class="radio" for="resposta<?php echo $i?>">
                <input type="radio" name="opcao" id="resposta<?php echo $i?>" class="resposta required" value="<?php echo $respostas[$i]->Asset->AssetAnswer->id ?>"  />
                <?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?>
                <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
                <div class="capa-img"><img class="" src="<?php echo $img; ?>" alt="" /></div>
              </label>
              
              
            </div>
            <?php endfor; ?>
            <img src="/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
            <div class="votar span12">
              <span></span>
              <input id="votar-input" class="span11" type="submit" value="votar" />
              <span class="last"></span>
              
            </div>
          </form>
          
          <!--/Pergunta-->
          <!--Resposta FORM INATIVA-->
          <form class="navbar-form pull-left inativo span12" style="display: none;">
            <div class="versus"></div>
            <?php for($i=0; $i<count($respostas); $i++): ?>
            <div class="span6 <?php if($i>0)echo "last"?>">
              <label class="radio"><?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?></label>
              <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
              <div class="capa-img"><img class="span12" src="<?php echo $img; ?>" alt="" /></div>
              <p class="resposta-<?php echo $i?>">50%</p>
            </div>
            <?php endfor;?>
            <a href="<?php echo $site->retriveUrl();?>/tvcocorico" title="Ver enquetes anteriores">Ver enquetes anteriores</a>
          </form>
          <!--/Resposta-->
        </div>
        <!-- /enquete -->
        <!-- fale conosco cr-->
      </div>
      <!-- /tv cocorico -->
      <div class="cr">
        <a href="http://www2.tvcultura.com.br/faleconosco/" title="Fale Conosco" target="_blank">Fale conosco</a>
      </div>
      <!-- /fale conosco cr-->
    </div>
    <!-- /col direita -->
    <!-- col esquerda --> 
    <div class="span8 col-esq">
      
      <!-- destaque-home -->
      <div class="destaque-home-tv span9" style="display: none;">
        <h2>Título</h2>
        
        <iframe width="460" height="280" src="http://www.youtube.com/embed/TpNwYOLnwEA" frameborder="0" allowfullscreen></iframe>
        
        <div class="destaque span12">
          <span></span>
          <a href="#" class="btn-destaque" title="Ver mais episódios completos">Ver mais episódios completos</a>
          <span class="last"></span>
        </div>
      </div>
      <!-- /destaque-home -->
      <!-- form interatividade -->
      <div class="destaque-home-tv span9">
    	
          	
      	<?php if(isset($displays['destaque-seu-video'])): ?>
      	<?php if(count($displays['destaque-seu-video']) > 0): ?> 	
      			
        <h2>Seu vídeo na TV Cocoricó “Ao vivoooo!”</h2>
        <iframe width="460" height="280" src="http://www.youtube.com/embed/<?php echo $displays['destaque-seu-video'][0]->Asset->AssetVideo->getYoutubeId(); ?>" frameborder="0" allowfullscreen></iframe>
        
        <?php endif; ?>
        <?php endif; ?>
        
        <div class="destaque span12">
          <span></span>
          <a href="javascript:;" class="btn-destaque btn-form" title="Participe">Participe</a> 
          <span class="last"></span>
        </div>
      </div>
       
      <div class="destaque-home-tv interatividade span9" style=" display: none;">
        <div class="topo">
          <div class="bac-yellow">
            <h3>
              <i class="ico-camera"></i>
              Seu vídeo na TV Cocoricó “Ao vivoooo!”
              <i class="ico-seta-titulo video"></i>
            </h3>
          </div>
        </div>
        <form id="form-contato" method="post" action="">
          <p>
            Preencha o formulário abaixo, sem esquecer do link para o vídeo, e participe!<br/>
            Grave você sozinho, com seus amigos, em casa ou no seu lugar preferido!  Mas não esqueça da empolgação hein?<br/>
          </p>
          <div class="row-fluid form-campos">
            
            
            <div class="row-fluid">
              <i class="ico-tv ico-pessoa"></i>
              <input type="text" class="span11 pull-right" name="nome" placeholder="Seu nome"/>
            </div>
            <div class="row-fluid cidade">
              <i class="ico-tv ico-cidade"></i>
              <div class="span9">
                <input type="text" name="cidade" class="span12" placeholder="Sua cidade"/>
              </div>
              <div class="span2 estado">
                <select id="estado" name="estado" class="span12 required">
                    <option value="" selected="selected">UF</option>
                    <option value="Acre">AC</option>
                    <option value="Alagoas">AL</option>
                    <option value="Amazonas">AM</option>
                    <option value="Amap&aacute;">AP</option>
                    <option value="Bahia">BA</option>
                    <option value="Cear&aacute;">CE</option>
                    <option value="Distrito Federal">DF</option>
                    <option value="Espirito Santo">ES</option>
                    <option value="Goi&aacute;s">GO</option>
                    <option value="Maranh&atilde;o">MA</option>
                    <option value="Minas Gerais">MG</option>
                    <option value="Mato Grosso do Sul">MS</option>
                    <option value="Mato Grosso">MT</option>
                    <option value="Par&aacute;">PA</option>
                    <option value="Para&iacute;ba">PB</option>
                    <option value="Pernambuco">PE</option>
                    <option value="Piau&iacute;">PI</option>
                    <option value="Paran&aacute;">PR</option>
                    <option value="Rio de Janeiro">RJ</option>
                    <option value="Rio Grande do Norte">RN</option>
                    <option value="Rond&ocirc;nia">RO</option>
                    <option value="Roraima">RR</option> 
                    <option value="Rio Grande do Sul">RS</option>
                    <option value="Santa Catarina">SC</option>
                    <option value="Sergipe">SE</option>
                    <option value="S&atilde;o Paulo">SP</option>
                    <option value="Tocantins">TO</option>
                </select>
              </div>
            </div>
            <div class="row-fluid">
              <i class="ico-tv ico-link"></i>
              <input type="text" class="span11 pull-right" name="link" placeholder="Link do seu vídeo no You Tube"/>
            </div>
            <div class="row-fluid" style="position: relative;">
              <label class="radio" for="concorda" style="clear: both; color:#FFF;padding-left: 35px"> Estou ciente e de acordo com os Termos e Condições abaixo:</label>
              <input type="radio" name="concorda" id="concorda" value="aceite" style="position: absolute;top: 0px;left: 10px;">
            </div>
          </div>
          
          <div class="regras">
			<p> 1. Participação:</p> <br>
			<p>Esta é uma ação de caráter exclusivamente cultural que visa estimular a interação do participante com o programa de televisão TV Cocoricó, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. Esta ação destina-se ao público em geral, sem qualquer limitação, e está devidamente regulada conforme às disposições do Código Civil (10.406/02) e Lei de Direitos Autorais (9.610/98).</p> <br>
			<p> Para participar, o interessado deve enviar o vídeo (ou mais de um vídeo) relacionado à temática solicitada que será definida no site cmais.com.br/cocorico. O vídeo deve ser baixado para inserção no site cmais.com.br/cocorico à partir do dia 12/11/2012.</p> <br>
			<p> 1.1 O vídeo deverá ser enviado acompanhado dos dados pessoais do participante, utilizando o formulário da página. Caso o participante seja menor de 18 (dezoito) anos deverá necessariamente ter autorização dos seus pais ou responsáveis, bem como preencher os dados dos seus representantes legais.</p> <br>
			<p> 1.2. A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas não se responsabiliza por eventuais falhas causadas no envio do material.</p> <br>
			<p> 1.3. Ao encaminhar o vídeo, o participante e seus representantes legais declaram ter lido, compreendido e concordado em cumprir com estes termos. Será do participante única e exclusivamente a responsabilidade sobre todo conteúdo encaminhado, sendo que seus responsáveis legais responderão solidariamente, e ainda, tanto o participante, como seus representantes legais, deverão eximir quaisquer terceiros e a Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas sobre eventuais transtornos ou danos causados e/ou pela conduta do participante e ou conteúdo disponibilizado.</p> <br>
			<p> 2. Critérios de Seleção:</p> <br>
			<p> 2.1 A seleção dos vídeos será feita por uma equipe de produção, composta pelo diretor e assistente de produção, baseada na observação dos seguintes critérios e pela ordem: originalidade e adequação ao tema. Serão selecionados diversos vídeos, segundo os mencionados critérios, que atenderem os padrões de qualidade das emissoras da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas.</p> <br>
			<p> 2.2 Serão desconsiderados os vídeos com dados incorretos e de menores sem autorização dos seus responsáveis legais; os que fujam da temática descrita; que não sejam de autoria própria; que desrespeitem as leis relacionadas a direitos autorais ou direitos de personalidade e que tenham conteúdo inadequado.</p> <br>
			<p> 2.3. As inscrições que não estiverem de acordo com as condições deste Regulamento, quando identificadas, também serão invalidadas imediatamente.</p> <br>
			<p> 2.4. Serão automaticamente excluídos os participantes que tentarem fraudar ou burlar as regras estabelecidas neste regulamento ou ainda que não cederem os direitos previstos na Cláusula 3.1 abaixo.</p> <br>
			<p>  3. Considerações Gerais:</p> <br>
			<p> 3.1 Os participantes maiores e menores (representados por seus pais ou responsáveis legais quando menores), declaram, desde já, serem de sua única e exclusiva autoria os vídeos encaminhados ao site do programa e que os mesmos não constituem plágio de espécie alguma, ao mesmo tempo em que cedem e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo no Brasil e/ou Exterior sem quaisquer limitações, de forma plena e total, todos os direitos autorais, conexos e personalíssimos sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado, tanto no Brasil, como para o Exterior.</p> 
			<p> 3.2 A Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas não aceitará qualquer vídeo que contenha imagens que exponham as pessoas a situações vexatórias, incitem ao preconceito, violência, contenham apelo sexual ou ao consumismo exacerbado.</p> <br>
			<p> 3.3. O vídeo deve ter o tempo máximo de 15 (quinze) segundos de duração. O autor do vídeo declara que o conteúdo gravado é dotado de caráter de originalidade, não constituindo em ofensa a direitos de terceiros, pelo que também se responsabiliza pela obtenção das necessárias autorizações ou licença de utilização de imagem e som de voz das pessoas eventualmente retratadas nas reproduções, bem como pelos instrumentos de licença de direitos autorais relativos a eventuais obras de arte, trilhas sonoras, eventuais marcas ou elementos protegidos por propriedade intelectual ou qualquer violação de direitos autorais e imagens de terceiros retratados.</p> <br>
			<p> 3.4 Eventuais críticas e/ou sátiras relacionadas a eventos públicos de entretenimento não terão conteúdo ofensivo ou depreciativo e serão admitidas, a único e exclusivo critério da Fundação Padre Anchieta, nos estritos limites do exercício de tais direitos, nos termos do artigo 48 da Lei de Direitos Autorais, respeitados a honra, a imagem e os direitos de personalidade de terceiros envolvidos. Se a Fundação Padre Anchieta tiver qualquer restrição a tal conteúdo poderá desclassificar a participação de tal vídeo, a seu livre e exclusivo critério, sem qualquer reclamação do participante.</p> <br>
			<p> 3.5 Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela equipe de produção referida no item 2.1 deste Regulamento.</p> <br>
			<p> 3.6 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento. Os vídeos recebidos não serão devolvidos e poderão permanecer arquivados pela Promotora.</p> <br>
			<p> 3.7 Os vídeos poderão, a exclusivo critério da FPA, serem exibidos no canal de televisão aberto intitulado TV Cultura de São Paulo e demais emissoras afiliadas/licenciadas, no canal de televisão fechado denominado TV Rá Tim Bum, bem como nas Rádios Cultura AM/FM, para exibição no Brasil e no exterior, e também poderão ser publicados no site cmais.com.br/cocorico</p> <br>
			<p> 3.8. A ação objeto do presente regulamento poderá ser encerrada a qualquer tempo, a único e exclusivo critério da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas, desobrigando a mesma de exibir os vídeos escolhidos nesta hipótese.</p> <br>
			<p> 3.9. A Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas terá o direito de editar e alterar o vídeo encaminhado pelo Participante que, com o aceite do presente Regulamento, consente com referida edição. A edição será feita visando adequar aos critérios de exigência do tema e aos padrões de qualidade da programação da Fundação Padre Anchieta – Centro Paulista de Rádio e TV Educativas.</p> <br>
			<p> 3.10 O Conteúdo a ser encaminhado pelo participante em audiovisual não poderá:</p> <br>
			<p>(i) - Infringir e ou violar direitos de terceiros;</p> <br>
			<p>(ii) - conter qualquer disposição que viole Leis, Estatutos, Normas, Portarias;</p> <br>
			<p>(iii) - incitar práticas de crimes e ou contravenções penais;</p> <br>
			<p>(iv) - promover atividades ilegais;</p> <br>
			<p>(v) - conter fatos caluniosos, difamatórios, ameaçadores, abusivos, violentos, mal-intencionados;</p> <br>
			<p>(vi) - incitar ao ódio ou à discriminação de raça, cor, gênero, religião, nacionalidade, etnia ou origem nacional, estado civil, deficiência;</p> <br>
			<p>(vii) - expor qualquer terceiro em situação constrangedora</p> <br>
			<p>3.11. A participação nesta ação interativa não acarretará ao participante nenhum outro direito e/ou vantagem que não esteja expressamente prevista neste Regulamento.</p> 

           </div> 
          <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
          <input type="submit" id="enviar" class="pull-right" value="ENVIAR" /> 
        </form>
        <div id="msgAcerto" style="display:none;">
          <p>Seu vídeo foi enviado com sucesso! :)</p>
          <hr>
          <p>Para assistir ao vivo, continue ligado na TV Cocórico!</p>          
        </div>
        <div id="msgErro" style="display:none;">
          <p> Puxa, puxa que puxa... seu vídeo não foi enviado! :(<br/> 
            <hr>
            Tente novamente mais tarde.
          </p>
        </div>  

      </div>
      <!-- form interatividade -->
      
      <?php if(isset($displays['bastidores'])):?>
        <?php if(count($displays['bastidores']) > 0): ?>
          
          <?php $related = $displays0['bastidores'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          <?php $related = $displays1['bastidores'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          <?php $related = $displays2['bastidores'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          
       <!-- bastidores -->
      <div class="bastidores fonte span3">
       <?php if(count($related) > 0): ?> 
        <div class="topo">
          <div class="bac-yellow">
            <h3>
            <i class="ico-camera"></i>
            bastidores
            <i class="ico-seta-titulo bastidores"></i>
           </h3>
         </div>
       </div>
        
        <!-- item -->
        <a href="<?php echo $displays['bastidores'][0]->retriveUrl() ?>" title="<?php echo $displays['bastidores'][0]->getTitle() ?>">
          <div class="item">
            <div class="img-bast">
                <img src="<?php $related = $displays0['bastidores'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>" alt="<?php echo $displays['bastidores'][0]->getTitle() ?>"/>
            </div>
            <span><?php echo $displays['bastidores'][0]->getTitle() ?></span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
        
        <!-- item -->
        <a href="<?php echo $displays['bastidores'][1]->retriveUrl() ?>" title="<?php echo $displays['bastidores'][1]->getTitle() ?>">
          <div class="item">
            <div class="img-bast">
                <img src="<?php $related1 = $displays1['bastidores'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>" alt="<?php echo $displays['bastidores'][1]->getTitle() ?>"/>
            </div>
            <span><?php echo $displays['bastidores'][1]->getTitle() ?></span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
        
        <!-- item -->
        <a href="<?php echo $displays['bastidores'][2]->retriveUrl() ?>" title="<?php echo $displays['bastidores'][2]->getTitle() ?>">
          <div class="item">
            <div class="img-bast">
                <img src="<?php $related1 = $displays2['bastidores'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>" alt="<?php echo $displays['bastidores'][2]->getTitle() ?>"/>
            </div>
            <span><?php echo $displays['bastidores'][2]->getTitle() ?></span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
      </div>
      <!-- /bastidores -->
       <?php endif; ?>
      <?php endif; ?>
      
      <!-- convidado especial -->
      <a href="#" title="titulo" class="span6 destaque1">
        <div class="destaque-1 conteudo-tv">
       	<?php if(isset($displays['convidado-especial'])): ?>
      	 <?php if(count($displays['convidado-especial']) > 0): ?> 	
          <h3><?php echo $displays['convidado-especial'][0]->Asset->getTitle() ?></h3>
          <img src="<?php echo $displays['convidado-especial'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>" alt="<?php echo $displays['convidado-especial'][0]->Asset->getTitle() ?>">
          <p>
            <?php echo $displays['convidado-especial'][0]->Asset->getDescription() ?>
            <i class="ico-mais"></i>
          </p>
          <?php endif; ?>
        <?php endif; ?>
         </div>
       </a>
      <!-- /convidado especial --> 
      
      <!-- receitinhas -->
      <a href="#" title=" titulo" class="span6 destaque2" style="margin-left: 15px;"> 
        <div class="destaque-2 conteudo-diverso">
        <?php if(isset($displays['receitinhas'])): ?>
      	 <?php if(count($displays['receitinhas']) > 0): ?> 	
          <h3><?php echo $displays['receitinhas'][0]->Asset->getTitle() ?></h3>
          <img src="<?php echo $displays['receitinhas'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>" alt="<?php echo $displays['receitinhas'][0]->Asset->getTitle() ?>">
          <p>
            <?php echo $displays['receitinhas'][0]->Asset->getDescription() ?>
            <i class="ico-mais"></i>
          </p>
          <?php endif; ?>
        <?php endif; ?>
        </div>
      </a>  
      <!-- /receitinhas -->
      
    </div>
    <!-- /col esquerda -->      
  </div>
  <!-- /row conteudo -->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script>
$(document).ready(function(){
      /* form tv cocorico */
  $('.btn-form').click(function(){
   $('.destaque-home-tv').hide();
   $('.interatividade').fadeIn("fast"); 
  })
  $('#votar-input').click(function(){
    $('label.error').css('display','none');
  });
  //valida form
  var validator = $('.form-voto').validate({
    submitHandler: function(form){
      sendAnswer()
    },
    rules:{
        opcao:{
          required: true
        }
      },
      messages:{
        opcao: ""
      }
    });
});
//enviar voto
function sendAnswer(){
  $.ajax({
    type: "POST",
    dataType: "json",
    data: $("#e<?php echo $respostas[0]->Asset->getId()?>").serialize(),
    url: "<?php echo url_for('homepage')?>ajax/enquetes",
    beforeSend: function(){
      $('.votar').hide();
      $('#ajax-loader').show();
    },
    success: function(data){
      $(".form-voto").hide();
      $("form.inativo").fadeIn("fast");
      var i=0;
      $.each(data, function(key, val) {
        
        $('.resposta-'+i).html(val.votes);
        i++;
      });
    }
  });
  
}
</script>
<!--form-->
<script type="text/javascript">
  $(document).ready(function(){
    var validator = $('#form-contato').validate({
      submitHandler: function(form){
        $.ajax({
          type: "POST",
          dataType: "text",
          data: $("#form-contato").serialize(),
          beforeSend: function(){
            $('input#enviar').hide()
            $('img#ajax-loader').show();
          },
          success: function(data){
            //window.location.href="#";
            if(data == "1"){
              $('input#enviar').show()
              $('img#ajax-loader').hide();
              $('#form-contato').hide(); 
              $('#msgAcerto').show();           
            }
            else {
              $('img#ajax-loader').hide();
              $('input#enviar').show()
              $('#form-contato').hide();
              $("#msgErro").show();
            }
          }
        });         
      },
      rules:{
        nome:{
          required: true,
          minlength: 2
        },
        email:{
          required: true,
          email: true
        },
        cidade:{
          required: true,
          minlength: 3
        },
        link:{
          required:true
        },
        concorda:{
          required: true
        }
      },
      messages:{
        nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        email: "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        cidade: "Este campo &eacute; Obrigat&oacute;rio.",
        link: "Este campo &eacute; Obrigat&oacute;rio.",
        concorda: "Este campo &eacute; Obrigat&oacute;rio."
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.addClass("checked");
        $("label.error.checked").css("display","none");
        label.html("&nbsp;");
      }
    });
  });
</script>
