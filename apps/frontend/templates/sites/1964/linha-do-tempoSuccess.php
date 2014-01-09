storyjs_jsonp_data = {
    "timeline":
    {
        "date": [
          <?php foreach($pager->getResults() as $d): ?>
            <?php
            if($d->AssetContent->getSource() != ""){
              $date = explode("/",$d->AssetContent->getSource());
              if(is_array($date)){
                $date1 = Array($date[2], $date[1], $date[0]);
                foreach($date1 as $key=>$value){
                  if($value[0]=="0")
                    $date1[$key] = $value[1];
                }
                $date1 = implode(",", $date1);
              }
            }
            $assets = $d->retriveRelatedAssets();
            if($assets[0]->getAssetTypeId() == 2){
              //IMG
              $src = $assets[0]->AssetImage->getOriginalUrl();
              $thumb = "http://midia.cmais.com.br/assets/image/thumbnail/".$assets[0]->AssetImage->getFile().".jpg";
            }else if($assets[0]->getAssetTypeId() == 4){
              //AUDIO
              $src = "http://midia.cmais.com.br/assets/audio/default/".$assets[0]->AssetAudio->getFile().".mp3";
              $thumb = "";
            }else if($assets[0]->getAssetTypeId() == 6){
              //VIDEO
              $src = "http://www.youtube.com/watch?v=".$assets[0]->AssetVideo->getYoutubeId();
              $thumb = "http://img.youtube.com/vi/".$assets[0]->AssetVideo->getYoutubeId()."/default.jpg";
            }
            if(isset($date1)):
            ?>
            {
                "startDate":"<?php echo $date1?>,0,0",
                "endDate":"<?php echo $date1?>,0,0",
                "headline":"<?php echo $d->getTitle()?>",
                "text":"<p><?php echo $d->getDescription()?></p><button class='btn btn-large btn-primary' type='button' onclick='self.location.href=\"<?php echo $d->retriveUrl()?>\"'>Leia mais  &raquo;</button>",
                "asset":
                {
                    "media":"<?php echo $src?>",
                    "thumbnail":"<?php echo $thumb?>",
                    "credit":"cmais+ o portal de conteúdo da Cultura",
                    "caption":"UnivespTV - Especial 1964"
                }
            },
          <?php
            endif; 
          endforeach; 
          ?>
        ]
    }
}