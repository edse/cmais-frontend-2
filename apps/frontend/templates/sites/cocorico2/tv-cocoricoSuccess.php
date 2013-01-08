<?php
  $displays = array();
  $blocks = Doctrine_Query::create()
   ->select('b.*')
    ->from('Block b, Section s')
    ->where('b.section_id = s.id')
    ->andWhere('s.slug = ?', "home")//mudar para home quando for no ar
    ->andWhere('b.slug = ?', 'enquete') 
    ->andWhere('s.site_id = ?', $site->id)
    ->execute();

  if(count($blocks) > 0){
    $displays['enquete'] = $blocks[0]->retriveDisplays();
  }
?>
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
      <div class="tvcoco span12">
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <a class="convidado span12" href="/cocorico/tvcocorico/convidado" title=""><img src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="proximo convidade" /> Nome convidado<span class="mais"></span></a>
        <!-- enquete -->
        <?php
        //pergunta bloco enquete - 1º destaque
        $q = $displays['enquete'][0]->Asset->AssetQuestion->getQuestion()."teste";

        //doctrine para respostas
        $respostas = Doctrine_Query::create()
          ->select('aa.*')
          ->from('AssetAnswer aa')
          ->where('aa.asset_question_id = ?', (int)$displays["enquete"][0]->Asset->AssetQuestion->id)
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
            <a href="#" title="Ver enquetes anteriores">Ver enquetes anteriores</a>
          </form>
          <!--/Resposta-->
        </div>
        <!-- /enquete -->
        <!-- fale conosco cr-->
      </div>
      <!-- /tv cocorico -->
      <div class="cr span12">
        <a href="http://www2.tvcultura.com.br/faleconosco/" title="Fale Conosco" target="_blank">
          <img src="/portal/images/capaPrograma/cocorico/btn-faleconosco.png"/>
        </a>
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
        <h2>Seu vídeo na TV Cocoricó “Ao vivoooo!”</h2>
        <iframe width="460" height="280" src="http://www.youtube.com/embed/TpNwYOLnwEA" frameborder="0" allowfullscreen></iframe>
        
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
        <form method="post" action="">
          <p>
            Para participar é muito fácil:<br/>
            1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br>
            2 - Vestibulum at sapien orci, at placerat turpis.<br/>
            3 - Phasellus ligula nulla, rhoncus nec adipiscing sit amet<br/>
          </p>
          <div class="row-fluid form-campos">
            <i class="ico-tv ico-pessoa"></i>
            <i class="ico-tv ico-cidade"></i>
            <i class="ico-tv ico-link"></i>
            <input type="text" class="span11 pull-right" name="nome" placeholder="Seu nome"/>
            <select class="span2 pull-right" id="estado" style="margin-left:12px;">
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
            <input type="text" class="span9 pull-right" name="cidade" placeholder="Sua cidade"/>
            <input type="text" class="span11 pull-right" name="nome" placeholder="Link do seu vídeo no You Tube"/>
            <label class="radio" style="clear: both; color:#FFF">
              <input type="radio" name="concorda" id="concorda" value="option1" checked>
              Estou ciente e de acordo com os Termos e Condições abaixo:
            </label>
          </div>
          
          <div class="regras">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at sapien orci, at placerat turpis. Phasellus ligula nulla, rhoncus nec adipiscing sit amet, congue eget nisi. Suspendisse semper leo ac nunc consectetur eu adipiscing dui cras amet.
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at sapien orci, at placerat turpis. Phasellus ligula nulla, rhoncus nec adipiscing sit amet, congue eget nisi. Suspendisse semper leo ac nunc consectetur eu adipiscing dui cras amet.
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at sapien orci, at placerat turpis. Phasellus ligula nulla, rhoncus nec adipiscing sit amet, congue eget nisi. Suspendisse semper leo ac nunc consectetur eu adipiscing dui cras amet.
          </div> 
          <input type="submit" id="enviar" class="pull-right" value="ENVIAR" /> 
        </form>
          

      </div>
      <!-- form interatividade -->
      
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
        <a href="#" title="Tour Virtual">
          <div class="item">
            <div class="img-bast">
                <img src="http://midia.cmais.com.br/assets/image/image-2-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg" alt="titulo imagem"/>
            </div>
            <span>Tour Virtual</span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
        
        <!-- item -->
        <a href="#" title="Erros de gravação">
          <div class="item">
            <div class="img-bast">
                <img src="http://midia.cmais.com.br/assets/image/image-2-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg" alt="titulo imagem"/>
            </div>
            <span>Erros de gravação</span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
        
        <!-- item -->
        <a href="#" title="Instamgram Oficial">
          <div class="item">
            <div class="img-bast">
                <img src="http://midia.cmais.com.br/assets/image/image-2-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg" alt="titulo imagem"/>
            </div>
            <span>Instamgram Oficial</span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
      </div>
      <!-- /bastidores -->
      
      <!-- convidado especial -->
      <a href="#" title="titulo" class="span6 destaque-1">
        <div class="destaque-1 conteudo-tv">
          <h3>convidado especial</h3>
          <img src="http://midia.cmais.com.br/assets/image/image-6-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg" alt="Convidado">
          <p>
            texto corrido
            <i class="ico-mais"></i>
          </p>
         </div>
       </a>
      <!-- /convidado especial -->
      
      <!-- receitinhas -->
      <a href="#" title=" titulo" class="span6 destaque-2">
        <div class="destaque-2 conteudo-diverso">
          <h3>Receitinhas</h3>
          <img src="http://midia.cmais.com.br/assets/image/image-6-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg" alt="Convidado">
          <p>
            texto corrido
            <i class="ico-mais"></i>
          </p>
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
