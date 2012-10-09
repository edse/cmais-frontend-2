<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * DateHelper.
 *
 * @package    symfony
 * @subpackage helper
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: DateHelper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

function format_daterange($start_date, $end_date, $format = 'd', $full_text, $start_text, $end_text, $culture = null, $charset = null)
{
  if ($start_date != '' && $end_date != '')
  {
    return sprintf($full_text, format_date($start_date, $format, $culture, $charset), format_date($end_date, $format, $culture, $charset));
  }
  else if ($start_date != '')
  {
    return sprintf($start_text, format_date($start_date, $format, $culture, $charset));
  }
  else if ($end_date != '')
  {
    return sprintf($end_text, format_date($end_date, $format, $culture, $charset));
  }
}

function format_date($date, $format = 'd', $culture = null, $charset = null)
{
  static $dateFormats = array();

  if (null === $date)
  {
    return null;
  }

  if (!$culture)
  {
    $culture = sfContext::getInstance()->getUser()->getCulture();
  }

  if (!$charset)
  {
    $charset = sfConfig::get('sf_charset');
  }

  if (!isset($dateFormats[$culture]))
  {
    $dateFormats[$culture] = new sfDateFormat($culture);
  }

  return $dateFormats[$culture]->format($date, $format, null, $charset);
}

function format_datetime($date, $format = 'F', $culture = null, $charset = null)
{
  return format_date($date, $format, $culture, $charset);
}

function distance_of_time_in_words($from_time, $to_time = null, $include_seconds = false)
{
  $to_time = $to_time? $to_time: time();

  $distance_in_minutes = floor(abs($to_time - $from_time) / 60);
  $distance_in_seconds = floor(abs($to_time - $from_time));

  $string = '';
  $parameters = array();

  if ($distance_in_minutes <= 1)
  {
    if (!$include_seconds)
    {
      //$string = $distance_in_minutes == 0 ? 'less than a minute' : '1 minute';
      $string = $distance_in_minutes == 0 ? 'há menos de um minuto' : 'há um minuto';
    }
    else
    {
      if ($distance_in_seconds <= 5)
      {
        //$string = 'less than 5 seconds';
        $string = 'há menos de 5 segundos';
      }
      else if ($distance_in_seconds >= 6 && $distance_in_seconds <= 10)
      {
        //$string = 'less than 10 seconds';
        $string = 'há menos de 10 segundos';
      }
      else if ($distance_in_seconds >= 11 && $distance_in_seconds <= 20)
      {
        //$string = 'less than 20 seconds';
        $string = 'há menos de 20 segundos';
      }
      else if ($distance_in_seconds >= 21 && $distance_in_seconds <= 40)
      {
        //$string = 'half a minute';
        //$string = 'há menos de meio minuto';
        $string = 'há menos de 30 segundos';
      }
      else if ($distance_in_seconds >= 41 && $distance_in_seconds <= 59)
      {
        //$string = 'less than a minute';
        $string = 'há menos de 1 minuto';
      }
      else
      {
        //$string = '1 minute';
        $string = 'há 1 minuto';
      }
    }
  }
  else if ($distance_in_minutes >= 2 && $distance_in_minutes <= 44)
  {
    $string = 'há %minutes% minutos';
    $parameters['%minutes%'] = $distance_in_minutes;
  }
  else if ($distance_in_minutes >= 45 && $distance_in_minutes <= 89)
  {
    //$string = 'about 1 hour';
    $string = 'há cerca de 1 hora';
  }
  else if ($distance_in_minutes >= 90 && $distance_in_minutes <= 1439)
  {
    //$string = 'about %hours% hours';
    $string = 'há cerca de %hours% horas';
    $parameters['%hours%'] = round($distance_in_minutes / 60);
  }
  else if ($distance_in_minutes >= 1440 && $distance_in_minutes <= 2879)
  {
    //$string = '1 day';
    $string = 'há 1 dia';
  }
  else if ($distance_in_minutes >= 2880 && $distance_in_minutes <= 43199)
  {
    //$string = '%days% days';
    $string = 'há %days% dias';
    $parameters['%days%'] = round($distance_in_minutes / 1440);
  }
  else if ($distance_in_minutes >= 43200 && $distance_in_minutes <= 86399)
  {
    //$string = 'about 1 month';
    $string = 'há cerca de 1 mês';
  }
  else if ($distance_in_minutes >= 86400 && $distance_in_minutes <= 525959)
  {
    //$string = '%months% months';
    $string = '%months% meses';
    $parameters['%months%'] = round($distance_in_minutes / 43200);
  }
  else if ($distance_in_minutes >= 525960 && $distance_in_minutes <= 1051919)
  {
    //$string = 'about 1 year';
    $string = 'há cerca de 1 ano';
  }
  else
  {
    //$string = 'over %years% years';
    $string = 'há mais de %years% anos';
    $parameters['%years%'] = floor($distance_in_minutes / 525960);
  }

  if (sfConfig::get('sf_i18n'))
  {
    require_once dirname(__FILE__).'/I18NHelper.php';

    return __($string, $parameters);
  }
  else
  {
    return strtr($string, $parameters);
  }
}

// Like distance_of_time_in_words, but where to_time is fixed to time()
function time_ago_in_words($from_time, $include_seconds = false)
{
  return distance_of_time_in_words($from_time, time(), $include_seconds);
}
