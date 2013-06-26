<?php
// ação temporária de férias
$feriasSection = Doctrine_Query::create()
  ->select('s.*')
  ->from('Section s')
  ->where('s.site_id = ?', (int)$site->id)
  ->andWhere('s.slug = "ferias"')
  ->andWhere('s.is_active = ?', 1)
  ->orderBy('s.display_order ASC')
  ->fetchOne();

if($feriasSection)
{
  $feriasBlocks = $feriasSection->Blocks;
  $feriasDisplays = array();
  if(count($feriasBlocks) > 0)
  {
    foreach($feriasBlocks as $b)
      $feriasDisplays[$b->getSlug()] = $b->retriveDisplays();
  }
}
?>
<!-- Le styles -->
<link href="/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"  >
<link href="/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="/portal/js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="/portal/js/bootstrap/tab.js"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/maiscrianca2.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg"></div>

<?php include_partial_from_folder('sites/maiscrianca', 'global/header', array('site'=>$site)) ?>
  
<div class="container">
  
  <?php if(isset($displays['destaque-principal-1']) || isset($displays['destaque-principal-2'])): ?>
    
  <div class="row-fluid" id="menu">
    <div class="span12">
      <ul id="myTab" class="nav nav-tabs">
        <?php if($feriasSection): ?>
        <li class="ferias active"><a href="#ferias" data-toggle="tab"><p>Férias</p></a></li>
        <?php endif; ?>
        <?php if(isset($displays['destaque-principal-1'])): ?>
          <?php if(count($displays['destaque-principal-1']) > 0): ?>
        <li class="joguinhos<?php if(!$feriasSection): ?> active<?php endif; ?>"><a href="#home" data-toggle="tab"><p><?php echo $displays['destaque-principal-1'][0]->Block->getTitle() ?></p><span class="ativo"></span></a></li>
          <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($displays['destaque-principal-2'])): ?>
          <?php if(count($displays['destaque-principal-2']) > 0): ?>
        <li class="atividades"><a href="#profile" data-toggle="tab"><span></span><p><?php echo $displays['destaque-principal-2'][0]->Block->getTitle() ?></p><span class="ativo"></span></a></li>
          <?php endif; ?>
        <?php endif; ?>
      </ul>
      <div id="myTabContent" class="tab-content">
        <?php if($feriasSection): ?>
        <div class="tab-pane fade active in" id="ferias">
          
          <?php if($feriasDisplays['destaque-principal']): ?>
            <?php if(count($feriasDisplays['destaque-principal']) > 0): ?>
          <div class="span12">
            <img class="span8" src="<?php echo $feriasDisplays['destaque-principal'][0]->retriveImageUrlByImageUsage("image-6-b") ?>" alt="<?php echo $feriasDisplays['destaque-principal'][0]->getTitle() ?>" />
            <div class="span4">
              <h2><?php echo $feriasDisplays['destaque-principal'][0]->getTitle(); ?></h2>
              <p><?php echo html_entity_decode($feriasDisplays['destaque-principal'][0]->Asset->AssetContent->render()); ?></p>
            </div>
          </div>
            <?php endif; ?>
          <?php endif; ?>
          
          <span class="barra"></span>
          
          <?php if($feriasDisplays['o-que-e-o-que-e']): ?>
          <div class="span12 oquee">
            <h3><?php echo $feriasDisplays['o-que-e-o-que-e'][0]->Block->getTitle() ?></h3>
            
            <p><?php echo $feriasDisplays['o-que-e-o-que-e'][0]->Block->getDescription() ?></p>
            
            <div class="msgErro" style="display:none">
              <span class="alerta"></span>
              <div class="boxMsg">
                <p class="aviso">Sua mensagem não pode ser enviada.</p>
                <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
              </div>
             
            </div>
            <div class="msgAcerto" style="display:none">
              <span class="alerta"></span>
              <div class="boxMsg"> 
                <p class="aviso">Sua charada foi enviada com sucesso!</p>
                <p>Obrigado por participar! Fique ligado na programação da TV Cultura e no site +Criança para assistir a esta e outras charadas!</p>
              </div>
            
            </div>
            <form class="form-contato" method="post" action="">
              <label>
                Seu nome
                <input type="text" name="nome" id="nome" />
              </label>
              <label class="email">
                Seu email
                <input type="text" name="email" id="email" />
              </label>
              <br/>
              <label class="charada">
                charada <br />
                <p class="contador">[<span id="textCounter">250</span>]</p>
                <textarea id="charada" onKeyDown="limitText(this,250,'#textCounter');"  name="charada"></textarea>
              </label>
              <br />
              <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
              <button type="submit" class="btn" id="enviar" name="enviar" value="enviar">Enviar</button>
            </form>
          </div>
          <?php endif; ?>
          
          <script>
            function changeVideo(id) {
              $('#player').html('<iframe id="video-charada" width="930" height="689" src="http://www.youtube.com/embed/'+id+'?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>');
            }
          </script>
          
          <?php if($feriasDisplays['charadinhas']): ?>

          <span class="barra"></span>
            
            <?php if(count($feriasDisplays['charadinhas']) > 0): ?>
          <div class="span12">
            <h2><?php echo $feriasDisplays['charadinhas'][0]->Block->getTitle() ?></h2>
            
            <div id="player">
              <iframe id="video-charada" title="<?php echo $feriasDisplays['charadinhas'][0]->getTitle() ?>" width="930" height="689" src="http://www.youtube.com/embed/<?php echo $feriasDisplays['charadinhas'][0]->Asset->AssetVideo->getYoutubeId(); ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            
          </div>
          
              <?php if(count($feriasDisplays['charadinhas']) > 1): ?>
          <div class="span12">
            <div class="carrossel">
              <ul class="row-fluid span12">
                <?php foreach($feriasDisplays['charadinhas'] as $d): ?>
                <li>
                  <a href="javascript: changeVideo('<?php echo $d->Asset->AssetVideo->getYoutubeId(); ?>')" title="<?php echo $d->getTitle() ?>">
                    <img src="http://img.youtube.com/vi/<?php echo $d->Asset->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
              <?php endif; ?>
            <?php endif; ?>
          <?php endif; ?>
          
        </div>
        <?php endif; ?>
             
        <?php if(isset($displays['destaque-principal-1'])): ?>
          <?php if(count($displays['destaque-principal-1']) > 0): ?>
        <div class="tab-pane fade<?php if(!$feriasSection): ?> active in<?php endif; ?>" id="home">
          <ul class="lista">
            <?php foreach($displays['destaque-principal-1'] as $k=>$d): ?>
            <li class="span3">
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" />
                <?php endif; ?>
                <?php echo $d->getTitle() ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
          <?php endif; ?>
        <?php endif; ?>
        
        <?php if(isset($displays['destaque-principal-2'])): ?>
          <?php if(count($displays['destaque-principal-2']) > 0): ?>
        <div class="tab-pane fade" id="profile">
          <ul class="lista">
            <?php foreach($displays['destaque-principal-2'] as $k=>$d): ?>
            <li class="span3">
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" />
                <?php endif; ?>
                <?php echo $d->getTitle() ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <div class="pontilhado row-fluid span12"></div>
    </div>
  </div>
  <?php endif; ?>
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/naweb') ?>
  
  <?php include_partial_from_folder('sites/maiscrianca', 'global/natv') ?>
  
  <div class="row-fluid destaques rodape">
    <div class="row-fluid span12">
      <?php include_partial_from_folder('sites/maiscrianca', 'global/vocesabia') ?>
      
      <?php include_partial_from_folder('sites/maiscrianca', 'global/paraospais') ?>
      
      <?php include_partial_from_folder('sites/maiscrianca', 'global/publicidade') ?>
    </div>
  </div>
</div>

<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('input#enviar').click(function(){
      $(".msgAcerto, .msgErro").hide();
    });
    
    var validator = $('#form-contato').validate({
      submitHandler: function(form){
        $.ajax({
          type: "POST",
          dataType: "text",
          data: $("#form-contato").serialize(),
          beforeSend: function(){
            $('input#enviar').attr('disabled','disabled');
            $(".msgAcerto").hide();
            $(".msgErro").hide();
            $('img#ajax-loader').show();
          },
          success: function(data){
          $('input#enviar').removeAttr('disabled');
            window.location.href="#";
            if(data == "1"){
              $("#form-contato").clearForm();
              $(".msgAcerto").show();
              $('img#ajax-loader').hide();
            }
            else {
              $(".msgErro").show();
              $('img#ajax-loader').hide();
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
        charada:{
          required: true
        }
      }
    });
  });
      
  // Contador de Caracters
  function limitText (limitField, limitNum, textCounter)
  {
    if (limitField.value.length > limitNum)
      limitField.value = limitField.value.substring(0, limitNum);
    else
      $(textCounter).html(limitNum - limitField.value.length);
  }
</script>
