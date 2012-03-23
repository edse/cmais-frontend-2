<?php

class sfWidgetAstolfoTextPlainForm extends sfWidgetForm
{
  
  protected function configure($options = array(), $attributes = array()) { }

  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    
    $l = "<a href='/uploads/assets/audio/default/".$value.".mp3' target='_blank'>link</a>";
  	
    $r = $this->renderTag('input', array('type' => 'hidden', 'value' => $value, 'size' => 10, 'id' => $id = $this->generateId($name)));
    $r .= $value ? $l : '&mdash;';
	return $r;
  }

}
