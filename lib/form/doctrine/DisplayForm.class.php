<?php

/**
 * Display form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DisplayForm extends BaseDisplayForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['display_order'] = new sfWidgetFormInputHidden();

    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 350px;'));
    
    $this->widgetSchema['block_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['asset_id'] = new sfWidgetFormInputHidden();

    $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Image',
      'file_src'  => '/uploads/displays/'.$this->getObject()->getImage(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));    
    $this->validatorSchema['image'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/displays',
      'mime_types' => 'web_images',
    ));
    $this->validatorSchema['image_delete'] = new sfValidatorPass();
    
    $this->widgetSchema['date_start'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));

    $this->widgetSchema['date_end'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));
    
    $this->widgetSchema['html'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px;'));

  }
}
