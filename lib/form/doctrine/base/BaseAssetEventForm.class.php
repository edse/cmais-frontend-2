<?php

/**
 * AssetEvent form base class.
 *
 * @method AssetEvent getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'asset_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'title'       => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'headline'    => new sfWidgetFormInputText(),
      'date'        => new sfWidgetFormDate(),
      'url'         => new sfWidgetFormInputText(),
      'country'     => new sfWidgetFormInputText(),
      'state'       => new sfWidgetFormInputText(),
      'city'        => new sfWidgetFormInputText(),
      'address'     => new sfWidgetFormInputText(),
      'directions'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'title'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'headline'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'        => new sfValidatorDate(array('required' => false)),
      'url'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'country'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'state'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'city'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'address'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'directions'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetEvent';
  }

}
