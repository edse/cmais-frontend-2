storyjs_jsonp_data = {
    "timeline":
    {
        "date": [
          <?php foreach($pager->getResults() as $d): ?>
            <?php
            $date1 = implode(",", explode("/",$d->Asset->getSource()));
            ?>
            {
                "startDate":"<?php echo $date1?>,0,0",
                "endDate":"<?php echo $date1?>,0,0",
                "headline":"<?php echo $d->getTitle()?>",
                "text":"<p><?php echo $d->getDescription()?></p><button class='btn btn-large btn-primary' type='button' onclick='self.location.href=\"<?php echo $d->retriveUrl()?>\"'>Leia mais  &raquo;</button>",
                "asset":
                {
                    "media":"http://midia.cmais.com.br/displays/f038729dc5bab0c07138e386a19ae7e2353f7c50.jpg",
                    "thumbnail":"http://midia.cmais.com.br/displays/f038729dc5bab0c07138e386a19ae7e2353f7c50.jpg",
                    "credit":"cmais+ o portal de conteÃºdo da Cultura",
                    "caption":"Mosaicos"
                }
            },
          <?php endforeach; ?>
        ]
    }
}