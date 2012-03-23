<?php
/**
 * Asset form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 */

class BackendSiteForm extends SiteForm
{

  public function configure()
  {
	
	  //$this->embedRelation('Program');
	
    //parent::configure();
	
	//$this->setWidget('password', new sfWidgetFormInput());
    //$this->setValidator('password', new sfValidatorString(array('max_length' => 255, 'required' => false)));
	
	
	/*
    $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Company logo',
      'file_src'  => '/uploads/jobs/'.$this->getObject()->getLogo(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));
    $this->validatorSchema['logo_delete'] = new sfValidatorPass();
	*/
  }
}
