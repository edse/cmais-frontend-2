<?php

/**
 * AssetSeason form base class.
 *
 * @method AssetSeason getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetSeasonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'asset_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'headline' => new sfWidgetFormInputText(),
      'number'   => new sfWidgetFormInputText(),
      'year'     => new sfWidgetFormInputText(),
      'director' => new sfWidgetFormInputText(),
      'url'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'headline' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'number'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'year'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'director' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_season[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetSeason';
  }

}
