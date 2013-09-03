<?php

namespace Yepsua\SmarTwig\Twig\Node;

use \Twig_Compiler;

/**
 * 
 */
class MenuHeaderNode extends MenuItemNode {
    
  public function getTagName(){
    return 'h3';
  }
  
}