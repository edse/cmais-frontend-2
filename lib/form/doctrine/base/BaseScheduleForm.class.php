<?php

/**
 * Schedule form base class.
 *
 * @method Schedule getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseScheduleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'channel_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Channel'), 'add_empty' => true)),
      'program_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Program'), 'add_empty' => true)),
      'type'              => new sfWidgetFormInputText(),
      'title'             => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
      'description_short' => new sfWidgetFormInputText(),
      'image'             => new sfWidgetFormInputText(),
      'image_source'      => new sfWidgetFormInputText(),
      'date_start'        => new sfWidgetFormDateTime(),
      'date_end'          => new sfWidgetFormDateTime(),
      'is_active'         => new sfWidgetFormInputCheckbox(),
      'is_important'      => new sfWidgetFormInputCheckbox(),
      'is_live'           => new sfWidgetFormInputCheckbox(),
      'url'               => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'channel_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Channel'), 'required' => false)),
      'program_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Program'), 'required' => false)),
      'type'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'description_short' => new sfValidatorPass(array('required' => false)),
      'image'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_source'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date_start'        => new sfValidatorDateTime(),
      'date_end'          => new sfValidatorDateTime(),
      'is_active'         => new sfValidatorBoolean(array('required' => false)),
      'is_important'      => new sfValidatorBoolean(array('required' => false)),
      'is_live'           => new sfValidatorBoolean(array('required' => false)),
      'url'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('schedule[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Schedule';
  }

}
