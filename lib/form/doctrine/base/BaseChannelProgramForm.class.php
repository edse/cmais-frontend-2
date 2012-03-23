<?php

/**
 * ChannelProgram form base class.
 *
 * @method ChannelProgram getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChannelProgramForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'channel_id' => new sfWidgetFormInputHidden(),
      'program_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'channel_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('channel_id')), 'empty_value' => $this->getObject()->get('channel_id'), 'required' => false)),
      'program_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('program_id')), 'empty_value' => $this->getObject()->get('program_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('channel_program[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ChannelProgram';
  }

}
