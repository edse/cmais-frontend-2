<?php

/**
 * AssetContent form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetContentForm extends BaseAssetContentForm
{
  public function configure()
  {
    unset($this['asset_id']);
    $this->widgetSchema['content'] = new sfWidgetAstolfoAssetContentForm(array(
      'width'  => 550,
      'height' => 350,
      'config' => 'theme_advanced_disable: "anchor,image,cleanup,help"'
    ));
    $this->validatorSchema['content'] = new sfValidatorPass();
    
    $this->widgetSchema['headline'] = new sfWidgetFormInputText(array(), array('style' => 'width: 450px;'));
    $this->widgetSchema['headline_short'] = new sfWidgetFormInputText(array(), array('style' => 'width: 250px;'));
    $this->widgetSchema['headline_long'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px;'));
   
    /*
    $this->widgetSchema['content'] = new sfWidgetFormTextareaTinyMCE(array(
      'width'  => 550,
      'height' => 350,
      'config' => 'theme_advanced_disable: "anchor,image,cleanup,help"'
    ));
    */
  }
}
