<?php

/**
 * Block form base class.
 *
 * @method Block getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBlockForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'section_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Section'), 'add_empty' => true)),
      'title'         => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormInputText(),
      'query'         => new sfWidgetFormInputText(),
      'is_random'     => new sfWidgetFormInputCheckbox(),
      'is_automatic'  => new sfWidgetFormInputCheckbox(),
      'items'         => new sfWidgetFormInputText(),
      'items_order'   => new sfWidgetFormInputText(),
      'display_order' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
      'slug'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'section_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Section'), 'required' => false)),
      'title'         => new sfValidatorString(array('max_length' => 255)),
      'description'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'query'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_random'     => new sfValidatorBoolean(array('required' => false)),
      'is_automatic'  => new sfValidatorBoolean(array('required' => false)),
      'items'         => new sfValidatorInteger(array('required' => false)),
      'items_order'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'display_order' => new sfValidatorInteger(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
      'slug'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('block[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Block';
  }

}
