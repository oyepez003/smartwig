<?php

/*
 * This file is part of the SmarTwig (Twig Extension).
 *
 * (c) Omar Yepez <omar.yepez@yepsua.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yepsua\SmarTwig\Twig\Extension;

class UIWidgetExtension extends \Twig_Extension {
  
  private $builders;
  
  /**
   * Returns the name of the extension.
   *
   * @return string The extension name
   */
  public function getName() {
    return 'ui.widget';
  }
  
  /**
   *
   * @param type $widgetId
   * @return widget 
   */
  public function getWidget($widgetId){
    $widget = $this->builders[$widgetId];
    return new $widget();
  }
  
  /**
   *
   * @return type 
   */
  public function getBuilders() {
    return $this->builders;
  }
  
  /**
   *
   * @param type $builders 
   */
  public function setBuilders($builders) {
    $this->builders = $builders;
  }
}