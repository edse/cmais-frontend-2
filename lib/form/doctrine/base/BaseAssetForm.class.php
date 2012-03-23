<?php

/**
 * Asset form base class.
 *
 * @method Asset getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'asset_type_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AssetType'), 'add_empty' => false)),
      'site_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'add_empty' => true)),
      'user_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'category_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'title'           => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormInputText(),
      'display_order'   => new sfWidgetFormInputText(),
      'is_active'       => new sfWidgetFormInputCheckbox(),
      'views'           => new sfWidgetFormInputText(),
      'ugc'             => new sfWidgetFormInputCheckbox(),
      'date_start'      => new sfWidgetFormDateTime(),
      'date_end'        => new sfWidgetFormDateTime(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
      'slug'            => new sfWidgetFormInputText(),
      'categories_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Category')),
      'sections_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Section')),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_type_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AssetType'))),
      'site_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Site'), 'required' => false)),
      'user_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'category_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'required' => false)),
      'title'           => new sfValidatorString(array('max_length' => 255)),
      'description'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'display_order'   => new sfValidatorInteger(array('required' => false)),
      'is_active'       => new sfValidatorBoolean(array('required' => false)),
      'views'           => new sfValidatorInteger(array('required' => false)),
      'ugc'             => new sfValidatorBoolean(array('required' => false)),
      'date_start'      => new sfValidatorDateTime(array('required' => false)),
      'date_end'        => new sfValidatorDateTime(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
      'slug'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'categories_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Category', 'required' => false)),
      'sections_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Section', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Asset', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('asset[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Asset';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['categories_list']))
    {
      $this->setDefault('categories_list', $this->object->Categories->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['sections_list']))
    {
      $this->setDefault('sections_list', $this->object->Sections->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveCategoriesList($con);
    $this->saveSectionsList($con);

    parent::doSave($con);
  }

  public function saveCategoriesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['categories_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Categories->getPrimaryKeys();
    $values = $this->getValue('categories_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Categories', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Categories', array_values($link));
    }
  }

  public function saveSectionsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sections_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Sections->getPrimaryKeys();
    $values = $this->getValue('sections_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Sections', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Sections', array_values($link));
    }
  }

}
