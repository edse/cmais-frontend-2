<?php
  /*
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetEvent av')
    ->where('a.id = av.asset_id')
    ->andWhere('a.site_id = ?', 2)
    ->andWhere('a.asset_type_id = ?', 16)
    ->andWhere('av.date >= ? AND av.date <= ?', array($date.' 00:00:00', $date.' 23:59:59'))
    ->orderBy('av.date asc')
    ->limit(80)
    ->execute();
  */
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, AssetEvent av')
    ->where('a.id = av.asset_id')
    ->andWhere('av.date >= ? AND av.date <= ?', array($date.' 00:00:00', $date.' 23:59:59'))
    ->orderBy('av.date asc')
    ->execute();
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrossel
  $(function(){
    $('.carrossel').jcarousel({ wrap: "both" });
    $('#accordion').accordion();
    //$('#datepicker').datepicker({ inline: true });
  })
</script>

<script type="text/javascript">
  jQuery(function(a){a.datepicker.regional["pt-BR"]={closeText:"Fechar",prevText:"&#x3c;Anterior",nextText:"Pr&oacute;ximo&#x3e;",currentText:"Hoje",monthNames:["Janeiro","Fevereiro","Mar&ccedil;o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],monthNamesShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],dayNames:["Domingo","Segunda-feira","Ter&ccedil;a-feira","Quarta-feira","Quinta-feira","Sexta-feira","S&aacute;bado"],dayNamesShort:["Dom","Seg","Ter","Qua","Qui","Sex","S&aacute;b"],dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","S&aacute;b"],weekHeader:"Sm",dateFormat:"dd/mm/yy",firstDay:0,isRTL:false,showMonthAfterYear:false,yearSuffix:""};a.datepicker.setDefaults(a.datepicker.regional["pt-BR"])});
  
  $(function(){ //onready
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    // Datepicker
    $('#datepicker').datepicker({
      //beforeShowDay: dateLoading,
      onSelect: redirect,
      dateFormat: 'yy/mm/dd',
      altFormat: 'yy-mm-dd',
      defaultDate: new Date("<?php echo str_replace("-","/",$date) ?>"),
      inline: true
    });
  });

  function redirect(d){
    self.location.href = '/agenda?d='+d;
  }

  //cache the days and months
  var cached_days = [];
  var cached_months = [];

  function dateLoading(date) { 
    var year_month = ""+ (date.getFullYear()) +"-"+ (date.getMonth()+1) +"";
    var year_month_day = ""+ year_month+"-"+ date.getDate()+"";
    var opts = "";
    var i = 0;
    var ret = false;
    i = 0;
    ret = false;

    for (i in cached_months) {
      if (cached_months[i] == year_month){
        // if found the month in the cache
        ret = true;
        break;
      }
    }

    // check if the month was not cached 
    if (ret == false) {
      //  load the month via .ajax
      opts= "month="+ (date.getMonth()+1);
      opts=opts +"&year="+ (date.getFullYear());
      opts=opts +"&event=1";
      // opts=opts +"&day="+ (date.getDate());
      // we will use the "async: false" because if we use async call, the datapickr will wait for the data to be loaded

      $.ajax({
        url: "http://app.cmais.com.br/ajax/getdays",
        data: opts,
        dataType: "jsonp",
        async: false,
        success: function(data){
          // add the month to the cache
          cached_months[cached_months.length]= year_month ;
          $.each(data.days, function(i, day){
            cached_days[cached_days.length]= year_month +"-"+ day.day +"";
          });
        }
      });
    }

    i = 0;
    ret = false;

    // check if date from datapicker is in the cache otherwise return false
    // the .ajax returns only days that exists
    for (i in cached_days) {
      if (year_month_day == cached_days[i]) {
        ret = true;
      }
    }
    return [ret, ''];
  }
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/agenda">Agenda</a>
        </div>
        <div id="box-agenda-home">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a class="enunciado" href="/agenda">Agenda</a>
            </div>
            <div class="btn-episodio">
              <span class="pontaBarra"><a href="/agenda?d=<?php echo $prevDate ?>"><span class="setaEsquerda">Anterior</span></a></span>
              <span class="nome"><?php echo format_date($date, 'P') ?></span>
              <span class="caudaBarra"><a href="/agenda?d=<?php echo $nextDate ?>"><span class="setaDireita">Próximo</span></a></span>
            </div>

            <div id="accordion">
            <?php if(count($assets) > 0): ?>
            <?php foreach($assets as $a): ?>
              <h3><a href=""><span class="horario"></span><?php echo $a->getTitle() ?></a></h3>
              <div class="accordionConteudo">
                <img alt="<?php echo $a->getTitle()?>" src="<?php echo $a->retriveImageUrlByImageUsage("image-3-b") ?>">
                <p><?php echo $a->getTitle()?></p>
                <div class="box-informacao">
                  <span class="img-info"></span>
                  <span class="borderTop"></span>
                  <div class="wrapper-box-informacao">
                    <h4>Informa&ccedil;&otilde;es &uacute;teis</h4>
                    <?php if($a->AssetEvent->getTitle()!=""):?>
                    <p><span class="enunciado-bg">Descrição</span><?php echo $a->AssetEvent->getDescription()?></p>
                    <?php endif;?>
                    <?php if($a->AssetEvent->getAddress()!=""):?>
                    <p><span class="enunciado-bg">Localiza&ccedil;&atilde;o</span><?php echo $a->AssetEvent->getAddress()?></p>
                    <?php endif;?>
                    <?php if($a->AssetEvent->getHeadline()!=""):?>
                    <p><span class="enunciado-bg">Hor&aacute;rios e datas</span><?php echo $a->AssetEvent->getHeadline()?></p>
                    <?php endif;?>
                    <?php if($a->AssetEvent->getDirections()!=""):?>
                    <p><span class="enunciado-bg">Pre&ccedil;os</span><?php echo $a->AssetEvent->getDirections()?></p>
                    <?php endif;?>
                    <?php if($a->AssetEvent->getUrl()!=""):?>
                    <p><span class="enunciado-bg">Mais informa&ccedil;&otilde;es</span><a href="<?php echo $a->AssetEvent->getUrl()?>" target="_blank"><?php echo $a->AssetEvent->getUrl()?></a></p>
                    <?php endif;?>
                  </div>
                  <span class="borderBottom"></span>
                </div>
              </div>
              <?php endforeach; ?>
              <?php else: ?>
                <h3><a href=""><span class="horario"></span>Nenhum evento</a></h3>
              <?php endif; ?>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
        </div>
      </div>
      <div class="coluna">
        <div id="box-programas-calendarioAgenda">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="" class="enunciado">Folinha 2011</a>
            </div>
            <div id="datepicker"></div>
            <span class="picote"></span>
          </div>
        </div>
        <hr />
        <?php if(isset($displays["se-liga"])): ?>
        <div class="galeriaVideos seLiga">
          <div class="enunciado">
            <span class="ico-seLiga"></span>
            <h2>Se Liga!</h2>
          </div>
          <span class="alcaA"></span>
          <span class="alcaB"></span>
          <div class="seLiga-box">
            <span class="top"></span>
            <div class="propaganda">
              <?php if($displays["se-liga"][0]->getUrl()!=""): ?>
              <a href="<?php echo $displays["se-liga"][0]->getUrl() ?>">
              <?php endif; ?>
                <img src="<?php echo $displays["se-liga"][0]->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $displays["se-liga"][0]->getTitle() ?>" />
              <?php if($displays["se-liga"][0]->getUrl()!=""): ?>
              </a>
              <?php endif; ?>
            </div>
            <span class="bottom"></span>
          </div>
        </div>
        <hr />
        <?php endif; ?>
        <?php /*
        <div id="box-agenda-aconteceu">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="" class="enunciado">Já Aconteceu por aqui</a>
            </div>
            <div class="epLista">
              <h4>Joao e o Pe de Feijao</h4>
              <p>Descricao do programa episodio ou o que quer que seja, ou nao. Conteudo variavel.</p>
              <span class="picoteBig"></span>
            </div>
            <div class="epLista">
              <h4>Joao e o Pe de Feijao</h4>
              <p>Descricao do programa episodio ou o que quer que seja, ou nao. Conteudo variavel.</p>
              <span class="picoteBig"></span>
            </div>
            <div class="epLista">
              <h4>Joao e o Pe de Feijao</h4>
              <p>Descricao do programa episodio ou o que quer que seja, ou nao. Conteudo variavel.</p>
              <span class="picoteBig"></span>
            </div>
            <div class="epLista">
              <h4>Joao e o Pe de Feijao</h4>
              <p>Descricao do programa episodio ou o que quer que seja, ou nao. Conteudo variavel.</p>
              <span class="picoteBig"></span>
            </div>
            <div class="menuLista">
              <a href="" class="anterior">anterior</a>
              <p><span class="pag">3</span> de <span class="todo">10</span></p>
              <a href="" class="proximo">próximo</a>
              <hr />
            </div>
            <span class="picote"></span>
          </div>
        </div>
        */ ?>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>

