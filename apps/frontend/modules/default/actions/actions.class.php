<?php

/**
 * _asset actions.
 *
 * @package    astolfo
 * @subpackage _asset
 * @author     Emerson Estrella
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions
{
  /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeError404(sfWebRequest $request){
    // URI
    $this->uri = $request->getUri();
    // URL
    $this->url = @current(explode('?',$this->uri));
    
    /*
    // main site
    $this->mainSite = Doctrine::getTable('Site')->findOneBySlug('cmais');

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
    }
    */
    //if(is_file('sites/culturafm/error404Success.php')){
      $this->setTemplate('sites/culturafm/error404', 'default');
   // } 
        // title
    $this->getResponse()->setTitle('cmais+ O portal de conteúdo da Cultura - Puxa, puxa que puxa! Não conseguimos encontrar a página...', false);

  }

}