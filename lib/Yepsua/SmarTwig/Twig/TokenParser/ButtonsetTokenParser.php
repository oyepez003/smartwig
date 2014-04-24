<?php

/*
 * This file is part of the SmarTwig (Twig Extension).
 *
 * (c) Omar Yepez <omar.yepez@yepsua.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yepsua\SmarTwig\Twig\TokenParser;

use Yepsua\SmarTwig\Twig\Node\ButtonNode;

class ButtonsetTokenParser extends CommonTokenParser {
  
  public function getNodeInstance(\Twig_Token $token){
    return new ButtonNode($this->getNames(), new \Twig_Node($this->getValues()), $token->getLine(), $this->getTag(), true);    
  }
  
  /**
   * Gets the tag name associated with this token parser.
   *
   * @param string The tag name
   */
  public function getTag() {
    return 'ui_buttonset';
  }
}