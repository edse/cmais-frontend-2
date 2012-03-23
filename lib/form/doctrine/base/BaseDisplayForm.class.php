<?php

/**
 * Display form base class.
 *
 * @method Display getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDisplayForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'block_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'add_empty' => true)),
      'asset_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => true)),
      'type'          => new sfWidgetFormInputText(),
      'title'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormInputText(),
      'headline'      => new sfWidgetFormInputText(),
      'file'          => new sfWidgetFormInputText(),
      'label'         => new sfWidgetFormInputText(),
      'url'           => new sfWidgetFormInputText(),
      'target'        => new sfWidgetFormInputText(),
      'image'         => new sfWidgetFormInputText(),
      'html'          => new sfWidgetFormTextarea(),
      'date_start'    => new sfWidgetFormDateTime(),
      'date_end'      => new sfWidgetFormDateTime(),
      'display_order' => new sfWidgetFormInputText(),
      'is_active'     => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'block_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Block'), 'required' => false)),
      'asset_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'required' => false)),
      'type'          => new sfValidatorString(array('max_length' => 255)),
      'title'         => new sfValidatorString(array('max_length' => 255)),
      'description'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'headline'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'file'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'label'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'target'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'html'          => new sfValidatorString(array('required' => false)),
      'date_start'    => new sfValidatorDateTime(array('required' => false)),
      'date_end'      => new sfValidatorDateTime(array('required' => false)),
      'display_order' => new sfValidatorInteger(array('required' => false)),
      'is_active'     => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('display[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Display';
  }

}
