<?php

/**
 * AssetVideo form base class.
 *
 * @method AssetVideo getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetVideoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'asset_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'youtube_id'         => new sfWidgetFormInputText(),
      'youtube_thumb'      => new sfWidgetFormInputText(),
      'file'               => new sfWidgetFormInputText(),
      'original_file'      => new sfWidgetFormInputText(),
      'headline'           => new sfWidgetFormInputText(),
      'genre'              => new sfWidgetFormInputText(),
      'source'             => new sfWidgetFormInputText(),
      'author'             => new sfWidgetFormInputText(),
      'width'              => new sfWidgetFormInputText(),
      'height'             => new sfWidgetFormInputText(),
      'extension'          => new sfWidgetFormInputText(),
      'original_file_size' => new sfWidgetFormInputText(),
      'frame_rate'         => new sfWidgetFormInputText(),
      'bitrate'            => new sfWidgetFormInputText(),
      'duration'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'youtube_id'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'youtube_thumb'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'file'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'original_file'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'headline'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'genre'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'source'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'author'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'width'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'height'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'extension'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'original_file_size' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'frame_rate'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'bitrate'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'duration'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_video[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetVideo';
  }

}
