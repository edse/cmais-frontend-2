<?php

/**
 * AssetAudio form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetAudioForm extends BaseAssetAudioForm
{
  public function configure()
  {
    unset($this['asset_id'], $this['original_file']);
    
    $this->widgetSchema['file'] = new sfWidgetAstolfoFileLinkForm(array('path'=>'/uploads/assets/audio/default', 'extension'=>'mp3', 'is_image'=>false, 'hidden_id'=>'asset_AssetAudio_file', 'hidden_name'=>'asset[AssetAudio][file]'));
    
    /*
    $this->widgetSchema['file'] = new sfWidgetAstolfoTextPlainForm();
	
    $this->widgetSchema['original_file'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Original File',
      'file_src'  => '/uploads/assets/audio/original/'.$this->getObject()->getFile().'.'.$this->getObject()->getExtension(),
      'is_image'  => false,
      #'edit_mode' => !$this->isNew(),
      #'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));    
    $this->validatorSchema['original_file'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/assets/audio/original',
      'mime_types' => sfConfig::get('app_mimetypes_audio'),
      //'validated_file_class' => 'sfResizedFile',
    ));
    $this->validatorSchema['original_file_delete'] = new sfValidatorPass();
    */

    $this->validatorSchema['genre'] = new sfValidatorPass();
    $this->validatorSchema['source'] = new sfValidatorPass();
    $this->validatorSchema['author'] = new sfValidatorPass();

  }
}
