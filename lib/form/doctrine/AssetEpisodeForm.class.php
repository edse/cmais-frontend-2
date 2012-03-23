<?php

/**
 * AssetEpisode form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetEpisodeForm extends BaseAssetEpisodeForm
{
  public function configure()
  {
    
    unset($this['asset_id']);
    $this->widgetSchema['long_description'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px; height: 130px;'));
    
  }
}
