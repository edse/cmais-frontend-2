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

        if($schedules[0]->program_id == 542){
          die("self.location.href='http://tvcultura.cmais.com.br/doctorwho/aovivo'");
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

        if($schedules[0]->program_id == 542){
          die("self.location.href='http://tvcultura.cmais.com.br/doctorwho/aovivo'");
        }
       
	/*        
	if($schedules[0]->program_id == 2){
          die("self.location.href='http://tvcultura.cmais.com.br/jornaldacultura/ao-vivo'");
        }
	*/
       
        if($schedules[0]->program_id == 77){
          die("self.location.href='http://tvcultura.cmais.com.br/cartaoverde/aovivo'");
        }
        
               
        if($schedules[0]->program_id == 75){
          die("self.location.href='http://tvcultura.cmais.com.br/rodaviva/transmissao'");
        }
               
        if($schedules[0]->program_id == 547){
          die("self.location.href='http://cmais.com.br/carnaval2012'");
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
        	var so = new SWFObject('/portal/js/mediaplayer/player.swf','mpl','640','364','9');
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
        $return .= '</ul><div class="botoes"><a href="/grade">Grade completa</a><a href="/programas-de-a-z">Todos os programas de A a Z</a></div>';
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
        $return .= '</ul><div class="botoes"><a href="/grade?c=univesptv">Grade completa</a><a href="/programas-de-a-z">Todos os programas de A a Z</a></div>';
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
        $return .= '</ul><div class="botoes"><a href="/grade?c=multicultura">Grade completa</a><a href="/programas-de-a-z">Todos os programas de A a Z</a></div>';
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
        $return .= '</ul><div class="botoes"><a href="/grade?c=tvratimbum">Grade completa</a><a href="/programas-de-a-z">Todos os programas de A a Z</a></div>';
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
        $return .= '</ul><div class="botoes"><a href="/programas-de-a-z">Todos os programas de A a Z</a></div>';
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
        $return .= '</ul><div class="botoes"><a href="/grade">Grade completa</a><a href="/programas-de-a-z">Todos os programas de A a Z</a></div>';
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
        $return .= '<div class="botoes"><a href="/grade?c=multicultura">Grade completa</a></div>';
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
	          $return .= '<li><a href="'.$a->retriveUrl().'" class="aImg" title="'.$a->getDescription().'">';
	          $return .= '<img alt="'.$a->getTitle().'" src="'.$a->retriveImageUrlByImageUsage("image-3-b").'"></a>';
	          //$return .= '<a href="/'.$a->getSlug().'" class="aTxt"><span class="nomeRlacionado">'.$a->getTitle().'</span>';
	          $return .= '<a href="/'.$a->getSlug().'" class="aTxt" title="'.$a->Site->getTitle().'"><span class="nomeRlacionado">'.$a->getTitle().'</span>';
	          //<span class="nomeItem">'.$a->getDescription().'</span>
	          $return .= '</a></li>';
	        }
        //}
      }
      echo $return;
    //}
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
	        var so = new SWFObject('/portal/js/mediaplayer/player.swf','mpl','640','364','9');
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

}
