<?php

/**
 * AssetLink form base class.
 *
 * @method AssetLink getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAssetLinkForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'asset_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'), 'add_empty' => false)),
      'name'     => new sfWidgetFormInputText(),
      'url'      => new sfWidgetFormInputText(),
      'target'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'asset_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Asset'))),
      'name'     => new sfValidatorString(array('max_length' => 255)),
      'url'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'target'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asset_link[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AssetLink';
  }

}
