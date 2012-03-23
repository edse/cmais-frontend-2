<?php

class sfWidgetAstolfoFileLinkForm extends sfWidgetForm {

  protected function configure($options = array(), $attributes = array()) {
    $this->addOption('youtube_id');
    $this->addOption('hidden_name');
    $this->addOption('hidden_id');
    $this->addOption('is_video');
    $this->addOption('is_image');
    $this->addOption('path');
    $this->addOption('extension');
  }

  public function render($name, $value =null, $attributes = array(), $errors = array()) {
    $l = "";
    if($this->getOption('hidden_name'))
      $l .= "<input type=\"hidden\" id=\"".$this->getOption('hidden_id')."\" value=\"".$value."\" name=\"".$this->getOption('hidden_name')."\">";
    if($this->getOption('is_image'))
      $l .= "<img src=\"/uploads/assets/image/thumbnail/".$value.".jpg\" /><br />";
    elseif($this->getOption('is_video')){
      if($this->getOption('youtube_id')){
        $l .= "<img src=\"http://img.youtube.com/vi/".$this->getOption('youtube_id')."/1.jpg\" /><br />";
        $l .= "<input type='button' value='View' onclick='self.open(\"http://www.youtube.com/watch?v=".$this->getOption('youtube_id')."\")' />";
        $l .= "<input type='button' value='Edit' onclick='self.open(\"http://www.youtube.com/my_videos_edit?video_id=".$this->getOption('youtube_id')."\")' />";
      }else{
        $l .= "<img src=\"/images/youtube_wait.jpg\" /><br />";
      }
    }

    if(!$this->getOption('is_video'))
      $l .= "File: <a href='" . $this->getOption('path') . "/" . $value . "." . $this->getOption('extension') . "' target='_blank'>".$value."</a>";

    $r = $value ? $l : '&mdash;';

    return $r;
  }

}
