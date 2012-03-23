<?php

/**
 * SiteUser form base class.
 *
 * @method SiteUser getObject() Returns the current form's model object
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSiteUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'site_id' => new sfWidgetFormInputHidden(),
      'user_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'site_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('site_id')), 'empty_value' => $this->getObject()->get('site_id'), 'required' => false)),
      'user_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('site_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SiteUser';
  }

}
