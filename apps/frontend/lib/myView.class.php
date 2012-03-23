<?php

class myView extends sfPHPView
{


  /**
   * Sets the template for this view.
   *
   * If the template path is relative, it will be based on the currently
   * executing module's template sub-directory.
   *
   * @param string $template  An absolute or relative filesystem path to a template
   */
  public function setTemplate($template)
  {
    if (sfToolkit::isPathAbsolute($template))
    {
      print ">>>1";
      $this->directory = dirname($template);
      $this->template  = basename($template);
    }
    else
    {
      print ">>>2";
      $this->directory = $this->context->getConfiguration()->getTemplateDir($this->moduleName, $template);
      $this->template = $template;
    }
  }

}