<div class="tvcoco span12">
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <?php if(isset($displays_tv_cocorico['destaque-tv-cocorico'])):?>
          <?php if(count($displays_tv_cocorico['destaque-tv-cocorico']) > 0): ?>
            <?php
              $display_img_src = $displays_tv_cocorico['destaque-tv-cocorico'][0]->retriveImageUrlByImageUsage('imaf');
              if ($display_img_src == '') {
                $related = $displays_tv_cocorico['destaque-tv-cocorico'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-4-b');
              }
            ?>
            
        <a class="convidado span12" href="<?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->Asset->retriveUrl() ?>" title="Próximo convidado: <?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>"><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>" />
          <?php echo $displays_tv_cocorico['destaque-tv-cocorico'][0]->getTitle() ?>
        </a>
        <a href="<?php echo $site->retriveUrl(); ?>/convidados" title="convidados">
          <span class="mais"></span>
        </a>
          <?php endif; ?>
        <?php endif; ?>
        <!-- enquete -->
        <?php
     $displays_home = array();
     $blocks = Doctrine_Query::create()
       ->select('b.*')
       ->from('Block b, Section s') 
       ->where('b.section_id = s.id')
       ->andWhere('s.slug = ?', "home")//mudar para home quando for no ar
         ->andWhere('b.slug = ?', 'enquete') 
       ->andWhere('s.site_id = ?', $site->id)
       ->execute();

      if(count($blocks) > 0){
      $displays_home['enquete'] = $blocks[0]->retriveDisplays();
  }

        //pergunta bloco enquete - 1º destaque
        $q = $displays_home['enquete'][0]->Asset->AssetQuestion->getQuestion();

        //doctrine para respostas
        $respostas = Doctrine_Query::create()
          ->select('aa.*')
          ->from('AssetAnswer aa')
          ->where('aa.asset_question_id = ?', (int)$displays_home["enquete"][0]->Asset->AssetQuestion->id)
          ->execute();
          
        //imagens respectivas das respostas
        $imgs = $respostas[0]->Asset->retriveRelatedAssetsByAssetTypeId(2);
        $img_0 = "http://midia.cmais.com.br/assets/image/image-4-b/".$imgs[0]->AssetImage->file.".jpg";
        $imgs = $respostas[1]->Asset->retriveRelatedAssetsByAssetTypeId(2);
        $img_1 = "http://midia.cmais.com.br/assets/image/image-4-b/".$imgs[0]->AssetImage->file.".jpg";
    
        ?>
         <div class="enquete span12">
           
          <h3>enquete do dia</h3>
          <p><?php echo $q;?></p>
          <!--Pergunta-->
          <form method="post" id="e<?php echo $respostas[0]->Asset->getId()?>" class="form-voto navbar-form pull-left span12" style="min-width:296px; ">
            <?php 
            $form = new BaseForm();
            echo $form->renderHiddenFields();
            ?>
            <div class="versus"></div>
            <?php for($i=0; $i<count($respostas); $i++): ?>
            <div class="span6 <?php if($i>0)echo "last"?>">
              <label class="radio" for="resposta<?php echo $i?>">
                <input type="radio" name="opcao" id="resposta<?php echo $i?>" class="resposta required" value="<?php echo $respostas[$i]->Asset->AssetAnswer->id ?>"  />
                <?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?>
                <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
                <div class="capa-img"><img class="" src="<?php echo $img; ?>" alt="" /></div>
              </label>
              
              
            </div>
            <?php endfor; ?>
            <img src="/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
            <div class="votar span12">
              <span></span>
              <input id="votar-input" class="span11" type="submit" value="votar" />
              <span class="last"></span>
              
            </div>
          </form>
          
          <!--/Pergunta-->
          <!--Resposta FORM INATIVA-->
          <form class="navbar-form pull-left inativo span12" style="display: none;">
            <div class="versus"></div>
            <?php for($i=0; $i<count($respostas); $i++): ?>
            <div class="span6 <?php if($i>0)echo "last"?>">
              <label class="radio"><?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?></label>
              <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
              <div class="capa-img"><img class="span12" src="<?php echo $img; ?>" alt="" /></div>
              <p class="resposta-<?php echo $i?>">50%</p>
            </div>
            <?php endfor;?>
            <a href="<?php echo $site->retriveUrl();?>/enquetes" title="Ver enquetes anteriores">Ver enquetes anteriores</a>
          </form>
          <!--/Resposta-->
        </div>
        <!-- /enquete -->
        <!-- fale conosco cr-->
      </div>