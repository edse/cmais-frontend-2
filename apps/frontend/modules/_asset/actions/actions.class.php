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
      $this->uri = $request->getUri();
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
			/*
			// controls mobile user redirections
			//if ($request->getHost() != 'm.cmais.com.br') {			
				if ($this->asset->Site->Program->getChannelId() == 1 || in_array($this->asset->Site->getSlug(), array("cmais","m","tvcultura"))) {
					$from = $request->getParameter('from');
					if (!isset($_COOKIE['versao_classica']) && $from == 'm')
						setcookie('versao_classica', 1, -1);
	
					$useragent=$_SERVER['HTTP_USER_AGENT'];
					if(preg_match('/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
						if ($request->getHost() != 'm.cmais.com.br') {						
							if (!isset($_COOKIE['versao_classica']) && $from != 'm') {
								header('Location: http://m.cmais.com.br/' . $this->asset->getSlug());
								die();
							}
						}
					}
					else {
						if ($request->getHost() == 'm.cmais.com.br' && $_REQUEST['force'] != "1") {
							if ($this->asset->Site->getSlug() != "cmais") {
								header('Location: http://cmais.com.br/' . $this->asset->Site->getSlug() . '/' . $this->asset->getSlug());
								die();
							}
							else {
								header('Location: http://cmais.com.br/' . $this->asset->getSlug());
								die();
							}
						}
					}
				}
			//}
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

      // siteSections
      if($this->asset->Site->getType() == "ProgramaRadio"){
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
			elseif($this->asset->Site->getSlug() == "sic"){
	      $this->siteSections = Doctrine_Query::create()
	        ->select('s.*')
	        ->from('Section s')
	        ->where('s.site_id = ?', $this->asset->Site->getId())
	        ->andWhere('s.is_active = ?', 1)
	        ->andWhere('s.is_visible = ?', 1)
	        ->andWhere('parent_section_id IS NULL')
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
					if (isset($this->section->Site->getSlug()))
        		echo $this->section->Site->getSlug();
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
							$msg = "Veja abaixo suas anotações do curso " . $this->site->getTitle() . ":";
						else
            	$msg = "Formulario Preenchido em " . date("d/m/Y") . " as " . date("H:i:s") . ", seguem abaixo os dados:<br><br>";
						
            while(list($campo, $valor) = each($_REQUEST)) {
              if(!in_array(ucwords($campo), array('Form_action', 'X', 'Y', 'Enviar', 'Undefinedform_action')))
               	$msg .= "<b>" . ucwords($campo) . ":</b> " . strip_tags($valor) . "<br>";
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
    $title = $this->asset->getTitle().' - '.$this->asset->Site->getTitle().' - cmais+ O portal de conteúdo da Cultura';
    $this->getResponse()->setTitle($title, false);
    $this->getResponse()->addMeta('description', $this->asset->getDescription());
    $tags = "";    
    if(count($this->asset->getTags())>0){
      foreach($this->asset->getTags() as $t)
        $tags .= $t.', ';
    }
    $tags .= "cultura, educacao, infantil, jornalismo";
    $this->getResponse()->addMeta('keywords', $tags);

    $this->getResponse()->addMetaProp('og:title', $title);
    $this->getResponse()->addMetaProp('og:type', 'article');
    $this->getResponse()->addMetaProp('og:description', $this->asset->getDescription().' - cmais+ O portal de conteúdo da Cultura');
    $this->getResponse()->addMetaProp('og:url', $this->uri);
    $this->getResponse()->addMetaProp('og:site_name', 'cmais+');
    $this->getResponse()->addMetaProp('og:image', 'http://cmais.com.br/portal/images/logoCMAIS.jpg');
    
    //ogp
    if($this->asset->AssetType->getSlug() == "video"){
      $this->getResponse()->addMetaProp('og:type', 'video');
      $this->getResponse()->addMetaProp('og:video', 'http://www.youtube.com/v/'.$this->asset->AssetVideo->getYoutubeId().'?version=3&amp;autohide=1');
      $this->getResponse()->addMetaProp('og:video:type', 'application/x-shockwave-flash');
      $this->getResponse()->addMetaProp('og:video:width', '640');
      $this->getResponse()->addMetaProp('og:video:height', '390');
      $this->getResponse()->addMetaProp('og:image', 'http://i4.ytimg.com/vi/'.$this->asset->AssetVideo->getYoutubeId().'/default.jpg');
    }
    elseif($this->asset->AssetType->getSlug() == "audio"){
      $this->getResponse()->addMetaProp('og:type', 'audio');
      $this->getResponse()->addMetaProp('og:audio', 'http://midia.cmais.com.br/assets/audio/default/'.$this->asset->AssetAudio->getFile().'.mp3');
      $this->getResponse()->addMetaProp('og:audio:title', $this->asset->getTitle());
      $this->getResponse()->addMetaProp('og:audio:type', 'application/mp3');
      $this->getResponse()->addMetaProp('og:image', 'http://cmais.com.br/portal/images/logoCMAIS.jpg');
    }
    elseif($this->asset->AssetType->getSlug() == "image"){
      $this->getResponse()->addMetaProp('og:image', 'http://midia.cmais.com.br/assets/image/default/'.$this->asset->AssetImage->getFile().'.jpg');
    }
    elseif($this->asset->AssetType->getSlug() == "content"){
      $rel = $this->asset->retriveRelatedAssets();
      if(count($rel)>0){
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
      }
    }
    else{
      if($this->site->Program->getImageLive() != "")
        $this->getResponse()->addMetaProp('og:image', 'http://midia.cmais.com.br/programs/'.$this->site->Program->getImageLive());
      elseif($this->site->Program->getImageThumb() != "")
        $this->getResponse()->addMetaProp('og:image', 'http://midia.cmais.com.br/programs/'.$this->site->Program->getImageThumb());
      elseif($this->site->getImageThumb() != "")
        $this->getResponse()->addMetaProp('og:image', 'http://midia.cmais.com.br/programs/'.$this->site->getImageThumb());
    }

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

    if($this->site->getSlug() == "maiscrianca")
      $this->setLayout(false);
		
    if($this->site->getSlug() == "castelo" && $this->asset->getSlug() != "creditos" && !isset($_REQUEST['layout']))
      $this->setLayout(false);
		
		if ($request->getHost() == "m.cmais.com.br") {
			if (is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/m/'.$this->asset->AssetType->getSlug().'Success.php')) {
	      $this->setLayout(false);
				if($debug)
					print "<br>2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/m/'.$this->asset->AssetType->getSlug();
	      $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/m/'.$this->asset->AssetType->getSlug());
			}
    }
		elseif($this->site->getSlug() == "quintaldacultura"){
      $slug = $this->asset->AssetType->getSlug();
      foreach($this->asset->Sections as $s){
        if(in_array($s->id, array('92','98','99','100','101'))){
          $slug = "jogo";
        }
        elseif(in_array($s->id, array('94', '103', '106', '104', '105', '127'))){
          $this->section = Doctrine::getTable('Section')->findOneById($s->id);
          $slug = "atividade";
        }
        elseif($s->id == '107')
          $slug = "atividade-colorir";
        elseif(in_array($s->id, array('97', '765', '764', '763', '762'))){
          $slug = "baixar-content";
        }
      }
      
      if($this->section->getId() == 1)
        $this->section = $s;

      if(($slug != "content")&&($slug != "person"))
        $this->setLayout(false);

      if($this->asset->getId() == 59156){
        if($debug) print "<br>5-5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/quebra-cabeca-1Success.php';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/quebra-cabeca-1');
      }
      elseif($this->asset->getSlug() == 'album-de-ferias'){
        if($debug) print "<br>5-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/album-de-ferias';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/album-de-ferias');
      }
      elseif($this->asset->getId() == 49018){
      	if($debug) print "<br>5-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/test-8';
      	$this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/assets/test-8');
      }
      elseif(($slug == "image-gallery")||($slug == "image")){
        if($debug) print "<br>5-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/imagem';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/imagem');
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
      elseif((is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug().'Success.php'))&&($this->site->getSlug() != "tvratimbum")){
        if($debug) print "<br>2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug();
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug());
      }
      else{
        if($this->site->getType() == "Hotsite" || $this->site->getType() == 1){
          if($debug) print "<br>3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$this->asset->AssetType->getSlug();
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$this->asset->AssetType->getSlug());
        }
        elseif(($this->site->getType() == "Portal" || $this->site->getType() == 2)&&($this->site->getSlug() != "tvratimbum")){
          if($debug) print "<br>4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/'.$this->asset->AssetType->getSlug();
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/'.$this->asset->AssetType->getSlug());
        }
        elseif($this->site->getType() == "Programa" || $this->site->getType() == 3){
          if($debug) print "<br>5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$this->asset->AssetType->getSlug();
          if($this->asset->AssetType->getSlug() == "person")
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/content');
          elseif($this->asset->AssetType->getSlug() == "episode")
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/video-gallery');
          else
						//if ($this->site->Program->getIsACourse() && $request->getParameter('test') == 1) {
						if ($this->site->Program->getIsACourse()) {
     					$this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/content-curso');
							if($debug) print "<br>5-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/content-curso';
						}
						else
           		$this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$this->asset->AssetType->getSlug());
        }
        elseif($this->site->getType() == "ProgramaRadio"){
          if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug().'Success.php')){
            if($debug) print "<br>2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->asset->AssetType->getSlug());
          }else{
            if($debug) print "<br>2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$this->asset->AssetType->getSlug();
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$this->asset->AssetType->getSlug());
          }
        }
        elseif($this->site->getType() == "Programa Infantil"){
          if(($this->asset->AssetType->getSlug()=="image-gallery")||($this->asset->AssetType->getSlug()=="image")){
            $this->setLayout(false);
            if($debug) print "<br>6-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/imagem';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/quintaldacultura/imagem');
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

	    echo ">>>>>".$sec->getSlug();
            
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
