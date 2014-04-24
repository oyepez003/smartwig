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
class CalculatorNode extends KeypadNode {    

  protected $inline;

  public function __construct($names, $values, $lineno, $tag = null) {
    parent::__construct($names, $values, $lineno, $tag);
    $this->setIsPlugin(true);
  }

  public function compileBuilderFuntcionName(Twig_Compiler $compiler){
    if($this->getNode('values')->hasNode('scientific') && $this->getNodeValue('scientific')){
        $compiler->raw('->scientific()');
    }else{
      parent::compileBuilderFuntcionName($compiler);
    }
  }  
  
  public function getWidgetName(){
    return 'calculator';
  }

  public function getPluginName() {
    return 'jqCalculator';
  }
  
  public function configureHTMLProperties(){
    return $this->getHTMLAttrs('div','input');
  }
}