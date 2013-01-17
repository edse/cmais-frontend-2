      

<?php if(isset($displays)): ?>
  <?php if(count($displays) >= 1): ?>

<!-- destaque -->
 <div class="destaque">
   <!-- carrossel -->
   <div id="blocoCarrossel" class="carousel slide">
      
    <?php foreach($displays as $k=>$d): ?>
      <?php $imgs = $d->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
        <!-- Carousel items -->
        <div class="carousel-inner">
          <!-- item -->
          <div class="<?php if($k==0) echo "active";?> item" name="<?php echo $k?>">

  
            <a class="texto" >
              <h3><?php echo $d->getTitle()?></h3>
              <p><?php echo $d->getDescription()?></p>
           </a>
          </div>
          <!-- /item -->
        </div>
        <!-- /Carousel items -->
    <?php endforeach; ?>       
    
    <!-- base botoes troca -->
    <div class="base-btns">
      <!-- bloco botoes troca -->
      <div class="bloco-nav">
      <?php foreach($displays as $k=>$d): ?>
        <a id="btn-nav<?php echo $k?>" class="btn-nav" href="javascript:;" name="<?php echo $k?>"></a>
      <?php endforeach; ?>
      </div>
      <!-- /bloco botoes troca -->
    </div>
    <!-- /base botoes troca -->
  </div>
  <!-- /carrossel -->
  <script>
   //conta quantas "<a>" tem e define o tamanho para centralizar
   var quantidade = 0;
   $(".bloco-nav a").each(function(index){
     quantidade ++;
   })
   var width = quantidade * 18;
   $('.bloco-nav').css('width', width+'px');
   
   //carrossel
   $('#blocoCarrossel').carousel({
     interval: 8000
   })  
   $('.btn-nav').click(function(){
     $('#blocoCarrossel').carousel(parseInt($(this).attr('name')));
     $('.btn-nav').removeClass('actived');
     $(this).addClass('actived');
   });
   $('#blocoCarrossel').on('slid',function(){
     var pos = $(".actived.item").attr('name')
     $('.btn-nav').removeClass('actived');
     $('#btn-nav'+pos).addClass('actived');
   });
   </script>
 </div>
 <!-- /destaque -->
 
  <?php endif; ?>
<?php endif; ?>
