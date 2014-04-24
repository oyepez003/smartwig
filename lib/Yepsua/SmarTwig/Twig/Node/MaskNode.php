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
class MaskNode extends SimpleNode {    
    
  public function __construct($names, $values, $lineno, $tag = null) {
    parent::__construct($names, $values, $lineno, $tag);
    $this->setOnlyJsS(!$this->getNode('values')->hasNode('value'));
    $this->setIsPlugin(true);
  }

  public function configureCallableMethods(){
    return array(
      'for' => array('method' => 'in'),
      'mode' => array('method' => '_type'),
    );
  }

  public function getWidgetName(){
    return 'mask';
  }

  public function getPluginName() {
    return 'jqMask';
  }

  public function configureHTMLProperties(){
    return $this->getHTMLAttrs('div','input');
  }
}