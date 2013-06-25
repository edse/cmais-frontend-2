<!--FANCYBOX-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<!--/FANCYBOX-->
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico-familia");
        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
       <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'naweb', 'site'=>$site)) ?>
  <!-- /row-->
  
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  
  <h2 class="tit-pagina clearfix">na web</h2>
 

     
  <!--/row-->
  <?php if(isset($displays['descricao'])):?>
    <?php if(count($displays['descricao']) > 0): ?>     
  	  <?php foreach($displays['descricao'] as $k=>$d):?>   
  <div class="row-fluid conteudo ">    
    <div class="row-fluid">
      <p><?php echo html_entity_decode(str_replace(array("<p>", "</p>"), array("", ""), $displays['descricao'][0]->Asset->AssetContent->render())) ?></p>  
    </div>  
  </div>
  <?php endforeach; ?>   
   <?php endif; ?>
    <?php endif; ?>
  <!-- conteudo -->
  <div id="naweb" class="row-fluid conteudo">
    <!-- youtube -->
      <?php if(isset($displays['video'])):?>
    <?php if(count($displays['video']) > 0): ?>     
  	  <?php foreach($displays['video'] as $k=>$d):?>  
    <div class="destaque span4">
      <i class="ico-naweb"></i>
      <h2>youtube.com/tvcocorico</h2>
        
      <!--iframe width="458" height="280" src="http://www.youtube.com/embed/<?php echo $displays['video'][0]->Asset->AssetVideo->getYoutubeId() ?>" frameborder="0" allowfullscreen></iframe-->
      <div class="box-youtube">
        <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=tvcocorico&synd=open&w=297&h=370&title=&output=js"></script>
      </div>
      
      <div class="btn-inscreva-se ">
        <span></span>
        <a href="http://www.youtube.com/tvcocorico" class="btn-destaque" title="Inscreva-se em nosso canal!" target="_blank">Inscreva-se em nosso canal!</a>
        <span class="last"></span>
      </div>
    </div>  
    <?php endforeach; ?>   
   <?php endif; ?>
    <?php endif; ?> 
    <!-- /youtube -->
    
    <!-- instagram -->
    <div class="instagram span4">
      <div class="topo">
          <div class="bac-blue">
          	<a href="<?php echo $site->retriveUrl();?>/instagram" title="Instagram @TVCOCORICO" target="_self">
	            <h3>
	              <i class="ico-naweb ico-instagram"></i>
	              instagram<span>@tvcocorico</span>
	              <i class="ico-seta-titulo"></i>
	           </h3>
           </a>
         </div>
       </div>
       <div class="box-instagram">
       <!--embedagram-->
	    <ul id="slideTvCocorico"></ul>
       <!--/embedagram-->
       </div> 
     </div>   
     <!-- /instagram -->  

    <!-- facebook e twitter -->
    <div class="twitter span4">
      <a href="https://twitter.com/tvcultura" title="Cocórico no Twitter" target="_blank">
        <img src="/portal/images/capaPrograma/cocorico/naweb-btn-twitter.png"/>
      </a>
      <br>
      
      <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcocoricooficial&amp;width=300&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:290px; background-color:#ffffff;" ></iframe>
    
    </div>   
    <!-- /facebook e twiter-->
  </div>
  <!--/conteudo-->
  
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape-em-familia', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /row-->
</div>
<!-- /container-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=418273974898589";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--embedagram-->
<script type="text/javascript" src="/portal/js/embedagram/jquery-embedagram.pack.js"></script> 
<script type="text/javascript">
$('#slideTvCocorico').embedagram({
    instagram_id: 290753701,
    limit:4,
    link_type:'img',
    thumb_width:140,
    success: function (){ 
        $('#slideTvCocorico li a')
          .addClass('fancybox-media')
          .attr('rel','instagram')
        
        $('#slideTvCocorico a img').each(function(index) {
      var titulo = $(this).attr('title');
      $(this).parent().attr('title', titulo)
      });
   }
});

$('.fancybox-media').fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  nextEffect  : 'none',
  prevEffect  : 'none', 
  padding : 0,
  helpers : {
    title : {
      type : 'float'
    },
    media : {}
  }
});
</script>
<!--/embedagram-->