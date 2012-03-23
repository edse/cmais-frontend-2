<?php

/**
 * AssetBroadcast form base class.
 *
 * @method AssetBroadcast getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetBroadcastForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'asset_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'number'               => new sfWidgetFormInputText(),
      'headline'             => new sfWidgetFormInputText(),
      'headline_long'        => new sfWidgetFormInputText(),
      'date_recording_start' => new sfWidgetFormDateTime(),
      'date_recording_end'   => new sfWidgetFormDateTime(),
      'date_exibition_start' => new sfWidgetFormDateTime(),
      'date_exibition_end'   => new sfWidgetFormDateTime(),
      'cam1'                 => new sfWidgetFormInputText(),
      'cam2'                 => new sfWidgetFormInputText(),
      'cam3'                 => new sfWidgetFormInputText(),
      'cam4'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'number'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'headline'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'headline_long'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date_recording_start' => new sfValidatorDateTime(array('required' => false)),
      'date_recording_end'   => new sfValidatorDateTime(array('required' => false)),
      'date_exibition_start' => new sfValidatorDateTime(),
      'date_exibition_end'   => new sfValidatorDateTime(array('required' => false)),
      'cam1'                 => new sfValidatorString(array('max_length' => 255)),
      'cam2'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cam3'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'cam4'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_broadcast[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetBroadcast';
  }

}
