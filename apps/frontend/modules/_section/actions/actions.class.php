<?php

/**
 * _section actions.
 *
 * @package    astolfo
 * @subpackage _section
 * @author     Emerson Estrella
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class _sectionActions extends sfActions
{
  /** 
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request){
    gc_enable();
    
    if($request->getParameter('buscaa')){
      $request->setParameter('object', Doctrine::getTable('Section')->findOneBySiteIdAndSlug(189, 'artistas'));
    }
    elseif($request->getParameter('buscam')){
      $request->setParameter('object', Doctrine::getTable('Section')->findOneBySiteIdAndSlug(189, 'musicas'));
    }
    elseif($request->getParameter('artista')){
      $request->setParameter('object', Doctrine::getTable('Section')->findOneBySiteIdAndSlug(189, 'artistas'));
    }
    elseif($request->getParameter('letram') != ""){
      $request->setParameter('letter', $request->getParameter('letram'));
      if($request->getParameter('letter') == "1-9")
        $request->setParameter('letter', "#");
      $request->setParameter('object', Doctrine::getTable('Section')->findOneBySiteIdAndSlug(189, 'musicas'));
    }
    else if($request->getParameter('letra')){
      $request->setParameter('object', Doctrine::getTable('Section')->findOneBySiteIdAndSlug(189, 'artistas'));
      $request->setParameter('letter', $request->getParameter('letra'));
      if($request->getParameter('letter') == "1-9")
        $request->setParameter('letter', "#");
    }
    
    if($request->getParameter('object')){
      
      if($request->getParameter('busca'))
        $this->busca = $request->getParameter('busca');
      if($request->getParameter('site_id'))
        $this->site_id = $request->getParameter('site_id');
      
      // section
      $this->section = $request->getParameter('object');

      // URI
      //$this->uri = $request->getUri();
      $this->uri = $this->section->retriveUrl();
      
      // URL
      $this->url = @current(explode('?',$this->uri));


      if($request->getParameter('debug') != "")
        print "<br>>>>".$this->section->getId();

      if($this->section->getId() == 113){
        header("Location: /maiscrianca");
        die();
      }
      
      $this->getUser()->setCulture('pt_BR');

      // current site
      $this->site = $this->section->Site; 
      
      if($this->section->Site->getSlug() == "segundatela") {
        if($this->section->getSlug() != "aovivo")
          $this->setLayout('segundatela'); 
      }
      if($this->section->Site->getSlug()=="segundatela" && $this->section->getSlug()=="home" || $this->section->Site->getSlug()=="segundatela" && $this->section->getSlug()=="qss") {
        $this->setLayout('responsivo');
    }
      if($this->section->Site->getSlug()=="qss-fb" && $this->section->getSlug()=="home") {
        $this->setLayout(false);
      }
    if($this->section->Site->getSlug()=="cocorico" && $this->section->getSlug()=="3d") {
        $this->setLayout(false);
      }
    if(in_array($this->section->Site->getSlug(), array("novostempos"))) {
        $this->setLayout('responsivo');
      }
      if(in_array($this->section->Site->getSlug(), array("vilasesamo")))  { // ids da seção somente para teste, retirem assim que puderem!
        $this->setLayout('vilasesamo');
        /*
         * Como não tem template para algumas seções (videos,atividades, etc), seta como seção a primeira seção filha que encontrar
         */
        /*
        if(in_array($this->section->getSlug(), array("videos","atividades"))) {
          if($this->section->subsections()) {
            $subsections = $this->section->subsections();
            $this->section = Doctrine::getTable('Section')->findOneBySiteIdAndSlug((int)$this->site->getId(), $subsections[0]->getSlug());
          }
        }
         * */
      }      
      if(in_array($this->section->Site->getSlug(), array("cocorico2","cocorico"))) {
        $this->setLayout('cocorico');   
        /*
        if (preg_match("/^172\.20\.(\d+)\.(\d+)/", $_SERVER['REMOTE_ADDR']) == 0) {
          header("location: http://www3.tvcultura.com.br/cocorico");
          die();
        }
        */
       
        if($this->section->getSlug() == "receitinhas" && $request->getParameter('teste')){
          $subsections = $this->section->subsections();
          
          if(count($subsections) > 0){
            header("Location: ".$subsections[0]->retriveUrl());
            die();
          }
        }
      }
      
      if(in_array($this->section->Site->getSlug(), array("cedoc","cedoc2"))) {
        $this->setLayout('cedoc');   
        /*
        if (preg_match("/^172\.20\.(\d+)\.(\d+)/", $_SERVER['REMOTE_ADDR']) == 0) {
          header("location: http://www3.tvcultura.com.br/cocorico");
          die();
        }
        */
      }
      if($this->site->getSlug() == "culturabrasil" || $this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1"){
        $this->setLayout('culturabrasil');
      } 
      if( ($this->site->getSlug() == "culturabrasil" && $this->section->getSlug()=="controleremoto") || ($this->section->Site->getSlug()=="culturabrasil" && $this->section->getSlug()=="widget")  || ($this->section->Site->getSlug()=="culturafm" && $this->section->getSlug()=="widget") ){
        $this->setLayout(false);
      }      
      if($this->site->getSlug() == "culturafm" && $this->section->getSlug()=="controleremoto"){
        $this->setLayout(false);
      }   

      if(($this->site->getSlug() == "culturafm")&&($this->section->getSlug()=="controle-remoto")){
        $this->setLayout(false);
      }elseif($this->site->getSlug() == "prontoatendimento"){
        if($this->section->getSlug() != "ao-vivo") {
          if(date('w') == 6 && date('H:i') >= "12:30") {
            header("Location: http://tvcultura.cmais.com.br/prontoatendimento/ao-vivo");
        die(); 
          }
       }
      }elseif($this->site->getSlug()=="controleremoto"){
        $this->setLayout(false);
      }

      if(($this->site->getSlug() == "quintaldacultura") && !$request->getParameter('force')){
        if($this->section->getSlug() == 'voceescolhe'){
            header("Location: http://cmais.com.br/quintaldacultura");
            die(); 
        }
      }
      
      if ($request->getUri() == "http://www.fpa.com.br/sic/home") {
        header('Location: http://fpa.com.br/sic');
        die();
      }
      
      // rodaviva redirect manual
      /*
      if($this->site->getSlug() == "rodaviva"){
        if (date('w H:i') > "1 22:00" && date('w H:i') < "1 23:35") {
          if ($this->section->getSlug() == "home") {
            header("Location: http://tvcultura.cmais.com.br/rodaviva/transmissao");
            die(); //aí tem gato.
          }
        }
        else {
          if ($this->section->getSlug() == "transmissao") {
            header("Location: http://tvcultura.cmais.com.br/rodaviva");
            die();
          } 
        }
      }
       */

    
      if(($this->section->Site->type == "Programa Simples")||($this->section->Site->type == "Programa TVRTB" && $this->section->getSlug() == "programacao")){
        if($this->section->getSlug() == "diario-de-programacao" || $this->section->getSlug() == "home" || $this->section->getSlug() == "homepage" || $this->section->getSlug() == "programacao"){
          if($request->getParameter('object')){
            if($request->getParameter('d') || $request->getParameter('date')){
              $this->date = $request->getParameter('d');
              if($request->getParameter('date'))
                $this->date = $request->getParameter('date');
              $start = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2) ,substr($this->date,0,4)));
              $end = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)+1 ,substr($this->date,0,4))); 
              $this->nextDate = $end;
              $this->prevDate = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)-1 ,substr($this->date,0,4)));
              if($this->site->Program->id == 111){
                $this->schedules = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Schedule s')
                  ->where('s.program_id = ?', $this->site->Program->id)
                  ->andWhere('s.channel_id = ?', 1)
                  //->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 04:59:59', $end.' 05:00:00'))
                  ->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 00:00:00', $end.' 23:59:59'))
                  ->orderBy('s.date_start asc')
                  ->limit(1)
                  ->execute();
              }
              else{
                $this->schedules = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Schedule s')
                  ->where('s.channel_id = ?', $this->site->Program->getChannelId())
                  ->andWhere('s.program_id = ?', $this->site->Program->id)
                  //->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 04:59:59', $end.' 05:00:00'))
                  ->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 00:00:00', $end.' 23:59:59'))
                  ->orderBy('s.date_start asc')
                  ->limit(1)
                  ->execute();
              }
            }
            else{
              $this->date = date("Y-m-d");
              //header("Location: ".$this->uri."/".$this->date);
              //die();
              $start = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2) ,substr($this->date,0,4)));
              $end = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)+1 ,substr($this->date,0,4))); 
              $this->nextDate = $end;
              $this->prevDate = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)-1 ,substr($this->date,0,4)));
              $next = Doctrine_Query::create()
                ->select('s.*')
                ->from('Schedule s')
                ->where('s.program_id = ?', $this->site->Program->id)
                ->andWhere('s.channel_id = ?', 1)
                ->andWhere('s.date_start > ?', date("Y-m-d"))
                ->orderBy('s.date_start asc')
                ->limit(1)
                ->execute();
              if(count($next)>0){
                $d = explode(" ",$next[0]->date_start);
                /*
                if ($d[1] < "04:59:59") { // apenas um primeiro teste. Vou melhorar isso (Cristovam)
                  $d[0] = date("Y-m-d", mktime(0,0,0, substr($next[0]->date_start,5,2), substr($next[0]->date_start,8,2)-1 ,substr($next[0]->date_start,0,4)));
                }
                */
                header("Location: ".$this->uri."/".$d[0]);
                die();
              }else{
                $prev = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Schedule s')
                  ->where('s.program_id = ?', $this->site->Program->id)
                  ->andWhere('s.date_start < ?', date("Y-m-d"))
                  ->orderBy('s.date_start desc')
                  ->limit(1)
                  ->execute();
                if(count($prev)>0){
                  $d = explode(" ",$prev[0]->date_start);
                  header("Location: ".$this->uri."/".$d[0]);
                  die();
                }
              }
            }
            $this->nextDate = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)+1 ,substr($this->date,0,4))); 
            $this->prevDate = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)-1 ,substr($this->date,0,4))); 
          }
        }
        elseif($this->section->getSlug() == "episodios"){
          if($request->getParameter('e')){
            $this->episode = Doctrine::getTable('Asset')->findOneBySlug($request->getParameter('e'))->AssetEpisode;
            $this->season = $this->episode->AssetSeason;
          }
          elseif($request->getParameter('s')){
            $this->season = Doctrine::getTable('Asset')->findOneBySlug($request->getParameter('s'))->AssetSeason;
            //$this->episode = @current($this->season->AssetSeason->AssetEpisodes);
          }else{
            $this->season = $tag = Doctrine::getTable('Asset')->findOneByAssetTypeIdAndSiteId(14, $this->site->id)->AssetSeason;
          }
          $this->episodes = $this->season->AssetEpisodes;
          if(!$this->episode)
            $this->episode = $this->episodes[0];
        }
        elseif($this->section->getSlug() == "personagens"){
          if($request->getParameter('p'))
            $this->asset = Doctrine::getTable('Asset')->findOneBySlug($request->getParameter('p'));
        }
      }

      // siteSections
      if($this->section->Site->type == "Portal" || $this->section->Site->getSlug() == "m"){
        
        if($this->section->Site->getSlug() == "cmais"){
          $this->siteSections = Doctrine_Query::create()
            ->select('s.*')
            ->from('Section s')
            ->where('s.parent_section_id = ?', $this->section->id)
            ->andWhere('s.is_active = ?', 1)
            ->andWhere('s.is_visible = ?', 1)
            ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
            ->orderBy('s.display_order')
            ->execute();
        }elseif($this->section->Site->getSlug() == "tvratimbum" && $this->section->getSlug() == "agenda"){
          if($request->getParameter('d')){
            $this->date = $request->getParameter('d');
            $this->start = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2) ,substr($this->date,0,4)));
            $this->end = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)+1 ,substr($this->date,0,4))); 
            $this->nextDate = $this->end;
            $this->prevDate = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)-1 ,substr($this->date,0,4)));
          }
          else{
            $date = date("Y-m-d");
            header("Location: ".$this->uri."/".str_replace("-","/",$date));
            die();
          }
        }else{
          $this->siteSections = Doctrine_Query::create()
            ->select('s.*')
            ->from('Section s')
            ->where('s.site_id = ?', $this->section->getSiteId())
            ->andWhere('s.is_active = ?', 1)
            ->andWhere('s.is_visible = ?', 1)
            ->andWhere('parent_section_id IS NULL')           
            ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
            ->orderBy('s.display_order')
            ->execute();
        }
        
        // category
        $this->category = Doctrine::getTable('Category')->findOneBySlug($this->section->slug);
        if(($this->category)&&($this->section->parent_section_id > 0)){
          if($request->getParameter('d')){
            if($request->getParameter('d'))
              $this->date = $request->getParameter('d');
            else
              $this->date = date("Y/m/d");
            // category assets
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, CategoryAsset ca')
              ->where('ca.category_id = ?', $this->category->id)
              ->andWhere('ca.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('a.created_at >= ? AND a.created_at <= ?', array($this->date.' 00:00:00', $this->date.' 23:59:59'))
              ->orderBy('a.id desc');
          }
          else{
            // category assets
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, CategoryAsset ca')
              ->where('ca.category_id = ?', $this->category->id)
              ->andWhere('ca.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->orderBy('a.id desc');
          }
        }
        else{
          if(in_array($this->section->slug, array("grade", "diario-de-programacao", "programacao", "guia-do-ouvinte", "controleremoto"))){
            $s = 'tvcultura';
            if($request->getParameter('c') == "univesptv")
              $s = 'univesptv';
            elseif(($request->getParameter('c') == "culturabrasil")||($this->section->Site->getSlug() == "culturabrasil"))
              $s = 'culturabrasil';
            elseif(($request->getParameter('c') == "multicultura")||($this->section->Site->getSlug() == "multicultura"))
              $s = 'multicultura';
            elseif($request->getParameter('c') == "tvratimbum")
              $s = 'tvratimbum';
            if($this->section->slug == "diario-de-programacao")
              $s = 'culturafm';
            if($this->section->Site->getSlug() == "culturabrasil" && $this->section->slug == "controleremoto")
              $s = 'culturabrasil';
            if($this->section->Site->getSlug() == "culturafm" && $this->section->slug == "controleremoto")
              $s = 'culturafm';
            if($this->section->slug == "guia-do-ouvinte")
              $s = 'culturafm';

            if($request->getParameter('d'))
              $this->date = $request->getParameter('d');
            elseif($request->getParameter('date'))
              $this->date = $request->getParameter('date');
            else{
              $this->date = date("Y-m-d");
              if($this->site->getSlug() == "tvratimbum"){
                header("Location: http://tvratimbum.cmais.com.br/grade/".date("Y-m-d"));
                die();
              }
              else if($this->site->getSlug() == "univesptv"){
                header("Location: http://univesptv.cmais.com.br/programacao/".date("Y-m-d"));
                die();
              }
              else if($this->site->getSlug() == "multicultura"){
                header("Location: http://multicultura.cmais.com.br/programacao/".date("Y-m-d"));
                die();
              }
              else if($this->site->getSlug() == "tvcultura"){
                header("Location: http://tvcultura.cmais.com.br/grade/".date("Y-m-d"));
                die();
              }
              /*
              if($this->section->Site->getSlug() == "culturabrasil" || $this->section->Site->getSlug() == "culturafm") {
                $this->date = date("Y-m-d");
              }
              else {
              */
              if($this->section->slug == "guia-do-ouvinte"){
                header("Location: http://culturafm.cmais.com.br/guia-do-ouvinte/".date("Y-m-d"));
                die();
              }

              /*
              if($this->section->slug != "controleremoto"){
                header("Location: http://tvcultura.cmais.com.br/grade/".date("Y-m-d"));
                die();
              }
              */
              //}
            }

            if($this->site->getSlug() == "tvratimbum")
              $s = 'tvratimbum';
            else if($this->site->getSlug() == "univesptv")
              $s = 'univesptv';

            $start = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2) ,substr($this->date,0,4)));
            $end = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)+1 ,substr($this->date,0,4))); 
            $this->nextDate = $end;
            $this->prevDate = date("Y/m/d", mktime(0,0,0, substr($this->date,5,2), substr($this->date,8,2)-1 ,substr($this->date,0,4)));

            $this->sChannel = Doctrine::getTable('Channel')->findOneBySlug($s);
            // schedules
            if($this->section->slug == "guia-do-ouvinte"){
              $this->schedules = Doctrine_Query::create()
              ->select('s.*')
              ->from('Schedule s')
              ->where('s.channel_id = ?', $this->sChannel->id)
              ->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 00:00:00', $start.' 23:59:59'))
              ->orderBy('s.date_start asc')
              ->limit(80)
              ->execute();
            }
            else if($this->site->getSlug() == "tvratimbum"){ 
              $this->schedules = Doctrine_Query::create()
              ->select('s.*')
              ->from('Schedule s')
              ->where('s.channel_id = ?', $this->sChannel->id)
              //->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 04:59:59', $end.' 05:00:00'))
              ->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 00:00:00', $start.' 23:59:59'))
              ->orderBy('s.date_start asc')
              ->limit(80)
              ->execute();
            }
            else{
              $this->schedules = Doctrine_Query::create()
              ->select('s.*')
              ->from('Schedule s')
              ->where('s.channel_id = ?', $this->sChannel->id)
              ->andWhere('s.date_start >= ? AND s.date_start <= ?', array($start.' 04:59:59', $end.' 05:00:00'))
              ->orderBy('s.date_start asc')
              ->limit(80)
              ->execute();
            }
          }
          else if(($this->section->slug == "videos")||($this->section->slug == "dica-de-hoje")){
            if(($request->getParameter('site_id') <= 0)&&($request->getParameter('busca') == '')){
              if($this->site->getSlug() == "penarua" || $this->site->getSlug() == "tvratimbum"){
                $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('a.is_active = ?', 1)
                ->orderBy('sa.display_order')
                ->limit(20);
              }else{
                if($request->getParameter('debug') != "")
                  print "<br>>>>OK? ".$this->section->getId();

                $this->assetsQuery = Doctrine_Query::create()
                  ->select('a.*')
                  ->from('Asset a, AssetVideo av');
                if($this->site->getId() > 1)
                  $this->assetsQuery->where('a.site_id = ?', $this->site->getId())->andWhere('av.asset_id = a.id');
                else
                  $this->assetsQuery->andWhere('av.asset_id = a.id')
                  ->andWhere("av.youtube_id != ''")
                  ->andWhere('a.is_active = 1')
                  ->andWhereIn('a.asset_type_id', array(6, 7))
                  //->groupBy('a.id')
                  ->orderBy('a.id desc')
                  ->limit(20);
              }
            }
            else if(($request->getParameter('site_id') > 0)&&($request->getParameter('busca') != '')){
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, AssetVideo av')
                ->where('av.asset_id = a.id')
                ->andWhere("av.youtube_id != ''")
                ->andWhere('a.site_id = ?', $request->getParameter('site_id'))
                ->andWhere('a.is_active = 1')
                ->andWhereIn('a.asset_type_id', array(6, 7))
                ->andWhere("a.title like '%".$request->getParameter('busca')."%' OR a.description like '%".$request->getParameter('busca')."%'")
                ->orderBy('a.created_at desc')
                ->limit(20);
            }
            else if($request->getParameter('site_id') > 0){
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, AssetVideo av')
                ->where('av.asset_id = a.id')
                ->andWhere("av.youtube_id != ''")
                ->andWhere('a.site_id = ?', $request->getParameter('site_id'))
                ->andWhere('a.is_active = 1')
                ->andWhereIn('a.asset_type_id', array(6, 7))
                ->groupBy('a.id')
                ->orderBy('a.created_at desc')
                ->limit(20);
            }
        else if($request->getParameter('busca') != ''){
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, AssetVideo av')
                ->andWhere('av.asset_id = a.id')
                ->andWhere("av.youtube_id != ''")
                ->andWhere('a.is_active = 1')
                ->andWhereIn('a.asset_type_id', array(6, 7))
                ->andWhere("a.title like '%".$request->getParameter('busca')."%' OR a.description like '%".$request->getParameter('busca')."%'")
                ->groupBy('a.id')
                ->orderBy('a.created_at desc')
                ->limit(20);
            }
      }
          else{
            if($request->getParameter('d')){
              if($request->getParameter('d'))
                $this->date = $request->getParameter('d');
              else
                $this->date = date("Y/m/d");
              // category assets
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('a.is_active = ?', 1)
                ->andWhere('a.created_at >= ? AND a.created_at <= ?', array($this->date.' 00:00:00', $this->date.' 23:59:59'))
                ->orderBy('a.id desc');
            }
            else{
              if($request->getParameter('debug') != "")
                print "<br>>>s>".$this->site_id." >>>>t>".$this->busca;
        
              if(($this->site_id > 0)&&($this->busca)){
                $this->assetsQuery = Doctrine_Query::create()
                  ->select('a.*')
                  ->from('Asset a, SectionAsset sa')
                  ->where('sa.section_id = ?', $this->section->id)
                  ->andWhere('a.is_active = 1')
                  ->andWhereIn('a.asset_type_id', array(6, 7))
                  ->andWhere("a.title like '%".$this->busca."%' OR a.description like '%".$this->busca."%'")
                  ->andWhere("a.site_id = ?", $this->site_id)
                  ->orderBy('a.created_at desc')
                  ->limit(20);
              }else{
                if( ($this->section->Site->getSlug() == "culturabrasil") && ($this->section->getSlug() == "busca") ) {
                  if($request->getParameter('term'))
                    $this->term = $request->getParameter('term');
                  
                  $deniedSections = array(1971,1991,1965,1966,1967,2540); // seções que não importam pra busca
                  
                  $programs = Doctrine_Query::create()
                    ->select('p.*')
                    ->from('Program p')
                    ->where('p.channel_id = ?', 5)
                    ->execute();
                    
                  $allowedSites[] = $this->section->Site->id; // cultura brasil entra na busca
                  $allowedSites[] = 1253; // cultura brasil entra na busca
                  foreach($programs as $p) {
                    $allowedSites[] = $p->getSiteId(); // programas do cultura brasil entram na busca
                  }
                  
                                    
                  $this->assetsQuery = Doctrine_Query::create()
                    ->select('a.*')
                    ->from('Asset a, SectionAsset sa')
                    ->where('a.id = sa.asset_id')
                    ->andWhereIn('a.site_id', $allowedSites)
                    ->andWhereNotIn('sa.section_id', $deniedSections);
                  if($this->term != "")
                    $this->assetsQuery->andWhere('a.title like ? OR a.description like ?', array('%'.$this->term.'%', '%'.$this->term.'%'));
                  $this->assetsQuery->andWhere('a.is_active = ?', 1)
                    ->orderBy('a.created_at desc');
                }
                else {
                  // section assets
                  $this->assetsQuery = Doctrine_Query::create()
                    ->select('a.*')
                    ->from('Asset a, SectionAsset sa')
                    ->where('sa.section_id = ?', $this->section->id)
                    ->andWhere('sa.asset_id = a.id');
                  if($this->site_id > 0)
                    $this->assetsQuery->andWhere('a.site_id = ?', (int)$this->site_id);
                  if($this->busca != "")
                    $this->assetsQuery->andWhere('a.title like ? OR a.description like ?', array('%'.$this->busca.'%', '%'.$this->busca.'%'));
                  $this->assetsQuery->andWhere('a.is_active = ?', 1);
                  //$this->assetsQuery->andWhere('a.date_start = IS NULL OR a.date_start > ?', date("Y-m-d H:i:s"));
                  $this->assetsQuery->orderBy('a.created_at desc');
                }
              }
            }
          }
        }
        
      }else{
        if($this->site->type == 'ProgramaRadio'){
          if( ($this->site->Program->Channel->getSlug() == "culturabrasil") || ($this->site->getSlug() == "especiais-1") ){
            $this->siteSections = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', 1124)
              ->andWhere('s.is_active = ?', 1)
              ->andWhere('s.is_visible = ?', 1)
              ->andWhere('s.parent_section_id <= 0 OR s.parent_section_id IS NULL')
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
              ->andWhere('s.parent_section_id <= 0 OR s.parent_section_id IS NULL')
              ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
              ->orderBy('s.display_order')
              ->execute();
          }
        }
        else{
          if(($this->site->Program->Channel->getSlug() == "univesptv")&&($this->site->getSlug() != "inglescommusica")&&($this->site->getSlug() != "complicacoes")&&($this->site->getSlug() != "1964")){
            $this->siteSections = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', 3)
              ->andWhere('s.is_active = ?', 1)
              ->andWhere('s.is_visible = ?', 1)
              ->andWhere('s.parent_section_id <= 0 OR s.parent_section_id IS NULL')
              ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
              ->orderBy('s.display_order')
              ->execute();
          }elseif(in_array($this->section->Site->getSlug(), array("sic","fpa","revistavitrine2","revistavitrine","radarcultura"))){
            if($this->section->Site->getSlug() == "radarcultura")
              $this->setLayout('radarcultura');
            $this->siteSections = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', $this->section->getSiteId())
              ->andWhere('parent_section_id IS NULL')
              ->andWhere('s.is_active = ?', 1)
              ->andWhere('s.is_visible = ?', 1)
              ->orderBy('s.display_order')
              ->execute();
          }else{
            $this->siteSections = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', $this->site->id)
              ->andWhere('s.is_active = ?', 1)
              ->andWhere('s.is_visible = ?', 1)
              ->andWhere('s.parent_section_id <= 0 OR s.parent_section_id IS NULL')
              ->andWhereNotIn('s.slug', array('home', 'home-page', 'homepage'))
              ->orderBy('s.display_order')
              ->execute();
          }
        }
          
        if($request->getParameter('d')){
          if($request->getParameter('d'))
            $this->date = $request->getParameter('d');
          else
            $this->date = date("Y/m/d");
            // assets
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, SectionAsset sa')
              ->where('sa.section_id = ?', $this->section->id)
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('a.created_at >= ? AND a.created_at <= ?', array($this->date.' 00:00:00', $this->date.' 23:59:59'))
              ->orderBy('a.id desc');
        }
        else{
          if(in_array($this->site->getSlug(), array("penarua","cartaozinho","maiscultura","manoseminas"))){
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, SectionAsset sa')
              ->where('sa.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"));

            if($request->getParameter('busca') != '') 
              $this->assetsQuery->andWhere("a.title like '%".$request->getParameter('busca')."%' OR a.description like '%".$request->getParameter('busca')."%'");
            if($request->getParameter('section') != '') 
              $this->assetsQuery->andWhere("sa.section_id = ?", (int)$request->getParameter('section'));
            else
              $this->assetsQuery->andWhere('sa.section_id = ?', $this->section->id);
            if($this->site->getSlug() == "penarua") 
              $this->assetsQuery->orderBy('sa.display_order');
            else
              $this->assetsQuery->orderBy('a.id desc');
          }
          elseif (in_array($this->site->getSlug(), array('rodaviva','provocacoes','metropolis'))) {

            
            if($this->section->getSlug()=="programas"){
              if($request->getParameter('ordem') == 'alfabetica') {
                $request->setParameter('ordem','a.title');
                if(!$request->getParameter('sequencia'))
                  $request->setParameter('sequencia','asc');
              }
              else if($request->getParameter('ordem') == 'cronologica') {
                $request->setParameter('ordem','ae.date_release');
                if(!$request->getParameter('sequencia'))
                  $request->setParameter('sequencia','asc');
              }
              else {
                $request->setParameter('ordem','ae.date_release');
                if (!$request->getParameter('sequencia'))
                  $request->setParameter('sequencia','desc');
              }
              $this->assetsQuery = Doctrine_Query::create()
                ->select('*')
                ->from('Asset a, AssetEpisode ae')
                ->where('a.id = ae.asset_id')
                ->andWhere('a.asset_type_id = ?', 15)
                ->andWhere('a.site_id = ?', $this->site->id)
                ->andWhere("a.title like '%" . $request->getParameter('palavra') . "%' OR a.description like '%" . $request->getParameter('palavra') . "%'")
                ->andWhere('ae.date_release >= ?', $request->getParameter('de') ? $request->getParameter('de') : '0')
                ->andWhere('ae.date_release <= ?', $request->getParameter('ate') ? $request->getParameter('ate') : '99999999')
                ->andWhere('a.is_active = ?', 1)
                ->groupBy('a.id')
                ->orderBy($request->getParameter('ordem') . " " . $request->getParameter('sequencia'));   
            }
            else{
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
                //->andWhere('a.date_start <= ? AND a.date_end >= ?', array(date("Y/m/d H:i:s"), date("Y/m/d H:i:s")))
                ->andWhere('a.is_active = ?', 1)
                ->orderBy('a.id desc');
            }
          }
          else {
            if ($this->site->getSlug() == "reportereco" && $this->section->getSlug() == "videos") {
              $relatedAssets = Doctrine_Query::create()
                ->select('ra.parent_asset_id')
                ->from('RelatedAsset ra, Asset a2, AssetVideo av')
                ->where('ra.asset_id = a2.id')
                ->andWhere('a2.asset_type_id = ?', 6)
                ->andWhere('a2.site_id = ?', $this->site->getId())
                ->andWhere('av.asset_id = a2.id')
                ->andWhere('av.youtube_id != ""')
                ->groupBy('ra.parent_asset_id')
                ->execute();
              
              foreach($relatedAssets as $ra)
                $related[] = $ra->parent_asset_id;
              
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('a.asset_type_id = ?', 1)
                ->andWhere('a.is_active = ?', 1)
                ->andWhereIn('a.id',$related);
              if($request->getParameter('busca') != '')
                $this->assetsQuery->andWhere("a.title like '%".$request->getParameter('busca')."%' OR a.description like '%".$request->getParameter('busca')."%'");               
              $this->assetsQuery->orderBy('a.created_at desc');
            }
            else if(in_array($this->site->getSlug(), array("cultura-jazz","estudio-cultura", "espirais", "brasilis", "novos-acordes", "super-8", "paralelos", "master-class", "manha-cultura", "entrelinhas-fm", "entrelinhas-1", "cd-da-semana", "arquivo-vivo", "interprete","radiometropolis", "diario-da-manha","de-volta-pra-casa", "pianissimo"))){
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('a.site_id = ?', $this->site->getId())
                ->andWhere('a.id = sa.asset_id')
                ->andWhere('sa.section_id = ?', $this->section->id)
                ->andWhere('a.is_active = ?', 1);
                
                if($this->section->getSlug() == "programas-na-integra"){
                  $this->assetsQuery->andWhere('a.asset_type_id = ?', 4);
                }else{
                  $this->assetsQuery->andWhere('a.asset_type_id = ?', 1);
                }
                
                $this->assetsQuery->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"));
                
                if($this->site->getSlug() == "entrelinhas-1" || $this->section->getSlug() == "programas-na-integra"  || $this->site->getSlug() == "entrelinhas-fm")
                  $this->assetsQuery->orderBy('sa.display_order');
                else
                  $this->assetsQuery->orderBy('a.created_at DESC');
            }
            else if(in_array($this->site->getSlug(), array("cocorico","cocorico2")) && in_array($this->section->getSlug(), array("episodios","bastidores","erros-de-gravacao","series"))) {
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, AssetVideo av, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('av.asset_id = a.id')
                ->andWhere('av.youtube_id != ""')
                ->andWhere('a.is_active = ?', 1)
                //->orderBy('a.created_at desc');
                ->orderBy('sa.display_order asc');
            }
      
            
            else if(in_array($this->site->getSlug(), array("cocorico","cocorico2")) && in_array($this->section->getSlug(), array("convidados"))) {
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('a.is_active = ?', 1);
              if($request->getParameter('busca') != '')
                $this->assetsQuery->andWhere("a.title like '%".$request->getParameter('busca')."%'");               
              else if($request->getParameter('letra-cocorico') != '')
                //die("1");
                $this->assetsQuery->andWhere("a.title like '".$request->getParameter('letra-cocorico')."%'");               
              //$this->assetsQuery->orderBy('a.created_at desc');
              $this->assetsQuery->orderBy('sa.display_order asc');
            }
            else if($this->site->getSlug() == "jornaldacultura" && $this->section->getSlug() == "videos") {
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, AssetVideo av, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('av.asset_id = a.id')
                ->andWhere('av.youtube_id != ""')
                ->andWhere('a.is_active = ?', 1);
              if($request->getParameter('busca') != '')
                $this->assetsQuery->andWhere("a.title like '%".$request->getParameter('busca')."%'");               
              $this->assetsQuery->orderBy('av.bitrate desc');
            }
            elseif( ($this->site->Program->Channel->getSlug() == 'culturabrasil') && (in_array($this->section->getSlug(), array('home', 'home-page', 'homepage'))) ) {
              $arquivo[] = "arquivo";
              if($this->section->subsections()) {
                foreach($this->section->subsections() as $s) {
                  $arquivo[] = $s->getSlug();
                }
              }
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa, Section s')
                ->where('sa.section_id = s.id')
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('a.site_id = ?', $this->site->id)
                ->andWhereIn('s.slug', $arquivo)
                ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
                ->andWhere('a.is_active = ?', 1)
                ->orderBy('a.created_at desc');
            }
            
            elseif( ($this->site->getSlug() == 'especiais-1') && (in_array($this->section->getSlug(), array('home', 'home-page', 'homepage'))) ) {
               
              $siteAssets = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('a.id = sa.asset_id')
                ->andWhere('a.asset_type_id = ?', 1)
                ->andWhere('a.site_id = ?', 1253)
                ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
                ->andWhere('a.is_active = ?', 1)
                ->orderBy('sa.updated_at DESC')
                ->limit(180)
                ->execute();
            
              $assetIds = array();
              $listedSections = array();
              
              foreach($siteAssets as $a) {
                $currentAssetSections = array();
                foreach($a->getSections() as $s) {
                  $currentAssetSections[] = $s->getSLug();
                }
                if ( (in_array('home', $currentAssetSections)) ) {
                  $assetIds[] = $a->getId();
                }
                foreach($currentAssetSections as $c) {
                  if( (!in_array($c, $listedSections)) && (!in_array($a->getId(), $assetIds)) ) {
                    $assetIds[] = $a->getId();
                    $listedSections[] = $c;
                  }
                }
              }
              //die(implode(",",$assetIds));
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('a.id = sa.asset_id')
                ->andWhere('a.asset_type_id = ?', 1)
                ->andWhere('a.site_id = ?', 1253)
                ->andWhere('a.is_active = ?', 1)
                ->andWhereIn('a.id', $assetIds)
                ->orderBy('a.updated_at DESC');
            }
            else {
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('sa.section_id = ?', $this->section->id)
                ->andWhere('sa.asset_id = a.id')
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
                ->andWhere('a.is_active = ?', 1);
              if($request->getParameter('busca') != '')
                $this->assetsQuery->andWhere("a.title like '%".$request->getParameter('busca')."%' OR a.description like '%".$request->getParameter('busca')."%'");               
              if((in_array($this->section->Site->getSlug(), array("revistavitrine", "revistavitrine2")) && $this->section->getSlug() == "online") || ($this->site->getId() == 295)&&($this->section->id == 893) || ($this->site->getId() == 282)&&($this->section->id == 778) || ($this->site->getId() == 1217)&&($this->section->id == 2438) || $this->site->Program->getIsACourse())
                $this->assetsQuery->orderBy('sa.display_order');
              else if(($this->site->getId() == 1218)&&($this->section->id == 2428))
                $this->assetsQuery->orderBy('sa.display_order desc');
              else if(($this->site->getId() == 1149)&&($this->section->id == 2133))
                $this->assetsQuery->orderBy('a.id desc');
              else if(($this->site->getId() == 1135)&&($this->section->id == 2355))
                $this->assetsQuery->orderBy('a.title asc');
              else if(($this->site->getSlug() == "bossamoderna")  && ($this->section->getSlug() == "arquivo"))
                $this->assetsQuery->orderBy('sa.display_order desc');     
              else
                $this->assetsQuery->orderBy('a.created_at desc');
            }
          }
        }
      }

      if($this->section->Site->getSlug() == "radarcultura" && $this->section->getSlug() == "musicas"){
        
        if($request->getParameter('buscam')!=""){
          
          $this->busca_radar = $request->getParameter('buscam');

          /*
          $this->assetsQuery = Doctrine_Query::create()
            ->select('a.title')
            ->from('Asset a')
            ->where('title LIKE ?', '%'.$request->getParameter('buscam').'%')
            ->andWhere('description LIKE ?', 'Por %')
            ->andWhere('site_id = 189')
            ->orderBy('a.description');
          
          $countQuery = Doctrine_Query::create()
            ->select('COUNT(DISTINCT description) as description')
            ->from('Asset a')
            ->where('title LIKE ?', '%'.$request->getParameter('buscam').'%')
            ->andWhere('description LIKE ?', 'Por %')
            ->andWhere('site_id = 189')
            ->fetchArray();
          */
          
          $this->assetsQuery = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset sa')
            ->where('sa.section_id = ?', $this->section->id)
            ->andWhere('sa.asset_id = a.id')
            ->andWhere('a.is_active = ?', 1)
            ->andWhere('title LIKE ?', '%'.$request->getParameter('buscam').'%');

          $countQuery = Doctrine_Query::create()
            ->select('COUNT(DISTINCT description) as description')
            ->from('Asset a, SectionAsset sa')
            ->where('sa.section_id = ?', $this->section->id)
            ->andWhere('sa.asset_id = a.id')
            ->andWhere('a.is_active = ?', 1)
            ->andWhere('title LIKE ?', '%'.$request->getParameter('buscam').'%');

        }
        elseif($request->getParameter('letter')!=""){
  
          $this->letter = $request->getParameter('letter');
          
          if($this->letter == "#"){  
          
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.title')
              ->from('Asset a, SectionAsset sa')
              ->where('slug REGEXP ?', '^[0-9].*-por-.*$')
              ->andWhere('sa.section_id = ?', $this->section->id)
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->orderBy('a.title');
              //->orderBy('a.description');

            $countQuery = Doctrine_Query::create()
              ->select('COUNT(DISTINCT description) as description')
              ->from('Asset a, SectionAsset sa')
              ->where('slug REGEXP ?', '^[0-9].*-por-.*$')
              ->andWhere('sa.section_id = ?', $this->section->id)
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->orderBy('a.title');
              //->orderBy('a.description');

            /*
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.title')
              ->from('Asset a')
              ->where('slug REGEXP ?', '^[0-9].*-por-.*$')
              //->where('slug LIKE ?', $request->getParameter('letter').'%-por-'.$request->getParameter('artista'))
              ->andWhere('site_id = 189')
              ->orderBy('a.description');
  
            $countQuery = Doctrine_Query::create()
              ->select('COUNT(DISTINCT description) as description')
              ->from('Asset a')
              ->where('slug REGEXP ?', '^[0-9].*-por-.*$')
              //->where('slug LIKE ?', $request->getParameter('letter').'%-por-'.$request->getParameter('artista'))
              ->andWhere('site_id = 189')
              ->fetchArray();
            */
  
          }
          else{
            
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.title')
              ->from('Asset a, SectionAsset sa')
              ->where('sa.section_id = ?', $this->section->id)
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('slug LIKE ?', $request->getParameter('letter').'%-por-%')
              ->orderBy('a.title');
  
            $countQuery = Doctrine_Query::create()
              ->select('COUNT(DISTINCT description) as description')
              ->from('Asset a, SectionAsset sa')
              ->where('sa.section_id = ?', $this->section->id)
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('slug LIKE ?', $request->getParameter('letter').'%-por-%')
              ->orderBy('a.title');
              
            /*
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.title')
              ->from('Asset a')
              ->where('slug LIKE ?', $request->getParameter('letter').'%-por-%')
              ->andWhere('site_id = 189')
              ->orderBy('a.description');
  
            $countQuery = Doctrine_Query::create()
              ->select('COUNT(DISTINCT description) as description')
              ->from('Asset a')
              ->where('slug LIKE ?', $request->getParameter('letter').'%-por-%')
              ->andWhere('site_id = 189')
              ->fetchArray();
            */
  
          }
        }else{

          $this->assetsQuery = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset sa')
            ->where('sa.section_id = ?', 1952)
            ->andWhere('sa.asset_id = a.id')
            ->orderBy('a.title');
          
          /*
          $this->assetsQuery = Doctrine_Query::create()
            ->select('a.title')
            ->from('Asset a')
            ->where('slug LIKE ?', '%-por-%')
            ->andWhere('site_id = 189')
            ->orderBy('a.title');

          $countQuery = Doctrine_Query::create()
            ->select('COUNT(title) as description')
            ->from('Asset a')
            ->where('slug LIKE ?', '%-por-%')
            ->andWhere('site_id = 189')
            ->fetchArray();
          */

        }

      }
      else if($this->section->Site->getSlug() == "radarcultura" && $this->section->getSlug() == "artistas"){
  
        if($request->getParameter('buscaa')!=""){
          
          $this->busca_radar = $request->getParameter('buscaa');

          $this->assetsQuery = Doctrine_Query::create()
            ->select('DISTINCT description as description')
            ->from('Asset a')
            ->where('description LIKE ?', 'Por '.$request->getParameter('buscaa').'%')
            ->andWhere('site_id = 189')
            ->orderBy('a.description');
  
          $countQuery = Doctrine_Query::create()
            ->select('COUNT(DISTINCT description) as description')
            ->from('Asset a')
            ->where('description LIKE ?', 'Por '.$request->getParameter('buscaa').'%')
            ->andWhere('site_id = 189')
            ->fetchArray();

        }
        elseif($request->getParameter('artista')){
          
          $aux = Doctrine_Query::create()
            ->select('a.description as description')
            ->from('Asset a')
            ->where('slug LIKE ?', '%-por-'.$request->getParameter('artista'))
            ->andWhere('site_id = 189')
            ->orderBy('a.description')
            ->fetchOne();
  
          if($aux["description"] != ""){
            $this->artist = @end(explode("Por ", $aux["description"]));
          }
          
          // ARTISTA musicas
  
          if($request->getParameter('letter')!=""){
  
            $this->letter = $request->getParameter('letter');
            
            if($this->letter == "#"){
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.title')
                ->from('Asset a')
                ->where('slug REGEXP ?', '^[0-9].*$')
                //->where('slug LIKE ?', $request->getParameter('letter').'%-por-'.$request->getParameter('artista'))
                ->andWhere('site_id = 189')
                ->orderBy('a.description');
    
              $countQuery = Doctrine_Query::create()
                ->select('COUNT(DISTINCT description) as description')
                ->from('Asset a')
                ->where('slug REGEXP ?', '^[0-9].*$')
                //->where('slug LIKE ?', $request->getParameter('letter').'%-por-'.$request->getParameter('artista'))
                ->andWhere('site_id = 189')
                ->fetchArray();

            }
            else{
              $this->assetsQuery = Doctrine_Query::create()
                ->select('a.title')
                ->from('Asset a')
                ->where('slug LIKE ?', $request->getParameter('letter').'%-por-'.$request->getParameter('artista'))
                ->andWhere('site_id = 189')
                ->orderBy('a.description');
    
              $countQuery = Doctrine_Query::create()
                ->select('COUNT(DISTINCT description) as description')
                ->from('Asset a')
                ->where('slug LIKE ?', $request->getParameter('letter').'%-por-'.$request->getParameter('artista'))
                ->andWhere('site_id = 189')
                ->fetchArray();

            }

          }else{
            
            //die('2');
  
            //die("<br>".$request->getParameter('artista'));
  
            $this->assetsQuery = Doctrine_Query::create()
              ->select('a.title')
              ->from('Asset a, Section s, SectionAsset sa')
              ->where('a.slug LIKE ?', '%-por-'.$request->getParameter('artista').'%')
              ->andWhere('a.site_id = 189')
              ->andWhere('sa.section_id = s.id')
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('sa.section_id = 1952')
              ->groupBy('sa.asset_id')
              ->orderBy('a.title');
            
            /*
            foreach($this->assetsQuery->fetchArray() as $d){
              echo "<br>".$d["title"]; 
            }
            die();
            */
            
            $countQuery = Doctrine_Query::create()
              ->select('COUNT(title) as description')
              ->from('Asset a')
              ->where('slug LIKE ?', '%-por-'.$request->getParameter('artista'))
              ->andWhere('site_id = 189')
              ->fetchArray();
  
          }
          
        }
        else{
          
          // ARTISTAS
  
          if($request->getParameter('letter')!=""){
            
            $this->letter = $request->getParameter('letter');
            
            if($this->letter == "#"){
              $this->assetsQuery = Doctrine_Query::create()
                ->select('DISTINCT description as description')
                ->from('Asset a')
                ->where('description REGEXP ?', '^Por [0-9].*$')
                //->where('description LIKE ?', 'Por '.$request->getParameter('letter').'%')
                ->andWhere('site_id = 189')
                ->orderBy('a.description');
    
              $countQuery = Doctrine_Query::create()
                ->select('COUNT(DISTINCT description) as description')
                ->from('Asset a')
                ->where('description REGEXP ?', '^Por [0-9].*$')
                //->where('description LIKE ?', 'Por '.$request->getParameter('letter').'%')
                ->andWhere('site_id = 189')
                ->fetchArray();
            }else{
              $this->assetsQuery = Doctrine_Query::create()
                ->select('DISTINCT description as description')
                ->from('Asset a')
                ->where('description LIKE ?', 'Por '.$request->getParameter('letter').'%')
                ->andWhere('site_id = 189')
                ->orderBy('a.description');
    
              $countQuery = Doctrine_Query::create()
                ->select('COUNT(DISTINCT description) as description')
                ->from('Asset a')
                ->where('description LIKE ?', 'Por '.$request->getParameter('letter').'%')
                ->andWhere('site_id = 189')
                ->fetchArray();
            }
  
          }else{
            $this->assetsQuery = Doctrine_Query::create()
              ->select('DISTINCT description as description')
              ->from('Asset a')
              ->where('description LIKE ?', 'Por %')
              ->andWhere('site_id = 189')
              ->orderBy('a.description');
              
            $countQuery = Doctrine_Query::create()
              ->select('COUNT(DISTINCT description) as description')
              ->from('Asset a')
              ->where('description LIKE ?', 'Por %')
              ->andWhere('site_id = 189')
              ->fetchArray();
              
          }
           
        }

      }


    if($this->site->getSlug() == "pedroebianca"){
      $this->assetsQuery = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->where('sa.asset_id = a.id')
        ->andWhere('a.is_active = ?', 1);
      if($request->getParameter('busca') != '') 
        $this->assetsQuery->andWhere("a.title like '%".$request->getParameter('busca')."%' OR a.description like '%".$request->getParameter('busca')."%'");
      if($request->getParameter('section') != '') 
        $this->assetsQuery->andWhere("sa.section_id = ?", (int)$request->getParameter('section'));
      else
        $this->assetsQuery->andWhere('sa.section_id = ?', $this->section->id);
      $this->assetsQuery->orderBy('sa.display_order');
      $test = $this->assetsQuery->execute();
    }    

      // program
      $this->program = $this->site->Program;
      // main site
      $this->mainSite = Doctrine::getTable('Site')->findOneBySlug('cmais');
      
      // blocks
      //$bs = $this->section->Blocks;
      //$bs = Doctrine::getTable('Block')->findBySectionId($this->section->getId());
      $bs = Doctrine_Query::create()
        ->select('b.*')
        ->from('Block b')
        ->where('b.section_id = ?', $this->section->getId())
        ->orderBy('b.display_order')
        ->execute();
      $displays = array();
      if(count($bs) > 0){
        foreach($bs as $b){
          $displays[$b->getSlug()] = $b->retriveDisplays();
          if($request->getParameter('debug') != "")
            print "<br>>>>".$b->getSlug()." - ".$b->getid()." - ".$b->getItems()." >>displays> ".count($displays[$b->getSlug()]);
        }
      }
      if(!isset($displays['alerta'])){
        $block = Doctrine::getTable('Block')->findOneById(210);
        if($block)
          $displays['alerta'] = $block->retriveDisplays();
      }
      $this->displays = $displays;
      unset($displays); unset($bs); 
    }

    if($request->getParameter('section_id'))
      $this->section_id = $request->getParameter('section_id');
    if($request->getParameter('site_id'))
      $this->site_id = $request->getParameter('site_id');

    $sectionSlug = $this->section->getSlug();
    
    if($this->section->Site->getSlug() == "segundatela") {
      /*
      if($this->section->getSlug() != "jornaldacultura")
        $sectionSlug = 'offline';
      else
        $sectionSlug = 'jornaldacultura';
      if($this->section->getSlug() == "08-04-2013")
        $sectionSlug = 'jornaldacultura';
      */
      $this->date = @end(explode("/", $this->url));
       
      $program =  str_replace("-offline","",$sectionSlug);
      $this->url_json = "http://cmais.com.br/portal/js/segundatela/log/".$program."-".$this->date.".json";
      $this->json = file_get_contents($this->url_json);
      $this->json_result = array_reverse(json_decode($this->json));
    }
    
    if($this->site->slug == 'tvcultura' && $this->section->slug == "homepage"){
      if($request->getParameter('test') == "1")
        echo "<br><h1>ASDF</h1><br>";
      $this->tvcultura = Doctrine_Query::create()
        ->select('s.*')
        ->from('Schedule s')
        ->where('s.is_important = ?', 1)
        ->andWhere('s.date_start >= ?', date('Y-m-d H:i:s'))
        ->andWhere('s.channel_id = ?', 1)
        ->orderBy('s.date_start asc')
        ->limit(5)
        ->execute();
    }
    
    if($this->site->slug == 'culturafm'){
      if(in_array($sectionSlug, array('fale-conosco','faleconosco','contato')))
        $sectionSlug = 'contact';
      if(in_array($sectionSlug, array('home-page','homepage','home')))
        $sectionSlug = 'index';
      if(in_array($sectionSlug, array('diario-de-programacao')))
        $sectionSlug = 'grade';
    }
    elseif(in_array($sectionSlug, array('home','homepage','home-page','diario-de-programacao'))){
      if($this->site->type == "Programa Infantil"){
        $sectionSlug = 'programa';
        if($request->getParameter('p'))
          $this->character = Doctrine::getTable('Asset')->findOneBySlug($request->getParameter('p'));
      }
      else
        $sectionSlug = 'index';
    }
    elseif(in_array($sectionSlug, array('noticias','linha-do-tempo'))){
      if($this->section->Parent->getSlug() == "arte-e-cultura")
        $sectionSlug = "subsection";
      else
        $sectionSlug = 'list';
    }
    elseif(in_array($sectionSlug, array('sobre','entrevistadores','entrevistados')))
      $sectionSlug = 'asset';
    elseif((in_array($sectionSlug, array('equipe','apresentadores','personagens'))) && ($this->site->slug != 'cocorico' && $this->site->slug != 'cocorico2') && ($this->site->slug != 'vila-sesamo' && $this->site->slug != 'vilasesamo'))
      $sectionSlug = 'team';
    elseif(in_array($sectionSlug, array('fotos')))
      $sectionSlug = 'imagens';
    elseif(in_array($sectionSlug, array('fale-conosco','faleconosco','contato','contate-o-nucleo')))
      $sectionSlug = 'contact';
    elseif(in_array($sectionSlug, array('aovivo','ao-vivo')))
      $sectionSlug = 'live';
    elseif(in_array($sectionSlug, array('programas-a-z')))
      $sectionSlug = 'programas-de-a-z';
    #elseif(in_array($sectionSlug, array('programacao')))
    #  $sectionSlug = 'grade';

    if($this->site->slug == 'cocorico' || $this->site->slug == 'cocorico2'){
      if($this->section->Parent->getSlug() == "personagens"){
        $sectionSlug = "personagem";
      }
      else if($this->section->getSlug() == "receitinhas" || $this->section->getSlug() == "joguinhos" || $this->section->getSlug() == "papel-de-parede" || $this->section->getSlug() == "para-colorir"){
        $this->favoritos = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('sa.section_id = ?', $this->section->id)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('sa.display_order')
          ->limit(3)
          ->execute();
      }
    }

    if($sectionSlug == 'contate-o-nucleo')
      $sectionSlug = 'contact';

    if($this->site->getSlug() == "m" && $sectionSlug == 'list')
      $sectionSlug = 'noticias';

    if(in_array($this->section->getSlug(), array('infantil')))
      $this->setLayout(false);

    if($this->site->slug == 'quintaldacultura'){
      if(($sectionSlug == 'todos')||($sectionSlug == 'todas')||($sectionSlug == 'tudo')){
       /* if($this->section->Parent->getSlug() == "imagens")
          $sectionSlug = "imagem";
        elseif($this->section->Parent->getSlug() == "baixar")
          $sectionSlug = "baixar-content";
       elseif($this->section->Parent->getSlug() == "jogos")
          $sectionSlug = "jogosSubsection";
        else*/
       if($this->section->Parent->getSlug() == "jogos")
          //$sectionSlug = "jogosSubsection";
          $sectionSlug = "jogos";
     elseif($this->section->Parent->getSlug() == "videos")
          $sectionSlug = "videos";
     elseif($this->section->Parent->getSlug() == "diversao")
          $sectionSlug = "diversao";     
        else
          //$sectionSlug = substr($this->section->Parent->getSlug(),0,strlen($this->section->Parent->getSlug())-1);
    $sectionSlug = "index";  
      }else{
        //if(in_array($sectionSlug, array('desafio','esportes','habilidade','educativos','aventura','peixonauta')))
        
        if($this->section->Parent->slug == "jogoss")
          $sectionSlug = 'jogosSubsection';
        elseif(in_array($sectionSlug, array('artes','brincadeiras','receitas','experiencia')))
          $sectionSlug = 'diversao';
        elseif(in_array($sectionSlug, array('paracolorir','para-colorir','colorir')))
          $sectionSlug = 'diversaor';
        elseif(in_array($sectionSlug, array('papel-de-parede','folhinha','toque-para-celular','carinhas')))
          $sectionSlug = 'diversao';
        elseif($sectionSlug == 'videos'){
          if($request->getParameter('s')>0){
            $sectionSlug = 'video';
            $this->s = Doctrine::getTable('Site')->findOneById($request->getParameter('s'));
          }
        }
        elseif($sectionSlug == 'imagens'){
          if($request->getParameter('s')>0){
            $sectionSlug = 'diversao';
            $this->s = Doctrine::getTable('Site')->findOneById($request->getParameter('s'));
          }
        }

    if($this->site->slug == 'quintaldacultura'){
      
      if($this->section->slug == 'jogos')    $sections_list = array(92, 98, 99, 100, 101, 102);
      if($this->section->slug == 'videos')   $sections_list = array(93, 940, 941, 942, 943, 952, 3169, 3170, 3171, 3172, 3173, 3174, 3175, 3176);
      if($this->section->slug == 'diversao') $sections_list = array(3163, 3164, 97, 104, 105, 106, 107, 127, 765, 764, 762);
      //if($this->section->slug == 'agenda') $sections_list = array(1000);
      
      if($this->section->Parent->slug == 'jogos') $sections_list = array($this->section->id);
      if($this->section->Parent->slug == 'videos') $sections_list = array($this->section->id);
      if($this->section->Parent->slug == 'diversao') $sections_list = array($this->section->id);
      
      
      if($request->getParameter('search')) $this->term = $request->getParameter('search');
      
      if(count(@$sections_list) >= 1){
         $this->assetsQuery = Doctrine_Query::create()
              ->select('a.*');
              
            if($this->section->Parent->slug == 'videos' || $this->section->slug == 'videos'){
          $this->assetsQuery->from('Asset a, SectionAsset sa, AssetVideo av')
          ->whereIn('sa.section_id', $sections_list)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('av.youtube_id != ""')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('a.id desc');
            }else{
              $this->assetsQuery
                ->from('Asset a, SectionAsset sa')
              ->whereIn('sa.section_id', $sections_list)
              ->andWhere('sa.asset_id = a.id')
          ->andWhere('a.is_active = ?', 1)
          ->orderBy('rand()');
            }
            //if($this->term != "")
              //$this->assetsQuery->andWhere('a.title like ? OR a.description like ?', array('%'.$this->term.'%', '%'.$this->term.'%'));
                
      } 
        
    }


      }
      if(!in_array($sectionSlug, array('team','desenhos','diretrizes-pedagogicas','sobre-o-quintal-da-cultura','publico-alvo'))){ 
        $this->setLayout(false);
      }
    }
    elseif($this->site->slug == 'maiscrianca'){
      if(in_array($sectionSlug, array('recadinhos'))){ 
        $this->setLayout(false);
      }
    }
    elseif($this->site->slug == 'm'){
      $this->setLayout(false);
    }
    elseif($this->site->slug == 'sic'){
      $this->setLayout(false);
    }
    // mail sender
    $email_site = $this->section->getContactEmail();
    if(isset($email_site)) {
      if(($request->getParameter('captcha'))||($request->getParameter('email'))||($request->getParameter('mande-seu-tema'))||($this->section->getSlug()=='participe')||($this->section->getSlug()=='ideias-mirabolantes')||($this->section->getSlug()=='tvcocorico')||($this->section->getSlug()=='piadas')||($this->site->getSlug() == "tvcocorico")||($this->section->getSlug() == "cadastrodeestagiario")||($this->site->getSlug() == "qss" && $this->section->getSlug() == "home") || ($this->site->getSlug() == "maiscrianca") ||  ($this->section->getSlug() == "jornalismo") || ($this->site->getSlug() == "culturabrasil" && $this->section->getSlug() == "selecao-do-ouvinte")){
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

          if ($this->site->getSlug() == "maiscrianca" && $request->getParameter('ferias'))
            $this->section = Doctrine::getTable('Section')->findOneBySlugAndSiteId("ferias", $this->site->id);

          $email_site = $this->section->getContactEmail();
          
          //NOVO JORNALISMO
          if($this->section->id == "3285"){
            if($request->getParameter('programa') == "jcprimeiraedicao") $email_site = "crjc-primeira@tvcultura.com.br";
            if($request->getParameter('programa') == "jcdebate")         $email_site = "crparticipejcd@tvcultura.com.br";
            if($request->getParameter('programa') == "jornaldacultura")  $email_site = "crjcultura@tvcultura.com.br";
            if($request->getParameter('programa') == "cartaoverde")   $email_site = "cartao@tvcultura.com.br";
            if($request->getParameter('programa') == "rodaviva")      $email_site = "perguntas.rodaviva@gmail.com";
            if($request->getParameter('programa') == "reportereco")   $email_site = "";
            if($request->getParameter('programa') == "materiadecapa") $email_site = "";
            if($request->getParameter('pergunta2')!=""){
              header("Location: ".$_SERVER["HTTP_REFERER"]."?error=1");
              die();
            }
          }elseif(in_array($this->section->id, Array("921", "2129"))){
            if($request->getParameter('pergunta2')!="" || $request->getParameter('campo_de_email')!="" || $request->getParameter('email_verify')!="" || $request->getParameter('teste_contato')!=""){
              header("Location: ".$_SERVER["HTTP_REFERER"]."?error=1");
              die();
            }
          }
          
          $email_user = strip_tags($request->getParameter('email'));
          $nome_user = strip_tags($request->getParameter('nome'));
          
          //if(strpos($_SERVER['HTTP_REFERER'], $_SERVER['SERVER_NAME']) > 0) {
            // verifica se o servidor que ta o formulario é o mesmo que o chamou, se for um ataque de injeção de dados este valor será diferente
            ini_set('sendmail_from', $email_site);
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
            
            //echo($email_site.', ['.$this->site->getTitle().']['.$this->section->getTitle().'] '.$nome_user.' <'.$email_user.'>, '.stripslashes(nl2br($msg)).', '.$cabecalho);
            //die();
            
            if(mail($email_site, '['.$this->site->getTitle().']['.$this->section->getTitle().'] '.$nome_user.' <'.$email_user.'>', stripslashes(nl2br($msg)), $cabecalho)){
              //die("1");
              header("Location: ".$_SERVER["HTTP_REFERER"]."?success=1");
            }
            else {
              //die("0");
              header("Location: ".$_SERVER["HTTP_REFERER"]."?error=1");
            }
            die();
          /*
          }
          else {
            header("Location: http://cmais.com.br");
            die();
          }
          */
        }
      }
    }

    //if($this->site->type == "Programa Infantil")
      //$this->setLayout(false);
    
    //metas
    /*
    if(($sectionSlug == 'videos')&&($this->site->getId() == 1)){
      $vid1 = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, AssetVideo av')
        ->where('a.id = av.asset_id')
        ->andWhere('a.is_active = 1')
        ->andWhere('a.asset_type_id = 6')
        ->andWhere("av.youtube_id != ''")
        ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
        ->limit(1)
        ->orderBy('a.id desc')
        ->fetchOne();
      if($vid1){
        $title = $vid1->Site->getTitle().' - '.$vid1->getTitle().' - cmais+ O portal de conteúdo da Cultura';
        //header("Location: ".$vid1->retriveUrl());
        //die();
      }
    }
    else */
    
    if($sectionSlug != 'index')
      $title = $this->site->getTitle().' - '.$this->section->getTitle().' - cmais+ O portal de conteúdo da Cultura';
    else{
      if($this->site->getTitle() != 'cmais+')
        $title = $this->site->getTitle().' - cmais+ O portal de conteúdo da Cultura';
      else
        $title = 'cmais+ O portal de conteúdo da Cultura';
    }
    
    if(!isset($title)) $title = 'cmais+ O portal de conteúdo da Cultura';
    
    if($this->section->getDescription() != "")
      $description = $this->section->getDescription().' - cmais+ O portal de conteúdo da Cultura';
    else
      $description = $this->site->getDescription().' - cmais+ O portal de conteúdo da Cultura';
    
    $keywords = 'cultura, educacao, infantil, jornalismo';
    if($this->section->keywords != ""){
      foreach(explode(",",$this->section->keywords) as $k){
        $keywords .= ', '.trim($k);
      }
    }
    
    if($this->site->getSlug() == "culturabrasil" || $this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1"){
      if($this->site->getSlug() == "culturabrasil"){
        $title = $this->site->getTitle()." - Portal de Música Brasileira";
      }else{
        $title = "Cultura Brasil - ". $this->site->getTitle();  
      }
      $description = $this->site->getDescription();
      if($this->site->getDescription() == ""){
        $description = "Portal de música brasileira da Rádio Cultura Brasil";
      }
      
      if($this->section->keywords != ""){
        $keywords = '';
        foreach(explode(",",$this->section->keywords) as $k){
          $keywords .= ', '.trim($k);
        }
      }else{
        $keywords = "musica, musica brasileira, radio cultura, radio cultura brasil, playlist";  
      }      
    }
      
   $this->getResponse()->setTitle($title, false);
   $this->getResponse()->addMeta('description', $description);
   $this->getResponse()->addMeta('keywords', $keywords);

   $this->getResponse()->addMetaProp('og:title', $title);
   
    if(in_array($this->site->getType(), array('Programa Simples','Programa')))
      $this->getResponse()->addMetaProp('og:type', 'tv_show');
    else
      $this->getResponse()->addMetaProp('og:type', 'website');
    $this->getResponse()->addMetaProp('og:description', $description);
    
    $this->getResponse()->addMetaProp('og:url', $this->uri);
    $this->getResponse()->addMetaProp('og:site_name', 'cmais+');
    
    if($this->site->getSlug() == "radarcultura"){
      $this->getResponse()->addMetaProp('og:description', $title." ".$description);
      $og_image = 'http://radarcultura.cmais.com.br/portal/images/capaPrograma/radarcultura/logo-radar-novo.png';
    }else{
      if($this->site->Program->getImageLive() != "")
        $og_image = 'http://midia.cmais.com.br/programs/'.$this->site->Program->getImageLive();
      elseif($this->site->Program->getImageThumb() != "")
        $og_image = 'http://midia.cmais.com.br/programs/'.$this->site->Program->getImageThumb();
      elseif($this->site->getImageThumb() != "")
        $og_image = 'http://midia.cmais.com.br/programs/'.$this->site->getImageThumb();
      else
        $og_image = 'http://cmais.com.br/portal/images/logoCMAIS.jpg';
  
      if($this->site->getSlug() == "socrates")
        $og_image = 'http://midia.cmais.com.br/assets/image/image-2/ede959d3d1ebe912bb45850f59c92b07f243837a.jpg';
      
      if($this->site->getSlug() == "culturabrasil" || $this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1"){
        if($og_image == "http://cmais.com.br/portal/images/logoCMAIS.jpg"){
          $og_image = "http://midia.cmais.com.br/programs/2cc51003abe67b67284933012d9558611c68c17e.jpg";
        }
      }
    }
    
    $this->getResponse()->addMetaProp('og:image', $og_image);    

    // pagination
    if($sectionSlug == 'recadinhos'){
      $this->assetsQuery = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a')
        ->where('a.category_id = ?', 24)
        ->orderBy('a.id desc');
      $pagelimit = 4;
    }
    elseif($sectionSlug == 'vocesabia')
      $pagelimit = 15;
    elseif(($sectionSlug == 'index')&&($this->site->getSlug()=="deupaulanatv"))
      $pagelimit = 1;
    elseif(($sectionSlug == 'programas')&&($this->site->getSlug()=="rodaviva"))
      $pagelimit = 9;
    elseif(($sectionSlug == 'blog')&&($this->site->getSlug()=="univesptv"))
      $pagelimit = 2;
    elseif(($sectionSlug == 'videos')&&($this->site->getSlug()=="univesptv")||($this->site->getSlug() == "castelo" && $sectionSlug == "episodios"))
      $pagelimit = 12;
    elseif(($sectionSlug == 'blog')&&($this->site->getSlug()=="cartaoverde"))
      $pagelimit = 1;
    elseif(($sectionSlug == 'blog')&&($this->site->getSlug()=="guiadodia"))
      $pagelimit = 3;
    elseif(($this->site->Program->Channel->getSlug()=="univesptv" || $this->site->Program->Channel->getSlug()=="univesp-tv-copy")&&($this->site->getType() != "Portal")){
      if($this->section->getSlug() != "home"){
        if($request->getParameter('debug') != "")
          echo ">>>>>>disciplina";
        $this->assetsQuery = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('sa.section_id = ?', $this->section->id)
          ->andWhere('sa.asset_id = a.id')
          ->orderBy('sa.display_order');
        if($request->getParameter('busca') != '')
          $this->assetsQuery->andWhere("a.title like '%".$request->getParameter('busca')."%' OR a.description like '%".$request->getParameter('busca')."%'");               
        if(($this->site->getSlug() != "inglescommusica")&&($this->site->getSlug() != "complicacoes")||($this->site->getSlug() == "1964"))
          $this->assetsQuery->limit(60);
      }
      else{
        if($request->getParameter('debug') != "")
          echo ">>>>>>não disciplina";
        if(count($this->section->getAssets()) > 0){
          $this->assetsQuery = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a, SectionAsset sa')
            ->where('sa.section_id = ?', $this->section->id)
            ->andWhere('sa.asset_id = a.id')
            ->orderBy('sa.display_order')
            ->limit(60);
        }else{
          $this->assetsQuery = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a')
            ->where('a.site_id = ?', (int)$this->site->getId())
            ->orderBy('a.created_at asc')
            ->limit(60);
        }
      }
      $pagelimit = 1;
      if(($this->site->getSlug() == "inglescommusica")||($this->site->getSlug() == "complicacoes")||($this->site->getSlug() == "1964"))
        $pagelimit = 9;
            
    }
    if($this->section->Site->getSlug() == "radarcultura") {
      if($this->section->getSlug() == "playlists")
        $pagelimit = 20;
      else if($this->section->getSlug() == "musicas")
        $pagelimit = 20;
    }
    if($this->section->Site->getSlug() == "quintaldacultura") {
      if($this->section->getSlug() == "todos" || $this->section->getSlug() == "jogos" || $this->section->Parent->slug == "jogos" || $this->section->getSlug() == "videos" || $this->section->getSlug() == "diversao")
        $pagelimit = 18;
    }
    if($this->site->Program->Channel->getSlug() == "tvratimbum") {
        if($this->section->getSlug() == "homepage")
          $pagelimit = 1;
        else
          $pagelimit = 60;
    }
    if($this->site->getSlug() == "educacaoemdia")
      $pagelimit = 3;
    if($this->site->getSlug() == "1964" && $this->section->getSlug() == "linha-do-tempo"){
      header('Content-type: application/json');
      $pagelimit = 99;
      $this->setLayout(false);
    }
    if($this->site->getSlug() == "qualidade" && $this->section->getSlug() == "linha-do-tempo"){
      header('Content-type: application/json');
      $pagelimit = 99;
      $this->setLayout(false);
    }     
    
    if(!isset($pagelimit))
      $pagelimit = 9;

    if(isset($this->assetsQuery)){
      //if ($this->site->Program->getIsACourse() && !in_array($this->site->getSlug(), array("pedagogia-unesp","evs","licenciatura-em-ciencias"))) {
      if ($this->site->Program->getIsACourse()) {
        $this->assets = $this->assetsQuery->execute();
      }
      else if($this->section->Site->getSlug() == "radarcultura" && $this->section->getSlug() == "artistas"){
        
        if($request->getParameter('artista')){
          $this->section = Doctrine::getTable('Section')->findOneBySlugAndSiteId("musicas", $this->site->id);
          $sectionSlug = "musicas";
        }
        
        $pagelimit = 60;
        $this->pager = new sfDoctrinePager('', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->pager->setNbResults($countQuery[0]["description"]);
        $this->pager->setLastPage(ceil($countQuery[0]["description"]/$pagelimit));
        $this->page = $request->getParameter('page');
      }
      else if(($this->site->getSlug() == "cocorico2")||($this->site->getSlug() == "cocorico")){
        $pagelimit = 12;
        
        if (in_array($this->section->getSlug(), array("receitinhas","imprima-e-brinque")))
          $pagelimit = 73;

        $this->pager = new sfDoctrinePager('Asset', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->page = $request->getParameter('page');
      }
      else{
        $this->pager = new sfDoctrinePager('Asset', $pagelimit);
        $this->pager->setQuery($this->assetsQuery);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
        $this->page = $request->getParameter('page');
      }
    }
    
    if($this->section->Site->getSlug() == "sic") {
      if($this->pager->count() == 1){
        header("Location: ".$this->pager->getCurrent()->retriveUrl());
        die();
      } 
    } 
    if($this->section->Site->getSlug() == "central-de-relacionamento") {
      if($this->pager->count() == 1){
        header("Location: ".$this->pager->getCurrent()->retriveUrl());
        die();
      } 
    } 
    
    if(($this->site->Program->Channel->getSlug() == "univesptv")&&($this->site->getSlug() == "pedagogia-unesp")){
      //$t = explode("-old", $this->section->Site->getSlug());
      /*
      if($_REQUEST["debug"]==1){
        echo $this->section->Site->getSlug();
      }
      */
      /*
      if((count($t) > 1)&&($_REQUEST["test"]!=1)){
        header("Location: ".$t[0]);
        die();
      }
      */
    }
    $debug = false;
    if($request->getParameter('debug') != ""){
      print "<br>Site>>".$this->site->id;
      print "<br>Seasons>>".count($this->seasons);
      print "<br>Assets: ".count($this->pager);
      print "<br>Site Sections: ".count($this->siteSections);
      print "<br>section: ".$this->section->getSlug();
      print "<br>section: ".$sectionSlug;
      print "<br>section: ".$this->section->getId();
      print "<br>page: ".$request->getParameter('page');
      print "<br>page-limit: ".$pagelimit;
      print "<br>schedules: ".count($this->schedules);
      print "<br>page limit: ".$pagelimit;
      $debug = true;

      echo sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php';
    }
    
    if($this->site->id == 1229){
      $this->assets = Doctrine::getTable('Asset')->findBySiteId(1229);
    }
    
    if($sectionSlug == 'juvenil'){
      if($request->getParameter('test') == ""){
        header("Location: http://cmais.com.br");
        die();
      }
    }
    
    $this->ipad = false;
    if(strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
      $this->ipad = true;
    }

    if(isset($this->category) && ($this->section->Parent->id > 0)){
      
      if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
        if($debug) print "<br1>>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
      }else{
        $parentSection = $this->section->getParent();
        //if($this->site->getSlug()=="univesptv-copy" && $parentSection->getSlug() == "cursos") {
        if($this->site->getSlug()=="univesptv" && $parentSection->getSlug() == "cursos") {
          if($debug) print "<br>2-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/cursosTodos';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/cursosTodos');
        }
        else {
          $parentSection = $this->section->getParent();
          if($this->site->getSlug()=="culturafm" && $parentSection->getSlug() == "colunistas") {
            if($debug) print "<br>2-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionColunista';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionColunista');
          }
          else if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$parentSection->getSlug().'Success.php')){
            if($debug) print "<br>2-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$parentSection->getSlug().'Success.php';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$parentSection->getSlug());
          }
          else {
            if($debug) print "<br>2000000>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
          }
        }
      }
    }
    elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
      if($this->site->getSlug() == "radarcultura" && $this->section->slug == "playlist") {
        if($debug) print "<br>3-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/playlists';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/playlists');
      }
      elseif($this->site->getSlug() == "culturabrasil" && $this->section->slug == "busca") {
        if($debug) print "<br>3-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/busca';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/busca');
      }
      else {
        if($debug) print "<br>3-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
      }
    }
    elseif($this->section->Parent->id > 0){
      if($this->site->getType() == "Hotsite" || $this->site->getType() == 1 || $this->site->getSlug() == "quintaldacultura"){
        $parentSection = $this->section->getParent();
        if(in_array($this->site->getSlug(), array("vilasesamo"))) {
          $this->setLayout("vilasesamo");
          if($parentSection->getSlug() == "personagens") {
            if($debug) print "<br>4-4-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/personagem';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/personagem');          
          }
          elseif($parentSection->getSlug() == "categorias") {
            if($debug) print "<br>4-4-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/categoria';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/categoria');          
          }
          elseif($parentSection->getSlug() == "campanhas") {
            if($debug) print "<br>4-4-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/campanha';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/campanha');          
          }
          else {
            if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
              if($debug) print "<br>4-4-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');          
            }
          }
        }
        else if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$parentSection->getSlug().'Success.php')){
          if($debug) print "<br>4-0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$parentSection->getSlug().'Success.php';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$parentSection->getSlug());
        }
        elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
          if($debug) print "<br>4-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
        }
        elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->section->Parent->getSlug().'Success.php')){
          if($debug) print "<br>4-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->section->Parent->getSlug();
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->section->Parent->getSlug());
        }
        elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
          if($debug) print "<br>4-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
        }
        else{
          if($debug) print "<br>4-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$sectionSlug);
        }
      }
      elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
        if($debug) print "<br>5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
      }
      elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
        if($debug) print "<br>222222222222>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
      }
      elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$sectionSlug.'Success.php')){
        if($debug) print "<br>6>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$sectionSlug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$sectionSlug);
      }
      elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$sectionSlug.'Success.php')){
        if($debug) print "<br>7>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$sectionSlug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$sectionSlug);
      }
      else{
        if(in_array($this->site->getSlug(), array("cocorico","cocorico2"))){
          if ($this->section->Parent->slug == "concurso-cultural") {
            if($debug) print "<br>8-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/concurso-cultural';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/concurso-cultural');
          }
          elseif ($this->section->Parent->slug == "receitinhas") { 
            if($debug) print "<br>8-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinhas-especiais';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/receitinhas-especiais');
          }
          else {
            if($debug) print "<br>8-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/subsection';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/subsection');
          }
        }
        else {
          if($debug) print "<br>8>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/subsection';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/subsection');
        }
      }
    }
    else{
      if($this->site->getType() == "Hotsite" || $this->site->getType() == 1){
        if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
          if($debug) print "<br>9-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
        }else{
          if(in_array($this->site->getSlug(), array("vilasesamo"))) {
            $parentSection = $this->section->getParent();
            if($parentSection->getSlug() == "personagens") {
              if($debug) print "<br>9-2-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/personagem';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/personagem');          
            }
            elseif($parentSection->getSlug() == "categorias") {
              if($debug) print "<br>9-2-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/categoria';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/categoria');          
            }
            elseif($parentSection->getSlug() == "campanhas") {
              if($debug) print "<br>9-2-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/campanha';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/campanha');          
            }
            else {
              if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
                if($debug) print "<br>9-2-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');          
              }
            }
          }
          else {
            if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$sectionSlug.'Success.php')){
              if($debug) print "<br>9-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$sectionSlug;
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/'.$sectionSlug);
            }
            else{
              if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->section->getSlug().'Success.php')){
                if($debug) print "<br>9-4>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->section->getSlug();
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$this->section->getSlug());
              }
              elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
                if($debug) print "<br>9-5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
              }
              else{
                if($debug) print "<br>9-6>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/subsection';
                $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultHotsite/subsection');
              }
            }
          }
        }
      }
      elseif($this->site->getType() == "Portal" || $this->site->getType() == 2){
        if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
          if($debug) print "<br>10-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
        }elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
          if($debug) print "<br>10-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
        }elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/'.$sectionSlug.'Success.php')){
          if($debug) print "<br>10-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/'.$sectionSlug);
        }else{
          if($sectionSlug == "grade"){
            if($this->site->getSlug()=="tvratimbum"){
              if($debug) print "<br>10-41>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/grade';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/grade');
            }else{
              if($debug) print "<br>10-42>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/cmais/grade';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/cmais/grade');
            }
          }
          elseif($sectionSlug == "programas-de-a-z"){
            if($debug) print "<br>10-5>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/cmais/programas-de-a-z';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/cmais/programas-de-a-z');
          }
          else{
            if($debug) print "<br>10-6>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/subsection';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPortal/subsection');
          }
        }
      }
      elseif($this->site->getType() == "Programa" || $this->site->getType() == 3){
        if($this->site->Program->Channel->getSlug()=="univesptv"){
          /*
          if(in_array($this->site->getSlug(), array("pedagogia-unesp","evs","licenciatura-em-ciencias"))){
            if($debug) print "<br>3.0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/cursoAntigo';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/cursoAntigo');
          }
          */
          if(($this->site->getSlug() == "inglescommusica")||($this->site->getSlug() == "complicacoes")){
            if($debug) print "<br>3.01>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
          }
          else{
            if($this->site->Program->getIsACourse()){
              if($debug) print "<br>3.0>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/curso';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/curso');
            }
            else{
              if($debug) print "<br>3.1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/programa';
              $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/univesptv/programa');
            }
          }
        }        
        elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
          if($debug) print "<br>11-a>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
        }elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
          if($debug) print "<br>11-b>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
        }elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$sectionSlug.'Success.php')){
          if($debug) print "<br>11-c>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/'.$sectionSlug);
        }else{
          if($debug) print "<br>11-d>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/subsection';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultPrograma/subsection');
        }
      }
      elseif($this->site->getType() == "ProgramaRadio"){
        if($this->site->Program->Channel->getSlug() == "culturabrasil" || $this->site->getSlug() == "especiais-1") {
          
          if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
            if($debug) print "<br>13-a>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
          }elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
            if($debug) print "<br>13-b>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
          }else{
            if($debug) print "<br>13-d>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/culturabrasil/subsection';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/culturabrasil/subsection');
          }
        }
        elseif(in_array($this->site->getSlug(), array("cultura-jazz","estudio-cultura", "espirais", "brasilis", "novos-acordes", "super-8", "paralelos", "master-class","manha-cultura", "entrelinhas-fm", "entrelinhas-1", "cd-da-semana", "arquivo-vivo", "interprete","radiometropolis", "diario-da-manha", "de-volta-pra-casa", "cultura-agora", "metropolitan", "pianissimo"))){

          if($debug) print "<br>13-e>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/index-new';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/index-new'); 
        }
        else {
          if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug.'Success.php')){
            if($debug) print "<br>13-f>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug;
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/'.$sectionSlug);
          }elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsectionSuccess.php')){
            if($debug) print "<br>13-g>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/'.$this->site->getSlug().'/subsection');
          }elseif(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$sectionSlug.'Success.php')){
            if($debug) print "<br>13-h>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$sectionSlug;
            $this->setTemplate(sfConfig::get('sf_app_template_dir').  DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/'.$sectionSlug);
          }else{
            if($debug) print "<br>13-i>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/subsection';
            $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaRadio/subsection');
          }
        }
      }
      elseif($this->site->getType() == "Programa Infantil" || $this->site->getType() == 5){
        if($debug) print "<br>12-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/maiscrianca/'.$sectionSlug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/maiscrianca/'.$sectionSlug);
      }
      elseif($this->site->getType() == "Programa TVRTB"){
        if($debug) print "<br>14-1>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/programas/'.$sectionSlug;
        $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/tvratimbum/programas/'.$sectionSlug);
      }
      elseif($this->site->getType() == "Programa Simples" || $this->site->getType() == 4){

if($this->section->id == 809){
$this->assetsQuery = Doctrine_Query::create()
->select('a.*')
->from('Asset a, SectionAsset sa')
->where('sa.section_id = ?', 809)
->andWhere('sa.asset_id = a.id')
->andWhere('a.is_active = ?', 1);

$this->pager = new sfDoctrinePager('Asset', 9);
$this->pager->setQuery($this->assetsQuery);
$this->pager->setPage($request->getParameter('page', 1));
$this->pager->init();
$this->page = 1;
}

        if(is_file(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$sectionSlug.'Success.php')){
          if($debug) print "<br>12-2>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$sectionSlug;
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/'.$sectionSlug);
        }
        else{
          if($debug) print "<br>12-3>>".sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/subsection';
          $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'sites/defaultProgramaSimples/subsection');
        }
      }
    } 
  
  }

  public function executeArtista(sfWebRequest $request){
    echo $request->getParameter('param1');      
  }

  public function slugfy($string){
    $text = preg_replace('~[^\\pL\d]+~u', '-``', $string);
    // trim
    $text = trim($text, '-');
    // transliterate
    if (function_exists('iconv'))
    {
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }
    // lowercase
    $text = strtolower($text);
    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    if (empty($text))
    {
      $text = 'n-a';
    }
    
    $slug = $text;
    return str_replace(" ", "", $slug);
  }


  
}
