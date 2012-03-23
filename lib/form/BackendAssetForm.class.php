<?php
/**
 * Asset form.
 *
 * @package    astolfo
 * @subpackage form
 * @author     Emerson Estrella
 */

class BackendAssetForm extends AssetForm
{
  public function configure()
  {
    //parent::configure();

    unset($this['updated_at'],$this['created_at']);
    
    $this->widgetSchema['user_id'] = new sfWidgetFormDoctrineChoice(array(
      'model'     => 'sfGuardUser',
      'add_empty' => false
    ));
    
    $q = Doctrine_Query::create()
      ->select('at.*')
      ->from('AssetType at')
      ->where('at.upload_input = ?', false)
      ->andWhere('at.is_visible = ?', true)
      ->orderBy('at.title');

    $this->widgetSchema['asset_type_id'] = new sfWidgetFormDoctrineChoice(array(
      'model'     => 'AssetType',
      'add_empty' => false,
      'query'     => $q
    ));

  	if($this->object->id > 0){
      unset($this['asset_type_id']);
  	  $asset = Doctrine_Core::getTable('Asset')->find($this->object->id);
      $this->embedRelation('Asset'.$asset->getAssetType()->getModel());

      //$this->embedRelation('RelatedAssets');
      //$f = new AssetImageForm($this->object->getAssetImage());
      //$this->embedForm('AssetImage', $f);
  	}
  
    /*
    print ">>>>".$this->object->asset_type_id;
    if($this->object->asset_type_id == 1){
      $assetContentForm = new AssetContentForm($this->object->getAssetContent());   
      $this->embedForm('asset', $assetContentForm);
      $this->widgetSchema['asset']->setLabel('Asset Content');
    }elseif($this->object->asset_type_id == 2){
      $assetImageForm = new AssetImageForm($this->object->getAssetImage());   
      $this->embedForm('asset', $assetImageForm);
      $this->widgetSchema['asset']->setLabel('Asset Image');
    } 
    */

    //$assetContentForm = new AssetContentForm($this->object->getAssetContent());   
    //$this->embedForm('asset', $assetContentForm);
    //$this->widgetSchema['asset']->setLabel('Asset Content');
  
    $this->widgetSchema['title'] = new sfWidgetFormInputText(array(), array('style' => 'width: 450px;'));
    $this->widgetSchema['description'] = new sfWidgetFormTextarea(array(), array('style' => 'width: 450px;'));

    $this->widgetSchema['date_start'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));
    //$this->validatorSchema['date_start'] = new sfValidatorPass();
	
    $this->widgetSchema['date_end'] = new sfWidgetAstolfoDateTimeForm(array(
     'image' => '/images/calendar.gif'
    ));

  	/*
  	if($this->object->id){
  		$asset = Doctrine_Core::getTable('Asset')->find($this->object->id);
  		$this->embedRelation('Asset'.ucwords($asset->getAssetType()->getSlug()));
  	}
  	
   	$assetType = Doctrine_Core::getTable('AssetType')->find($this->object->asset_type_id);
      // create a new subcategory form for the current subcategory model object
      //$assetContentForm = new AssetContentForm($assetType);
      print('$obj = Doctrine_Core::getTable(\'Asset'.ucwords($assetType->getSlug()).'\')->findOneByAssetId('.$this->object->id.');');
      eval('$obj = Doctrine_Core::getTable(\'Asset'.ucwords($assetType->getSlug()).'\')->findOneByAssetId('.$this->object->id.');');
      eval('$form = new Asset'.ucwords($assetType->getSlug()).'Form($obj);');
      // embed the subcategory form in the main category form
      $this->embedForm('asset_type_'.$obj->getId(), $form);
   
      // set a custom label for the embedded form
      $this->widgetSchema['asset_type_'.$obj->getId()]->setLabel('AssetType: '.$obj->getAssetId());
   	*/
	
  	/*
   	$assetType = Doctrine_Core::getTable('AssetType')->find($this->object->asset_type_id);
      print('$obj = Doctrine_Core::getTable(\'Asset'.ucwords($assetType->getSlug()).'\')->findOneByAssetId('.$this->object->id.');');
      eval('$obj = Doctrine_Core::getTable(\'Asset'.ucwords($assetType->getSlug()).'\')->findOneByAssetId('.$this->object->id.');');
      eval('$form = new Asset'.ucwords($assetType->getSlug()).'Form($obj);');
  	$this->embedForm('asset_object_form', $form);
  	*/
  
  	/*
  	$this->widgetSchema['tags_list'] = new sfWidgetFormDoctrineChoice(array(
  		'model'        => 'Tag',                  
  		'renderer_class' => 'sfWidgetFormSelectDoubleList',
  		'key_method'   => 'getId', //name of the department
  		'renderer_class' => 'sfWidgetFormSelectDoubleList',
  		'table_method' => 'findAll'
  	));
  	$this->validatorSchema['tags_list'] = new sfValidatorPass();
  	*/
	
  	$this->widgetSchema['categories_list'] = new sfWidgetFormDoctrineChoice(array(
  		'model'        => 'Category',                  
  		'renderer_class' => 'sfWidgetFormSelectDoubleList',
  		'key_method'   => 'getId', //name of the department
  		'renderer_class' => 'sfWidgetFormSelectDoubleList',
  		'table_method' => 'findAll',
      'renderer_options' => array(
        'label_unassociated' => 'Todas',
        'label_associated' => 'Relacionadas',
        'associated_first' => false,
       )
      ),
      array('class' => 'text', 'style' => 'width:44em')
      );
  	$this->validatorSchema['categories_list'] = new sfValidatorPass();
	
	
    //$q = Doctrine::getTable('Section')->findBySiteId(2);
    if($this->object->site_id > 0){
    	$q = Doctrine_Query::create()
    		->select('s.*')
    		->from('Section s')
    		->where('s.site_id = ?', $this->object->site_id)
        ->orderBy('s.title');
    	$this->widgetSchema['sections_list'] = new sfWidgetFormDoctrineChoice(array(
    		'model'        => 'Section',                  
    		'renderer_class' => 'sfWidgetFormSelectDoubleList',
    	  'query' => $q,
    	  'renderer_options' => array(
          'label_unassociated' => 'Todas',
          'label_associated' => 'Relacionadas',
          'associated_first' => false
    	   )
    	));
    	$this->validatorSchema['categories_list'] = new sfValidatorPass();
      
      $cs = Doctrine_Query::create()
        ->select('s.*')
        ->from('Site s, SiteUser su')
        ->where('s.id = su.site_id')
        ->addWhere('su.user_id = ?', sfContext::getInstance()->getUser()->getGuardUser()->getId())
        ->orderBy('s.title')
        ->execute();
      foreach($cs as $s){
        $choices[$s->getId()] = $s->getTitle();
      }
      $this->widgetSchema['site_id'] = new sfWidgetFormChoice(array(
        'choices'      => $choices
      ));

    }else{
      $choices = array();
      
      $cs = Doctrine_Query::create()
        ->select('s.*')
        ->from('Site s, SiteUser su')
        ->where('s.id = su.site_id')
        ->addWhere('su.user_id = ?', sfContext::getInstance()->getUser()->getGuardUser()->getId())
        ->orderBy('s.title')
        ->execute();
      foreach($cs as $s){
        $choices[$s->getId()] = $s->getTitle();
      }
      $this->widgetSchema['site_id'] = new sfWidgetFormChoice(array(
        'choices'      => $choices
      ));

    	$this->widgetSchema['sections_list'] = new sfWidgetFormInputHidden();
    	$this->setValidator('sections_list' , new sfValidatorString(array('required'  => false)));
    }
  
  	// Tags
    // this text appears in gray until the user focuses on the field
    $default = 'Add tags with commas' ;
    $this->widgetSchema['new_tags'] = new sfWidgetFormInput(array(
      'label'   => 'Add Tags',
      'default' => $default
    ),array(
      'onclick' => "if (this.value=='$default') { this.value = ''; this.style.color='black'; }", 
      'size'    =>  '32',
     	'id'  	  => 'new_tags', 
     	'autocomplete'  => "off", // don't let the browser autocomplete.  We'll add typeahead, below      
     	'style'  => 'color:#aaa' 
    ));
    
    // allow the field to remain blank
    $this->setValidator('new_tags' , new sfValidatorString(array('required'  => false)));
 
    // this hidden field will be populated with JavaScript.
    $this->widgetSchema['remove_tags'] = new sfWidgetFormInputHidden();
    $this->setValidator('remove_tags' , new sfValidatorString(array('required'  => false)));
  
  }

}