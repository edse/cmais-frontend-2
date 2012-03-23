<?php

/**
 * AssetAudio form base class.
 *
 * @method AssetAudio getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetAudioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'asset_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'file'               => new sfWidgetFormInputText(),
      'original_file'      => new sfWidgetFormInputText(),
      'genre'              => new sfWidgetFormInputText(),
      'source'             => new sfWidgetFormInputText(),
      'author'             => new sfWidgetFormInputText(),
      'interpret'          => new sfWidgetFormInputText(),
      'composer'           => new sfWidgetFormInputText(),
      'year'               => new sfWidgetFormInputText(),
      'label'              => new sfWidgetFormInputText(),
      'extension'          => new sfWidgetFormInputText(),
      'original_file_size' => new sfWidgetFormInputText(),
      'duration'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'file'               => new sfValidatorString(array('max_length' => 255)),
      'original_file'      => new sfValidatorString(array('max_length' => 255)),
      'genre'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'source'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'author'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'interpret'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'composer'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'year'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'label'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'extension'          => new sfValidatorString(array('max_length' => 255)),
      'original_file_size' => new sfValidatorString(array('max_length' => 255)),
      'duration'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_audio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetAudio';
  }

}
