<?php

/**
 * Log form base class.
 *
 * @method Log getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'user_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'site_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => true)),
      'asset'       => new sfWidgetFormInputText(),
      'asset_title' => new sfWidgetFormInputText(),
      'action'      => new sfWidgetFormInputText(),
      'class'       => new sfWidgetFormInputText(),
      'ip'          => new sfWidgetFormInputText(),
      'status'      => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'site_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'required' => false)),
      'asset'       => new sfValidatorInteger(array('required' => false)),
      'asset_title' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'action'      => new sfValidatorString(array('max_length' => 255)),
      'class'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ip'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }

}
