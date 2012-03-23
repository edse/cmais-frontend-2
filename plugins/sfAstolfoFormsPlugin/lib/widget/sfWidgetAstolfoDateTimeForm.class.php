<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfWidgetAstolfoDateTimeForm represents a date widget rendered by JQuery UI.
 *
 * This widget needs JQuery and JQuery UI to work.
 *
 * @package    symfony
 * @subpackage widget
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfWidgetAstolfoDateTimeForm.class.php 30755 2010-08-25 11:14:33Z fabien $
 */
class sfWidgetAstolfoDateTimeForm extends sfWidgetForm
{
  /**
   * Configures the current widget.
   *
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
  	
	  parent::configure($options, $attributes);
    $this->addOption('image', false);
    $this->addOption('date_widget', new sfWidgetFormDate());
    $this->addOption('time_widget', new sfWidgetFormTime());
  }
  
   public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    $prefix = str_replace('-', '_', $this->generateId($name));

    $image = '';
    if (false !== $this->getOption('image'))
    {
      $image = sprintf(', buttonImage: "%s", buttonImageOnly: true', $this->getOption('image'));
    }

    if ($this->getOption('date_widget') instanceof sfWidgetFormDateTime)
    {
      $years = $this->getOption('date_widget')->getDateWidget()->getOption('years');
    }
    else
    {
      $years = $this->getOption('date_widget')->getOption('years');
    }

    $return = $this->getOption('date_widget')->render($name, $value, $attributes, $errors);
	$return .= $this->renderTag('input', array('type' => 'hidden', 'size' => 10, 'id' => $id = $this->generateId($name).'_jquery_control', 'disabled' => 'disabled'));
	$return .= <<<EOF
<script type="text/javascript">
  function wfd_{$prefix}_read_linked()
  {
    jQuery("#{$id}").val(jQuery("#{$this->generateId($name.'[year]')}").val() + "-" + jQuery("#{$this->generateId($name.'[month]')}").val() + "-" + jQuery("#{$this->generateId($name.'[day]')}").val());
    return {};
  }

  function wfd_{$prefix}_update_linked(date)
  {
    jQuery("#{$this->generateId($name.'[year]')}").val(parseInt(date.substring(0, 4), 10));
    jQuery("#{$this->generateId($name.'[month]')}").val(parseInt(date.substring(5, 7), 10));
    jQuery("#{$this->generateId($name.'[day]')}").val(parseInt(date.substring(8), 10));
    wfd_{$prefix}_check_linked_days();
  }

  function wfd_{$prefix}_check_linked_days()
  {
    var daysInMonth = 32 - new Date(jQuery("#{$this->generateId($name.'[year]')}").val(), jQuery("#{$this->generateId($name.'[month]')}").val() - 1, 32).getDate();

    jQuery("#{$this->generateId($name.'[day]')} option").attr("disabled", "");
    jQuery("#{$this->generateId($name.'[day]')} option:gt(" + (daysInMonth) +")").attr("disabled", "disabled");

    if (jQuery("#{$this->generateId($name.'[day]')}").val() > daysInMonth)
    {
      jQuery("#{$this->generateId($name.'[day]')}").val(daysInMonth);
    }
  }

  jQuery(document).ready(function() {
    jQuery("#{$id}").datepicker(jQuery.extend({}, {
      beforeShow: wfd_{$prefix}_read_linked,
      onSelect:   wfd_{$prefix}_update_linked,
      showOn:     "button"
      {$image}
    }, {dateFormat: "yy-mm-dd"}));
    wfd_{$prefix}_check_linked_days();
  });

  jQuery("#{$this->generateId($name.'[day]')}, #{$this->generateId($name.'[month]')}, #{$this->generateId($name.'[year]')}").change(wfd_{$prefix}_check_linked_days);
</script>
EOF;
    $return .= $this->getOption('time_widget')->render($name, $value, $attributes, $errors);

/*
      ,
      $prefix, $id,
      $this->generateId($name.'[year]'), $this->generateId($name.'[month]'), $this->generateId($name.'[day]'),
      $prefix,
      $this->generateId($name.'[year]'), $this->generateId($name.'[month]'), $this->generateId($name.'[day]'),
      $prefix, $prefix,
      $this->generateId($name.'[year]'), $this->generateId($name.'[month]'),
      $this->generateId($name.'[day]'), $this->generateId($name.'[day]'),
      ($this->getOption('date_widget')->getOption('can_be_empty') ? 'daysInMonth' : 'daysInMonth - 1'),
      $this->generateId($name.'[day]'), $this->generateId($name.'[day]'),
      $id,
      min($years), max($years),
      $prefix, $prefix, $image, $this->getOption('culture'), $this->getOption('config'),
      $prefix,
      $this->generateId($name.'[day]'), $this->generateId($name.'[month]'), $this->generateId($name.'[year]'),
      $prefix
    );
*/

	return $return;
  }
  
}