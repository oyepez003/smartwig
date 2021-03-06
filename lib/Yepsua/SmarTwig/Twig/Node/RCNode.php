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
class RCNode extends SimpleNode {
  
  public function __construct($names, $values, $lineno, $tag = null) {
    parent::__construct($names, $values, $lineno, $tag);
    $this->setOnlyJsS(true);
    $this->setInSelector(false);
    if($this->getNode('values')->hasNode('name')){
      $this->getNode('values')->setNode('widgetVar',$this->getNode('values')->getNode('name'));
      $this->getNode('values')->removeAttribute('name');
    }
  }

  public function compileBuilderFuntcionName(Twig_Compiler $compiler){
    $compiler->raw('->remoteCommand(');
    if($this->getNode('values')->hasNode('proccess')){
      $compiler->subcompile($this->getNode('values')->getNode('proccess'));
      $this->removeAttribute('proccess');
    }else{
       $compiler->write('null');
    }
    $compiler->write(',');
    if($this->getNode('values')->hasNode('update')){
      $compiler->subcompile($this->getNode('values')->getNode('update'));
      $this->removeAttribute('update');
    }else{
       $compiler->write('null');
    }
    $compiler->write(',');
    if($this->getNode('values')->hasNode('preUpdate')){
      $compiler->subcompile($this->getNode('values')->getNode('preUpdate'));
      $this->removeAttribute('preUpdate');
    }else{
       $compiler->write("''");
    }
    $compiler->write(',');
    if($this->getNode('values')->hasNode('postUpdate')){
      $compiler->subcompile($this->getNode('values')->getNode('postUpdate'));
      $this->removeAttribute('postUpdate');
    }else{
       $compiler->write("''");
    }
    $compiler->raw(')->setEmbebedFunction(true)');
  }

  public function getWidgetName(){
    return 'jqueryCore';
  }
    
  public function getOptionsToSkip(){
    return array('proccess','update');
  }
}