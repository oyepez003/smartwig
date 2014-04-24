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

/**
 * 
 */
class HotkeyNode extends SimpleNode {    
    
  public function __construct($names, $values, $lineno, $tag = null) {
    parent::__construct($names, $values, $lineno, $tag);
    $this->setOnlyJsS(true);
    $this->setIsPlugin(true);
    if($this->getNode('values')->hasNode('for')){
      $this->setInSelector(true);
    }else{
      $this->setInSelector(false);
    }
  }

  public function configureCallableMethods(){
    return array(
      'bind' => array('method' => '_hotkey'),
      'strokes' => array('method' => '_keys'),
      'handler' => array('method' => '_handler'),
      'callback' => array('method' => '_handler'),
    );
  }
  public function compileBuilderFuntcionName(Twig_Compiler $compiler){
    if($this->getNode('values')->hasNode('strokes')){
      $compiler->raw('->keystrokes()');
    }else{
      $compiler->raw('->hotkeys()');
    }
  }

  public function getWidgetName(){
    return 'hotkey';
  }

  public function getPluginName() {
    return 'keys';
  }
}