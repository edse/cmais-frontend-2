<?php

/**
 * AssetCategory form base class.
 *
 * @method AssetCategory getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'asset_id'    => new sfWidgetFormInputHidden(),
      'category_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'asset_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('asset_id')), 'empty_value' => $this->getObject()->get('asset_id'), 'required' => false)),
      'category_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('category_id')), 'empty_value' => $this->getObject()->get('category_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetCategory';
  }

}
