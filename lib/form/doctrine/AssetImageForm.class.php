<?php

/**
 * AssetImage form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetImageForm extends BaseAssetImageForm
{
  public function configure()
  {
    
    unset($this['asset_id'], $this['original_file']);
    
    $this->widgetSchema['file'] = new sfWidgetAstolfoFileLinkForm(array('path'=>'/uploads/assets/image/default', 'extension'=>'jpg', 'is_image'=>true, 'hidden_id'=>'asset_AssetImage_file', 'hidden_name'=>'asset[AssetImage][file]'));

    /*
    $this->widgetSchema['original_file'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Original File',
      'file_src'  => '/uploads/assets/image/image-6/'.$this->getObject()->getFile().'.jpg',
      'is_image'  => true,
      #'edit_mode' => !$this->isNew(),
      #'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));
    $this->validatorSchema['original_file'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/assets/image/original',
      'mime_types' => 'web_images',
      //'validated_file_class' => 'sfResizedFile',
    ));
    $this->validatorSchema['original_file_delete'] = new sfValidatorPass();
    */

    $this->validatorSchema['genre'] = new sfValidatorPass();    
    $this->validatorSchema['source'] = new sfValidatorPass();
    $this->validatorSchema['author'] = new sfValidatorPass();    
	
  }
}
