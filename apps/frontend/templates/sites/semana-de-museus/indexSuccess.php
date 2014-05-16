<link type="text/css" href="http://cmais.com.br/portal/css/geral.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<!--FANCYBOX-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

	<div class="topo-tudo">
	</div>
    <!-- CAPA SITE -->
	<div id="capa-site" class="museus">
     	  
     	<!-- BARRA SITE -->
  		<div id="barra-site" >
						<h2>Cultura também é Museu: <p>onde fantasias se tornam realidade</p></h2>
				
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
    
		</div>
		  <!-- /BARRA SITE -->  

       
      <!-- MIOLO -->
   	  <div id="miolo">
   	   	
   	    <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!--CONTEUDO-->
        <div id="conteudo-pagina">
	         
	         <!-- CAPA 3-->
         	 <div class="capa grid3">
	         	 	
		   	   	 <div class="box-interna grid2">
				   	   	<?php  $asset_quality = Doctrine::getTable('Asset')->findOneById(189607); ?> <!-- trocar o numero do asset explicação do topo-->
								<h2><?php echo $asset_quality->getTitle();?></h2>
								<p><?php echo $asset_quality->getDescription();?></p>

				   	   	<?php  $asset_x = Doctrine::getTable('Asset')->findOneById(191730); ?> <!-- numero do asset video gallery-->
   							<?php $relacionados = $asset_x->retriveRelatedAssets(); ?>


								<div class="duas-colunas destaque grid2">
								
								<!--Players-->
								<div id="player">
                
		                <?php if(count($relacionados) > 0): ?>
			                    <?php foreach($relacionados as $k=>$d): ?>
					                 	<?php if($k == 0 ): ?>
				                  			<iframe title="<?php echo $d->getTitle()?>" width="640" height="390" src="http://www.youtube.com/embed/<?php echo $d->AssetVideo->getYoutubeId()?>?wmode=transparent&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
																	</div>
																		<script>
																			function changeVideo(id){
																			  $('#player').html('<iframe width="640" height="390" src="http://www.youtube.com/embed/'+id+'?wmode=transparent" frameborder="0" allowfullscreen></iframe>');
																			}
																		</script>
																		<div class="box-thumbs">
																			<h4>Assista a todos os vídeos</h4>
																			<ul class="box-playlist grid2 carrossel">			                  			
				                  	<?php else:?>
				                  		<?php if($d->getId() != 164212):?>
																		<li>
																			<a href="javascript:changeVideo('<?php echo $d->AssetVideo->getYoutubeId()?>')" class="img">
																				<img src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId()?>/1.jpg" alt="<?php echo $d->getTitle()?>">
																			</a>
																		</li>				                  	
				                    <?php endif; ?>
				              	  <?php endif; ?>     
		                    <?php endforeach; ?>
		                  </ul>
		              	<?php endif; ?>								
								
											
										</ul>
									</div>
									
									<!--Players-->
								</div>
					<!-- BOX PADRAO instagram -->
       		 <div class="box-padrao grid3">
            <span class="aba"></span>
            <h4><span class="instagram"></span>instagram #CompartilheCultura</h4>
            <div class="box-instagram">
              
              <!--embedagram-->
              <!--ul id="embedagram"></ul-->
              <!--/embedagram-->
              
              <div class="instagram-box"></div>
              
              <!-- SnapWidget -->
              <!--iframe src="http://snapwidget.com/in/?h=YXJyYWlhY3VsdHVyYXxpbnwxMzB8MnwzfGQzMGIyZXxub3wxMHxub25l" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:280px; height: 420px" ></iframe-->
            </div> 
            
            
          </div>
          <!-- BOX PADRAO instagram-->
								
		   	   	 </div>
		   	   		<div id="direita"class="grid1">
								<?php	echo $asset_quality->AssetContent->render(); ?>

							</div>

	            		         
     				</div><!--/CAPA-->

        </div><!--/CONTEUDO-->
        
      </div><!--/MIOLO -->
      
    </div><!-- /CAPA SITE -->
 <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-instagram/jquery.instagram.js"></script>
<script>

$(document).ready(function(){

	function getURLParameter(name){
		return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
	}
	
	if(getURLParameter("tl") != "null"){
		$(".timeline").show();
	}


    // carrossel
	$('.carrossel').jcarousel({
      wrap: "both",
      scroll: 5
    });


var url = new Array;
var href = new Array;
$(".instagram-box").instagram({
  hash: 'CompartilheCultura',
  clientId: 'acc3ed4dfcd14106b4805f0248604b8c',
  show : 10,
  onComplete:function(){
    console.log();
    $('.instagram-box a').addClass('fancybox-media').attr('rel','instagram');
    $('.instagram-box a img').each(function(i){
      href[i] = $(this).attr("src");
      url = href[i].split("_");
      if(window.location.indexOf("origin")<=0){
      	href[i] = url[0] + "_o.jpg";  
      }else{
      	href[i] = url[0] + "_7.jpg";  
      }
      console.log(href[i]);     
    });
    $('.instagram-box a').each(function(i){
      var linkImg = href[i];
      $(this).attr('href', linkImg);
    })
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

  });
</script>
 