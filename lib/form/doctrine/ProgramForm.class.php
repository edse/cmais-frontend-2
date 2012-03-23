<?php

/**
 * Program form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProgramForm extends BaseProgramForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['image_icon'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Program icon',
      'file_src'  => '/uploads/programs/'.$this->getObject()->getImageIcon(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));    
    $this->validatorSchema['image_icon'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/programs',
      'mime_types' => array(
                        'image/jpeg',
                        'image/pjpeg',
                        'image/png',
                        'image/x-png',
                        'image/gif',
                        'text/plain'
                      ),
    ));
    $this->validatorSchema['image_icon_delete'] = new sfValidatorPass();
    //
    $this->widgetSchema['image_thumb'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Program thumb',
      'file_src'  => '/uploads/programs/'.$this->getObject()->getImageThumb(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));    
    $this->validatorSchema['image_thumb'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/programs',
      'mime_types' => 'web_images',
    ));
    $this->validatorSchema['image_thumb_delete'] = new sfValidatorPass();
    //
    $this->widgetSchema['image_live'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Program live image',
      'file_src'  => '/uploads/programs/'.$this->getObject()->getImageLive(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));    
    $this->validatorSchema['image_live'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/programs',
      'mime_types' => 'web_images',
    ));
    $this->validatorSchema['image_live_delete'] = new sfValidatorPass();
    
    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px; height: 65px;'));
    $this->widgetSchema['long_description'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px; height: 130px;'));

    $this->widgetSchema['schedule'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px; height: 65px;'));

    $q = Doctrine_Query::create()
      ->select('s.*')
      ->from('Site s')
      ->where('s.is_active = ?', true)
      ->orderBy('s.title');
    $this->widgetSchema['site_id'] = new sfWidgetFormDoctrineChoice(array(
      'model'     => 'Site',
      'add_empty' => true,
      'query'     => $q
    ));

  }
}
