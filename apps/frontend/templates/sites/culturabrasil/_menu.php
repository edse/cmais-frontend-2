<?php
if(isset($asset)) {
  if(count($asset->getSections()) > 0) {
    $section = $asset->getSections();
    $section = $section[0];
  }
}
  
?>

<!--section topo--> 
<section class="topo"> 
  <!--container topo--> 
  <div class="container menu row-fluid">
    <!--logo-->
    <div class="logo">
       <a href="http://culturabrasil.cmais.com.br" title="Cultura Brasil">
        <!--img src="http://cmais.com.br/portal/images/capaPrograma/culturabrasil/logoculturabrasil.png" alt="Cultura Brasil" /-->
        <img src="http://cmais.com.br/portal/images/capaPrograma/culturabrasil/logoam.png" alt="Cultura Brasil" />
      </a>
    </div>
    <!--/logo--> 
    
    <!--menu cultura brasil-->
    <?php if(count($siteSections) > 0): ?>        
    <ul class="nav menu-principal nav-pills">
      <?php foreach($siteSections as $k=>$s): ?>
        <?php $subsections = $s->subsections(); ?>
        <?php if(count($subsections) > 0): ?>
          <!-- botao --->
          <li class="dropdown <?php if($section->getParentSectionId() == $s->id): ?>active<?php endif; ?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" title="<?php echo $s->getTitle()?>">
              <?php echo $s->getTitle()?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <?php foreach($subsections as $s): ?>
              <li class="">
                <a class="dropdown" href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- botao --->
        <?php else: ?>  
          <!-- botao --->
          <li class="<?php if( ($section->id == $s->id) || ($s->getSlug() == "programas" && $section->getSlug() == "arquivo") ): ?>active<?php endif; ?>">
            <a href="<?php if($s->getSlug() == "home"): ?>/<?php else: ?><?php echo $s->retriveUrl()?><?php endif; ?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
          </li>
          <!-- /botao --->
        <?php endif; ?>
      
      <?php endforeach; ?>          
   </ul>
   <?php endif; ?>
   <!--/menu cultura brasil-->
   
   <script type="text/javascript">
      $(document).ready(function(){
        $('#form-busca-culturabrasil').submit(function() {
           if($("#term").val() == ""){
             $("#term").focus();
             return false;
           }         
        });      
      });
   </script>

   <!--search-->
   <div class="search-culturabrasil">
    <i class="lupa"></i>
    <form class="busca-culturabrasil" action="/busca" method="get" id="form-busca-culturabrasil">
      <input class="ipt-txt" type="text" name="term" id="term">
      <input class="ipt-submit" type="submit" value="OK" id="btn-submit-busca">
    </form>
   </div>
   <!--/search-->
   
   <!-- ouca a radio -->
   <a id="ouca" class="ouca controle-remoto" href="javascript:;">
     <img src="http://cmais.com.br/portal/images/capaPrograma/culturabrasil/oucaculturabrasil.jpg" alt="Ouça a rádio Cultura Brasil"/>
   </a>
    <!-- ouca a radio -->
    <div class="row-fluid">
      <div class="borda-pontilhada borda-menu"></div>
    </div>  
  </div>
 <!--/container topo-->
  
</section>
<!--/section topo-->

<script>
var controle = null;
$('.controle-remoto').click(function(){
  if(controle == null || controle.closed){
    controle = window.open('http://culturabrasil.cmais.com.br/controleremoto','controle','width=400,height=640,scrollbars=no');
  } else {
    controle.focus();
  }
});
  
</script>
     