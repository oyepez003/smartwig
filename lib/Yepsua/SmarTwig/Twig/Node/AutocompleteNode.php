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
class AutocompleteNode extends SimpleNode {    
              
  public function configureCallableMethods(){
    return array(
      'values' => array('method' => '_source'),
      'separator' => array('method' => '_multiple'),
    );
  }

  public function getWidgetName(){
    return 'autocomplete';
  }

  public function configureHTMLProperties(){
    return $this->getHTMLAttrs('input');
  }
}