<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<?php
//$xml = file_get_contents("http://cmais.com.br/webservice/culturafm");
$xml = file_get_contents("http://app.cmais.com.br/ajax/podcastsprograms?channel_id=6");
$podcasts = new SimpleXMLElement($xml);
?>

<div id="cmais"  data-fullscreen="true">

  
  <!--CONTEUDO RADIO-->
  <div class="radio" >
    
		<!--ESCOLHA DE RADIO-->
		<div class="alinha" align="center">
			<div class="btn-escolha">
				<a class="cbrasil" href="<?php echo url_for('homepage') . 'culturabrasil' ?>" title="Cultura Brasil">Cultura Brasil</a>
				<a class="cfm selected" href="<?php echo url_for('homepage') . 'culturafm' ?>" title="Cultura FM">Cultura FM</a>
			</div>
		</div>
		<!--ESCOLHA DE RADIO-->
    
    <!--LISTA RADIO CULTURA BRASIL-->
    <ul data-role="listview" class="plCultBrasil">
      
      <!--PLAYLIST-->
      <li data-role="list-divider" class="divisor degrade bordas">
        <p>
          <a href="#" class="escolhida">Playlists</a>
        </p>
      </li>
      <!--/PLAYLIST-->
      
      <!--PLAYLIST TITULO-->
      <?php
      foreach($podcasts as $p){
      ?>
      <li class="playlistNome">
        <a href="<?php echo url_for("homepage")."playlists?url=".urlencode($p->podcasts)."&playlist=".$p->title; ?>">
          <p><?php echo $p->title?></p>
          <div class="linha2"></div>
        </a>
      </li>
      <?php
      }
      ?>
      <!--/PLAYLIST TITULO-->
                
    </ul>
    <!--/LISTA RADIO CULTURA BRASIL-->
    
  </div>
  <!--/CONTEUDO RADIO-->
  
  <!-- mobile320x50 -->
  <div id="banner-320x50" class="banner">
    <script type='text/javascript'>
    GA_googleFillSlot("mobile2-320x50");
    </script>
  </div>
  <!-- mobile320x50 -->
  
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site,'section'=>$section)) ?>
<!--/footer-->