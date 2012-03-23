<?php

/**
 * Site form base class.
 *
 * @method Site getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSiteForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'type'                => new sfWidgetFormInputText(),
      'title'               => new sfWidgetFormInputText(),
      'description'         => new sfWidgetFormInputText(),
      'url'                 => new sfWidgetFormInputText(),
      'path'                => new sfWidgetFormInputText(),
      'headline'            => new sfWidgetFormInputText(),
      'meta_title'          => new sfWidgetFormInputText(),
      'meta_charset'        => new sfWidgetFormInputText(),
      'meta_classification' => new sfWidgetFormInputText(),
      'meta_description'    => new sfWidgetFormInputText(),
      'meta_keywords'       => new sfWidgetFormInputText(),
      'meta_author'         => new sfWidgetFormInputText(),
      'youtube_channel'     => new sfWidgetFormInputText(),
      'youtube_genre'       => new sfWidgetFormInputText(),
      'twitter_account'     => new sfWidgetFormInputText(),
      'twitter_url'         => new sfWidgetFormInputText(),
      'facebook_url'        => new sfWidgetFormInputText(),
      'image_icon'          => new sfWidgetFormInputText(),
      'image_thumb'         => new sfWidgetFormInputText(),
      'contact_email'       => new sfWidgetFormInputText(),
      'is_active'           => new sfWidgetFormInputCheckbox(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
      'slug'                => new sfWidgetFormInputText(),
      'users_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'type'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'title'               => new sfValidatorString(array('max_length' => 255)),
      'description'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'url'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'path'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'headline'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_title'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_charset'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_classification' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_description'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_keywords'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'meta_author'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'youtube_channel'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'youtube_genre'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twitter_account'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'twitter_url'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'facebook_url'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_icon'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_thumb'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'contact_email'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'is_active'           => new sfValidatorBoolean(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
      'slug'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'users_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Site', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('site[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Site';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['users_list']))
    {
      $this->setDefault('users_list', $this->object->Users->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveUsersList($con);

    parent::doSave($con);
  }

  public function saveUsersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['users_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Users->getPrimaryKeys();
    $values = $this->getValue('users_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Users', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Users', array_values($link));
    }
  }

}
