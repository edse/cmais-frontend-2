<?php

/**
 * ajax actions.
 *
 * @package    astolfo
 * @subpackage ajax
 * @author     Emerson Estrella
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ajaxActions extends sfActions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->setLayout(false);
    $this->forward('default', 'module');
  }

  public function executeGetdays(sfWebRequest $request)
  {
    $this->setLayout(false);
    if($request->isXmlHttpRequest()){
      if($request->getParameter('section_id') > 0 || $request->getParameter('category_id') > 0 || $request->getParameter('channel_id') > 0 || $request->getParameter('program_id') > 0 || $request->getParameter('event') > 0){
        $year = $request->getParameter('year');
        $month = $request->getParameter('month');
        $month2 = $month+1;
        $output['days'][] = array('day' => 0);
        if($request->getParameter('program_id') > 0){
          // schedules
          if((int)$request->getParameter('program_id')==111){
            $schedules = Doctrine_Query::create()
              ->select('s.*')
              ->from('Schedule s')
              ->where('s.program_id = ?', (int)$request->getParameter('program_id'))
              ->andWhere('s.channel_id = ?', 1)
              ->andWhere('s.date_start >= ? AND s.date_start < ?', array($year.'-'.$month.'-01 00:00:00', $year.'-'.$month2.'-01 00:00:00'))
              ->orderBy('s.date_start asc')
              ->execute();
          }else{
            $schedules = Doctrine_Query::create()
              ->select('s.*')
              ->from('Schedule s')
              ->where('s.program_id = ?', (int)$request->getParameter('program_id'))
              ->andWhere('s.date_start >= ? AND s.date_start < ?', array($year.'-'.$month.'-01 00:00:00', $year.'-'.$month2.'-01 00:00:00'))
              ->andWhere('s.channel_id = ?', 1)
              ->orderBy('s.date_start asc')
              ->execute();
          }
          if(count($schedules)>0) {
            foreach($schedules as $s) {
              $d = substr($s->date_start, 8,2);
              if(substr($d,0,1) == "0")
                $d = substr($s->date_start, 9,1);
              if(!in_array(array('day'=> $d), $output['days'])) {
                $output['days'][] = array('day'=> $d);
              }
            }
          }
          echo json_encode($output);
        }
        elseif($request->getParameter('channel_id') > 0){
          // schedules
          $schedules = Doctrine_Query::create()
            ->select('s.*')
            ->from('Schedule s')
            ->where('s.channel_id = ?', (int)$request->getParameter('channel_id'))
            ->andWhere('s.date_start >= ? AND s.date_start < ?', array($year.'-'.$month.'-01 00:00:00', $year.'-'.$month2.'-01 00:00:00'))
            ->orderBy('s.date_start asc')
            ->execute();
          if(count($schedules)>0) {
            foreach($schedules as $s) {
              $d = substr($s->date_start, 8,2);
              if(substr($d,0,1) == "0")
                $d = substr($s->date_start, 9,1);
              if(!in_array(array('day'=> $d), $output['days'])) {
                $output['days'][] = array('day'=> $d);
              }
            }
          }
          echo json_encode($output);
        }
        elseif($request->getParameter('category_id') > 0){
          // category assets
          $assets = Doctrine_Query::create()
            ->select('a.id, a.created_at')
            ->from('Asset a, CategoryAsset ca')
            ->where('ca.category_id = ?', (int)$request->getParameter('category_id'))
            ->andWhere('ca.asset_id = a.id')
            ->andWhere('a.is_active = ?', 1)
            ->andWhere('a.created_at >= ? AND a.created_at < ?', array($year.'-'.$month.'-01 00:00:00', $year.'-'.$month2.'-01 00:00:00'))
            ->execute();
          if(count($assets)>0) {
            foreach($assets as $a) {
              $d = substr($a->created_at, 8,2);
              if(substr($d,0,1) == "0")
                $d = substr($a->created_at, 9,1);
              if(!in_array(array('day'=> $d), $output['days'])) {
                $output['days'][] = array('day'=> $d);
              }
            }
          }
          echo json_encode($output);
        }
        elseif($request->getParameter('section_id') > 0){
          // category assets
          $assets = Doctrine_Query::create()
            ->select('a.id, a.created_at')
            ->from('Asset a, SectionAsset sa')
            ->where('sa.section_id = ?', (int)$request->getParameter('section_id'))
            ->andWhere('sa.asset_id = a.id')
            ->andWhere('a.is_active = ?', 1)
            ->andWhere('a.created_at >= ? AND a.created_at < ?', array($year.'-'.$month.'-01 00:00:00', $year.'-'.$month2.'-01 00:00:00'))
            ->execute();            
          if(count($assets)>0) {
            foreach($assets as $a) {
              $d = substr($a->created_at, 8,2);
              if(substr($d,0,1) == "0")
                $d = substr($a->created_at, 9,1);
              if(!in_array(array('day'=> $d), $output['days'])) {
                $output['days'][] = array('day'=> $d);
              }
            }
          }
          echo json_encode($output);
        }
        elseif($request->getParameter('event') > 0){
          $assets = Doctrine_Query::create()
            ->select('av.*')
            ->from('AssetEvent av')
            ->andWhere('av.date >= ? AND av.date <= ?', array($year.'-'.$month.'-01', $year.'-'.$month2.'-01'))
            ->orderBy('av.date asc')
            ->limit(80)
            ->execute();
            /*
            ->select('a.id, av.date')
            ->from('Asset a, AssetEvent av')
            ->where('a.id = av.asset_id')
            ->andWhere('a.asset_type_id = ?', 16)
            ->andWhere('av.date >= ? AND av.date <= ?', array($year.'-'.$month.'-01 00:00:00', $year.'-'.$month2.'-01 00:00:00'))
            ->limit(80)
            ->execute();
            */
          if(count($assets)>0) {
            foreach($assets as $a) {
              $d = substr($a->date, 8,2);
              if(substr($d,0,1) == "0")
                $d = substr($a->date, 9,1);
              if(!in_array(array('day'=> $d), $output['days'])) {
                $output['days'][] = array('day'=> $d);
              }
            }
          }
          echo json_encode($output);
        }
      }
    }
    die();
  }

  public function executeStreaming(sfWebRequest $request){
    $this->setLayout(false);
    $return = "";
    //if($request->isXmlHttpRequest()){
      $channel_id = $request->getParameter('channel_id');
      $streaming = "tv";
      $url = "http://cmais.com.br/aovivo";
      if($channel_id <= 0)
        $channel_id = 1;
      elseif($channel_id == 3){
        $streaming = "univesptv";
        $url = "http://univesptv.cmais.com.br/aovivo";
      }
    
      $schedules = Doctrine_Query::create()
        ->select('s.*')
        ->from('Schedule s')
        ->where('s.is_live = ?', 1)
        ->andWhere('s.date_start < ?', date('Y-m-d H:i:s'))
        ->andWhere('s.date_end > ?', date('Y-m-d H:i:s'))
        ->andWhere('s.channel_id = ?', (int)$channel_id)
        ->orderBy('s.date_start asc')
        ->limit('1')
        ->execute();

      if((isset($schedules)) && (count($schedules) > 0)){
        
        if($schedules[0]->getUrl()!=""){
          die("self.location.href='".$schedules[0]->getUrl()."'");
        }
        
        if($schedules[0]->program_id == 542){
          die("self.location.href='http://tvcultura.cmais.com.br/doctorwho/aovivo'");
        }
        
        if($schedules[0]->program_id == 788){
          die("self.location.href='http://tvcultura.cmais.com.br/sarahjane/aovivo'");
        }
        
        $block = false;
        if($schedules[0]->getIsGeoblocked()){
          require_once sfConfig::get('sf_lib_dir').'/vendor/geoip/geoip.inc';
          $gi = geoip_open(sfConfig::get('sf_lib_dir').'/vendor/geoip/GeoIP.dat',GEOIP_STANDARD);
          //"este conteúdo não está liberado para sua região"
          if(geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']) != "BR"){
            $block = true;
          }
          geoip_close($gi);
        }

        if($schedules[0]->program_id == 77){
          die("self.location.href='http://tvcultura.cmais.com.br/cartaoverde/aovivo'");
        }        
               
        if($schedules[0]->program_id == 75){
          if (date('w') != "5") { // se dia diferente de sexta, redireciona...
            die("self.location.href='http://tvcultura.cmais.com.br/rodaviva/transmissao'");
          }
        }
       
        $next = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.is_live = ?', 1)
          ->andWhere('s.id != ?', $schedules[0]->id)
          ->andWhere('s.date_start > ?', date('Y-m-d H:i:s'))
          ->andWhere('s.channel_id = ?', (int)$channel_id)
          ->orderBy('s.date_start asc')
          ->limit('1')
          ->execute();

        $offset = $this->datediff($next[0]->getDateStart(), "NOW");
        if($offset){
          $return .= "
                  $('#countdown_dashboard').countDown({
                    targetOffset: {
                      'day':    ".$offset->d.",
                      'month':  ".$offset->m.",
                      'year':   ".$offset->y.",
                      'hour':   ".$offset->h.",
                      'min':    ".$offset->i.",
                      'sec':    ".$offset->s."
                    },
                    onComplete: function() { self.location.href='/aovivo'; }
                  });";
        }
        
        if($block){
          $return .= "
          $('#livestream2').html('Este conteúdo não está liberado para sua região');
          $('#livestream2').show();
          var interval=self.setInterval('checkStreamingEnd()', 60000);
          ";
        }else{
          $return .= "
          var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
          so.addVariable('controlbar', 'over');
          so.addVariable('autostart', 'true');
          so.addVariable('streamer', 'rtmp://200.136.27.12/live');
          so.addVariable('file', '".$streaming."');
          so.addVariable('type', 'video');
          so.addParam('allowscriptaccess','always');
          so.addParam('allowfullscreen','true');
          so.addParam('wmode','transparent');
          so.write('livestream2');
          $('#livestream2').show();
          var interval=self.setInterval('checkStreamingEnd()', 60000);
          ";
        }
      }else{
        $next = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.is_live = ?', 1)
          ->andWhere('s.date_start > ?', date('Y-m-d H:i:s'))
          ->andWhere('s.channel_id = ?', (int)$channel_id)
          ->orderBy('s.date_start asc')
          ->limit('1')
          ->execute();

        $offset = $this->datediff($next[0]->getDateStart(), "NOW");
        
        $return = "
        $('#livestream2').html('');";
        if($offset){
          $return .= "
          $('#countdown_dashboard').countDown({
            targetOffset: {
              'day':    ".$offset->d.",
              'month':  ".$offset->m.",
              'year':   ".$offset->y.",
              'hour':   ".$offset->h.",
              'min':    ".$offset->i.",
              'sec':    ".$offset->s."
            },
            onComplete: function() { self.location.href='/aovivo'; }
          });";
        }
      }
    //}
    echo $return;
    die();
  }

  public function executeStreamingend(sfWebRequest $request){
    $this->setLayout(false);
    $return = "";
    //if($request->isXmlHttpRequest()){
      $channel_id = $request->getParameter('channel_id');
      if($channel_id <= 0)
        $channel_id = 1;
      $schedules = Doctrine_Query::create()
        ->select('s.*')
        ->from('Schedule s')
        ->where('s.is_live = ?', 1)
        ->andWhere('s.date_start <= ?', date('Y-m-d H:i:s'))
        ->andWhere('s.date_end > ?', date('Y-m-d H:i:s'))
        ->andWhere('s.channel_id = ?', (int)$channel_id)
        ->orderBy('s.date_start asc')
        ->limit('1')
        ->execute();
      if((isset($schedules)) && (count($schedules) > 0)){
        $return .= "";
      }else{
        $return .= "$('#livestream2').html('');";
      }
    //}
    echo $return;
    die();
  }

  public function executeTimer(sfWebRequest $request){
    $this->setLayout(false);
    $return = "";
    if($request->isXmlHttpRequest()){
      if($request->getParameter('asset_id')){
        $url_in = $request->getParameter('url_in');
        $url_out = $request->getParameter('url_out');
        $asset = Doctrine::getTable('Asset')->findOneById($request->getParameter('asset_id'));
        if($asset){
          if($asset->getDateEnd()){
            if(date('Y-m-d H:i:s') > $asset->getDateEnd()){
              if($url_out != "")
                $return = "self.location.href='".$url_out."'";
            }
            elseif(date('Y-m-d H:i:s') < $asset->getDateStart()){
              if($url_out != "")
                $return = "self.location.href='".$url_out."'";
            }
            elseif(date('Y-m-d H:i:s') >= $asset->getDateStart()){
              if($url_in != "")
                $return = "self.location.href='".$url_in."'";
            }
          }elseif($asset->getDateStart()){
            if(date('Y-m-d H:i:s') >= $asset->getDateStart()){
              if($url_in != "")
                $return = "self.location.href='".$url_in."'";
            }
          }
        }
      }
    }
    echo $return;
    die();
  }

  public function executeExport(sfWebRequest $request){
    $schedules = Doctrine_Query::create()
      ->select('s.*')
      ->from('Schedule s')
      ->where('s.date_start > ?', date('Y-m-d 00:00:00'))
      ->andWhere('s.date_start < ?', date('Y-m-d 23:59:59'))
      ->orderBy('s.date_start asc')
      ->execute();

    print '<!DOCTYPE html>
<html>
  <head>
    <title>cmais+ O portal de conteúdo da Cultura</title>
  </head>
  <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push([\'_setAccount\', \'UA-22770265-1\']);
    _gaq.push([\'_setDomainName\', \'.cmais.com.br\']);
    _gaq.push([\'_trackPageview\']);
   
    (function() {
      var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
      ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
      var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script> 
  <body>';

    print "<pre>";
    foreach($schedules as $s){
      $t = explode(" ",$s->date_start);
      print utf8_decode($t[0].";".$t[1].";".$s->Program->title.";".$s->Program->description."\n");
    }
    print "</pre>";
    die();
  }


  public function datediff($start, $end="NOW"){
    $interval = false;
    $datetime1 = date_create($start);
    $datetime2 = date_create($end);
    if($datetime1 > $datetime2)
      $interval = date_diff($datetime1, $datetime2, true);
    return $interval;
  }
  
  public function executeMenuTv(sfWebRequest $request){
    //if($request->isXmlHttpRequest()){
      $this->getContext()->getConfiguration()->loadHelpers('Date');
      $this->setLayout(false);
      if($request->getParameter('content') == "tvcultura"){
        $programs = array(); $pc1 = array(); $pc2 = array(); $pc3 = array(); $pc4 = array();
        $programs = Doctrine_Query::create()
          ->select('p.*')
          ->from('Program p, ChannelProgram cp, Site s')
          ->where('p.id = cp.program_id AND s.id = p.site_id')
          ->andWhere('cp.channel_id = ?', (int)1)
          ->andWhere('p.is_in_menu = 1')
          ->orderBy('p.title')
          ->execute();
        $c1 = ceil((count($programs)/4)*1); $c2 = ceil((count($programs)/4)*2); $c3 = ceil((count($programs)/4)*3); $c4 = ceil((count($programs)/4)*4);
        for($i=0; $i<count($programs); $i++){
          if($i <= $c1) $pc1[] = $programs[$i];
          elseif($i <= $c2) $pc2[] = $programs[$i];
          elseif($i <= $c3) $pc3[] = $programs[$i];
          elseif($i <= $c4) $pc4[] = $programs[$i];
        }
        unset($programs);
        $return = '<ul class="lista">';
        foreach($pc1 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc2 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc3 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc4 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><div class="botoes"><a href="http://tvcultura.cmais.com.br/grade">Grade completa</a><a href="http://cmais.com.br/programas-de-a-z">Todos os programas de A a Z</a></div>';
      }
      elseif($request->getParameter('content') == "univesptv"){
        $programs = array(); $pc1 = array(); $pc2 = array(); $pc3 = array(); $pc4 = array();
        $programs = Doctrine_Query::create()
          ->select('p.*')
          ->from('Program p, ChannelProgram cp, Site s')
          ->where('p.id = cp.program_id AND s.id = p.site_id')
          ->andWhere('cp.channel_id = ?', (int)3)
          ->andWhere('p.is_in_menu = 1')
          ->orderBy('p.title')
          ->execute();
        $c1 = ceil((count($programs)/4)*1); $c2 = ceil((count($programs)/4)*2); $c3 = ceil((count($programs)/4)*3); $c4 = ceil((count($programs)/4)*4);
        for($i=0; $i<count($programs); $i++){
          if($i <= $c1) $pc1[] = $programs[$i];
          elseif($i <= $c2) $pc2[] = $programs[$i];
          elseif($i <= $c3) $pc3[] = $programs[$i];
          elseif($i <= $c4) $pc4[] = $programs[$i];
        }
        unset($programs);
        $return = '<ul class="lista">';
        foreach($pc1 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc2 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc3 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc4 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><div class="botoes"><a href="http://univesptv.cmais.com.br/programacao">Grade completa</a><a href="http://univesptv.cmais.com.br/programas-de-a-z">Todos os programas de A a Z</a></div>';
      }
      elseif($request->getParameter('content') == "multicultura"){
        $programs = array(); $pc1 = array(); $pc2 = array(); $pc3 = array(); $pc4 = array();
        $programs = Doctrine_Query::create()
          ->select('p.*')
          ->from('Program p, ChannelProgram cp, Site s')
          ->where('p.id = cp.program_id AND s.id = p.site_id')
          ->andWhere('cp.channel_id = ?', (int)4)
          ->andWhere('p.is_in_menu = 1')
          ->orderBy('p.title')
          ->execute();
        $c1 = ceil((count($programs)/4)*1); $c2 = ceil((count($programs)/4)*2); $c3 = ceil((count($programs)/4)*3); $c4 = ceil((count($programs)/4)*4);
        for($i=0; $i<count($programs); $i++){
          if($i <= $c1) $pc1[] = $programs[$i];
          elseif($i <= $c2) $pc2[] = $programs[$i];
          elseif($i <= $c3) $pc3[] = $programs[$i];
          elseif($i <= $c4) $pc4[] = $programs[$i];
        }
        unset($programs);
        $return = '<ul class="lista">';
        foreach($pc1 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc2 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc3 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc4 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><div class="botoes"><a href="http://multicultura.cmais.com.br/programacao">Grade completa</a><!--<a href="http://cmais.com.br/programas-de-a-z">Todos os programas de A a Z</a>--></div>';
      }
      elseif($request->getParameter('content') == "tvrtb"){
        $programs = array(); $pc1 = array(); $pc2 = array(); $pc3 = array(); $pc4 = array();
        $programs = Doctrine_Query::create()
          ->select('p.*')
          ->from('Program p, ChannelProgram cp, Site s')
          ->where('p.id = cp.program_id AND s.id = p.site_id')
          ->andWhere('cp.channel_id = ?', (int)2)
          ->andWhere('p.is_in_menu = 1')
          ->orderBy('p.title')
          ->execute();
        $c1 = ceil((count($programs)/4)*1); $c2 = ceil((count($programs)/4)*2); $c3 = ceil((count($programs)/4)*3); $c4 = ceil((count($programs)/4)*4);
        for($i=0; $i<count($programs); $i++){
          if($i <= $c1) $pc1[] = $programs[$i];
          elseif($i <= $c2) $pc2[] = $programs[$i];
          elseif($i <= $c3) $pc3[] = $programs[$i];
          elseif($i <= $c4) $pc4[] = $programs[$i];
        }
        unset($programs);
        $return = '<ul class="lista">';
        foreach($pc1 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc2 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc3 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc4 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><div class="botoes"><a href="http://tvratimbum.cmais.com.br/grade?c=tvratimbum">Grade completa</a><a href="http://cmais.com.br/programas-de-a-z">Todos os programas de A a Z</a></div>';
      }
      elseif($request->getParameter('content') == "radioam"){
        $programs = array(); $pc1 = array(); $pc2 = array(); $pc3 = array(); $pc4 = array();
        $programs = Doctrine_Query::create()
          ->select('p.*')
          ->from('Program p, ChannelProgram cp, Site s')
          ->where('p.id = cp.program_id AND s.id = p.site_id')
          ->andWhere('cp.channel_id = ?', (int)5)
          ->andWhere('p.is_in_menu = 1')
          ->orderBy('p.title')
          ->execute();
        $c1 = ceil((count($programs)/4)*1); $c2 = ceil((count($programs)/4)*2); $c3 = ceil((count($programs)/4)*3); $c4 = ceil((count($programs)/4)*4);
        for($i=0; $i<count($programs); $i++){
          if($i <= $c1) $pc1[] = $programs[$i];
          elseif($i <= $c2) $pc2[] = $programs[$i];
          elseif($i <= $c3) $pc3[] = $programs[$i];
          elseif($i <= $c4) $pc4[] = $programs[$i];
        }
        unset($programs);
        $return = '<ul class="lista">';
        foreach($pc1 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc2 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc3 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc4 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><div class="botoes"><a href="http://www.culturabrasil.com.br/">Todos os programas de A a Z</a></div>';
      }
      elseif($request->getParameter('content') == "radiofm"){
        $programs = array(); $pc1 = array(); $pc2 = array(); $pc3 = array(); $pc4 = array();
        $programs = Doctrine_Query::create()
          ->select('p.title')
          ->from('Program p, ChannelProgram cp, Site s')
          ->where('p.id = cp.program_id AND s.id = p.site_id')
          ->andWhere('cp.channel_id = ?', (int)6)
          ->andWhere('p.is_in_menu = 1')
          ->orderBy('p.title')
          ->execute();
        $c1 = ceil((count($programs)/4)*1); $c2 = ceil((count($programs)/4)*2); $c3 = ceil((count($programs)/4)*3); $c4 = ceil((count($programs)/4)*4);
        for($i=0; $i<count($programs); $i++){
          if($i <= $c1) $pc1[] = $programs[$i];
          elseif($i <= $c2) $pc2[] = $programs[$i];
          elseif($i <= $c3) $pc3[] = $programs[$i];
          elseif($i <= $c4) $pc4[] = $programs[$i];
        }
        unset($programs);
        $return = '<ul class="lista">';
        foreach($pc1 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc2 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc3 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><ul class="lista">';
        foreach($pc4 as $p)
          $return .= '<li><a href="'.$p->retriveUrl().'">'.$p->getTitle().'</a></li>';
        $return .= '</ul><div class="botoes"><a href="http://culturafm.cmais.com.br/grade">Grade completa</a><a href="http://culturafm.cmais.com.br/programas-de-a-z">Todos os programas de A a Z</a></div>';
      }
      elseif($request->getParameter('content') == "no-ar-tvcultura"){
        $live = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)1)
          ->andWhere('s.date_start <= ? AND s.date_end > ?', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start desc')
          ->limit(1)
          ->fetchOne();
        $return = '';
        if($live){
          $return .= '<div class="box-agora"><p class="tit">Agora:</p>';
          if($live->retriveLiveImage())
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="img"><img src="'.$live->retriveLiveImage().'" alt="'.$live->Program->getTitle().'" /></a>';
          if($live->getTitle() != "")
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->Program->getTitle().'</a>';
          $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->retriveTitle().'</a>';
          $return .= '<p style="max-height: auto;">'.$live->retriveDescription().'</p></div>';
        }
  
        $coming = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)1)
          ->andWhere('(s.date_start > ? AND s.date_end > ?)', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->andWhere('s.id != ?', ($live) ? $live->getId() : 0)
          ->orderBy('s.date_start')
          ->limit(3)
          ->execute();
        $return .= '<div class="box-vjtambem"><p class="tit">Veja tamb&eacute;m:</p><ul>';
        $return .= '<li><p>'.format_date($coming[0]->getDateStart(), "t").'</p>';
        if($coming[0]->getTitle() != "")
          $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->retriveTitle().'</a>';
        $return .= '<li><p>'.format_date($coming[1]->getDateStart(), "t").'</p>';
        if($coming[1]->getTitle() != "")
          $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->retriveTitle().'</a>';
        $return .= '<li><p>'.format_date($coming[2]->getDateStart(), "t").'</p>';
        if($coming[2]->getTitle() != "")
          $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->retriveTitle().'</a></ul></div>';
        
        $important = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)1)
          ->andWhere('s.is_important = 1')
          ->andWhere('s.date_start >= ?', array(date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start')
          ->limit(1)
          ->fetchOne();
        if($important){
          $return .= '<div class="box-nperca"><p class="tit">n&atilde;o perca:</p>';
          if($important->retriveLiveImage() != "")
            $return .= '<a href="'.$important->Program->retriveUrl().'" class="img"><img src="'.$important->retriveLiveImage().'" alt="'.$important->retriveTitle().'" /></a>';
          if($important->getTitle() != "")
            $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->Program->getTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->retriveTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="txt">'.$important->retriveDescription().'</a>';
          $return .= '<p class="titulos hora">'.format_date($important->getDateStart(), "t").'</p></div>';
        }
        unset($important); unset($coming); unset($live);
        $return .= '<div class="botoes"><a href="/grade">Grade completa</a></div>';
      }
      elseif($request->getParameter('content') == "no-ar-univesptv"){
        $live = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)3)
          ->andWhere('s.date_start <= ? AND s.date_end > ?', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start desc')
          ->limit(1)
          ->fetchOne();
        $return = '';
        if($live){
          $return .= '<div class="box-agora"><p class="tit">Agora:</p>';
          if($live->retriveLiveImage())
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="img"><img src="'.$live->retriveLiveImage().'" alt="'.$live->Program->getTitle().'" /></a>';
          if($live->getTitle() != "")
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->Program->getTitle().'</a>';
          $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->retriveTitle().'</a>';
          $return .= '<p style="max-height: auto;">'.$live->retriveDescription().'</p></div>';
        }
  
        $coming = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)3)
          ->andWhere('(s.date_start > ? AND s.date_end > ?)', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->andWhere('s.id != ?', ($live) ? $live->getId() : 0)
          ->orderBy('s.date_start')
          ->limit(3)
          ->execute();
        $return .= '<div class="box-vjtambem"><p class="tit">Veja tamb&eacute;m:</p><ul>';
        $return .= '<li><p>'.format_date($coming[0]->getDateStart(), "t").'</p>';
        if($coming[0]->getTitle() != "")
          $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->retriveTitle().'</a>';
        $return .= '<li><p>'.format_date($coming[1]->getDateStart(), "t").'</p>';
        if($coming[1]->getTitle() != "")
          $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->retriveTitle().'</a>';
        $return .= '<li><p>'.format_date($coming[2]->getDateStart(), "t").'</p>';
        if($coming[2]->getTitle() != "")
          $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->retriveTitle().'</a></ul></div>';
        $important = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)3)
          ->andWhere('s.is_important = 1')
          ->andWhere('s.date_start >= ?', array(date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start')
          ->limit(1)
          ->fetchOne();
        if($important){
          $return .= '<div class="box-nperca"><p class="tit">n&atilde;o perca:</p><a href="'.$important->Program->retriveUrl().'" class="img"><img src="'.$important->retriveLiveImage().'" alt="'.$important->retriveTitle().'" /></a>';
          if($important->getTitle() != "")
            $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->Program->getTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->retriveTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="txt">'.$important->retriveDescription().'</a>';
          $return .= '<p class="titulos hora">'.format_date($important->getDateStart(), "t").'</p></div>';
        }
        unset($important); unset($coming); unset($live);
        $return .= '<div class="botoes"><a href="/grade?c=univesptv">Grade completa</a></div>';
      }
      elseif($request->getParameter('content') == "no-ar-multicultura"){
        $live = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)4)
          ->andWhere('s.date_start <= ? AND s.date_end > ?', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start desc')
          ->limit(1)
          ->fetchOne();
        $return = '';
        if($live){
          $return .= '<div class="box-agora"><p class="tit">Agora:</p>';
          if($live->retriveLiveImage())
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="img"><img src="'.$live->retriveLiveImage().'" alt="'.$live->Program->getTitle().'" /></a>';
          if($live->getTitle() != "")
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->Program->getTitle().'</a>';
          $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->retriveTitle().'</a>';
          $return .= '<p style="max-height: auto;">'.$live->retriveDescription().'</p></div>';
        }
        $coming = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)4)
          ->andWhere('(s.date_start > ? AND s.date_end > ?)', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->andWhere('s.id != ?', ($live) ? $live->getId() : 0)
          ->orderBy('s.date_start')
          ->limit(3)
          ->execute();
        $return .= '<div class="box-vjtambem"><p class="tit">Veja tamb&eacute;m:</p><ul>';
        $return .= '<li><p>'.format_date($coming[0]->getDateStart(), "t").'</p>';
        if($coming[0]->getTitle() != "")
          $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->retriveTitle().'</a>';
        $return .= '<li><p>'.format_date($coming[1]->getDateStart(), "t").'</p>';
        if($coming[1]->getTitle() != "")
          $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->retriveTitle().'</a>';
        $return .= '<li><p>'.format_date($coming[2]->getDateStart(), "t").'</p>';
        if($coming[2]->getTitle() != "")
          $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->retriveTitle().'</a></ul></div>';
  
        $important = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)4)
          ->andWhere('s.is_important = 1')
          ->andWhere('s.date_start >= ?', array(date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start')
          ->limit(1)
          ->fetchOne();
        if($important){
          $return .= '<div class="box-nperca"><p class="tit">n&atilde;o perca:</p>';
          $return .= '<a href="'.$important->Program->retriveUrl().'" class="img"><img src="'.$important->retriveLiveImage().'" alt="'.$important->retriveTitle().'" /></a>';
          if($important->getTitle() != "")
            $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->Program->getTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->retriveTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="txt">'.$important->retriveDescription().'</a>';
          $return .= '<p class="titulos hora">'.format_date($important->getDateStart(), "t").'</p></div>';
        }
        unset($important); unset($coming); unset($live);
        $return .= '<div class="botoes"><a href="http://multicultura.cmais.com.br/programacao">Grade completa</a></div>';
      }
      elseif($request->getParameter('content') == "no-ar-tvrtb"){
        $live = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)2)
          ->andWhere('s.date_start <= ? AND s.date_end > ?', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start desc')
          ->limit(1)
          ->fetchOne();
        $return = '';
        if($live){
          $return .= '<div class="box-agora"><p class="tit">Agora:</p>';
          if($live->retriveLiveImage())
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="img"><img src="'.$live->retriveLiveImage().'" alt="'.$live->Program->getTitle().'" /></a>';
          if($live->getTitle() != "")
            $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->Program->getTitle().'</a>';
          $return .= '<a href="'.$live->Program->retriveUrl().'" class="titulos" style="font-weight: bold;">'.$live->retriveTitle().'</a>';
          $return .= '<p style="max-height: auto;">'.$live->retriveDescription().'</p></div>';
        }
        $coming = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)2)
          ->andWhere('(s.date_start > ? AND s.date_end > ?)', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->andWhere('s.id != ?', ($live) ? $live->getId() : 0)
          ->orderBy('s.date_start')
          ->limit(3)
          ->execute();
        $return .= '<div class="box-vjtambem"><p class="tit">Veja tamb&eacute;m:</p><ul>';
        $return .= '<li><p>'.format_date($coming[0]->getDateStart(), "t").'</p>';
        if($coming[0]->getTitle() != "")
          $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[0]->Program->retriveUrl().'">'.$coming[0]->retriveTitle().'</a>';
        $return .= '<li><p>'.format_date($coming[1]->getDateStart(), "t").'</p>';
        if($coming[1]->getTitle() != "")
          $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[1]->Program->retriveUrl().'">'.$coming[1]->retriveTitle().'</a>';
        $return .= '<li>';
        $return .= '<p>'.format_date($coming[2]->getDateStart(), "t").'</p>';
        if($coming[2]->getTitle() != "")
          $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->Program->getTitle().'</a>';
        $return .= '<a href="'.$coming[2]->Program->retriveUrl().'">'.$coming[2]->retriveTitle().'</a></ul></div>';
        
        $important = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)2)
          ->andWhere('s.is_important = 1')
          ->andWhere('s.date_start >= ?', array(date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start')
          ->limit(1)
          ->fetchOne();
        if($important){
          $return .= '<div class="box-nperca"><p class="tit">n&atilde;o perca:</p>';
          $return .= '<a href="'.$important->Program->retriveUrl().'" class="img"><img src="'.$important->retriveLiveImage().'" alt="'.$important->retriveTitle().'" /></a>';
          if($important->getTitle() != "")
            $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->Program->getTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="titulos">'.$important->retriveTitle().'</a>';
          $return .= '<a href="'.$important->retriveUrl().'" class="txt">'.$important->retriveDescription().'</a>';
          $return .= '<p class="titulos hora">'.format_date($important->getDateStart(), "t").'</p></div>';
        }
        unset($important); unset($coming); unset($live);
        $return .= '<div class="botoes"><a href="/grade?c=tvratimbum">Grade completa</a></div>';
      }
    //}
    echo $return;
    die();
  }

  public function executeTweetmonitor(sfWebRequest $request){
    $return = '';
    if($request->getParameter('monitor_id')>0){
      $this->setLayout(false);

      $monitor = Doctrine::getTable('TweetMonitor')->findOneById($request->getParameter('monitor_id'));
      $tweets = Doctrine_Query::create()
        ->select('t.*')
        ->from('Tweet t')
        ->where('t.tweet_monitor_id = ?', $monitor->getId())
        ->orderBy('t.id desc')
        ->limit(100)
        ->execute();
      $return .= '<div class="topo-fb"><h3>'.$monitor->getQuery().'</h3></div>';
      $return .= '<ul style="overflow-x: hidden; overflow-y: auto;">';
      foreach($tweets as $t) {
        $return .= '<li><a class="avatar" href="'.$t->getAuthorUrl().'"><img alt="profile" class="twtr-profile-img" src="'.$t->getAvatar().'"></a><p>'.$t->getContent().'</p></li>';
      }
      $return .= '</ul><div class="respiro"></div>';
    }
    echo $return;
    die();
  }

  public function executeInfinitescroll(sfWebRequest $request){
    //if($request->isXmlHttpRequest()){
      $return = '';
      $items = 24;
      $start = 0;
      $asset_id = intval($request->getParameter('asset_id'));
      $section = intval($request->getParameter('section_id'));
      $site = intval($request->getParameter('site_id'));
      $page = intval($request->getParameter('page'));
      if($page >= 1)
        $start = ($page * $items)-$items;
      if($section > 0){
        $q = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('sa.asset_id = a.id')
          ->andWhereIn('sa.section_id',  array($section));
        if($site > 0)
          $q->andWhere('a.site_id = ?', $site);
        $q->orderBy('a.id desc');
        $q->limit($items);
        $q->offset($start);
        $assets = $q->execute();
      }
      elseif($asset_id > 0){
        $asset = Doctrine::getTable('Asset')->findOneById($asset_id);
        $q = Doctrine_Query::create()
          ->select('a.*, ra.id related_asset_id, ra.type related_asset_type, ra.description related_asset_description')
          ->from('Asset a, RelatedAsset ra')
          ->where('a.id = ra.asset_id')
          ->andWhere('ra.parent_asset_id = ?', (int)$asset_id)
          ->groupBy('ra.id')
          ->orderBy('a.id')
          ->limit($items)
          ->offset($start);
        $assets = $q->execute();
      }
      if($assets){
        /*
        // Album de natal Quintaldacultura
        if($asset->Site->getSlug() == "quintaldacultura"){
          foreach($assets as $k=>$d){
            if($k%3 == 0){
              $return .= '<div class="albumBox">';
              $return .= '<span class="luzVer"></span>';
              $return .= '<div class="albumFoto">';
            }
            $return .= '<div class="foto ';
            if($k%3 == 0) $return .= 'amarelo';
            elseif($k%3 == 1) $return .= 'verde';
            elseif($k%3 == 2) $return .= 'vermelho';
            $return .= '">';
            $return .= '<a href="javascript:;">';
            $return .= '<img src="'.$d->retriveImageUrlByImageUsage('image-6-b').'" title="'.$d->getTitle().'" alt="'.$d->getTitle().'" />';
            if($d->AssetImage->getHeadline() != ""){
              $return .= '<span class="legenda">';
              $return .= '<p style="width:200px;">'.$d->AssetImage->getHeadline().'</p>';
              $return .= '</span>';
            }
            
            $return .= '</a>';
            $return .= '<div class="box-info">';
            $return .= '<h3 class="nome">'.$d->getTitle().'</h3>';
            $return .= '<p class="local">'.$d->getDescription().'</p>';
            $return .= '</div></div>';
            if($k%3 == 2){
              $return .= '</div></div>';
            }
          }
        }
        else{
        */
          foreach($assets as $a){
            if($request->getParameter('piadas')==1){
              ?>
              <li>
                <p><?php echo $a->AssetContent->getContent()?></p>
                <span><?php echo $a->getDescription()?></span>
              </li>
              <span class="picote"></span>
              <?php
            }else{
              $return .= '<li><a href="'.$a->retriveUrl().'" class="aImg" title="'.$a->getDescription().'">';
              $return .= '<img alt="'.$a->getTitle().'" src="'.$a->retriveImageUrlByImageUsage("image-3-b").'"></a>';
              //$return .= '<a href="/'.$a->getSlug().'" class="aTxt"><span class="nomeRlacionado">'.$a->getTitle().'</span>';
              $return .= '<a href="/'.$a->getSlug().'" class="aTxt" title="'.$a->Site->getTitle().'"><span class="nomeRlacionado">'.$a->getTitle().'</span>';
              //<span class="nomeItem">'.$a->getDescription().'</span>
              $return .= '</a></li>';
            }
            
          }
          
          $return .= '<script>$(document).ready(function(){ $(".loading.inicial").remove(); });</script>';
          
        //}
      }
      echo $return;
    //}
    die();
  }
  
  public function executeMobilegetvideos(sfWebRequest $request){
    
    require_once('/var/frontend/lib/vendor/symfony/lib/helper/DateHelper.php');
    
    if($request->isXmlHttpRequest()){
      $return = '';
      $start = 0;
      $items = intval($request->getParameter('items'));
      $site = intval($request->getParameter('site'));
      $page = intval($request->getParameter('page'));
      
      if($page >= 1)
        $start = ($page * $items)-$items;
      
      if($site > 0){
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, AssetVideo av')
          ->where('a.asset_type_id = 6')
          ->andWhere('av.asset_id = a.id')
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('a.site_id = ?',$site)
          ->andWhere('av.youtube_id != ""')
          ->orderBy('a.id desc')
          ->limit($items)
          ->offset($start)
          ->execute();
          
        foreach($assets as $d){
          $return .= '              <!--VIDEO ITEM-->';
          $return .= '              <li>';
          $return .= '                <a href="http://www.youtube.com/embed/' . $d->AssetVideo->getYoutubeId() . '?rel=0">';
          $return .= '                  <fieldset class="ui-grid-a">';
          $return .= '                    <div class="ui-block-a">';
          $return .= '                      <div class="fotinho">';
          $return .= '                        <img class="" src="http://img.youtube.com/vi/' . $d->AssetVideo->getYoutubeId() .'/0.jpg" alt="' . $d->getTitle() . '" width="100%">';
          $return .= '                      </div>';
          $return .= '                    </div>';
          $return .= '                    <div class="ui-block-b video">';
          $return .= '                      <h4>' . $d->getTitle() . '</h4>';
          if($d->getCreatedAt() != "")
            $return .= '                      <p class="data">' . format_datetime($d->getCreatedAt(),"dd/MM/yyyy HH:mm:ss") . '</p>';
          if ($d->AssetVideo->getDuration() != "")
            $return .= '                      <p class="duracao">Duração: ' . format_datetime($d->AssetVideo->getDuration(),"HH:mm:ss") . '</p>';
          $return .= '                    </div>';
          $return .= '                  </fieldset>';
          $return .= '                </a>';
          $return .= '                <div class="linha2"></div>';
          $return .= '              </li>';
          $return .= '              <!--/VIDEO ITEM-->';
        }
      }
      echo $return;
    }
    die();
  }

  public function executeMobilegetcontents(sfWebRequest $request){
    require_once('/var/frontend/lib/vendor/symfony/lib/helper/DateHelper.php');
    require_once('/var/frontend/lib/vendor/symfony/lib/helper/UrlHelper.php');
    
    if($request->isXmlHttpRequest()){
      $return = '';
      $start = 0;
      $items = intval($request->getParameter('items'));
      $site = intval($request->getParameter('site'));
      $page = intval($request->getParameter('page'));
      
      if($page >= 1)
        $start = ($page * $items)-$items;
      
      if( $site > 0 && !in_array($site,array('67','267','976','19')) ){
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, AssetContent ac')
          ->where('a.asset_type_id = 1')
          ->andWhere('ac.asset_id = a.id')
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('a.site_id = ?',$site)
          ->orderBy('a.id desc')
          ->limit($items)
          ->offset($start)
          ->execute();
          
        foreach($assets as $d){
          $return .= '              <!--ITEM NOTICIA-->';
          $return .= '              <li>';
          $return .= '                <a href="/'. $d->getSlug() . '" data-rel="external" teste>';
          $return .= '                  <fieldset class="ui-grid-a">';
          if ($d->retriveImageUrlByImageUsage("image-1-b")) {
            $return .= '                    <!--FOTO-->';
            $return .= '                    <div class="ui-block-a">';
            $return .= '                      <div class="fotinho">';
            $return .= '                        <img src="' . $d->retriveImageUrlByImageUsage("image-1-b") .'" alt="' . $d->getTitle() . '" width="100%">';
            $return .= '                      </div>';
            $return .= '                    </div>';
            $return .= '                    <!--/FOTO-->';
            $return .= '                    <!--MANCHETE-->';
            $return .= '                    <div class="ui-block-b">';
          }
          else {
            $return .= '                    <!--MANCHETE-->';
            $return .= '                    <div class="ui-block-b sfoto">';
          }
          $return .= '                      <p class="foto">' . $d->getTitle() . '</p>';
          $return .= '                    </div>';
          $return .= '                    <!--/MANCHETE-->';   
          $return .= '                  </fieldset>';
          $return .= '                  <div class="linha2"></div>';
          $return .= '                </a>';
          $return .= '              </li>';
          $return .= '              <!--/ITEM NOTICIA-->';
        }
      }
      echo $return;
    }
    die();
  }
    
  public function executeStreamingunivesp(sfWebRequest $request){
    $this->setLayout(false);
    $return = "";
    //if($request->isXmlHttpRequest()){
      $streaming = "univesptv";
      $channel_id = 3;
      $streaming = "univesptv";
      $url = "http://univesptv.cmais.com.br";

      $schedules = Doctrine_Query::create()
        ->select('s.*')
        ->from('Schedule s')
        ->where('s.is_live = ?', 1)
        ->andWhere('s.date_start < ?', date('Y-m-d H:i:s'))
        ->andWhere('s.date_end > ?', date('Y-m-d H:i:s'))
        ->andWhere('s.channel_id = ?', (int)$channel_id)
        ->orderBy('s.date_start asc')
        ->fetchOne();

      if($schedules){
        $block = false;
        if($schedules->getIsGeoblocked()){
          error_reporting(E_ALL);
          ini_set('display_errors', '1');
          require_once sfConfig::get('sf_lib_dir').'/vendor/geoip/geoip.inc';
          $gi = geoip_open(sfConfig::get('sf_lib_dir').'/vendor/geoip/GeoIP.dat',GEOIP_STANDARD);
          //"este conteúdo não está liberado para sua região"
          if(geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']) != "BR"){
            $block = true;
          }
          geoip_close($gi);
        }
        
        if($block){
          $return = "
          $('#livestream2').html('Este conteúdo não está liberado para sua região');
          $('#livestream2').show();
          var interval=self.setInterval('checkStreamingEnd()', 60000);
          ";
        }
        else{
          $return = "
          var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
          so.addVariable('controlbar', 'over');
          so.addVariable('autostart', 'true');
          so.addVariable('streamer', 'rtmp://200.136.27.12/live');
          so.addVariable('file', '".$streaming."');
          so.addVariable('type', 'video');
          so.addParam('allowscriptaccess','always');
          so.addParam('allowfullscreen','true');
          so.addParam('wmode','transparent');
          so.write('livestream2');
          $('#livestream2').show();
          var interval=self.setInterval('checkStreamingEnd()', 60000);
          ";
        }
      }
    //}
    echo $return;
    die();
  }

  public function executeStreamingendunivesp(sfWebRequest $request){
    $this->setLayout(false);
    $return = "";
    //if($request->isXmlHttpRequest()){
      $channel_id = $request->getParameter('channel_id');
      if($channel_id <= 0)
        $channel_id = 3;
      $schedules = Doctrine_Query::create()
        ->select('s.*')
        ->from('Schedule s')
        ->where('s.is_live = ?', 1)
        ->andWhere('s.date_start <= ?', date('Y-m-d H:i:s'))
        ->andWhere('s.date_end > ?', date('Y-m-d H:i:s'))
        ->andWhere('s.channel_id = ?', (int)$channel_id)
        ->orderBy('s.date_start asc')
        ->limit('1')
        ->execute();
      if((isset($schedules)) && (count($schedules) > 0)){
        $return .= "";
      }else{
        $return .= "self.location.href='http://univesptv.cmais.com.br'";
      }
    //}
    echo $return;
    die();
  }

  public function executeEpg(sfWebRequest $request){
   date_default_timezone_set('Brazil/East');

    $date = date('Ymd');
    $time = strtotime(date('Ymd'))+(24*60*60*7);
    //$time = strtotime(date('Ymd'));
    $end = date("Y-m-d 23:59:59", $time);
    $start = date('Y-m-d 00:00:00');
    $channels = array(1,3,4);
    
    $schedules = Doctrine_Query::create()
      ->select('s.*')
      ->from('Schedule s')
      ->whereIn('s.channel_id', $channels)
      ->andWhere('s.date_start > ?', $start)
      ->andWhere('s.date_start < ?', $end)
      ->orderBy('s.date_start asc')
      ->execute();
  
    $content = <<<EOT
<?xml version="1.0" encoding="utf-8"?>
  <tv date="{$date}000000" generator_info_name="cmais.com.br" generator_info_url="http://cmais.com.br" source_info_name="cmais+ O portal de conteúdo da Cultura" source_info_url="http://cmais.com.br">
    <channel id="59232">
      <display-name>CULTURA HD</display-name>
    </channel>
    <channel id="59233">
      <display-name>UNIVESP</display-name>
    </channel>
    <channel id="59234">
      <display-name>MULTICULTURA</display-name>
    </channel>
    <channel id="59256">
      <display-name>CULTURA 1-SEG</display-name>
    </channel>

EOT;
  
    foreach($schedules as $s){
      $t = explode(" ",$s->date_start);
      $cid = 59232;
      if($s->getChannelId() == 3)
      $cid = 59233;
      elseif($s->getChannelId() == 4)
      $cid = 59234;
  
      $desc = strip_tags($s->retriveDescription());
      if($s->getTitle() != $s->Program->getTitle())
        $tit = $s->Program->getTitle()." - ".$s->getTitle();
      else
        $tit = $s->Program->getTitle();
      
      if(substr($tit, strlen($tit)-3, 3) == " - ")
        $tit = $s->Program->getTitle();
      else if(substr($tit, strlen($tit)-3, 3) == "-  ")
        $tit = $s->Program->getTitle();
      
      $dad = str_replace("-","",$s->getDateStart());
      $dad = str_replace(":","",$dad);
      $dad = str_replace(" ","",$dad);
  
      $gmt = strtotime($s->getDateStart());
      //$gmt += 60*60*3;
      //$gmt2 = date("YmdHis", $gmt);
    $gmt2 = $dad;
  
      $content .= <<<EOT
    <programme channel="{$cid}" start="{$gmt2}">
      <title>{$tit}</title>
      <desc>{$desc}</desc>
      <category>0x20</category>
      <language>Portuguese</language>
      <length units="seconds">0</length>
      <audio>
        <stereo>stereo</stereo>
      </audio>
      <subtitles type="teletext">
        <language>Portuguese</language>
      </subtitles>
      <rating system="SBTVD">
        <value>0x1</value>
      </rating>
    </programme>

EOT;

      if($cid == 59232){
        $content .= <<<EOT
    <programme channel="59256" start="{$gmt2}">
      <title>{$tit}</title>
      <desc>{$desc}</desc>
      <category>0x20</category>
      <language>Portuguese</language>
      <length units="seconds">0</length>
      <audio>
        <stereo>stereo</stereo>
      </audio>
      <subtitles type="teletext">
        <language>Portuguese</language>
      </subtitles>
      <rating system="SBTVD">
        <value>0x1</value>
      </rating>
    </programme>

EOT;
      }
      
    }

    $content .= <<<EOT
  </tv>
EOT;

    die(str_replace("&","",$content));
  }  


  public function executeEnquetes(sfWebRequest $request){
    /*
    $request->checkCSRFProtection();
    //if(!$request->isXmlHttpRequest()) die();

    if($request->getParameter('opcao') > 0){
          
      $aa = Doctrine::getTable('AssetAnswer')->findOneById($request->getParameter('opcao'));
      $aq = Doctrine::getTable('AssetQuestion')->findOneById($aa->AssetQuestion->id);
      
      if($aq->getWorksheetId()!="" && $aq->getSpreadsheetId()!=""){
          
        $clientLibraryPath = sfConfig::get('sf_lib_dir').'/vendor/ZendGdata-1.11.11/library';
        $oldPath = set_include_path($clientLibraryPath);
        // load Zend Gdata libraries
        require_once 'Zend/Loader.php';
        Zend_Loader::loadClass('Zend_Gdata_Spreadsheets');
        Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
        
        // set credentials for ClientLogin authentication
        $user = "cmp@tvcultura.com.br";
        $pass = "alipio@28042011";
        
        try {
          // connect to API
          $service = Zend_Gdata_Spreadsheets::AUTH_SERVICE_NAME;
          $client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $service);
          $service = new Zend_Gdata_Spreadsheets($client);
        
          // set target spreadsheet and worksheet
          $ssKey = $aa->AssetQuestion->getSpreadsheetId();
          $wsKey = $aa->AssetQuestion->getWorksheetId();
        
          $row = array(
            "date" => date("d/m/Y H:i:s"), 
            "token" => time(), 
            "vote" => $_REQUEST["opcao"]
          );
        
          // insert new row
          $entryResult = $service->insertRow($row, $ssKey, $wsKey);
          //echo 'The ID of the new row entry is: ' . $entryResult->id;

          // get rows matching query
          $query = new Zend_Gdata_Spreadsheets_ListQuery();
          $query->setSpreadsheetKey($ssKey);
          $query->setWorksheetId($wsKey);
          //$query->setReverse('true');
          //$query->setSpreadsheetQuery("vote=\"6\" and date<\"3/6/2012 7:01:44\"");
          //$query->setSpreadsheetQuery("vote=\"6\" and date<\"".date("d/m/Y")." 8:00:00\"");
          
          $result = null;
          $total = 0;
          foreach($aq->Answers as $a){
            $query->setSpreadsheetQuery("vote=\"".$a->getId()."\" and token>\"".(time()-86400)."\"");
            $listFeed = $service->getListFeed($query);
            $result[] = array("answer"=>$a->Asset->getTitle(), "votes"=>count($listFeed));
            $total += count($listFeed);
          }
          
          $resultp = null;
          foreach($result as $r){
            $resultp[] = array("answer"=>$r["answer"], "votes"=>number_format(100*$r["votes"]/$total, 2)."%");
          }
          die(json_encode($resultp));
        } catch (Exception $e) {
          die('ERROR: '.$e->getMessage());
        }

      }

    }
     * 
     */
    if($request->getParameter('opcao') > 0){

      $aa = Doctrine::getTable('AssetAnswer')->findOneById($request->getParameter('opcao'));
      $aq = Doctrine::getTable('AssetQuestion')->findOneById($aa->AssetQuestion->id);
  
      $filename = "/var/frontend/web/uploads/assets/question/".$aa->AssetQuestion->id.".txt";
      $vote = date("d/m/Y H:i:s")."\t".time()."\t".$request->getParameter('opcao')."\n";
      $fp = fopen($filename,'a');
      fwrite($fp, $vote);
      fclose($fp); 
  
      $lines = file($filename);
      $total = count($lines);
      for($i=$total;$i>=0;$i--){
        $vote = trim(@end(explode("\t", $lines[$i])));
        if(intVal($vote)>0){
          @$votes[$vote] += 1;
        }
      }
  
      /*
      $file = fopen($filename, "r") or exit("Unable to open file!");
      $results = null;
      $votes = null;
      $total = 0;
      for($i=1;$i<10;$i++){
        $vote = trim(@end(explode("\t", fgets($file))));
        if(intVal($vote)>0){
          @$votes[$vote] += 1;
          $total++;
        }
      }
      
      
      while(!feof($file)){
        $vote = trim(@end(explode("\t", fgets($file))));
      }
      
      
      fclose($file);
      
      //var_dump($votes);
      */
      foreach($aq->Answers as $a){
        $results[] = @array("answer"=>$a->Asset->getTitle(), "votes"=>number_format(100*$votes[$a->getId()]/$total, 2)."%");
      }
      
      //echo "<br>".$filename."<br>t: ".$total."<br>".$results[0]["answer"].": ".$results[0]["votes"]."<br>".$results[1]["answer"].": ".$results[1]["votes"]."<br>";
      die(json_encode($results));
    }
    elseif($request->getParameter('asset_id') > 0){

      $a = Doctrine::getTable('Asset')->findOneById($request->getParameter('asset_id'));

      $aq = $a->AssetQuestion;
  
      $filename = "/var/frontend/web/uploads/assets/question/".$aq->id.".txt";
      $lines = file($filename);
      $total = count($lines);
      for($i=$total;$i>=0;$i--){
        $vote = trim(@end(explode("\t", $lines[$i])));
        if(intVal($vote)>0){
          @$votes[$vote] += 1;
        }
      }
      foreach($aq->Answers as $a){
        $results[] = @array("answer"=>$a->Asset->getTitle(), "votes"=>number_format(100*$votes[$a->getId()]/$total, 2)."%");
      }
      die(json_encode($results));
    }else{
      header("Location: http://cmais.com.br");
      die();
    }
  }     

  public function executeMensagem(sfWebRequest $request){
    //$request->checkCSRFProtection();
    $email_site = "quintal.tv@gmail.com";
    $subject = "[Quintal da Cultura][Pergunta para Filomena] ";
    if ($request->getParameter('formSection') == "chaComCharadas") {
      $email_site = "chacomcharadas@gmail.com";
      $subject = "[Quintal da Cultura][Chá com charadas] ";
    }
    $email_user = strip_tags($request->getParameter('email'));
    $nome_user = strip_tags($request->getParameter('nome'));
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
    if(mail($email_site, $subject . $nome_user.' <'.$email_user.'>', stripslashes(nl2br($msg)), $cabecalho))
      die("1");
    else
      die("0");
  }

  public function executeRanking(sfWebRequest $request){
    $a = Doctrine::getTable('Asset')->findOneById($request->getParameter('asset_id'));
    if($a->getId()>0){
      $s = $a->Sections;
      $filename = "/var/frontend/web/cocorico-ranking/ranking/".$s[0]->getSlug()."/".$request->getParameter('asset_id');
      $votes = intval(@file_get_contents($filename))+1;
      $fp = fopen($filename,'w+');
      fwrite($fp, $votes);
      fclose($fp);

      $filename = "/var/frontend/web/cocorico-ranking/ranking/".$s[0]->getSlug()."/total";
      $votes = intval(@file_get_contents($filename))+1;
      $fp = fopen($filename,'w+');
      fwrite($fp, $votes);
      fclose($fp);

      die("1");
    }
    die("0");
  }
  
  public function executeScheduledisplays(sfWebRequest $request)
  {
    
    $this->setLayout(false);
    $return = "";
    $section = Doctrine::getTable('Section')->findOneById($request->getParameter('section_id'));
    $paramDays = $request->getParameter('days');
    $days = explode(",", $paramDays);
    $block_slug = "";
    if(is_array($days)) {
      foreach($days as $day) {
        if($day == date('Y-m-d', time())) {
          $block_slug = $day;
          break;
        }
      }
      $block_slug = '2013-02-26';
      if ($block_slug == "") {
        if ($days[0] > date('Y-m-d', time()))
          $block_slug = $days[0];
        else
          $block_slug = end($days);
      }
    }
    $block = $section->retriveBlockBySlug($block_slug);
    
    $limit = $request->getParameter('limit'); 
    $orderby = $request->getParameter('orderby');
    
    $displays = Doctrine_Query::create()
      ->select('d.*')
      ->from('Display d')
      ->where('d.block_id = ?', $block->id)
      ->andWhere('d.is_active = ?', 1)
      ->andWhere('date_end IS NULL OR d.date_end >= ?', date('Y-m-d H:i:s', time()))
      ->orderBy($orderby)
      ->limit($limit)
      ->execute();
      
    $return .= '<p class="titulos" id="dia">'.$block->getTitle().'</p>';
    $headline = $displays[0]->getHeadline();
    $return .= '<p class="titulos" id="assunto">'.$headline.'</p>';
    foreach($displays as $d) {
      if ($headline != $d->getHeadline()) {
        $headline = $d->getHeadline();
        $return .= '<p class="titulos" id="assunto">'.$headline.'</p>';
      }
      $return .= '<p class="azul">'.$d->getTitle().'</p>';
      $return .= '<p>' . ($d->getDescription() ? $d->getDescription() : $d->gethtml()) . '</p>';  
    }
    echo $return;
    die();
  }
  
  public function executeBroadcastend(sfWebRequest $request){
    $this->setLayout(false);
    $return = "";
    $url_out = $request->getParameter('url_out');
    $program_id = $request->getParameter('program_id');
    $channel_id = $request->getParameter('channel_id');
    if($channel_id <= 0)
      $channel_id = 1;
    $schedules = Doctrine_Query::create()
      ->select('s.*')
      ->from('Schedule s')
      ->where('s.is_live = ?', 1)
      ->andWhere('s.date_start <= ?', date('Y-m-d H:i:s'))
      ->andWhere('s.date_end > ?', date('Y-m-d H:i:s'))
      ->andWhere('s.channel_id = ?', (int)$channel_id)
      ->andWhere('s.program_id = ?', (int)$program_id)
      ->orderBy('s.date_start asc')
      ->limit('1')
      ->execute();
    if((isset($schedules)) && (count($schedules) > 0)){
      $return .= "";
    }else{
      $return .= "self.location.href='".$url_out."'";
    }
    die($return);
  }


  public function executePodcasts(sfWebRequest $request){
    //Chega Slug x 404
    if(!$request->getParameter('slug'))
      $this->forward404();
    //Consulta Slug x 404
    $this->site = Doctrine::getTable('Site')->findOneBySlug($request->getParameter('slug'));
    if(!$this->site)
      $this->forward404();
    $this->setLayout(false);   
    // Consulta a lista de audios do site
    //$this->audios = Doctrine::getTable('Asset')->findBySiteIdAndAssetTypeId($this->site->getId(), 4);
    $this->audios = Doctrine_Query::create()
    ->select('a,*')
    ->from('Asset a')
    ->where('a.site_id= ?', (int)$this->site->getId())
    ->andwhere('a.asset_type_id = ?', (int)4)
    ->orderBy('a.created_at desc')
    ->limit(100)
    ->execute();
    //echo count($this->audios);
    
    //findBySiteIdAndAssetTypeId($this->site->getId(), 4, 100);
    //die('xml');
  }


  public function executePodcastsprograms(sfWebRequest $request){
    if($request->getParameter('channel_id')>0){
      //todos sites dos programs do canal x que tenham asset de audio
      $this->sites = Doctrine_Query::create()
        ->select('s.*')
        ->from('Site s, Program p, ChannelProgram cp')
        ->where('cp.channel_id = ?', (int)$request->getParameter('channel_id'))
        ->andWhere('p.id = cp.program_id')
        ->andWhere('p.is_active = ?', 1)
        ->andWhere('p.site_id = s.id')
        ->execute(); 
      $this->setLayout(false);
    }      
  }


  public function executeSearch(sfWebRequest $request){
    if($request->getParameter('query')!=""){
      $query = $request->getParameter('query');
      //Astolfo
      $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a')
        ->where('a.asset_type_id = 1 OR a.asset_type_id = 6 OR a.asset_type_id = 10')
        ->andWhere('a.title LIKE ?', '%'.$query.'%')
        ->limit(5)
        ->execute();
      $this->setLayout(false);
      if($assets){
        foreach($assets as $a){
          $result[] = array("value"=>"Astolfo: ".$a->getTitle(), "data"=>array("source"=>"Astolfo", "id"=>$a->getId()));
        }
      }
      
      //Wikipedia
      $opts = array('http' => array('user_agent' => 'Astolfo/1.0 (http://cmais.com.br)'));
      $context = stream_context_create($opts);
      $url = 'http://pt.wikipedia.org/w/api.php?action=query&list=allpages&format=json&apprefix='.urlencode($query).'&aplimit=5';
      $wiki_results = json_decode(file_get_contents($url, FALSE, $context));
      if($wiki_results->query->allpages){
        foreach ($wiki_results->query->allpages as $key => $value) {
          //$result[] = array("title"=>$value->title, "id"=>$value->pageid, "source"=>"Wikipedia");
          $result[] = array("value"=>"Wikipedia: ".$value->title, "data"=>array("source"=>"Wikipedia", "id"=>$value->pageid));
        }
      }
      
      echo json_encode(array("suggestions"=>$result));
      die();
    }
  }

  public function executeFetch(sfWebRequest $request){
    $source = "Astolfo";
    $id = 107258;
    $save = false;
    if($request->getParameter('id'))
      $id = $request->getParameter('id');
    if($request->getParameter('source'))
      $source = $request->getParameter('source');
    if($request->getParameter('save'))
      $save = $request->getParameter('save');

    if($source == "Astolfo"){
      $asset = Doctrine::getTable('Asset')->findOneById($id);
      if($asset->AssetType->getSlug() == "content")
        $content = "<p>".$asset->AssetContent->render()."</p>";
      else if($asset->AssetType->getSlug() == "video")
        $content = '<p><iframe width="100%" height="390" src="http://www.youtube.com/embed/'.$asset->AssetVideo->getYoutubeId().'?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe></p>';
      else
        $content = $this->getPartial('enquete', array('asset' => $asset));
      
      if($save){
        if(!is_dir("/var/frontend/web/cache/cmais.com.br/segundatela/jornaldacultura/contents/".strtolower($source)."-".strtolower($id))){
          mkdir("/var/frontend/web/cache/cmais.com.br/segundatela/jornaldacultura/contents/".strtolower($source)."-".strtolower($id));
        }
        $url = "cmais.com.br/segundatela/jornaldacultura/contents/".strtolower($source)."-".strtolower($id)."/index.html";
        $file = fopen("/var/frontend/web/cache/".$url, "w");
        fwrite($file, $content);
        $w = '<br /><a href="http://cmais.com.br" target="_blank"><img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/logocmais.png" /></a>';
        fwrite($file, $w);  
        fclose($file);
        die("http://".$url);
      }else{
        echo $content;
        die();
      }
      die();
    }
    if($source == "Wikipedia"){
      //Wikipedia search
      $opts = array('http' => array('user_agent' => 'Astolfo/1.0 (http://cmais.com.br)'));
      $context = stream_context_create($opts);
      //$url = 'http://pt.wikipedia.org/w/api.php?action=parse&format=json&pageid='.$id.'&section=0&contentformat=text%2Fplain&prop=text%7Cimages';
      $url = 'http://pt.wikipedia.org/w/api.php?action=parse&format=json&pageid='.$id.'&prop=text%7Cimages';
      $wiki_results = json_decode(file_get_contents($url, FALSE, $context), TRUE);
    
      $data = $wiki_results["parse"]["text"]["*"];
    
      //var_dump($wiki_results);
    
      //<li>REDIRECT <a href="/wiki/Luiz_In%C3%A1cio_Lula_da_Silva" title="Luiz Inácio Lula da Silva">Luiz Inácio Lula da Silva</a></li>
    
      preg_match('/<li>REDIRECT <a href="(.*?)" title="(.*?)"/si', $data, $match);
      if(!isset($match[2])){
        preg_match('/<li>Redirecionamento <a href="(.*?)" title="(.*?)"/si', $data, $match);
        //print_r($match);
        //die("1");
      }
      if(isset($match[2])){
        //print_r($match);
        //die("2");
        $url = 'http://pt.wikipedia.org/w/api.php?action=parse&format=json&page='.urlencode($match[2]).'&prop=text%7Cimages';
        $wiki_results = json_decode(file_get_contents($url, FALSE, $context), TRUE);
        //var_dump($wiki_results);
        $data = $wiki_results["parse"]["text"]["*"];
      }
    
      if($wiki_results["parse"]["title"]){
        $text = "";
        $info = "";
        $images = "";
        
        //Infobox
        /*
        preg_match('/<table\s*class="infobox"[^>]*>(.*?)<\/table>/si', $data, $match);
        if(count($match)<=0){
          preg_match('/<table\s*class="infobox_v2"[^>]*>(.*?)<\/table>/si', $data, $match);
          //print_r($match);
          //die();
          if(@$match[0]!=""){
            //$t = strip_tags($match[0], '<table><tr><td><img><a>');
            $info = @str_replace('<a href="/', '<a target=\"_blank\" href="http://pt.wikipedia.org/', $match[0]);
          }
        }
        else{
          //$t = strip_tags($match[0], '<table><tr><td><img><a>');
          $info = @str_replace('<a href="/', '<a target=\"_blank\" href="http://pt.wikipedia.org/', $match[0]);
        }
        */
    
        //Text    
        preg_match_all('/<p>(.*?)<\/p>/s', $data, $match);
        $text="";
        $i=0;
        foreach ($match[0] as $m) {
          if((($m != "<p><br></p>")&&($m != "<p><br /></p>"))&&($i<5)){
            $i++;
            $text .= $m;
          }
        }
        //Desambiguação
        $pos = strrpos($data, "Desambiguação");
        if($pos !== false){
          preg_match_all('/<ul>(.*?)<\/ul>/s', $data, $match);
          foreach ($match[0] as $m) {
            $text .= $m;
          }
        }
        
        $text = preg_replace('/<p><span\s*class="dablink"[^>]*>(.*?)<\/span><\/p>/s', '', $text);
        $text = preg_replace('/ \(<font\s*class="metadata"[^>]*>(.*?)<\/font>\)/s', '', $text);
        $text = preg_replace('/ \(<small>(.*?)\)/s', '', $text);
        $text = preg_replace('/<strong\s*class="error"[^>]*>(.*?)<\/strong>/s', '', $text);
        $text = preg_replace('/<sup\s*[^>]*>(.*?)<\/sup>/s', '', $text);
        $text = preg_replace('/<table\s*class="noprint"[^>]*>(.*?)<\/table>\)/s', '', $text);
        $text = preg_replace('/<ul\s*class="noprint"[^>]*>(.*?)<\/ul>\)/s', '', $text);
        $text = str_replace('<a href="/', '<a target=\"_blank\" href="http://pt.wikipedia.org/', $text);
        //$text = strip_tags($text, '<p><a><img>');
    
        if($info==""){
          //Images
          $values = $wiki_results["parse"]["images"];
          $i=0;
          foreach($values as $key => $value) {
            $pos = strrpos($value, ".jpg");
            if($pos === false) $pos = strrpos($value, ".gif");
            if($pos === false) $pos = strrpos($value, ".png");
            if($pos !== false && substr($value, 0, 4)!="Kit_" && substr($value, 0, 8)!="Crystal_" && substr($value, 0, 6)!="Fleche") {
              if(!in_array($value, array(
                "Flags_of_the_Union_of_South_American_Nations.gif",
                ))){
                $i++;
                if($i<=1){
                  $url2 = 'http://pt.wikipedia.org/w/api.php?action=query&titles=File:'.urlencode($value).'&prop=imageinfo&iiprop=url&format=json&iiurlwidth=200';
                  $wiki_images = @json_decode(file_get_contents($url2, FALSE, $context));
                  foreach(@$wiki_images->query->pages as $img){
                    $images = "<img src=\"".$img->imageinfo[0]->thumburl."\" alt=\"".$img->title."\" />";
                    //$images .= "<img src=\"".$img->imageinfo[0]->url."\" alt=\"".$img->title."\" />";
                  }
                }
              }
            }
          }      
        }
        if($save){
          if(!is_dir("/var/frontend/web/cache/cmais.com.br/segundatela/jornaldacultura/contents/".strtolower($source)."-".strtolower($id))){
            mkdir("/var/frontend/web/cache/cmais.com.br/segundatela/jornaldacultura/contents/".strtolower($source)."-".strtolower($id));
          }
          $url = "cmais.com.br/segundatela/jornaldacultura/contents/".strtolower($source)."-".strtolower($id)."/index.html";
          $file = fopen("/var/frontend/web/cache/".$url, "w");
          fwrite($file, $info);
          fwrite($file, $images);
          fwrite($file, $text);
    
          $w = '<br /><a href="http://pt.wikipedia.org/wiki/'.$wiki_results["parse"]["title"].'" target="_blank"><img class="wiki-logo" src="/ss/img/logowikipedia.png" /></a>';
          fwrite($file, $w);
    
          fclose($file);
          die("http://".$url);
        }else{
          echo $info;
          echo $images;
          echo $text;
        }
        die();
      } 
    }

  }


}

