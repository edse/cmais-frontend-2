<?php

/**
 * AssetPerson form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetPersonForm extends BaseAssetPersonForm
{
  public function configure()
  {
    
    unset($this['asset_id']);
    
    $this->widgetSchema['name'] = new sfWidgetFormInputText(array(), array('style' => 'width: 350px;'));

    $this->widgetSchema['headline'] = new sfWidgetFormInputText(array(), array('style' => 'width: 450px;'));

    $this->widgetSchema['bio'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px; height: 250px;'));

  }
}
