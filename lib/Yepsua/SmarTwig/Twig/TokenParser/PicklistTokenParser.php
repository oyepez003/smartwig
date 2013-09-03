<?php

namespace Yepsua\SmarTwig\Twig\TokenParser;

use Yepsua\SmarTwig\Twig\Node\PicklistNode;

class PicklistTokenParser extends CommonTokenParser {
  
  public function getNodeInstance(\Twig_Token $token){
    return new PicklistNode($this->getNames(), new \Twig_Node($this->getValues()), $token->getLine(), $this->getTag());
  }

  /**
   * Gets the tag name associated with this token parser.
   *
   * @param string The tag name
   */
  public function getTag() {
    return 'ui_picklist';
  }
}