<?php
         $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, Section s')
          ->where('a.id = sa.asset_id')
          ->andWhere('s.id = sa.section_id')
          ->andWhere('s.slug = "enquetes"')
          ->andWhere('a.site_id = ?', (int)$site->id)
          ->andWhere('a.asset_type_id = 10')
          ->limit(1)
          ->execute();
         //doctrine para respostas
          $respostas = Doctrine_Query::create()
            ->select('aa.*')
            ->from('AssetAnswer aa')
            ->where('aa.asset_question_id = ?', (int)$assets[0]->AssetQuestion->id)
            ->execute(); 
         
         $q = $assets[0]->AssetQuestion->getQuestion()."<br/>";
         
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
            <div class="votar span12">
              <div class="ajax-loader">
               <img src="/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
              </div>
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