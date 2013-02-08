<?php

/**
 * _site actions.
 *
 * @package    astolfo
 * @subpackage _site
 * @author     Emerson Estrella
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class _siteActions extends sfActions
{
  /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request){
    if($request->getParameter('object')){
      // current site
      $this->site = $request->getParameter('object');
      
      if($this->site->slug == "reportereco"){
      	/*
        if(!$request->getParameter('test')){
          header("Location: http://www2.tvcultura.com.br/reportereco");
          die();
        }
				 */
      }
			
      elseif($this->site->slug == "cocorico"){
        if(!$request->getParameter('test')){
          header("Location: http://www3.tvcultura.com.br/cocorico");
          die();
        }
      }
      elseif($this->site->slug == "cocorico2"){
        if(!$request->getParameter('test')){
          header("Location: http://www3.tvcultura.com.br/cocorico");
          die();
        }
      }
      elseif($this->site->slug == "doctv"){
      	if(!$request->getParameter('test')){
      		header("Location: http://www3.tvcultura.com.br/doctv");
      		die();
      	}
      }
			/*
      elseif($this->site->slug == "m"){
        if(!$request->getParameter('test')){
          header("Location: http://cmais.com.br");
          die();
        }
      }
			 * 
			 */
      
      // title
      $this->getResponse()->setTitle('cmais+ O portal de conteúdo da Cultura', false);

      // home section      
      $this->section = Doctrine_Query::create()
      ->select('s.*')
        ->from('Section s')
        ->where('s.site_id = ?', (int)$this->site->id)
        ->andWhere('s.is_homepage = 1')
        ->orderby('s.display_order')
        ->fetchOne();
      if($this->section){
        $this->getRequest()->setParameter('object', $this->section);
        $this->forward('_section', 'index');
      }
      else{
        $this->section = Doctrine_Query::create()
        ->select('s.*')
          ->from('Section s')
          ->where('s.site_id = ?', (int)$this->site->id)
          ->andWhereIn('s.slug', array('home', 'home-page', 'homepage'))
          ->orderby('s.display_order')
          ->fetchOne();
        if($this->section){
          $this->getRequest()->setParameter('object', $this->section);
          $this->forward('_section', 'index');
        }else
          $this->forward404();
      }
    }
  }

}