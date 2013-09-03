<?php

namespace Yepsua\SmarTwig\Twig\Node;

class SelectMenuNode extends SimpleNode {
    
  public function getWidgetName(){
    return 'selectmenu';
  }
  
  public function configureHTMLProperties(){
    return $this->getHTMLAttrs('select');
  }
}