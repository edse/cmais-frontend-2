<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!--FANCYBOX-->
<script type="text/javascript" src="/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/portal/js/embedagram/jquery-embedagram.pack.js"></script> 
<!--/FANCYBOX-->

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
    <!--topo coco-->
    <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
    <!--/topo coco-->
  
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina tit-extra">
    <h2><i class="ico-bike"></i><?php echo $section->getTitle() ?><span><?php echo $section->getDescription() ?></span></h2>
  </div>
  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo">
    
    <a class="span6"><img alt="" src="http://midia.cmais.com.br/assets/image/original/41566c83254338a9def287f94f71fd20e113fc00.jpg"></a>
    <div class="span6">
      <p>Hélio Ziskind nasceu em 1955, é músico e compositor. Na TV Cultura compôs temas para os programas como Rá-tim-bum, Castelo Rá-tim-bum, X-Tudo e Cocoricó, entre outros. Em 1997, lançou o álbum Meu Pé Meu Querido Pé, reunindo temas de programas Cocoricó, Castelo Rá-Tim-Bum, Banho de Aventura, Glub-Glub e X-Tudo, além de incluir uma versão musicalizada do poema "Plutão", do escritor Olavo Bilac. Conheça mais sobre Hélio Ziskind através da entrevista que Júlio fez neste episódio da TV Cocoricó!</p>
      <p class="grd">Parabéns ao vencedor</p>
      <p class="grd"><span>NOME completo DA CRIANÇA <br/>
        Cidade - UF</span>
      </p>
    </div>
    <p class="tit" style="margin-top:30px;">conheça os desenhos participantes:</p>
  </div>
  <!--/row-->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a title="Anterior" href="javascript: goToPage(1);"></a></li>
      <li class="active"><a href="javascript: goToPage(1);">1</a></li>
      <li><a href="javascript: goToPage(2);">2</a></li>
      <li><a href="javascript: goToPage(3);">3</a></li>
      <li><a href="javascript: goToPage(4);">4</a></li>
      <li title="Próximo" class="proximo"><a href="javascript: goToPage(2);"></a></li>
    </ul>
  </div>
  <!-- paginacao -->
  <!--row-->
  <div class="row-fluid conteudo destaques ytb">
    <ul id="convidados">
      <li class="span4">
        <a class="btn-produto" href="#myModal2" data-toggle="modal"  name=""  title="">
          <img alt="TV Cocoricó com Valéria Zopello  - 30/01/13 Parte 3 " src="http://img.youtube.com/vi/VKKss7wXY5Q/0.jpg" class="span12">
          <p>TV Cocoricó com Valéria Zopello …</p>
        </a>
      </li>
      <!-- Modal -->
      <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Fechar</button>
          <h3 id="myModalLabel"> Cocoricó – Um amigo especial</h3>
          <p>Editora Melhoramentos</p>
        </div>
        <div class="modal-body">
          <img src=" " alt="teste" />
        </div>
        <div class="modal-footer">
          <ul>
                          <li class="span2">
                <a href="javascript:;" class="btn-modal-prod" title="Ampliar imagem" name="http://midia.cmais.com.br/assets/image/original/9e40581961a9755d026176cef5169f4a36a03147.jpg" >
                  <img src="http://midia.cmais.com.br/assets/image/original/01e41e374a2890cdcfabda414eac558c1556c839.jpg" />
                </a>
              </li>
                        
          </ul>
        </div>
      </div>
      <!-- /Modal -->
      
    </ul>
  </div>
  <!-- /row-->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a title="Anterior" href="javascript: goToPage(1);"></a></li>
      <li class="active"><a href="javascript: goToPage(1);">1</a></li>
      <li><a href="javascript: goToPage(2);">2</a></li>
      <li><a href="javascript: goToPage(3);">3</a></li>
      <li><a href="javascript: goToPage(4);">4</a></li>
      <li title="Próximo" class="proximo"><a href="javascript: goToPage(2);"></a></li>
    </ul>
  </div>
  <!-- paginacao -->
  
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->

<!--modal produto-->
<script>
//chamando modal
$('.btn-produto').click(function(){
  var img_ampl = $(this).attr('name');
  $('.modal-body img').attr('src', img_ampl); 
});
$('.btn-modal-prod').not('.btn-modal-prod.ativado').click(function(){
  var img_ampl_modal = $(this).attr('name');
  $('.modal-body img').hide().attr('src', img_ampl_modal).show();
});

</script>
<!--/modal produto-->
