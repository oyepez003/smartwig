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
class TooltipNode extends SimpleNode {    
    
    public function __construct($names, $values, $lineno, $tag = null) {
      parent::__construct($names, $values, $lineno, $tag);
      $this->setOnlyJsS(true);
    }
  
    public function configureCallableMethods(){
      return array(
        'label' => array('method' => '_content'),
        'for' => array('method' => 'in'),
      );
    }
        
    public function getWidgetName(){
      return 'tooltip';
    }
}