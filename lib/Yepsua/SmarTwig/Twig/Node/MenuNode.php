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

use \Twig_Compiler;

class MenuNode extends SimpleNode {
    
  public function getWidgetName(){
    return 'menu';
  }

  public function compileBuilderFuntcionName(Twig_Compiler $compiler){
    if($this->getNode('values')->hasNode('type')){
      $type = $this->getNodeValue('type');
      if($type === 'ipod'){
        $compiler->raw('->iPod()');
      }
    }else{
      $compiler->raw('->build()');
    }
  }
  
  public function configureHTMLProperties(){
    return $this->getHTMLAttrs('ul');
  }
}