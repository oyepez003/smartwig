<?php

/*
 * This file is part of the SmarTwig (Twig Extension).
 *
 * (c) Omar Yepez <omar.yepez@yepsua.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yepsua\SmarTwig\Twig\Node;

/**
 * 
 */
class BoxNode extends SimpleNode {    
    
  public function __construct($names, $values, $lineno, $tag = null) {
    parent::__construct($names, $values, $lineno, $tag);
    $this->setOnlyJsS(true);
    $this->setIsPlugin(true);
  }

  public function configureCallableMethods(){
    return array(
      'for' => array('method' => 'in'),
      'toolbar' => array('method' => '_withButtons'),
      'errorMessage' => array('method' => '_errorMsg'),
      'nextTitle' => array('method' => '_nextTitle'),
      'prevTitle' => array('method' => '_prevTitle'),
      'closeTitle' => array('method' => '_closeTitle'),
    );
  }

  public function getWidgetName(){
    return 'box';
  }

  public function getPluginName() {
    return 'jqBox';
  }
}