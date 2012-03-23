<?php

/**
 * Program form base class.
 *
 * @method Program getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProgramForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'site_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => true)),
      'channel_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Channel'), 'add_empty' => true)),
      'type'             => new sfWidgetFormInputText(),
      'title'            => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormInputText(),
      'long_description' => new sfWidgetFormInputText(),
      'schedule'         => new sfWidgetFormInputText(),
      'image_icon'       => new sfWidgetFormInputText(),
      'image_thumb'      => new sfWidgetFormInputText(),
      'image_live'       => new sfWidgetFormInputText(),
      'is_active'        => new sfWidgetFormInputCheckbox(),
      'is_in_menu'       => new sfWidgetFormInputCheckbox(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
      'slug'             => new sfWidgetFormInputText(),
      'channels_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Channel')),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'site_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'required' => false)),
      'channel_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Channel'), 'required' => false)),
      'type'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'            => new sfValidatorString(array('max_length' => 255)),
      'description'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'long_description' => new sfValidatorPass(array('required' => false)),
      'schedule'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_icon'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_thumb'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_live'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_active'        => new sfValidatorBoolean(array('required' => false)),
      'is_in_menu'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
      'slug'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'channels_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Channel', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Program', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('program[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Program';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['channels_list']))
    {
      $this->setDefault('channels_list', $this->object->Channels->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveChannelsList($con);

    parent::doSave($con);
  }

  public function saveChannelsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['channels_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Channels->getPrimaryKeys();
    $values = $this->getValue('channels_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Channels', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Channels', array_values($link));
    }
  }

}
