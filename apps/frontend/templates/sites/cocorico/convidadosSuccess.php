<?php 
$assets = $pager->getResults();
?>

<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
 

<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });
</script>


<!-- container-->
<div class="container tudo tvcocorico">
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
  
  <!-- titulo da pagina -->
  <h2 class="tit-pagina">Convidados</h2>
   <script>
   /*
    $(function() {
      $('#alfabeto ul li a').click(function(){
        var letra = $(this).attr('title');
        $('#frmBusca #busca').val('');
        $('#frmBusca #letra').val(letra);
        $('#frmBusca').submit();
      });
    });
    */
   </script>
   
   <?php
     $letra = 'A';
     for ($i=0; $i < 26; $i++) {
       $letras[] = $letra;
       $letra++;
     }
   ?>
   
   <div class="pagination" id="alfabeto">
    <?php
    /* 
    <ul>
      <?php foreach($letras as $k=>$d): ?>
      <li<?php if($_REQUEST['letra-cocorico'] == $d): ?> class="active"<?php endif; ?>><a href="/cocorico/tvcocorico/convidados/<?php echo strtolower($d) ?>" title="<?php echo $d ?>"><?php echo $d ?></a><?php if($k < 26): ?><span class="divider">|</span><?php endif; ?></li>
      <?php endforeach; ?>
    </ul>
     
    <span class="divider last">|</span>
    <form class="form-search" action="" name="frmBusca" id="frmBusca" method="get">
      <input type="hidden" name="letra-cocorico" id="letra" value="">
      <input type="text" class="input-medium search-query" name="busca" id="busca">
      <button type="submit" class="btn"><i class="icon-search"></i></button>
    </form>
     * * 
     */
     ?>
     
  </div>  
 
  
   <?php if($pager->haveToPaginate()): ?>
    <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
    <div class="pagination pagination-centered" style="display: none">
      <ul>
        <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
        <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php else: ?>
        <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php endif; ?>
        <?php endforeach; ?>
        <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
      </ul>
    </div>
    <form id="page_form" action="" method="post">
      <input type="hidden" name="busca" value="<?php if(isset($_REQUEST['busca'])) echo $_REQUEST['busca'] ?>">
      <input type="hidden" name="letra-cocorico" value="<?php if(isset($_REQUEST['letra-cocorico'])) echo $_REQUEST['letra-cocorico'] ?>">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
    </form>
    <script>
      function goToPage(i){
        $("#page").val(i);
        $("#page_form").submit();
      }
    </script>
    <!--// PAGINACAO -->
    <?php endif; ?>
    
  <div class="row-fluid conteudo destaques" style="display: none">
    <?php if(count($pager) > 0): ?>
      
    <ul id="convidados">
      <?php foreach($pager->getResults() as $d): ?>
      <li class="span4">
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          <img class="span12" src="<?php echo $d->retriveImageUrlByImageUsage("original") ?>" alt="<?php echo $d->getTitle() ?>" />
          <?php $tam=23; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
        </a>  
      </li>
      <?php endforeach; ?>
    </ul>
    <?php else: ?>
    <p style="margin-top: 20px;">Nenhum resultado encontrado para a sua busca.</p>
    <?php endif; ?>  
  </div>
  
  
   <div id="google_search" style="display:none">
		<script>
		  (function() {
		    var cx = '005232987476052626260:cib-ufkaquy';
		    var gcse = document.createElement('script');
		    gcse.type = 'text/javascript';
		    gcse.async = true;
		    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		        '//www.google.com/cse/cse.js?cx=' + cx;
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(gcse, s);
		  })();
		</script>
		<gcse:searchresults-only>Buscando...</gcse:searchresults-only>
   </div>	
  
  
     <?php if($pager->haveToPaginate()): ?>
    <!-- PAGINACAO -->
    <div class="pagination pagination-centered" style="display: none">
      <ul>
        <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
        <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php else: ?>
        <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php endif; ?>
        <?php endforeach; ?>
        <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
      </ul>
    </div>
    <form id="page_form" action="" method="post">
      <input type="hidden" name="busca" value="<?php if(isset($_REQUEST['busca'])) echo $_REQUEST['busca'] ?>">
      <input type="hidden" name="letra-cocorico" value="<?php if(isset($_REQUEST['letra-cocorico'])) echo $_REQUEST['letra-cocorico'] ?>">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
    </form>
    <script>
      function goToPage(i){
        $("#page").val(i);
        $("#page_form").submit();
      }
    </script>
    <!--// PAGINACAO -->
    <?php endif; ?>
  
  
	<script>
		function getURLParameter(name) {
		    return decodeURI(
		        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
		    );
		}
		if(getURLParameter("busca") == "null" || getURLParameter("busca") == ""){
			$('.destaques').show();
			$('.pagination-centered').show();
		}else{
			var busca = getURLParameter("busca");
			$('#busca').val(busca);
			$('#google_search').show();
			$('.pagination-centered').hide();
		}
	</script>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->