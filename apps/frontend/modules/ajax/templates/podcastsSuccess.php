<?xml version="1.0" encoding="utf8"?>
<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:media="http://search.yahoo.com/mrss/" xmlns:feedburner="http://rssnamespace.org/feedburner/ext/1.0" version="2.0">
  <channel>
    <title><?php echo $site->getTitle() ?> - Rádio Cultura FM - A frequência dos clássicos</title> 
    <link>http://app.cmais.com.br/ajax/podcasts?slug=<?php echo $site->getSlug()?></link>
    <description><![CDATA[<?php echo ($site->getDescription() == "" ? $site->getTitle() : $site->getDescription()) ?>]]></description>
    <generator>Rádio Cultura FM</generator>
    <language>pt-br</language>
    <copyright>Rádio Cultura FM</copyright>
    <lastBuildDate><?php echo date("D, d M Y H:i:s -0300")?></lastBuildDate> 
    <pubDate><?php echo date("D, d M Y H:i:s -0300")?></pubDate>
    <ttl>60</ttl>  
    <image>
      <url>http://culturafm.cmais.com.br/portal/images/capaPrograma/culturafm/logo.png</url>
      <title>Rádio Cultura FM</title>
      <link>http://culturafm.cmais.com.br/</link>
      <width>198</width>
      <height>90</height>
      <description>Rádio Cultura FM</description> 
    </image>
    <itunes:author>Rádio Cultura FM</itunes:author>
    <itunes:image href="http://culturafm.cmais.com.br/portal/images/capaPrograma/culturafm/logo.png" />
    <itunes:subtitle><![CDATA[<?php echo $site->getTitle() ?>]]></itunes:subtitle>
    <itunes:summary><![CDATA[<?php echo ($site->getDescription() == "" ? $site->getTitle() : $site->getDescription()) ?>]]></itunes:summary>
    <itunes:keywords><![CDATA[<?php echo ($site->getDescription() == "" ? $site->getTitle() : $site->getDescription()) ?>]]> cultura FM radio</itunes:keywords>
    <itunes:block>No</itunes:block>
    <atom10:link xmlns:atom10="http://www.w3.org/2005/Atom" rel="self" type="application/rss+xml" href="http://app.cmais.com.br/ajax/podcasts?slug=<?php echo $site->getSlug()?>" />
    <media:copyright>Rádio Cultura FM</media:copyright>
    <media:thumbnail url="http://culturafm.cmais.com.br/portal/images/capaPrograma/culturafm/logo.png" />
    <media:keywords>cultura FM radio</media:keywords>
    <media:category scheme="http://www.itunes.com/dtds/podcast-1.0.dtd">International/Brazilian</media:category>
    <itunes:owner>
      <itunes:name>Rádio Cultura FM</itunes:name>
      <itunes:email></itunes:email>
    </itunes:owner>
    <itunes:explicit>no</itunes:explicit>
    <itunes:category text="International">
      <itunes:category text="Brazilian" />
    </itunes:category>
    <feedburner:browserFriendly>http://culturafm.cmais.com.br/<?php echo $site->getSlug() ?>/feed</feedburner:browserFriendly>
    <?php foreach ($audios as $asset):
      $sizeFileFormated = number_format((floatval($asset->AssetAudio->getOriginalFileSize())*1024),3);
      $sizeFileFormated = str_replace (".", "", str_replace (",", "", $sizeFileFormated));
      ?> 
    <item>
      <title><![CDATA[<?php echo $asset->getTitle()?>]]></title>
      <description><![CDATA[<?php echo ($asset->getDescription() == "" ? $asset->getTitle() : $asset->getDescription()) ?>]]></description>
      <link>http://app.cmais.com.br/ajax/podcasts?slug=<?php echo $site->getSlug()?></link>
      <enclosure url="http://midia.cmais.com.br/assets/audio/default/<?php echo $asset->AssetAudio->getFile()?>.mp3" length="<?php echo $sizeFileFormated?>" type="audio/mpeg" />
      <author><![CDATA[<?php echo ($asset->AssetAudio->getAuthor() == "" ? "Rádio Cultura FM" : $asset->AssetAudio->getAuthor());?>]]></author>
      <guid isPermaLink="false">http://culturafm.cmais.com.br/<?php echo $site->getSlug()?>/<?php echo $asset->getSlug()?></guid>
      <pubDate><?php echo date("D, d M Y H:i:s -0300", strtotime($asset->getCreatedAt()))?></pubDate>
      <category>International</category>
      <itunes:author><![CDATA[<?php echo ($asset->AssetAudio->getAuthor() == "" ? "Rádio Cultura FM" : $asset->AssetAudio->getAuthor());?>]]></itunes:author>
      <itunes:subtitle><?php echo $asset->getTitle()?></itunes:subtitle>
      <itunes:summary></itunes:summary>
      <media:content url="http://midia.cmais.com.br/assets/audio/default/<?php echo $asset->AssetAudio->getFile()?>.mp3" fileSize="<?php echo $sizeFileFormated?>" type="audio/mpeg" />
      <itunes:explicit>no</itunes:explicit>
      <itunes:keywords><![CDATA[<?php echo $asset->getTitle()?> radio cultura fm]]></itunes:keywords>
      <media:credit role="author">Rádio Cultura FM</media:credit>
      <media:rating>nonadult</media:rating>
      <media:description type="plain">Rádio Cultura FM - <?php echo $site->getTitle()?></media:description>
    </item>
    <?php endforeach; ?> 
  </channel>
</rss> 