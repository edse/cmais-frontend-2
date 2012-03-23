<?php

/**
 * AssetFile form base class.
 *
 * @method AssetFile getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetFileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'asset_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'file'      => new sfWidgetFormInputText(),
      'genre'     => new sfWidgetFormInputText(),
      'source'    => new sfWidgetFormInputText(),
      'author'    => new sfWidgetFormInputText(),
      'extension' => new sfWidgetFormInputText(),
      'file_size' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'file'      => new sfValidatorString(array('max_length' => 255)),
      'genre'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'source'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'author'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'extension' => new sfValidatorString(array('max_length' => 255)),
      'file_size' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('asset_file[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetFile';
  }

}
