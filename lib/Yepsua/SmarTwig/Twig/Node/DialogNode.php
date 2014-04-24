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

class DialogNode extends SimpleNode {
           
  public function configureCallableMethods(){
    return array(
      'maximizable' => array('method' => '_maximizable'),
      'minimizable' => array('method' => '_minimizable'),
      'pinnable'    => array('method' => '_pinnable'),
      'refreshable' => array('method' => '_refreshable'),
      'togglable' => array('method' => '_togglable'),
      'closeable' => array('method' => '_closeable'),
      'widgetVar' => array('method' => 'assignToVar'));
  }

  public function getWidgetName(){
    return 'dialog';
  }
}