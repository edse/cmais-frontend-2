<?php

/**
 * AssetBroadcast form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetBroadcastForm extends BaseAssetBroadcastForm
{
  public function configure()
  {
    unset($this['asset_id']);
    $this->widgetSchema['headline'] = new sfWidgetFormInputText(array(), array('style' => 'width: 450px;'));
    
    $this->widgetSchema['date_recording_start'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));
    $this->widgetSchema['date_recording_end'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));
    $this->widgetSchema['date_exibition_start'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));
    $this->widgetSchema['date_exibition_end'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));

  }
}
