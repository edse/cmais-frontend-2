<?php

/**
 * Channel form base class.
 *
 * @method Channel getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChannelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'organization_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'add_empty' => true)),
      'title'           => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormInputText(),
      'image_icon'      => new sfWidgetFormInputText(),
      'image_thumb'     => new sfWidgetFormInputText(),
      'url'             => new sfWidgetFormInputText(),
      'is_active'       => new sfWidgetFormInputCheckbox(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'slug'            => new sfWidgetFormInputText(),
      'programs_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Program')),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'organization_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Organization'), 'required' => false)),
      'title'           => new sfValidatorString(array('max_length' => 255)),
      'description'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_icon'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_thumb'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_active'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'slug'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'programs_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Program', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Channel', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('channel[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Channel';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['programs_list']))
    {
      $this->setDefault('programs_list', $this->object->Programs->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveProgramsList($con);

    parent::doSave($con);
  }

  public function saveProgramsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['programs_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Programs->getPrimaryKeys();
    $values = $this->getValue('programs_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Programs', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Programs', array_values($link));
    }
  }

}
