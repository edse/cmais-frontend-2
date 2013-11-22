<?php

/**
 * _asset actions.
 *
 * @package    astolfo
 * @subpackage _asset
 * @author     Emerson Estrella
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class _assetActions extends sfActions
{
  /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request){
    if($request->getParameter('object')){
      // URI
      $this->uri = str_replace('/index.php', '', $request->getUri());
      // URL
      $this->url = @current(explode('?',$this->uri));
      // main site
      $this->mainSite = Doctrine::getTable('Site')->findOneBySlug('cmais');
      // asset
      $this->asset = $request->getParameter('object');
      
      if ($this->asset->getIsActive() != '1' && $this->asset->Site->getType() != "Programa TVRTB"){
        header("Location: ".$this->asset->Site->retriveUrl());
        die();
      }
      
      if(in_array($this->asset->Site->getSlug(), array("cocorico2","cocorico"))) {
        $this->setLayout('cocorico');   
        /*
        if (preg_match("/^172\.20\.(\d+)\.(\d+)/", $_SERVER['REMOTE_ADDR']) == 0) {
          header("location: http://www3.tvcultura.com.br/cocorico");
          die();
        }
        */
      }
      
      if(in_array($this->asset->Site->getSlug(), array("culturabrasil"))){
        $this->setLayout('culturabrasil');
      }
      
      if(in_array($this->asset->Site->getSlug(), array("cedoc","cedoc2"))) {
        $this->setLayout('cedoc');   
        /*
        if (preg_match("/^172\.20\.(\d+)\.(\d+)/", $_SERVER['REMOTE_ADDR']) == 0) {
          header("location: http://www3.tvcultura.com.br/cocorico");
          die();
        }
        */
      }
      /*
      if(in_array($this->asset->getSlug(), array("cadastro-de-tutor-melhor-gestao-melhor-ensino"))) {
        if (preg_match("/^172\.20\.(\d+)\.(\d+)/", $_SERVER['REMOTE_ADDR']) == 0) {
          header("location: http://cmais.com.br");
          die();
        }
      }
      */
      // related assets
      $this->relatedAssets = Doctrine_Query::create()
        ->select('a.*, ra.id related_asset_id, ra.type related_asset_type, ra.description related_asset_description')
        ->from('Asset a, RelatedAsset ra')
        ->where('a.id = ra.asset_id')
        ->andWhere('ra.parent_asset_id = ?', (int)$this->asset->id)
        ->groupBy('ra.id')
        ->orderBy('ra.display_order');
      // current site
      $this->site = $this->asset->Site;
      // program
      $this->program = $this->site->Program;      
      // current section
      // #2 Look for a Section
      $str = $this->asset->AssetType->getSlug();
      if($this->site->slug == 'nossalingua'){
        if($str == 'video')
          $str = 'videos';
      }
      if($str == "image-gallery")
        $str = "imagens";
      
      $this->section = Doctrine_Query::create()
        ->select('s.*')
        ->from('Section s')
        ->where('s.site_id = ?', (int)$this->site->getId())
        ->andWhere('s.slug = ?', (string)$str)
        ->orderby('s.parent_section_id desc')
        ->fetchOne();

      if(in_array($this->site->getSlug(), array("radarcultura","culturafm","cocorico"))) {
        $this->setLayout('radarcultura');
        if(!$this->section){
          $se = $this->asset->Sections;
          $this->section = $this->asset->Sections[0];
          /*
          if(count($se)>0){
            foreach($se as $s){
              if(!$this->section){
                $this->section = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Section s')
                  ->where('s.site_id = ?', (int)$this->site->getId())
                  ->andWhere('s.slug = ?', $s->getSlug())
                  ->orderby('s.parent_section_id desc')
                  ->fetchOne();
              }
            }
          }
          */
          if(!$this->section){
            $this->section = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', (int)$this->mainSite->getId())
              ->andWhere('s.slug = ?', 'home')
              ->orderby('s.parent_section_id desc')
              ->fetchOne();
          }
        }
      }
      else {

        if(!$this->section){
          $se = $this->asset->Sections;
          if(count($se)>0){
            foreach($se as $s){
              if(!$this->section){
                $this->section = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Section s')
                  ->where('s.site_id = ?', (int)$this->mainSite->getId())
                  ->andWhere('s.slug = ?', $s->getSlug())
                  ->orderby('s.parent_section_id desc')
                  ->fetchOne();
              }
            }
          }
          if(!$this->section){
            $this->section = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', (int)$this->mainSite->getId())
              ->andWhere('s.slug = ?', 'home')
              ->orderby('s.parent_section_id desc')
              ->fetchOne();
          }
        }

      }

      // siteSections
      if($this->asset->Site->getType() == "ProgramaRadio"){
        if( ($this->site->Program->Channel->getSlug() == "culturabrasil") || ($this->site->getSlug() == "especiais-1") ){
          $this->siteSections = Doctrine_Query::create()
            ->select('s.*')
            ->from('Section s')
            ->where('s.site_id = ?', 1124)
            ->andWhere('s.is_active = ?', 1)
            ->andWhere('s.is_visible = ?', 1)
            ->andWhere('parent_section_id IS NULL')
            ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
            ->orderBy('s.display_order')
            ->execute();
        }
        else {
          $this->siteSections = Doctrine_Query::create()
            ->select('s.*')
            ->from('Section s')
            ->where('s.site_id = ?', 4)
            ->andWhere('s.is_active = ?', 1)
            ->andWhere('s.is_visible = ?', 1)
            ->andWhere('parent_section_id IS NULL')
            ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
            ->orderBy('s.display_order')
            ->execute();
        }
      }
      elseif(in_array($this->asset->Site->getSlug(), array("sic","revistavitrine2","revistavitrine","radarcultura"))){
        $this->siteSections = Doctrine_Query::create()
          ->select('s.*')
          ->from('Section s')
          ->where('s.site_id = ?', $this->asset->Site->getId())
          ->andWhere('s.is_active = ?', 1)
          ->andWhere('s.is_visible = ?', 1)
          ->andWhere('s.parent_section_id <= 0 OR s.parent_section_id IS NULL')
          ->orderBy('s.display_order')
          ->execute();
      }
      else{
        $this->siteSections = Doctrine_Query::create()
          ->select('s.*')
          ->from('Section s')
          ->where('s.site_id = ?', $this->asset->Site->id)
          ->andWhere('s.is_active = ?', 1)
          ->andWhere('s.is_visible = ?', 1)
          ->andWhere('s.parent_section_id <= 0 OR s.parent_section_id IS NULL')
          ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
          ->orderBy('s.display_order')
          ->execute();
      }
      
      /*
      // editorials
      $this->editorials = Doctrine_Query::create()
        ->select('s.*')
        ->from('Section s')
        ->where('s.site_id = ?', $this->mainSite->id)
        ->andWhere('s.is_active = ?', 1)
        ->andWhere('s.is_editorial = ?', 1)
        ->orderBy('s.display_order')
        ->execute();
      // channels
      $this->channels = array();
      $this->live = array();
      $this->coming = array();    
      $this->important = array();
      $cs = Doctrine_Query::create()
        ->select('c.*')
        ->from('Channel c')
        ->where('c.is_active = ?', 1)
        ->orderBy('c.title')
        ->execute();
      foreach($cs as $c){
        $this->channels[$c->slug] = $c;
        $this->live[$c->slug] = $c->retriveLiveProgram();
        $this->important[$c->slug] = $c->retriveImportantPrograms(1);
        $this->coming[$c->slug] = $c->retriveLivePrograms(3,$this->live[$c->slug][0]->getId());
        //print "<br>>>>".$c->getSlug();
      }
      */

      /*
      // blocks
      if($this->section){
        $bs = $this->section->Blocks;
        $displays = array();
        foreach($bs as $b){
          $displays[$b->getSlug()] = $b->retriveDisplays();
        }
      }
      */
     
      if(!isset($displays['alerta'])){
        $block = Doctrine::getTable('Block')->findOneById(210);
        if($block){
          $displays['alerta'] = $block->retriveDisplays();
        }
      }

      /*
      if(!isset($displays['publicidade-728x90'])){
        $block = Doctrine::getTable('Block')->findOneById(430);
        if($block)
          $displays['publicidade-728x90'] = $block->retriveDisplays();
      }
      if(!isset($displays['publicidade-300x50'])){
        $block = Doctrine::getTable('Block')->findOneById(429);
        if($block)
          $displays['publicidade-300x50'] = $block->retriveDisplays();
      }
      if(!isset($displays['publicidade-300x250'])){
        $block = Doctrine::getTable('Block')->findOneById(428);
        if($block)
          $displays['publicidade-300x250'] = $block->retriveDisplays();
      }
      */
      $this->displays = $displays;
      unset($displays); unset($bs);
    }

    if(($this->site->Program->Channel->getSlug() == "univesptv")&&($this->site->getSlug() != "inglescommusica")){
      $t = explode("-old", $this->asset->getSlug());
      if(isset($_REQUEST["debug"])){
        if ($_REQUEST["debug"]==1)
          //echo $this->section->Site->getSlug();
          echo $this->asset->Site->getSlug();
      }
      if((count($t) > 1)&&($_REQUEST["test"]!=1)){
        header("Location: ".$t[0]);
        die();
      }
    }

    if($this->site->slug == 'sic'){
      $this->setLayout(false);
    }
    
    // mail sender
    $email_site = "";
    if($request->getParameter('section_id') != ""){
      $this->section = Doctrine_Query::create()
        ->select('s.*')
        ->from('Section s')
        ->where('s.id = ?', (int)$request->getParameter('section_id'))
        ->fetchOne();
      $email_site = $this->section->getContactEmail();
    }
    $this->mailSent = $request->getParameter('mailSent');
    
    if ($this->site->Program->getIsACourse()) {
      if ($request->getParameter('bloco-de-notas')) {
        $email_site = strip_tags($request->getParameter('email'));
      }
    }
    
    // mail sender
    if($email_site!="") {
      if(($request->getParameter('captcha'))||($request->getParameter('mande-seu-tema'))||($request->getParameter('bloco-de-notas'))){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
          $email_user = strip_tags($request->getParameter('email'));
          $nome_user = strip_tags($request->getParameter('nome'));
          if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
            // verifica se o servidor que ta o formulario é o mesmo que o chamou, se for um ataque de injeção de dados este valor será diferente
            ini_set('sendmail_from', $email_site);
            
            if ($this->site->Program->getIsACourse())
              $msg = "<p>Veja abaixo suas anotações do curso " . $this->site->getTitle() . ":<p>";
            else
              $msg = "Formulario Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
    
            if ($this->site->Program->getIsACourse()) {
              while(list($campo, $valor) = each($_REQUEST)) {
                if ($campo != "bloco-de-notas") {
                  if(!in_array(ucwords($campo), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action', 'Cadastro-tutoria', 'Section_id')))
                    $msg .= "<b>" . ucwords($campo) . ":</b> " . strip_tags($valor) . "<br>";
                }
              }
            } 
            else {
              
              if($request->getParameter('cadastro-tutoria')) {
                
                $campos = null;
                
                if($_REQUEST["atividade_pretendida1"]!="")
                  $campos["atividade_pretendida1"] = $_REQUEST["atividade_pretendida1"];
                else 
                  $campos["atividade_pretendida1"] = " - ";

                if($_REQUEST["atividade_pretendida2"]!="")
                  $campos["atividade_pretendida2"] = $_REQUEST["atividade_pretendida2"];
                else 
                  $campos["atividade_pretendida2"] = " - ";

                $campos["nome"] = $_REQUEST["nome"];
                $campos["cpf"] = $_REQUEST["cpf"];
                $campos["email"] = $_REQUEST["email"];
                $campos["rede"] = $_REQUEST["rede"];
                
                $campos["rede"] = $_REQUEST["rede"];

                if($_REQUEST["escola"]!="")
                  $campos["escola"] = $_REQUEST["escola"];
                else 
                  $campos["escola"] = " - ";

                if($_REQUEST["atividade"]!="")
                  $campos["atividade"] = $_REQUEST["atividade"];
                else 
                  $campos["atividade"] = " - ";
                
                $campos["pcnp"] = $_REQUEST["pcnp"];
                
                if($_REQUEST["pcnp1"]!="")
                  $campos["pcnp1"] = $_REQUEST["pcnp1"];
                else 
                  $campos["pcnp1"] = " - ";
                
                if($_REQUEST["pcnp2"]!="")
                  $campos["pcnp2"] = $_REQUEST["pcnp2"];
                else 
                  $campos["pcnp2"] = " - ";
                
                if($_REQUEST["pcnp3"]!="")
                  $campos["pcnp3"] = $_REQUEST["pcnp3"];
                else 
                  $campos["pcnp3"] = " - ";

                $campos["de"] = $_REQUEST["de"];

                $campos["rua"] = $_REQUEST["rua"];
                $campos["numero"] = $_REQUEST["numero"];

                if($_REQUEST["compl"]!="")
                  $campos["compl"] = $_REQUEST["compl"];
                else 
                  $campos["compl"] = " - ";

                $campos["bairro"] = $_REQUEST["bairro"];
                $campos["cep"] = $_REQUEST["cep"];
                $campos["cidade"] = $_REQUEST["cidade"];
                $campos["estado"] = $_REQUEST["estado"];
                $campos["dddT"] = $_REQUEST["dddT"];
                $campos["tel"] = $_REQUEST["tel"];
                $campos["dddC"] = $_REQUEST["dddC"];
                $campos["cel"] = $_REQUEST["cel"];

                if($_REQUEST["licenciatura1"]!="")
                  $campos["licenciatura1"] = $_REQUEST["licenciatura1"];
                else 
                  $campos["licenciatura1"] = " - ";

                if($_REQUEST["licenciatura2"]!="")
                  $campos["licenciatura2"] = $_REQUEST["licenciatura2"];
                else 
                  $campos["licenciatura2"] = " - ";

                if($_REQUEST["licenciatura3"]!="")
                  $campos["licenciatura3"] = $_REQUEST["licenciatura3"];
                else 
                  $campos["licenciatura3"] = " - ";
                
                $campos["certificado"] = $_REQUEST["certificado"];
                
                if($_REQUEST["ensino"]!="")
                  $campos["ensino"] = $_REQUEST["ensino"];
                else 
                  $campos["ensino"] = " - ";
                
                $campos["certificado2"] = $_REQUEST["certificado2"];

                $filename = "/var/frontend/web/tutores-2013/cadastro.csv";
                $csv = @file_get_contents($filename);
                $csv .= "\r\n";
                $fp = fopen($filename,'w+');
              }
              
              while(list($campo, $valor) = each($campos)) {
                if(!in_array(ucwords($campo), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action'))) {
                  $msg .= "<b>" . ucwords($campo) . ":</b> " . strip_tags($valor) . "<br>";
                  $csv .= str_replace(',',' ',strip_tags($valor)) . ", ";
                }
              }
              if($request->getParameter('cadastro-tutoria')) {
                fwrite($fp, $csv);
                fclose($fp);
                //die('123');
              }
            }
            
            $cabecalho = "Return-Path: " . $nome_user . " <" . $email_user . ">\r\n";
            $cabecalho .= "From: " . $nome_user . " <" . $email_user . ">\r\n";
            $cabecalho .= "X-Priority: 3\r\n";
            $cabecalho .= "X-Mailer: Formmail [version 1.0]\r\n";
            $cabecalho .= "MIME-Version: 1.0\r\n";
            $cabecalho .= "Content-Transfer-Encoding: 8bit\r\n";
            $cabecalho .= 'Content-Type: text/html; charset="utf-8"';
            
            if (isset($this->section->id)) {
              $subject = '['.$this->site->getTitle().']['.$this->section->getTitle().'] '.$nome_user.' <'.$email_user.'>';
            }
            else { 
              if ($this->site->Program->getIsACourse()) {
                if ($request->getParameter('bloco-de-notas')) {
                  $subject = '['.$this->site->getTitle().'][Bloco de Notas] '.$nome_user.' <'.$email_user.'>';
                }
              }
            }
            
            if(mail($email_site, $subject, stripslashes(nl2br($msg)), $cabecalho)){
              //header("Location: ".$this->uri."?mailSent=1");
              if($request->getParameter('cadastro-tutoria')) {
                $cabecalho = "From: Cadastro de Tututores 2013 <nao-responda@tvcultura.com.br>\r\n";
                $cabecalho .= "X-Priority: 3\r\n";
                $cabecalho .= "X-Mailer: Formmail [version 1.0]\r\n";
                $cabecalho .= "MIME-Version: 1.0\r\n";
                $cabecalho .= "Content-Transfer-Encoding: 8bit\r\n";
                $cabecalho .= 'Content-Type: text/html; charset="utf-8"';
                $subject = 'Cadastro efetuado com sucesso'; 
                $mailto = $_REQUEST['email'];
                $msg = "\n\rPrezado professor(a) recebemos seu cadastro, em breve faremos contato para maiores informações.\n\r\n\rAtenciosamente,\n\rEquipe de Tutoria";
                mail($mailto, $subject, stripslashes(nl2br($msg)), $cabecalho);
              }
              
              die("1");
            }
      else
        die("0");
          }
          else {
            header("Location: http://cmais.com.br");
            die();
          }
        }
      }
    }

    if($this->site->getSlug()=="deupaulanatv"){
      unset($assets);
      $aa = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a')
        ->where('a.site_id = ?', $this->asset->Site->getId())
        ->andWhere('a.asset_type_id = ?', 1)
        ->andWhere('a.is_active = ?', 1)
        ->orderby('a.created_at')
        ->limit(150)
        ->execute();
      
      for($i=0; $i<count($aa); $i++){
        if($request->getParameter('debug') != "")
          echo "<br>>>>>>>>>>".$aa[$i]->getId()." == ".$this->asset->getId();
        if($aa[$i]->getId() == $this->asset->getId()){
          if($aa[$i+1])
            $this->next = $aa[$i+1]->slug;
          $this->prev = $aa[$i-1]->slug;
        }
      }
      unset($aa);

      if($request->getParameter('debug') != ""){
        echo "<br /><br /><br /><br /><br />".$this->prev."<br />".$this->next."<br /><br /><br /><br />";
      }

    }
    
    //if ($this->site->Program->getIsACourse() && $request->getParameter('test') == 1) {
    if ($this->site->Program->getIsACourse()) {
      $sections = $this->asset->getSections();
      
      if (count($sections) > 0) {
        $this->section = $sections[0];
        //$this->assets = $this->section->getAssets();
        $this->assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('sa.asset_id = a.id')
          ->andWhere('sa.section_id = ?', $this->section->id)
          ->andWhere('a.site_id = ?', $this->site->id)
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('sa.display_order')
          ->execute();
          
        for($k=0; $k < count($this->assets); $k++){
          
          if ($this->assets[$k]->id == $this->asset->id){
            if (count($this->assets) > ($k+1)){
              $this->assetNext = $this->assets[$k+1];
            }
            if ($k > 0){
              $this->assetPrev = $this->assets[$k-1];
            }
          }
        }
        
      }
    }
        

    //metas
    if($this->asset->Site->getSlug()!="cmais")
      $title = $this->asset->getTitle().' - '.$this->asset->Site->getTitle().' - cmais+ O portal de conteúdo da Cultura';
    else
      $title = $this->asset->getTitle().' - '.$this->asset->Site->getTitle().' O portal de conteúdo da Cultura';
    
    $og_description = $this->asset->getDescription().' - cmais+ O portal de conteúdo da Cultura';
    
    $tags = "";
    if(count($this->asset->getTags())>0){
      foreach($this->asset->getTags() as $t)
        $tags .= $t.', ';
    }
    $tags .= "cultura, educacao, infantil, jornalismo";
    
    if($this->site->getSlug() == "culturabrasil" || $this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1"){
      if($this->site->getSlug() == "culturabrasil"){
        $title = $this->site->getTitle()." - ".$this->asset->getTitle();
      }else{
        $title = "Cultura Brasil - ". $this->site->getTitle()." - ".$this->asset->getTitle();  
      }
        
      $tags = "";
      if(count($this->asset->getTags())>0){
        foreach($this->asset->getTags() as $t)
          $tags .= $t.', ';
      }
      $tags .= "musica, musica brasileira, radio cultura, radio cultura brasil, playlist";  
      
      $og_description = "Cultura Brasil - ". $this->asset->getDescription();
    }
    
    $this->getResponse()->setTitle($title, false);    //OK
    $this->getResponse()->addMeta('description', $this->asset->getDescription()); //OK
    $this->getResponse()->addMeta('keywords', $tags);   //OK
    
    $this->getResponse()->addMetaProp('og:title', $title);  //OK
    $this->getResponse()->addMetaProp('og:type', 'article');  //OK
    $this->getResponse()->addMetaProp('og:description', $og_description); //OK
    $this->getResponse()->addMetaProp('og:url', $this->uri); //OK
    $this->getResponse()->addMetaProp('og:site_name', 'cmais+');  //OK
    
    $og_image =  'http://cmais.com.br/portal/images/logoCMAIS.jpg'; //OK
    
    //ogp
    if($this->asset->AssetType->getSlug() == "video"){
      $this->getResponse()->addMetaProp('og:type', 'video');
      $this->getResponse()->addMetaProp('og:video', 'http://www.youtube.com/v/'.$this->asset->AssetVideo->getYoutubeId().'?version=3&amp;autohide=1');
      $this->getResponse()->addMetaProp('og:video:type', 'application/x-shockwave-flash');
      $this->getResponse()->addMetaProp('og:video:width', '640');
      $this->getResponse()->addMetaProp('og:video:height', '390');
      $og_image = 'http://i4.ytimg.com/vi/'.$this->asset->AssetVideo->getYoutubeId().'/0.jpg';
    }
    elseif($this->asset->AssetType->getSlug() == "video-gallery"){
      $rel = $this->asset->retriveRelatedAssetsByAssetTypeId(6);
      if(count($rel)>0){
        $this->getResponse()->addMetaProp('og:type', 'video');
        $this->getResponse()->addMetaProp('og:video', 'http://www.youtube.com/v/'.$rel[0]->AssetVideo->getYoutubeId().'?version=3&amp;autohide=1');
        $this->getResponse()->addMetaProp('og:video:type', 'application/x-shockwave-flash');
        $this->getResponse()->addMetaProp('og:video:width', '640');
        $this->getResponse()->addMetaProp('og:video:height', '390');
        $og_image =  'http://i4.ytimg.com/vi/'.$rel[0]->AssetVideo->getYoutubeId().'/default.jpg';
      }
    }
    elseif($this->asset->AssetType->getSlug() == "audio"){
      $this->getResponse()->addMetaProp('og:type', 'audio');
      $this->getResponse()->addMetaProp('og:audio', 'http://midia.cmais.com.br/assets/audio/default/'.$this->asset->AssetAudio->getFile().'.mp3');
      $this->getResponse()->addMetaProp('og:audio:title', $this->asset->getTitle());
      $this->getResponse()->addMetaProp('og:audio:type', 'application/mp3');
      $og_image =  'http://cmais.com.br/portal/images/logoCMAIS.jpg';
    }
    elseif($this->asset->AssetType->getSlug() == "image"){
      $og_image =  'http://midia.cmais.com.br/assets/image/default/'.$this->asset->AssetImage->getFile().'.jpg';
    }
    elseif($this->asset->AssetType->getSlug() == "content"){
      $rel = $this->asset->retriveRelatedAssets();
      if(count($rel)>0){
        if($rel[0]->AssetType->getSlug() == "video"){
          $this->getResponse()->addMetaProp('og:type', 'video');
          $this->getResponse()->addMetaProp('og:video', 'http://www.youtube.com/v/'.$rel[0]->AssetVideo->getYoutubeId().'?version=3&amp;autohide=1');
          $this->getResponse()->addMetaProp('og:video:type', 'application/x-shockwave-flash');
          $this->getResponse()->addMetaProp('og:video:width', '640');
          $this->getResponse()->addMetaProp('og:video:height', '390');
          $og_image =  'http://i4.ytimg.com/vi/'.$rel[0]->AssetVideo->getYoutubeId().'/0.jpg';
        }
        elseif($rel[0]->AssetType->getSlug() == "video-gallery"){
          $relatedVideos = $rel[0]->retriveRelatedAssetsByAssetTypeId(6);
          if(count($relatedVideos)>0){
            $this->getResponse()->addMetaProp('og:type', 'video');
            $this->getResponse()->addMetaProp('og:video', 'http://www.youtube.com/v/'.$relatedVideos[0]->AssetVideo->getYoutubeId().'?version=3&amp;autohide=1');
            $this->getResponse()->addMetaProp('og:video:type', 'application/x-shockwave-flash');
            $this->getResponse()->addMetaProp('og:video:width', '640');
            $this->getResponse()->addMetaProp('og:video:height', '390');
            $og_image =  'http://i4.ytimg.com/vi/'.$relatedVideos[0]->AssetVideo->getYoutubeId().'/0.jpg';
          }
        }
        elseif($rel[0]->AssetType->getSlug() == "audio"){
          /*
          $this->getResponse()->addMetaProp('og:type', 'audio');
          $this->getResponse()->addMetaProp('og:audio', 'http://midia.cmais.com.br/assets/audio/default/'.$related->AssetAudio->getFile().'.mp3');
          $this->getResponse()->addMetaProp('og:audio:title', $related->getTitle());
          $this->getResponse()->addMetaProp('og:audio:type', 'application/mp3');
          */
          $og_image =  'http://cmais.com.br/portal/images/logoCMAIS.jpg';
        }elseif($rel[0]->AssetType->getSlug() == "image"){
          $og_image =  'http://midia.cmais.com.br/assets/image/default/'.$rel[0]->AssetImage->getFile().'.jpg';
        }
        /*
        foreach($rel as $related){
          if($related->AssetType->getSlug() == "video"){
            $this->getResponse()->addMetaProp('og:type', 'video');
            $this->getResponse()->addMetaProp('og:video', 'http://www.youtube.com/v/'.$related->AssetVideo->getYoutubeId().'?version=3&amp;autohide=1');
            $this->getResponse()->addMetaProp('og:video:type', 'application/x-shockwave-flash');
            $this->getResponse()->addMetaProp('og:video:width', '640');
            $this->getResponse()->addMetaProp('og:video:height', '390');
            $this->getResponse()->addMetaProp('og:image', 'http://i4.ytimg.com/vi/'.$related->AssetVideo->getYoutubeId().'/default.jpg');
          }
          elseif($related->AssetType->getSlug() == "audio"){
            $this->getResponse()->addMetaProp('og:type', 'audio');
            $this->getResponse()->addMetaProp('og:audio', 'http://midia.cmais.com.br/assets/audio/default/'.$related->AssetAudio->getFile().'.mp3');
            $this->getResponse()->addMetaProp('og:audio:title', $related->getTitle());
            $this->getResponse()->addMetaProp('og:audio:type', 'application/mp3');
          }
          elseif($related->AssetType->getSlug() == "image"){
            $this->getResponse()->addMetaProp('og:image', 'http://midia.cmais.com.br/assets/image/default/'.$related->AssetImage->getFile().'.jpg');
          }
        }
        */
      }
    }
    else{
      if($this->site->Program->getImageLive() != "")
        $og_image =  'http://midia.cmais.com.br/programs/'.$this->site->Program->getImageLive();
      elseif($this->site->Program->getImageThumb() != "")
        $og_image =  'http://midia.cmais.com.br/programs/'.$this->site->Program->getImageThumb();
      elseif($this->site->getImageThumb() != "")
        $og_image =  'http://midia.cmais.com.br/programs/'.$this->site->getImageThumb();
    }
    
    if($this->site->getSlug() == "radarcultura"){
      $og_image =  'http://radarcultura.cmais.com.br/portal/images/capaPrograma/radarcultura/logo-radar-novo.png';
      $this->getResponse()->addMetaProp('og:description', $title." ".$description);
    }
    
    if($this->site->getSlug() == "culturabrasil" || $this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1"){
      if($og_image == "http://cmais.com.br/portal/images/logoCMAIS.jpg"){
        $og_image = "http://midia.cmais.com.br/programs/2cc51003abe67b67284933012d9558611c68c17e.jpg";
      }
    }    
    
    $this->getResponse()->addMetaProp('og:image', $og_image);
    
    if(!$this->section)
      $this->section = Doctrine::getTable('Section')->findOneById(1);

    $debug = false;
    if($request->getParameter('debug') != ""){
      print "<br>Related>>".count($this->relatedAssets);
      print "<br>SiteType>>".$this->site->getType();
      print "<br>Asset>>>".$this->asset->id;
      print "<br>AssetType>>>".$this->asset->AssetType->getTitle();
      print "<br>1>>>".$this->section->id;
      print "<br>2>>".$this->section->slug;
      print "<br>Site Type>>".$this->site->type;
      $debug = true;
    }

    $this->ipad = false;
    if(strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
      $this->ipad = true;
    }

    if($this->site->getSlug() == 'radarcultura' && $this->asset->getSlug() == 'player')
      $this->setLayout(false);
    /*
    if($this->site->getSlug() == "maiscrianca")
      $this->setLayout(false);
    */
    if($this->site->getSlug() == "castelo" && $this->asset->getSlug() != "creditos" && !isset($_REQUEST['layout']))
      $this->setLayout(false);
    
    if($this->site->getSlug() == "culturabrasil" || $this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1"){
      $this->setLayout('culturabrasil');
    } 
    if ($request->getHost() == "m.cmais.com.br") {
      if (is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/m/'.$this->asset->AssetType->getSlug().'Success.php')) {
        $this->setLayout(false);
        if($debug)
          print "<br>2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/m/'.$this->asset->AssetType->getSlug();
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/m/'.$this->asset->AssetType->getSlug());
      }
    }
    
    elseif($this->site->getSlug() == "multicultura") {
        if($this->asset->getSlug()=="seumulticultura") {
        if ($debug) print "<br>multicultura-1 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/seumulticultura';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/seumulticultura');
      }
    }
    
      elseif($this->site->getSlug() == "cocorico") {
      $this->setLayout('cocorico');
      if($this->section->slug == "joguinhos" && $this->asset->getSlug()!="jogo de-pintar") {
        if ($debug) print "<br>cocorico-1 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/joguinho';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/joguinho');
      }
      if($this->section->slug == "joguinhos" && $this->asset->getSlug()=="jogo-de-pintar" ) {
        if ($debug) print "<br>cocorico-1 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/jogo-de-pintar';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/jogo-de-pintar');
      }
    if($this->section->slug == "receitinhas") {
        if ($debug) print "<br>cocorico-receitinhas >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha');
      }
      /**elseif($this->section->slug == "receitinhas") {
        $subsections = $this->section->subsections();
        if(count($subsections) > 0) {
          foreach($subsections as $s) {
            if($s->getIsActive()) {
              if ($debug) print "<br>cocorico-2-a >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha-especial';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha-especial');
              break;
            }
            else {
              if ($debug) print "<br>cocorico-2-b >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha');
            }
          }
        }
        else {
          if ($debug) print "<br>cocorico-2-c >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinha');
        }
      } **/
      elseif($this->section->slug == "tour-virtual") {
        if ($debug) print "<br>cocorico-3 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/tour-virtual';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/tour-virtual');
      }
      elseif($this->section->slug == "convidados") {
        if ($debug) print "<br>cocorico-4 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/convidado';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/convidado');
      }
      elseif($this->section->slug == "naslojas") {
        if ($debug) print "<br>cocorico-5 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/produto';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/produto');
      }
      elseif($this->section->slug == "agenda") {
        if ($debug) print "<br>cocorico-6 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/agendapost';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/agendapost');
      }
      elseif($this->section->slug == "nocinema") { 
        if ($debug) print "<br>cocorico-7 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/cinemapost';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/cinemapost');
      }
      elseif(($this->section->slug == "bastidores")||($this->section->slug == "erros-de-gravacao")) {
        $this->assetsQuery = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, AssetVideo av, SectionAsset sa')
          ->where('sa.section_id = ?', $this->section->id)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('av.youtube_id IS NOT NULL')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('a.created_at desc');
        $pagelimit = 12;
        $this->pager = new sfDoctrinePager('Asset', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->page = $request->getParameter('page');

        if($this->section->slug == "erros-de-gravacao") {
          if($debug) print "<br>cocorico-8 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/erros-de-gravacao';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/erros-de-gravacao');
        }
        else{
          if($debug) print "<br>cocorico-9 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/bastidores';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/bastidores');
        }
      }
      elseif($this->section->slug == "para-colorir") {
        if ($debug) print "<br>cocorico-10 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/para-colorir-interna';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/para-colorir-interna');
      }
      elseif($this->section->slug == "series") {
        $this->assetsQuery = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, AssetVideo av, SectionAsset sa')
          ->where('sa.section_id = ?', $this->section->id)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('av.youtube_id IS NOT NULL')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('a.created_at desc');
        $pagelimit = 12;
        $this->pager = new sfDoctrinePager('Asset', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->page = $request->getParameter('page');
        if ($debug) print "<br>cocorico-11 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/series';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/series'); 
      }
      elseif($this->section->slug == "toda-crianca-tem-direito") {
        $this->assetsQuery = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, AssetVideo av, SectionAsset sa')
          ->where('sa.section_id = ?', $this->section->id)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('av.youtube_id IS NOT NULL')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('a.created_at desc');
        $pagelimit = 24;
        $this->pager = new sfDoctrinePager('Asset', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->page = $request->getParameter('page');
        if ($debug) print "<br>cocorico-12 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/toda-crianca-tem-direito';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/toda-crianca-tem-direito'); 
      }
      elseif($this->section->slug == "cocorico-na-franca") {
        $this->assetsQuery = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, AssetVideo av, SectionAsset sa')
          ->where('sa.section_id = ?', $this->section->id)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id') 
          ->andWhere('av.youtube_id IS NOT NULL')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('a.created_at desc');
        $pagelimit = 24;
        $this->pager = new sfDoctrinePager('Asset', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->page = $request->getParameter('page');
        if ($debug) print "<br>cocorico-13 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/cocorico-na-franca';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/cocorico-na-franca'); 
        
      }
      elseif($this->section->slug == "se-liga-no-perigo") {
        $this->assetsQuery = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, AssetVideo av, SectionAsset sa')
          ->where('sa.section_id = ?', $this->section->id)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('av.youtube_id IS NOT NULL')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('a.created_at desc');
        $pagelimit = 24;
        $this->pager = new sfDoctrinePager('Asset', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->page = $request->getParameter('page');
        if ($debug) print "<br>cocorico-14 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/se-liga-no-perigo';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/se-liga-no-perigo'); 
      }
       elseif($this->section->slug == "imprima-e-brinque") {
        if ($debug) print "<br>cocorico-15 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/imprima-e-brinque-interna';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/imprima-e-brinque-interna');
      
       }
      elseif($this->section->slug == "clipes-musicais") {
        if ($debug) print "<br>cocorico-16 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/clipes-musicais';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/clipes-musicais');
        $this->assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('sa.asset_id = a.id')
          ->andWhere('sa.section_id = ?', $this->section->id)
          ->andWhere('a.site_id = ?', $this->site->id)
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('sa.display_order')
          ->execute();
        $pagelimit = 36;
      }
      elseif($this->section->slug == "para-colorir") {
        if ($debug) print "<br>cocorico-17 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/para-colorir-interna';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/para-colorir-interna');
      }
      elseif($this->section->slug == "papel-de-parede") {
        if ($debug) print "<br>cocorico-18 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/papel-de-parede-interna';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/papel-de-parede-interna');
      }
      elseif($this->section->slug == "episodios"||$this->site->getSlug() == "tvcocorico") {
        if ($debug) print "<br>cocorico-19 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/episodio';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/episodio'); 
     }
      elseif($this->section->slug == "video") {
        if ($debug) print "<br>cocorico-20 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/episodio';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/episodio'); 
      }  
      elseif($this->section->slug == "para-colorir") {
        if ($debug) print "<br>cocorico-10 >>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/para-colorir-interna';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/para-colorir-interna');
      }
    }
    elseif($this->site->getSlug() == "quintaldacultura"){
      $slug = $this->asset->AssetType->getSlug();
      foreach($this->asset->Sections as $s){
        //if(in_array($s->id, array('92','98','99','100','101'))){
        if($s->Parent->slug == "jogos") {
          $slug = "jogo";
          if ($request->getParameter('param3'))
            $this->jogoSubsection = Doctrine::getTable('Section')->findOneBySlug($request->getParameter('param3'));
          else
            $this->jogoSubsection = Doctrine::getTable('Section')->findOneBySlug('todos');
        }elseif ($s->Parent->slug == "diversao") {
      $this->section = Doctrine::getTable('Section')->findOneById($s->id);
      $slug = "diversao-content";
    }
        elseif ($s->slug == "agenda") {
      $this->section = Doctrine::getTable('Section')->findOneById($s->id);
      $slug = "agenda-interna";
    }
    /*
        elseif(in_array($s->id, array('94', '103', '106', '104', '105', '127'))){
          $this->section = Doctrine::getTable('Section')->findOneById($s->id);
          //$slug = "atividade";
      $slug = "diversao-content";
        }
        elseif($s->id == '107')
          //$slug = "atividade-colorir";
      $slug = "diversao-content";
        elseif(in_array($s->id, array('97', '765', '764', '763', '762'))){
          //$slug = "baixar-content";
      $slug = "diversao-content";
        }
    */
    
      }
      
      if($this->section->getId() == 1)
        $this->section = $s;

      if(($slug != "content")&&($slug != "person"))
        $this->setLayout(false);

      if($this->asset->getId() == 59156){
        if($debug) print "<br>5-5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/quebra-cabeca-1Success.php';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/diversao-content');
      }
      elseif($this->asset->getSlug() == 'album-de-ferias'){
        if($debug) print "<br>5-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/album-de-ferias';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/diversao-content');
      }
      elseif($this->asset->getId() == 49018){
        if($debug) print "<br>5-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/test-8';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/diversao-content');
      }
      elseif(($slug == "image-gallery")||($slug == "image")){
        if($debug) print "<br>5-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/imagem';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/diversao-content');
      }
      else{
        if($debug) print "<br>5-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$slug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$slug);
      }
    }
    else{
      // has template
      if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/assets/'.$this->asset->getSlug().'Success.php')){
        if($this->asset->getIsActive() != "1"){
          header("Location: ".$this->asset->Site->retriveUrl());
          die();
        }
        if($debug) print "<br>1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/assets/'.$this->asset->getSlug();
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/assets/'.$this->asset->getSlug());
      }
      elseif(($this->site->getSlug() != "tvratimbum")&&($this->site->getType() != "ProgramaRadio")){
      #elseif((is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug().'Success.php'))&&($this->site->getSlug() != "tvratimbum")){
        //die(">".$this->section->slug);
        if ($this->site->getSlug() == "radarcultura" && in_array($this->section->slug,array("entrevistas","cincosons","quarentoes"))) {
          if($debug) print "<br>2-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/contentRadar';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/contentRadar');
        }
        elseif ($this->site->getSlug() == "radarcultura" && $this->section->slug == "musicas") {
          if($debug) print "<br>2-1b>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/musica';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/musica');
        }
        elseif ($this->site->getSlug() == "radarcultura" && $this->section->slug == "playlists") {
          if($debug) print "<br>2-1c>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/playlist';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/playlist');
        }
        else {
          if ($this->site->getSlug() == "culturafm") {
            $sections = $this->asset->getSections();
            if(count($sections) >= 1) {
              foreach ($sections as $s) {
                if($parentSection = $s->getParent()){
                  if($parentSection->getSlug() == "colunistas"){
                    if($debug) print "<br>2-2-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug().'Colunista';
                    $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug().'Colunista');
                    break; 
                  }
                  else{
                    if($debug) print "<br>2-2-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug();
                    $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug());
                  }
                }
              }
            }
            else {
              if($debug) print "<br>2-2-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug();
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug());
            }
          }
          if($this->site->getSlug() == "vila-sesamo") {
            //if($this->asset->id != 148169) // id do asset somente para teste, retirar assim que puderem!
              $this->setLayout("vilasesamo");
            $sections = $this->asset->getSections();
            foreach($sections as $s) {
              if(in_array($s->getSlug(), array("atividades", "jogos", "videos","cuidadores"))) {
                $this->section = $s;
                break;
              }
            }
            if($this->section->getSlug() == "atividades") {
              if($debug) print "<br>2-3-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/atividade';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/atividade');
            }
            elseif($this->section->getSlug() == "jogos") {
              if($debug) print "<br>2-3-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/jogo';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/jogo');
            }
            elseif($this->section->getSlug() == "videos") {
              if($debug) print "<br>2-3-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/video';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/video');
            }
            elseif($this->section->getSlug() == "cuidadores") {
              if($debug) print "<br>2-3-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/artigo';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/artigo');
            }
            else {
              if($debug) print "<br>2-3-5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug();
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug());
            }
          }
          else {
            if($debug) print "<br>2-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug());
          }
        }
      }
      else{
        if($this->site->getType() == "Hotsite" || $this->site->getType() == 1){
          
          if(in_array($this->site->getSlug(), array("revistavitrine","revistavitrine2"))) {
            if($debug) print "<br>3-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/online';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/online');
          }
          else {
            if($debug) print "<br>3-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$this->asset->AssetType->getSlug());
          }
          
          
        }
        elseif(($this->site->getType() == "Portal" || $this->site->getType() == 2)&&($this->site->getSlug() != "tvratimbum")){
          if(in_array($this->asset->getId(), array(121120, 121117, 120858, 121146, 121145, 122440, 127638,127974,130827,131375,131368,131702,139908,140033,140035))){
            if($debug) print "<br>4-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/cmais/tutores-content'; 
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/cmais/tutores-content');
          }
          else {
            if($debug) print "<br>4-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/'.$this->asset->AssetType->getSlug());
          }
        }
        elseif($this->site->getType() == "Programa" || $this->site->getType() == 3){
          if($debug) print "<br>5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$this->asset->AssetType->getSlug();
          if($this->asset->AssetType->getSlug() == "person")
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/content');
          elseif($this->asset->AssetType->getSlug() == "episode")
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/video-gallery');
          else
            if ($this->site->Program->getIsACourse()) {
              if(in_array($this->site->getSlug(), array("pedagogia-unesp","evs","licenciatura-em-ciencias"))){
                if($debug) print "<br>5.1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/content-cursoAntigo';
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/content-cursoAntigo');
              }
              else {
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/content-curso');
                if($debug) print "<br>5-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/content-curso';
              }
            }
            else {
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$this->asset->AssetType->getSlug());
            }
        }
        elseif($this->site->getType() == "ProgramaRadio"){
          if(in_array($this->asset->Site->getSlug(), array("diario-da-manha","cultura-jazz","estudio-cultura", "espirais", "brasilis", "novos-acordes", "super-8", "paralelos", "master-class","manha-cultura", "entrelinhas-1", "cd-da-semana", "arquivo-vivo", "interprete"))){
            if($debug) print "<br>2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$this->asset->AssetType->getSlug());
          }
          else {
            if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug().'Success.php')){
              if($debug) print "<br>2-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug();
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug());
            }
            else {
              if($this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1"){
                if($debug) print "<br>2-1-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/culturabrasil/'.$this->asset->AssetType->getSlug();
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/culturabrasil/'.$this->asset->AssetType->getSlug());
              }
              else {
                if($debug) print "<br>2-1-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$this->asset->AssetType->getSlug();
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$this->asset->AssetType->getSlug());
              }
            }
          }
        }
        elseif($this->site->getType() == "Programa Infantil"){
          if(($this->asset->AssetType->getSlug()=="image-gallery")||($this->asset->AssetType->getSlug()=="image")){
            $this->setLayout(false);
            if($debug) print "<br>6-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/imagem';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/diversao-content');
          }elseif(($this->asset->AssetType->getSlug()!="content")&&($this->asset->AssetType->getSlug()!="video")&&($this->asset->AssetType->getSlug()!="person")){
            if($debug) print "<br>6-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$this->asset->AssetType->getSlug());
          }else{
            if($this->asset->AssetType->getSlug()=="video")
              $this->setLayout(false);
            if($debug) print "<br>6-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/'.$this->asset->AssetType->getSlug());
          }
        }
        elseif(($this->site->getType() == "Programa TVRTB")||($this->site->getSlug() == "tvratimbum")){
          if(($this->asset->AssetType->getSlug()=="image-gallery")||($this->asset->AssetType->getSlug()=="image")){
            if($debug) print "<br>6-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/imagem';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/imagem');
          }elseif(($this->asset->AssetType->getSlug()!="content")&&($this->asset->AssetType->getSlug()!="video")&&($this->asset->AssetType->getSlug()!="person")){
            if($debug) print "<br>6-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/programas/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/programas/'.$this->asset->AssetType->getSlug());
          
      }else{
            $sec = $this->asset->Sections[0];

            //echo ">>>>>".$sec->getSlug();
            
            if($sec->getSlug() == "jogos")                $s = "jogo";
            elseif($sec->getSlug() == "aventura")         $s = "jogo";
            elseif($sec->getSlug() == "desafio")          $s = "jogo";
            elseif($sec->getSlug() == "esportes")         $s = "jogo";
            elseif($sec->getSlug() == "educativos")       $s = "jogo";
            elseif($sec->getSlug() == "habilidade")       $s = "jogo";
            elseif($sec->getSlug() == "imagens")          $s = "imagem";
            elseif($sec->getSlug() == "videos")           $s = "video";
            elseif($sec->getSlug() == "baixar")           $s = "baixarAsset";
            elseif($sec->getSlug() == "carinhas")         $s = "carinha";
            elseif($sec->getSlug() == "brincadeiras")     $s = "baixarAsset";
            elseif($sec->getSlug() == "cartoes")          $s = "baixarAsset";
            elseif($sec->getSlug() == "papel-de-parede")  $s = "papel-de-parede";
            elseif($sec->getSlug() == "papeldeparede")    $s = "papel-de-parede";
            elseif($sec->getSlug() == "atividades")       $s = "atividade";
            elseif($sec->getSlug() == "para-colorir")     $s = "para-colorir";
            elseif($sec->getSlug() == "para-colorir-")    $s = "para-colorir";
            elseif($sec->getSlug() == "magicas")          $s = "atividade";
            elseif($sec->getSlug() == "experiencias")     $s = "atividade";
            elseif($sec->getSlug() == "receitinhas")      $s = "atividade";
            elseif($sec->getSlug() == "artes")            $s = "atividade";
            elseif($sec->getSlug() == "personagens")      $s = "programas/personagen";
            elseif($sec->getSlug() == "especial")         $s = "especialAsset";
            if($debug) print "<br>6-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/'.$s;
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/'.$s);
          }
        }
        elseif($this->site->getType() == "Programa Simples" || $this->site->getType() == 4){
          if($debug) print "<br>6-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$this->asset->AssetType->getSlug();
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$this->asset->AssetType->getSlug());
        }
        else{
          if($debug) print "<br>7>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$this->asset->AssetType->getSlug();
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$this->asset->AssetType->getSlug());
        }
      }
      
    }

  }

}
