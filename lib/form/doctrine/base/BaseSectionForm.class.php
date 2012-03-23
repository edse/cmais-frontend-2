<?php

/**
 * Section form base class.
 *
 * @method Section getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSectionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'parent_section_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'add_empty' => true)),
      'site_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => false)),
      'title'             => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
      'display_order'     => new sfWidgetFormInputText(),
      'is_homepage'       => new sfWidgetFormInputCheckbox(),
      'is_editorial'      => new sfWidgetFormInputCheckbox(),
      'is_visible'        => new sfWidgetFormInputCheckbox(),
      'is_active'         => new sfWidgetFormInputCheckbox(),
      'url'               => new sfWidgetFormInputText(),
      'keywords'          => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'slug'              => new sfWidgetFormInputText(),
      'assets_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Asset')),
      'editors_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'parent_section_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Parent'), 'required' => false)),
      'site_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Site'))),
      'title'             => new sfValidatorString(array('max_length' => 255)),
      'description'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'display_order'     => new sfValidatorInteger(array('required' => false)),
      'is_homepage'       => new sfValidatorBoolean(array('required' => false)),
      'is_editorial'      => new sfValidatorBoolean(array('required' => false)),
      'is_visible'        => new sfValidatorBoolean(array('required' => false)),
      'is_active'         => new sfValidatorBoolean(array('required' => false)),
      'url'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'keywords'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
      'slug'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'assets_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Asset', 'required' => false)),
      'editors_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('section[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Section';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['assets_list']))
    {
      $this->setDefault('assets_list', $this->object->Assets->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['editors_list']))
    {
      $this->setDefault('editors_list', $this->object->Editors->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveAssetsList($con);
    $this->saveEditorsList($con);

    parent::doSave($con);
  }

  public function saveAssetsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['assets_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Assets->getPrimaryKeys();
    $values = $this->getValue('assets_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Assets', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Assets', array_values($link));
    }
  }

  public function saveEditorsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['editors_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Editors->getPrimaryKeys();
    $values = $this->getValue('editors_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Editors', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Editors', array_values($link));
    }
  }

}
