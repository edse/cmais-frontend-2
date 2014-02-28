<?php

/**
 * main actions.
 *
 * @package    astolfo
 * @subpackage main
 * @author     Emerson Estrella
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    if(($request->getHost() == "nucleodevideosp.com.br")||($request->getHost() == "www.nucleodevideosp.com.br")||($request->getHost() == "www.nucleodevideosp.cmais.com.br")){
      header("Location: http://nucleodevideosp.cmais.com.br");
      die();
    }

    if(($request->getHost() == "multicultura.com.br")||($request->getHost() == "www.multicultura.com.br")){
      header("Location: http://multicultura.cmais.com.br");
      die();
    }
    
    if(($request->getHost() == "fpa.com.br")||($request->getHost() == "www.fpa.com.br")){
      //die('123');
      $this->getRequest()->setParameter('object', $this->site = Doctrine::getTable('Site')->findOneBySlug("sic"));
      $this->forward('_site', 'index');
    }
    
    $subdomain = @current(explode(".", $request->getHost()));
    
    //subdomain
    if($request->getParameter('s')!="")
      $subdomain = $request->getParameter('s');

    if(!in_array($subdomain, array('tvcultura','tvratimbum','culturabrasil','culturafm','univesptv','multicultura','nucleodevideosp','m','radarcultura','fpa.com.br')))
      $subdomain = 'cmais';

    $this->getRequest()->setParameter('object', $this->site = Doctrine::getTable('Site')->findOneBySlug($subdomain));
    $this->forward('_site', 'index');
    
  }

 /**
  * Executes search action
  *
  * @param sfRequest $request A request object
  */
  public function executeSearch(sfWebRequest $request)
  {
    $this->term = $request->getParameter('term');
    $this->filter = $request->getParameter('filter');
    if($request->getParameter('site_id')>0)
      $this->search_site = Doctrine::getTable('Site')->findOneById($request->getParameter('site_id'));
    
    if($this->term==""){
      $this->term = "ver todo o conteúdo";
    $this->verify = true;
  }
  
    if($this->term) {
      //$this->assets = Doctrine_Core::getTable('Asset')->getForLuceneQuery($query);
      //$this->query = Doctrine_Core::getTable('Asset')->getQueryFromLucene($this->term);
      //$this->query = Doctrine_Core::getTable('Asset')->getQueryFromLucene($this->term);
      
      $type_id = 0;
      if($this->filter != ""){
        if($this->filter == "content")
          $type_id = 1;
        elseif($this->filter == "image")
          $type_id = 2;
        elseif($this->filter == "audio")
          $type_id = 4;
        elseif($this->filter == "video")
          $type_id = 6;
        elseif($this->filter == "program")
          $type_id = 100;
      }
      
      if($this->term == "ver todo o conteúdo"){
        if($type_id > 0){
          $this->query = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a')
            ->where('a.is_active = 1')
            ->andWhere("a.asset_type_id = ?", $type_id)
            ->orderBy('a.created_at desc')
            ->limit(1000);
        }
        elseif($type_id == 100){
          $this->query = Doctrine_Query::create()
            ->select('p.*')
            ->from('Program p')
            ->where('p.is_active = ?', 1)
            ->orderBy('p.title')
            ->limit(1000);
        }
        else{
          $this->query = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a')
            ->where('a.is_active = 1')
            ->andWhereIn('a.asset_type_id', array(1, 2, 3, 4, 5, 6, 7))
            ->orderBy('a.created_at desc')
            ->limit(1000);
        }
      }
      elseif($type_id > 0){
        if($type_id == 100){
          $this->query = Doctrine_Query::create()
            ->select('p.*')
            ->from('Program p')
            ->where('p.is_active = ?', 1)
            ->andWhere("p.title like '%".$this->term."%' OR p.description like '%".$this->term."%'");
            $this->query->orderBy('p.title')->limit(100);
        }
        else{
          $this->query = Doctrine_Query::create()
            ->select('a.*')
            ->from('Asset a')
            ->where('a.is_active = 1')
            ->andWhere("a.asset_type_id = ?", $type_id)
            ->andWhere("a.title like '%".$this->term."%' OR a.description like '%".$this->term."%'");
            if($this->search_site)
              $this->query->andWhere("a.site_id = ?", $this->search_site->getId());
            $this->query->orderBy('a.created_at desc')->limit(20);
        }
      }else{
        $this->query = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a')
          ->where('a.is_active = 1')
          ->andWhereIn('a.asset_type_id', array(1, 2, 3, 4, 5, 6, 7))
          ->andWhere("a.title like '%".$this->term."%' OR a.description like '%".$this->term."%'");
          if($this->search_site)
            $this->query->andWhere("a.site_id = ?", $this->search_site->getId());
          $this->query->orderBy('a.created_at desc')->limit(20);
      }

      // title
      $this->getResponse()->setTitle('cmais+ O portal de conteúdo da Cultura', false);

      // pagination
      if(isset($this->query)){
        $items = 10;
        if($this->term == "ver todo o conteúdo")
          $items = 100;
        if($type_id == 100){
          $items = 100;
          $this->pager = new sfDoctrinePager('Program', $items);
        }
        else
          $this->pager = new sfDoctrinePager('Asset', $items);
        $this->pager->setQuery($this->query);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
      }

    }
    
    // URI
    $this->uri = $request->getUri();
    // URL
    $this->url = @current(explode('?',$this->uri));
    // main site
    $this->mainSite = Doctrine::getTable('Site')->findOneBySlug('cmais');
    $this->site = $this->mainSite;
    $this->type_id = $type_id;
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

    if(!$this->term)
      $this->getResponse()->setTitle('cmais+ O portal de conteúdo da Cultura', false);
    else
      $this->getResponse()->setTitle('Resultado de busca para "'.$this->term.'" cmais+ O portal de conteúdo da Cultura', false);
  
  if($this->term == "ver todo o conteúdo" && !$this->verify)
    $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'/tudo');
  else
    $this->setTemplate(sfConfig::get('sf_app_template_dir').DIRECTORY_SEPARATOR.'/search');
  }

 /**
  * Executes parse action
  *
  * @param sfRequest $request A request object
  */
  public function executeParse(sfWebRequest $request)
  {    
    //subdomain
    $subdomain = @current(explode(".", $request->getHost()));
    $param1 = FALSE; $param2 = FALSE; $param3 = FALSE; $param4 = FALSE; $param5 = FALSE; $param6 = FALSE;
    
    if(in_array($subdomain, array('tvcultura','tvratimbum','culturabrasil','culturafm','univesptv','multicultura','cmais','nucleodevideosp','m','radarcultura','fpa'))){
      $param1 = $subdomain;
      if($request->getParameter('param1')) $param2 = $request->getParameter('param1');
      if($request->getParameter('param2')) $param3 = $request->getParameter('param2');
      if($request->getParameter('param3')) $param4 = $request->getParameter('param3');
      if($request->getParameter('param4')) $param5 = $request->getParameter('param4');
      if($request->getParameter('param5')) $param6 = $request->getParameter('param5');
    }else{
      if($request->getParameter('param1')) $param1 = $request->getParameter('param1');
      if($request->getParameter('param2')) $param2 = $request->getParameter('param2');
      if($request->getParameter('param3')) $param3 = $request->getParameter('param3');
      if($request->getParameter('param4')) $param4 = $request->getParameter('param4');
      if($request->getParameter('param5')) $param5 = $request->getParameter('param5');
    }
    if(!$param1)
      $this->forward('main', 'index');
    elseif(($param1 == "tudo")||($param2 == "tudo")||($param1 == "busca")||($param2 == "busca") && $param1 != "culturabrasil")
      $this->forward('main', 'search');
    elseif(($param1 == "criancasdobrasil")||($param1 == "criancas-do-brasil")){
      header("Location: http://tvcultura.com.br/criancasdobrasil");
      die();
    }
    elseif((($param1 == "cartao")||($param2 == "cartao"))&&($subdomain == "cmais" || $subdomain == "tvcultura")){
      header("Location: http://tvcultura.cmais.com.br/cartaoverde");
      die();
    }
    elseif(($param1 == "quintal")||($param1 == "quintal-da-cultura")){
      header("Location: http://cmais.com.br/quintaldacultura");
      die();
    }
    elseif(($param1 == "cmais")&&($param2 == "segundatela")&&($param3 == "jornaldacultura")&&($param4 != "")){
      $date = date("d-m-Y");
      if($param4 == $date){
        //$section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1188, "online");
        $section = $this->site = Doctrine::getTable('Section')->findOneById(2331);
      }else{
        //$section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1188, "offline");
        $section = $this->site = Doctrine::getTable('Section')->findOneById(2330);
      }
      $this->getRequest()->setParameter('object', $section);
      $this->forward('_section', 'index');
      die();
    }
    elseif(($param1 == "cmais")&&($param2 == "segundatela")&&($param3 == "rodaviva")&&($param4 != "")){
      $date = date("d-m-Y");
      if($param4 == $date){
        //$section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1188, "online");
        $section = $this->site = Doctrine::getTable('Section')->findOneById(2371);
      }else{
        //$section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1188, "offline");
        $section = $this->site = Doctrine::getTable('Section')->findOneById(2373);
      }
      $this->getRequest()->setParameter('object', $section);
      $this->forward('_section', 'index');
      die();
    }
    elseif(($param1 == "cmais")&&($param2 == "segundatela")&&($param3 == "cartaoverde")&&($param4 != "")){
      $date = date("d-m-Y");
      if($param4 == $date){
        //$section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1188, "online");
        $section = $this->site = Doctrine::getTable('Section')->findOneById(2374);
      }else{
        //$section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1188, "offline");
        $section = $this->site = Doctrine::getTable('Section')->findOneById(2375);
      }
      $this->getRequest()->setParameter('object', $section);
      $this->forward('_section', 'index');
      die();
    }
    elseif($param1 == "culturabrasil"){
      if($param2 == "especiais"){
        if($param3 == "") {
          $section = $this->site = Doctrine::getTable('Section')->findOneById(2578);
          $this->getRequest()->setParameter('object', $section);
          $this->forward('_section', 'index');
          die();
        }
        else {
          if($param4 == "") {
            $parm3Object = $this->parse($param3);
            if(get_class($parm3Object) == "Section") {
              $section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug(1253, $param3);
              $this->getRequest()->setParameter('object', $section);
              $this->forward('_section', 'index');
              die();
            }
            elseif(get_class($parm3Object) == "Asset") {
              $asset = $this->site = Doctrine::getTable('Asset')->findOneBySlug($param3);
              $this->getRequest()->setParameter('object', $asset);
              $this->forwardObject($asset);
              die();
            }
          }
          else {
            $asset = $this->site = Doctrine::getTable('Asset')->findOneBySlug($param4);
            $this->getRequest()->setParameter('object', $asset);
            $this->forwardObject($asset);
            die();
          }
        }
      }

      $parm2Object = $this->parse($param2);
      if(get_class($parm2Object) == "Site" && $param2 != "selecao-do-ouvinte") {
        $url = "http://culturabrasil.cmais.com.br/programas/$param2";
        if($param3)
          $url = "http://culturabrasil.cmais.com.br/programas/$param2/$param3";
        if($param4)
          $url = "http://culturabrasil.cmais.com.br/programas/$param2/$param3/$param4";
        header("Location: ".$url);
        die();
      }
      
      if($param2 == "programas" && $param3 != "") {
        $site = $this->site = Doctrine::getTable('Site')->findOneBySlug($param3);
        $section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, "arquivo");
        
        if ($param4 == "") {
          $this->getRequest()->setParameter('object', $section);
          $this->forward('_section', 'index');
          die();
        }
        else {
          if($param5 == "") {
            $section = $this->site = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, $param4);
            if($section->slug) {
              if($section->slug != "arquivo") {
                $this->getRequest()->setParameter('object', $section);
                $this->forward('_section', 'index');
                die();
              }
              else
                header("Location: http://culturabrasil.cmais.com.br/programas/" . $param3);
                die();
            }
            else
              $this->forward404();
          }
          else {          
            $asset = $this->site = Doctrine::getTable('Asset')->findOneBySlug($param5);
            $this->getRequest()->setParameter('object', $asset);
            $this->forwardObject($asset);
            die();
          }
          
        }
      }
    }
    if(($request->getHost() == "fpa.com.br")||($request->getHost() == "www.fpa.com.br")){
      if($param1 == "fpa")
        $param1 = "sic";
      if($param2 == "sic"){
        $param2 = $param3;
        $param3 = null;
      }
      
      //$param1 = $param2;
      //$param2 = $param3;
      //$param3 = null;
      //die('123');
    }

    if($request->getParameter('debug') != ""){
      echo "<br>param1) ".$param1;
      echo "<br>param2) ".$param2;
      echo "<br>param3) ".$param3;
    }

    $parm1Object = $this->parse($param1);
    if($parm1Object){
      if($request->getParameter('debug') != "")
        print "<br>1main: 1>>".$param1." - ".get_class($parm1Object).">>".$parm1Object->id.">>>".$param2;
      if(!$param2){
        if($request->getParameter('debug') != "")
          print "<br>forwardObject >>".$param1;
        $this->forwardObject($parm1Object);
      }
      else{
        $parm2Object = $this->parseWithObject($param2, $parm1Object);
        if($request->getParameter('debug') != "")
          print "<br>parseWithObject >>".$param2." - ".$param1;
        if($parm2Object){
          if($request->getParameter('debug') != "")
            print "<br>main: 2>>".get_class($parm2Object).">>".$parm2Object->id;
          if(!$param3)
            $this->forwardObject($parm2Object);
          else{
            if ($parm1Object->slug == "m") {
              $this->getRequest()->setParameter('object', $parm2Object);
              $this->forward('_section', 'index');
            }/*
            if ($parm1Object->slug == "culturabrasil") {
              $this->getRequest()->setParameter('object', $parm2Object);
              $this->forward('_section', 'index');
            }*/
            $parm3Object = $this->parseWithObject($param3, $parm2Object);
            if($parm3Object){
              if($request->getParameter('debug') != "")
                print "<br>main: 3>>".get_class($parm3Object).">>".$parm3Object->id;
              if(!$param4)
                $this->forwardObject($parm3Object);
              else{
                $parm4Object = $this->parseWithObject($param4, $parm3Object);
                if($parm4Object){
                  if($request->getParameter('debug') != "")
                    print "<br>main: 4>>".get_class($parm4Object).">>".$parm4Object->id;
                  if(!$param5)
                    $this->forwardObject($parm4Object);
                  else{
                    $parm5Object = $this->parse($param5);
                    if($parm5Object){
                      if($request->getParameter('debug') != "")
                        print "<br>main: 5>>".get_class($parm5Object).">>".$parm5Object->id;
                      if(!$param6)
                        $this->forwardObject($parm5Object);
                      else{
                        $parm6Object = $this->parse($param6);
                        if($parm6Object){
                          if($request->getParameter('debug') != "")
                            print "<br>main: 6>>".get_class($parm6Object).">>".$parm6Object->id;
                          $this->forwardObject($parm6Object);
                        }
                      }
                    }
                    else
                      $this->forward404();
                  }
                }
                else
                  $this->forward404();
              }
            }
            else{
              if(get_class($parm2Object) == "Site") {
                if($parm2Object->type == "Programa Simples"){
                  $this->getRequest()->setParameter('date', $param3);
                  $this->forwardObject($parm2Object);
                }
              }
              else if(get_class($parm2Object) == "Section") {
                
                if(in_array($parm2Object->slug, array("grade", "programacao", "guia-do-ouvinte"))){
                  $this->getRequest()->setParameter('date', $param3);
                  $this->forwardObject($parm2Object);
                }
                else if($parm2Object->slug == "artistas"){
                  $this->getRequest()->setParameter('artista', $param3);
                  $this->forwardObject($parm2Object);
                }
                else if($parm2Object->slug == "musicas"){
                  $this->getRequest()->setParameter('letter', $param3);
                  $this->forwardObject($parm2Object);
                }
                                
              }
              $this->forward404();
            }
          }
        }
        else{
          $this->forward404();
        }
      }
    }
    else{
      if($request->getParameter('erro') != "")
        throw new sfException("Erro");
      else
        $this->forward404();
    }
  }

 /**
  * Parse object
  *
  * @param Array $string
  */
  private function parseWithObject($string, $object){
    if(($string != "") && ($object->id > 0)){
      if(get_class($object) == "Section"){
        // #3 Look for an Asset
        $this->asset = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('sa.section_id = ?', $object->id)
          ->andWhere('sa.asset_id = a.id')
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('a.slug = ?', (string)$string)
          ->fetchOne();
        /*
        $this->asset = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a')
          ->where('a.site_id = ?', (int)$object->Site->id)
          ->andWhere('a.slug = ?', (string)$string)
          ->orderby('a.id desc')
          ->fetchOne();
        */
        if($this->asset)
          return $this->asset;
        else{
          // #3b Look for a Section
          $this->section = Doctrine_Query::create()
          ->select('s.*')
            ->from('Section s')
            ->where('s.parent_section_id = ?', (int)$object->id)
            ->andWhere('s.slug = ?', (string)$string)
            ->orderby('s.id desc')
            ->fetchOne();
          if($this->section)
            return $this->section;
          else
            return false;
        }
      }elseif(get_class($object) == "Site"){
        if($object->getType()=="Portal"){
          if($string == "grade"){
            $this->section = Doctrine_Query::create()
              ->select('s.*')
              ->from('Section s')
              ->where('s.site_id = ?', (int)$object->id)
              ->andWhere('s.slug = ?', (string)$string)
              ->orderby('s.id desc')
              ->fetchOne();
            if($this->section)
              return $this->section;
          }else{
            $this->site = Doctrine_Query::create()
              ->select('s.*')
              ->from('Site s')
              ->where('s.slug = ?', (string)$string)
              ->andWhere('s.is_active = 1')
              ->orderby('s.id desc')
              ->fetchOne();
            if($this->site){
              if(($this->site->type != "Hotsite")&&($this->site->type != "Portal")){

                $programa = Doctrine_Query::create()
                  ->select('p.*')
                  ->from('Program p')
                  ->where('p.slug = ?', (string)$this->site->slug)
                  ->andWhere('p.is_active = 1')
                  ->orderby('p.id desc')
                  ->fetchOne();

                //$programa = Doctrine::getTable('Program')->findOneBySlug($this->site->slug);
                if(!$programa){
                  $programa = Doctrine_Query::create()
                    ->select('p.*')
                    ->from('Program p, Site s')
                    ->where('s.id = ?', (int)$this->site->id)
                    ->andWhere('p.site_id = s.id')
                    ->orderby('p.id desc')
                    ->fetchOne();
                }
                if($programa){
                  if($programa->Channel->slug == $object->slug)
                    return $this->site;
                  else{
                    if($programa->Channel->slug != "")
                      header("Location: http://".$programa->Channel->slug.".cmais.com.br/".$this->site->slug);
                    else{
                      $this->getRequest()->setParameter('object', $programa->Site);
                      $this->forward('_site', 'index');
                      //header("Location: http://cmais.com.br/".$this->site->slug);
                    }
                    die();
                  }
                }
              }
              return $this->site;
            }
          }
        }
        // #2 Look for a Section
        $this->section = Doctrine_Query::create()
        ->select('s.*')
          ->from('Section s')
          ->where('s.site_id = ?', (int)$object->id)
          ->andWhere('s.slug = ?', (string)$string)
          ->orderby('s.id desc')
          ->fetchOne();
        if($this->section)
          return $this->section;
        else{
          if ($this->site->slug == "m") {
            // #2b Look for an Asset
            $this->asset = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a')
              ->where('a.slug = ?', (string)$string)
              ->orderby('a.id desc')
              ->fetchOne();
          }
          else {            
            // #2b Look for an Asset
            $this->asset = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a')
              ->where('a.site_id = ?', (int)$object->id)
              ->andWhere('a.slug = ?', (string)$string)
              ->orderby('a.id desc')
              ->fetchOne();
          }
            
          if($this->asset)
            return $this->asset;
          else
            return false;
        }
      }
      else
        return false;
    }
    return false;
  }


 /**
  * Parse object
  *
  * @param Array $string
  */
  private function parse($string){
    if($string != ""){
      // #1 Look for a Site
      $this->site = Doctrine_Query::create()
        ->select('s.*')
        ->from('Site s')
        ->where('s.slug = ?', (string)$string)
        ->andWhere('s.is_active = 1')
        ->orderby('s.id desc')
        ->fetchOne();
      if($this->site){
        return $this->site;
      }
      else{
        // #2 Look for a Section
        $this->section = Doctrine_Query::create()
        ->select('s.*')
          ->from('Section s')
          ->where('s.slug = ?', (string)$string)
          ->andWhere('s.is_editorial = 1')
          ->fetchOne();
        if(!$this->section){
          // #2 Look for a Section
          $this->section = Doctrine_Query::create()
          ->select('s.*')
            ->from('Section s')
            ->where('s.slug = ?', (string)$string)
            ->orderby('s.parent_section_id desc, s.site_id asc')
            ->fetchOne();
        }
        if($this->section){
          return $this->section;
        }else{
          // #3 Look for an Asset
          $this->asset = Doctrine_Query::create()
          ->select('a.*')
            ->from('Asset a')
            ->where('a.slug = ?', (string)$string)
            ->orderby('a.id desc')
            ->fetchOne();
          if($this->asset){
            return $this->asset;
          }
        }
      }
    }
    return false;
  }

 /**
  * ForwardObject null
  *
  * @param Object $object
  */
  private function forwardObject($object){
    if($object){
      //die('_'.strtolower(get_class($object)).'index');
      $this->getRequest()->setParameter('object', $object);
      $this->forward('_'.strtolower(get_class($object)), 'index');
      /*
      switch(get_class($object)) {
        case "Asset":
          $subdomain = $object->Site->getSlug();
          break;
        case "Section":
          $subdomain = $object->Site->getSlug();
          break;
        case "Site":
          $subdomain = $object->getSlug();
          break;
        default:
          $subdomain = 'cmais';
          break;
      }
      */
    }
  }
  
  public function executeFeed(sfWebRequest $request) {
    $type_id = 0;
    $this->setLayout(false);
    $this->site = Doctrine::getTable('Site')->findOneBySlug('cmais');
    if($request->getParameter('param1'))
      $this->feedsite = Doctrine::getTable('Site')->findOneBySlug($request->getParameter('param1'));
    if($request->getParameter('param2')){
      if($request->getParameter('param2')=="videos")
        $type_id = 6;
      elseif($request->getParameter('param2')=="audios")
        $type_id = 4;
      elseif($request->getParameter('param2')=="imagens")
        $type_id = 2;
      elseif($request->getParameter('param2')=="materias")
        $type_id = 1;
    }
    if(!$this->feedsite){
      $this->feedsite = $this->site;
      if($type_id > 0){
        $this->assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a')
          ->where('a.is_active = ?', 1)
          ->andWhere('a.asset_type_id = ?', $type_id)
          ->orderBy('a.id desc')
          ->limit(150)
          ->execute();
      }
      else{
        $this->assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a')
          ->where('a.is_active = ?', 1)
          ->orderBy('a.id desc')
          ->limit(150)
          ->execute();
      }
    }else{
      if($type_id > 0){
        $this->assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a')
          ->where('a.is_active = ?', 1)
          ->andWhere('a.site_id = ?', $this->feedsite->id)
          ->andWhere('a.asset_type_id = ?', $type_id)
          ->orderBy('a.id desc')
          ->limit(150)
          ->execute();
      }
      else{
        $this->assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a')
          ->where('a.is_active = ?', 1)
          ->andWhere('a.site_id = ?', $this->feedsite->id)
          ->orderBy('a.id desc')
          ->limit(150)
          ->execute();
      }
    }
  }

  
}

