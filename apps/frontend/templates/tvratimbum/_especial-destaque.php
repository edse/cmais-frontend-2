   <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0): ?>
      <!--DESTAQUE-->

      <div id="destaque-ferias">
      
        <?php if($displays[0]->Asset->AssetType->getSlug() == "image"): ?>
        <a href="<?php echo $displays[0]->retriveUrl() ?>" class="media grid2<?php if($displays[0]->Asset->AssetType->getSlug() == "video"): ?> video<?php endif; ?>">
          <img src="<?php echo $displays[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $displays[0]->getTitle() ?>" name="<?php echo $displays[0]->getTitle() ?>" />
        </a>
        <?php elseif($displays[0]->Asset->AssetType->getSlug() == "video"): ?>
        <div class="media grid2 video">
          <iframe src="http://www.youtube.com/embed/<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent" frameborder="0" allowfullscreen></iframe>
          <div class="capa-video" onclick="play()"></div>
          
        </div>
        <!--/DESTAQUE-->
      <?php else: ?>
        <h2><?php echo $displays[0]->getTitle() ?></h2>
      </div>
      <?php endif; ?>             
    </div>
    <!--/DESTAQUE-->
    
    <!--TEXTO-->
    <div id="destaque-texto-ferias">
      <p>
        <?php //echo $displays[0]->Asset->getDescription() ?>
        Ficamos sabendo que você é uma pessoa muito engraçada, piadista de plantão! É verdade?<br/><br/>
        É porque a turma da <strong>TV RÁ TIM BUM!</strong> está querendo dar boas risadas e se você souber de alguma piada engraçada e quiser contar pra gente é só nos escrever!<br/><br/>
        As piadas serão publicadas na nossa página e as mais divertidas serão gravadas pela <strong>“Voz”</strong>  da <strong>TV RÁ TIM BUM!</strong>
      </p>
    </div>
    <!--/TEXTO-->
          <?php endif; ?>
        <?php endif; ?>
