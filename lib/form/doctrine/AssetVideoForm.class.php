<?php

/**
 * AssetVideo form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetVideoForm extends BaseAssetVideoForm
{
  public function configure()
  {
    unset($this['asset_id'], $this['original_file']);
    $this->widgetSchema['youtube_id'] = new sfWidgetFormInputText(array(), array());
    $this->widgetSchema['file'] = new sfWidgetAstolfoFileLinkForm(array('is_video'=>true, 'youtube_id'=>$this->getObject()->youtube_id, 'hidden_name'=>'asset[AssetVideo][file]', 'hidden_id'=>'asset_AssetVideo_file'));
    $this->widgetSchema['headline'] = new sfWidgetFormInputText(array(), array('style' => 'width: 450px;'));
  }
}
