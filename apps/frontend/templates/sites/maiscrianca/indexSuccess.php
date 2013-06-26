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
          <div class="span12 oquee">
            <h3>O que é o que é</h3>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla fermentum eros non vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla vitae enim blandit, congue elit quis, volutpat sapien. Fusce magna odio, ultricies eget blandit eget, sodales ut tortor. Donec a sodales nunc, vitae viverra turpis. Proin id bibendum neque, id fringilla sem. Praesent placerat lectus a nibh commodo, eget condimentum mauris volutpat. Quisque eros risus, imperdiet sed dui a, ornare fringilla erat. Nam sit amet velit nulla. Ut molestie odio eget lorem tincidunt, sit amet adipiscing sem porta. Duis hendrerit ipsum in dignissim pellentesque cras amet.</p>
            
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
              <label>Seu nome<input type="text" name="nome" /></label>
              <label class="email">Seu email<input type="text" nome=email /></label>
              <br/>
              <label class="charada">charada <br />
                <p class="contador">[<span id="textCounter">250</span>]</p>
                <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,250,'#textCounter');"  name="charada"></textarea>
              </label>
              <br />
             
              
              <button type="submit" class="btn" id="enviar" value="enviar">Enviar</button>
            </form>
          </div>
          <span class="barra"></span>
          <div class="span12">
            <h2>Assista às charadinhas:</h2>
            
            <iframe id="video-charada" width="930" height="689" src="http://www.youtube.com/embed/UpWplpTyQhc" frameborder="0" allowfullscreen></iframe>
            
          </div>
          <div class="span12">
            <div class="carrossel">
              <ul class="row-fluid span12">
                <li><a href="http://tvratimbum.cmais.com.br/123"><img src="/portal/maiscrianca/images/icones/123_logo.jpg" alt="" /></a></li>
                <li><a href="http://tvratimbum.cmais.com.br/mansaomaluca"><img src="/portal/maiscrianca/images/icones/albumnat_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/arthur"><img src="/portal/maiscrianca/images/icones/logo_arthur.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/bob"><img src="/portal/maiscrianca/images/icones/bob-logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/brincadeirasmusicais"><img src="/portal/maiscrianca/images/icones/brincadeiras-musicais_destaque_logo.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=35"><img src="/portal/maiscrianca/images/icones/cacalivros_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/carrapatosecatapultas"><img src="/portal/maiscrianca/images/icones/logo_carrapatos-e-catapultas.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/casteloratimbum"><img src="/portal/maiscrianca/images/icones/Castelo_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/cyberchase"><img src="/portal/maiscrianca/images/icones/logo_cyberchase.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/dora"><img src="/portal/maiscrianca/images/icones/dora_logo1.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/doug"><img src="/portal/maiscrianca/images/icones/logo_doug.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=38"><img src="/portal/maiscrianca/images/icones/ecotur_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/escolapracahorro"><img src="/portal/maiscrianca/images/icones/escola-para-cachorro_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/glubglub"><img src="/portal/maiscrianca/images/icones/Glub_logo.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=61"><img src="/portal/maiscrianca/images/icones/gravidez_logo.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=25"><img src="/portal/maiscrianca/images/icones/ilha_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/kiara"><img src="/portal/maiscrianca/images/icones/kiara_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/jakers"><img src="/portal/maiscrianca/images/icones/logo_jackers.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/missspider"><img src="/portal/maiscrianca/images/icones/logo_miss-spider.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/setemonstrinhos"><img src="/portal/maiscrianca/images/icones/logo_os7monstrinhos.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=9"><img src="/portal/maiscrianca/images/icones/MundodaLua_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/oqueeuvouser"><img src="/portal/maiscrianca/images/icones/oqvouser_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/papeldashistorias"><img src="/portal/maiscrianca/images/icones/papel_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/princesasdomar"><img src="/portal/maiscrianca/images/icones/logo_princesasdomar.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/pingu"><img src="/portal/maiscrianca/images/icones/logo_pingu.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/ratimbum"><img src="/portal/maiscrianca/images/icones/ratimbum_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/superfofos"><img src="/portal/maiscrianca/images/icones/logo-superfofos.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=18"><img src="/portal/maiscrianca/images/icones/passeio_logo.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=32"><img src="/portal/maiscrianca/images/icones/pequenos_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/sid"><img src="/portal/maiscrianca/images/icones/sid_logo.jpg" alt="" /></a></li>
                <li><a href="http://http://www.tvratimbum.com.br/secoes/programas/?id=19"><img src="/portal/maiscrianca/images/icones/simao_logo.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=10"><img src="/portal/maiscrianca/images/icones/djcao_logo.jpg" alt="" /></a></li>
                <li><a href="http://www.tvratimbum.com.br/secoes/programas/?id=55"><img src="/portal/maiscrianca/images/icones/tamanho_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/http://www.tvratimbum.com.br/secoes/programas/?id=30"><img src="/portal/maiscrianca/images/icones/teatro_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/timmyeamigos"><img src="/portal/maiscrianca/images/icones/timmy_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/trombatrem"><img src="/portal/maiscrianca/images/icones/logo_tromba-trem.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/toot-puddle"><img src="/portal/maiscrianca/images/icones/Toot_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/tracandoarte"><img src="/portal/maiscrianca/images/icones/tracando-arte_logo.jpg" alt="" /></a></li>
                <li><a href="http://cmais.com.br/vilasesamo"><img src="/portal/maiscrianca/images/icones/vila-sesamo_logo.jpg" alt="" /></a></li>
              </ul>
            </div>
          </div>
          
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
