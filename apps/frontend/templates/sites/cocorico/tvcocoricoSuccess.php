<script type="text/javascript">
var error = getParameterByName('error');
var success = getParameterByName('success');
 //alert("error: "+error+"\n"+"success: "+success); 

$(function(){
  if (error || success)
  {
    $("#destaqueForm").hide();
    $("#formWrapper").show();
    $("#form-contato").hide();
    
    if (success == "1")
    {
      $("#formWrapper #msgAcerto").show();
      $("#formWrapper #msgErro").hide();
    }
    if (error == "1")
    {
      $("#formWrapper #msgErro").show();
      $("#formWrapper #msgAcerto").hide();
    }  
    if (error == "2")
    {
      $("#formWrapper #msgErro2").show();
      $("#formWrapper #msgAcerto").hide();
    }  
    if (error == "3")
    {
      $("#formWrapper #msgErro3").show();
      $("#formWrapper #msgAcerto").hide();
    }  
    if (error == "4")
    {
      $("#formWrapper #msgErro4").show();
      $("#formWrapper #msgAcerto").hide();
    }  
  }
});
</script>

<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css?nocache=<?php echo md5(time()); ?>" rel="stylesheet">
<script type="text/javascript" src="/portal/js/bootstrap/bootstrap-fileupload.js"></script>
<!-- container-->
<div class="container tudo">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->

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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?>
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
        <a class="btn-programacao" href="<?php echo $site->retriveUrl(); ?>/natv" title="">
         Confira os horários da programação 
        </a>
        <h2>
          <i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i>
        </h2>
        <?php if(isset($displays_tv_cocorico['destaque-tv-cocorico'])):?>
          <?php if(count($displays_tv_cocorico['destaque-tv-cocorico']) > 0): ?>
       
          <?php
              $display_img_src = $displays_tv_cocorico['destaque-tv-cocorico'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays_tv_cocorico['destaque-tv-cocorico'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
            
        <a class="convidado span12" href="<?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->Asset->retriveUrl() ?>" title="Próximo convidado: <?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>"><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>" />
          <?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>
        </a>
        <a href="<?php echo $site->retriveUrl(); ?>/convidados" title="Convidados">
          <span class="mais"></span>
        </a>
          <?php endif; ?>
        <?php endif; ?> 
        <!-- enquete -->
        <?php
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, Section s')
          ->where('a.id = sa.asset_id')
          ->andWhere('s.id = sa.section_id')
          ->andWhere('s.slug = "enquetes"')
          ->andWhere('a.site_id = ?', (int)$site->id)
          ->andWhere('a.asset_type_id = 10')
          ->orderBy('a.id desc')
          ->execute();
         //doctrine para respostas
          $respostas = Doctrine_Query::create()
            ->select('aa.*')
            ->from('AssetAnswer aa')
            ->where('aa.asset_question_id = ?', (int)$assets[0]->AssetQuestion->id)
            ->execute();
          ?>  
        <?php include_partial_from_folder('sites/cocorico', 'global/tvenquete', array('site'=>$site,'assets'=>$assets, 'respostas'=>$respostas)) ?>
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
      <!-- destaque-home-simples -->
      <div class="destaque-home-tv span9" id="destaqueForm">
        
            <?php if(isset($displays['destaque-principal'])): ?>
          <?php if(count($displays['destaque-principal']) > 0): ?>
            <h2>Concurso Cultural</h2>
            <img class="promocao" src="/portal/images/capaPrograma/cocorico/destaque-concurso_tvcocorico_1ano.jpg" />
           
            <div class="destaque span12" style="position:relative;">
              <span></span>
              <!--a href="<?php echo $site->retriveUrl()?>/concurso-cultural" class="btn-destaque" title="Participe!">Participe!</a-->
              <a href="javascript:;" class="btn-destaque btn-form" title="Participe">Participar</a> 
              <span class="last"></span>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        
        
        <?php /*if(isset($displays['destaque-seu-video'])): ?>
          <?php if(count($displays['destaque-seu-video']) > 0): ?>
            <h2><?php echo $displays['destaque-seu-video'][0]->getTitle(); ?></h2>
            
            <iframe width="460" height="280" src="http://www.youtube.com/embed/<?php echo $displays['destaque-seu-video'][0]->Asset->AssetVideo->getYoutubeId(); ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            
            <div class="destaque span12">
              <span></span>
              <a href="<?php $site->retriveUrl()?>/cocorico2/episodios" class="btn-destaque" title="Ver mais episódios completos">Ver mais episódios completos</a>
              <span class="last"></span>
            </div>
          <?php endif; ?>
        <?php endif;*/ ?>
        
      </div>
      <!-- /destaque-home-simples -->
      <!-- form interatividade --> 
      <div class="destaque-home-tv interatividade span9" id="formWrapper" style="display:none">
        <div class="topo">
          <div class="bac-yellow">
            <h2>Concurso Cultural</h2>
          </div>
        </div>
        <form id="form-contato" method="post" action="/actions/cocorico/sendmail.php" enctype="multipart/form-data">
          <?php
          /*
          <?php if($_REQUEST['test']): ?>
          <input type="hidden" name="test" value="1" />
          <?php endif; ?>
           */
          ?>
          <!--p>
            <?php echo $displays['destaque-principal'][0]->getDescription(); ?>
          </p-->
          <p>Solte sua imaginação e desenhe sua magrela. Você pode ganhar uma bicicleta do Júlio!</p>
          <div class="row-fluid form-campos">
            
            
            <div class="row-fluid">
              <i class="ico-tv ico-pessoa"></i>
              <input type="text" class="span11 pull-left" name="nome" data-default="Seu nome" value="Seu nome" id="nome"/>
            </div>
            <div class="row-fluid">
              <i class="ico-tv ico-contato"></i>
              <input type="text" class="span11 pull-left" name="email" placeholder="E-mail para contato"/>
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
            <!--div class="row-fluid">
              <i class="ico-tv ico-link"></i>
              <input type="text" class="span11 pull-right" name="link" placeholder="Link do seu vídeo no You Tube"/>
            </div-->
            <div class="row-fluid last">
              <i class="ico-tv ico-bike"></i>
              <input id="datafile" type="file" name="datafile" size="25">
            </div>
         
           
            
            <div class="row-fluid">
              <label class="radio" for="concorda">
                <input type="radio" name="concorda" id="concorda" value="aceite">Estou ciente e de acordo com os Termos e Condições abaixo:
              </label>             
            </div>
          </div>
          
          <div class="regras">
            <p> 1. Participação:</p> <br>
            <p>Este é um programa de caráter exclusivamente cultural, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. A participação é aberta a crianças representadas por seus pais ou responsáveis legais.</p>
            <p>Para participar, o interessado (com autorização de pais ou responsáveis) deve enviar um desenho com uma bicicleta. Não há restrições temáticas, desde que o desenho seja livre de preconceitos, palavras obscenas ou conteúdo inadequado ao público infantil.</p>
            <p>1.1 Os desenhos deverão ser enviados acompanhados dos seguintes dados pessoais do responsável legal da criança: nome, email e endereço.</p>
            <p> 2. Critérios de Seleção:</p> <br>
            <p>2.1 A seleção dos desenhos serão feita pela equipe de Produção do Cocoricó e será baseada na observação dos seguintes critérios e pela ordem: criatividade, originalidade e adequação à faixa etária.</p>
            <p>2.2 Serão desconsiderados os desenhos com dados incorretos; os que fujam da adequação à faixa etária (público infantil); que tenham conteúdo inadequado.</p>
            <p>2.3 Cada criança poderá participar enviando quantos desenhos desejar.</p>
            <p>  3. Considerações Gerais:</p> <br>
            <p>3.1 Os participantes representados por seus pais ou responsáveis legais, declaram, desde já, a autorização de seu nome e cidade onde moram para publicação na programação da TV Cultura e transferem à Fundação Padre Anchieta Centro Paulista de Rádio e TV Educativas, sem qualquer ônus para esta e, em caráter definitivo, plena e totalmente, todos os direitos autorais sobre o referido trabalho, para qualquer tipo de utilização, publicação, reprodução por qualquer meio ou técnica, especialmente na divulgação do resultado.</p> 
            <p>3.2 A FPA não aceitará qualquer desenho que contenha exposição de pessoas em situações vexatórias, incitando o preconceito, violência e que contenham apelo sexual ou ao consumismo exacerbado.</p>
            <p>3.3 Quaisquer dúvidas, divergências ou situações não previstas neste regulamento serão apreciadas e decididas pela Produção do Cocoricó referida no item 2.1 deste Regulamento.</p>
            <p>3.4 A simples participação neste evento de incentivo à criatividade implica no total conhecimento e aceitação irrestrita deste regulamento.</p>
            <p>3.5 Os desenhos serão publicados no site <a href="http://cocorico.com.br">cocorico.com.br</a> e os melhores poderão ser exibidos na programação da TV Cultura.</p>
          </div> 
          <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
          
          <label generated="true" class="error" style="display: none;">*Preencha corretamente os campos em vermelho.</label>
          
          <input type="submit" id="enviar" class="pull-right" value="ENVIAR" /> 
        </form>
        
        <div id="msgAcerto" style="display:none">
          <p>Seu desenho foi enviado com sucesso! Obrigado por participar! :)</p>
        </div>
        
        <div id="msgErro" style="display:none">
          <p> Puxa, puxa que puxa... seu desenho não foi enviado! :(<br/> 
            <hr>
            Tente novamente mais tarde.
          </p>
        </div>

        <div id="msgErro2" style="display:none">
          <p> Puxa, puxa que puxa... seu desenho não foi enviado! :(<br/> 
            <hr>
            Verifique se o arquivo que você tentou enviar está no formato JPG, GIF ou PNG.
          </p>
        </div>
 
        <div id="msgErro3" style="display:none">
          <p> Puxa, puxa que puxa... seu desenho não foi enviado! :(<br/> 
            <hr>
            Verifique se o arquivo que você tentou enviar é menor que 15MB.
          </p>
        </div>
        
        <div id="msgErro4" style="display:none">
          <p> Puxa, puxa que puxa... seu desenho não foi enviado! :(<br/> 
            <hr>
            Este concurso foi encerrado dia 02/03/2013, à meia-noite!
          </p>
        </div>
      </div>
      
      <?php if(isset($displays['bastidores'])):?> 
        <?php if(count($displays['bastidores']) > 0): ?>
                    
       <!-- bastidores -->
      <div class="bastidores fonte span3"> 
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
        <a href="<?php echo $site->retriveUrl(); ?>/tour-virtual" title="Tour Virtual">
          <div class="item">
            <div class="img-bast">
                <img src="/portal/images/capaPrograma/cocorico/destaque-tour-virtual.jpg" alt="Tour Virtual"/>
            </div>
            <span>Tour Virtual</span>
          </div>
        </a>
       
        <!-- /item -->
         
        <!-- item -->
        <a href="<?php echo $site->retriveUrl(); ?>/erros-de-gravacao" title="Erros de Gravação">
          <div class="item">
            <div class="img-bast">
                <img src="/portal/images/capaPrograma/cocorico/destaque-erro-gravacao.jpg" alt="Erros de Gravação"/>
            </div>
            <span>Erros de Gravação</span>
          </div>
        </a>
       
        <!-- /item -->
        
        <!-- item -->
        <a href="<?php echo $site->retriveUrl(); ?>/instagram" title="Instagram">
          <div class="item">
            <div class="img-bast">
                <img src="/portal/images/capaPrograma/cocorico/destaque-instagram.jpg" alt="Instagram"/>
            </div>
            <span>Instagram</span>
          </div>
        </a>
        <!-- /item -->
      </div>
      
      <!-- /bastidores -->
      <?php endif; ?>
      <?php endif; ?>
     <br>
     <br>
     <div class="span12" style="margin-top:20px;">  
      
      <!-- Destaque Secundário -->
      <?php if(isset($displays['convidado-especial'])): ?>
        <?php if(count($displays['convidado-especial']) > 0): ?>
          <?php
           /*
           <?php
              $display_img_src = $displays['convidado-especial'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['convidado-especial'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
        
          <?php $related = $displays['convidado-especial'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          <?php $se = $displays['convidado-especial'][0]->Asset->Sections[0]->getTitle(); ?>
          <?php $se_link = $displays['convidado-especial'][0]->Asset->Sections[0]->getSlug(); ?> 
          
          <?php if($displays['convidado-especial'][0]->Asset->AssetType->getSlug() == "content"): ?>
          <div class="span6 box-destaque tvcocorico">
            <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
            <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><img src="<?php echo $display_img_src ?>" alt="<?php echo $se ?>"></a>
              <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>">
                <?php //echo $displays['destaque-imprima'][0]->getDescription() ?>
                <?php $tam=32; $str=$displays['convidado-especial'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?> 
              </a>
            <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
          </div>
          
          <?php elseif($displays['convidado-especial'][0]->Asset->AssetType->getSlug() == "video"): ?>
           <div class="span6 box-destaque ytb">
            <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
            <a href="<?php echo $displays['convidado-especial'][0]->retriveUrl() ?>"><img src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays['convidado-especial'][0]->getTitle() ?>"></a>
            <a href="<?php echo $displays['convidado-especial'][0]->retriveUrl() ?>">
              <?php //echo $displays['destaque-imprima'][0]->getDescription() ?>
              <?php $tam=28; $str=$displays['convidado-especial'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?> 
            </a>
            <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
          </div>
          
          <?php endif; ?>
           */
          ?>
          
          <div class="span6 box-destaque ytb">
            <h3><a href="<?php echo $displays['convidado-especial'][0]->retriveUrl() ?>"><?php echo $displays['convidado-especial'][0]->Block->getTitle() ?></a></h3><!-- teste 2 /-->
            <a href="<?php echo $displays['convidado-especial'][0]->retriveUrl() ?>" title="<?php echo $displays['convidado-especial'][0]->getTitle() ?>">
              <img src="<?php echo $displays['convidado-especial'][0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['convidado-especial'][0]->getTitle() ?>">
            </a>
            <a href="<?php echo $displays['convidado-especial'][0]->retriveUrl() ?>" title="<?php echo $displays['convidado-especial'][0]->getTitle() ?>">
              <?php $tam=28; $str=$displays['convidado-especial'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?> 
            </a>
            <?php if(is_array($displays['convidado-especial'][0]->Asset->Sections)): ?>  
            <a href="<?php echo $displays['convidado-especial'][0]->Asset->Sections[0]->retriveUrl(); ?>" class="ico-mais" title="<?php echo $displays['convidado-especial'][0]->Asset->Sections[0]->getTitle(); ?>"></a>
            <?php endif; ?>
          </div>
          
       <?php endif; ?>
     <?php endif; ?>
    
    <!-- Receitinhas -->
     <?php if(isset($displays['receitinhas'])):?>
       <?php if(count($displays['receitinhas']) > 0): ?>  
          <?php $related = $displays['receitinhas'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
          <?php $se = $displays['receitinhas'][0]->Asset->Sections[0]->getTitle(); ?>
          <?php $se_link = $displays['receitinhas'][0]->Asset->Sections[0]->getSlug(); ?> 
         
    <div class="span6 box-destaque ytb">
      <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
      <a href="<?php echo $displays['receitinhas'][0]->retriveUrl() ?>"><img src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays['receitinhas'][0]->getTitle() ?>"></a>
      <a href="<?php echo $displays['receitinhas'][0]->retriveUrl() ?>">
        <?php //echo $displays['destaque-imprima'][0]->getDescription() ?>
        <?php $tam=28; $str=$displays['receitinhas'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?> 
      </a>
      <?php $se = $displays['convidado-especial'][0]->Asset->Sections[0]->getTitle(); ?>
      <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
    </div>
    <!-- / Receitinhas -->
    </div>
    <?php endif; ?>
    <?php endif; ?> 
      
    </div>
    <!-- /col esquerda -->      
  </div>
  <!-- /row conteudo -->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="/portal/js/validate/additional-methods.js"></script>
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
});

</script>

<!--form-->
<script type="text/javascript">
  $(document).ready(function(){
    var validator = $('#form-contato').validate({
      
      submitHandler: function(form){
        form.submit();
      },
      rules:{
        nome:{
          required:function(){
            validate('#nome');
            },
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
        datafile:{
          required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
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
        datafile: {
          accept: "O arquivo precisa estar no formato JPG, GIF ou PNG",
          filesize: "O arquivo não pode ser maior que 15MB"
        },
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
  
  function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
  }
</script>