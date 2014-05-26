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
class MenuHeaderNode extends MenuItemNode {
    
  public function getTagName(){
    return 'h3';
  }
  
}