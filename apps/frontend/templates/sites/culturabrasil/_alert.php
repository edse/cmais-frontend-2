      <?php
        $displays = array();
        $blocks = Doctrine_Query::create()
          ->select('b.*')
          ->from('Block b, Section s')
          ->where('b.section_id = s.id')
          ->andWhere('s.slug = ?', 'home')
          ->andWhere('b.slug = ?', 'alerta')
          ->andWhere('s.site_id = ?', $site->id)
          ->execute();
      
        if(count($blocks) > 0){
          $displays["alerta"] = $blocks[0]->retriveDisplays();
        }
      ?>
      <?php if(isset($displays['alerta'])):?>
        <?php if(count($displays['alerta']) > 0): ?>
          <!-- box-alert-topo -->
          <div class="alert alert-block alert-info radarIndex" style="margin:0 0 10px 0px;" >
            <a href="<?php echo $displays['alerta'][0]->retriveUrl() ?>" type="button" class="btn btn-mini btn-info pull-right"><i class="icon-share-alt icon-white"></i> link direcionado</a>
            <span class="badge"><strong><?php echo $displays['alerta'][0]->getTitle() ?></strong></span><span> <?php echo $displays['alerta'][0]->getDescription() ?></span>
          </div>      
          <!-- /box-alert-topo-->
        <?php endif; ?>
     <?php endif; ?>
      <script>
      $(document).ready(function(){
        setTimeout('$("#socialAlertOk").hide();', 10000);
      });
      </script>     
