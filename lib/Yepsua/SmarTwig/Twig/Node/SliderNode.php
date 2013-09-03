<?php

namespace Yepsua\SmarTwig\Twig\Node;

/**
 * 
 */
class SliderNode extends SimpleNode {    
              
  public function configureCallableMethods(){
    return array(
      'value' => array('method' => '_value'),
    );
  }

  public function getWidgetName(){
    return 'slider';
  }
}