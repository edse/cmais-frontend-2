<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <title><?php echo $feedsite->getTitle() ?> <?php if($feedsite->getTitle() != "cmais+"):?> (cmais+ O portal de conteúdo da Cultura)<?php else: ?> O portal de conteúdo da Cultura<?php endif; ?></title>
  <subtitle>Últimas Notícias</subtitle>
  <link href="/feed/<?php echo $feedsite->getSlug() ?>" rel="self" />
  <updated><?php echo date("Y-m-d H:i:s") ?></updated>
  <author>
    <name>cmais+</name>
  </author>
  <id><a href="<?php echo $feedsite->retriveUrl() ?>"><?php echo $feedsite->getTitle() ?></a></id>
 
  <?php include_partial('main/list', array('assets' => $assets)) ?>
</feed>
