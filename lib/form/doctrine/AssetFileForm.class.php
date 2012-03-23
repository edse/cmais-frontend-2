<?php

/**
 * AssetFile form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AssetFileForm extends BaseAssetFileForm
{
  public function configure()
  {
    unset($this['asset_id']);
    $this->widgetSchema['file'] = new sfWidgetAstolfoFileLinkForm(array('path'=>'/uploads/assets/file/original', 'extension'=>$this->getObject()->extension, 'hidden_name'=>'asset[AssetFile][file]', 'hidden_id'=>'asset_AssetFile_file'));
  }
}
