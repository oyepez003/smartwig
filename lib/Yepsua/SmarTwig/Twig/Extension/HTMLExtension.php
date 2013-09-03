<?php

namespace Yepsua\SmarTwig\Twig\Extension;

class HTMLExtension extends \Twig_Extension {
  
  /**
   * Returns the token parser instance to add to the existing list.
   *
   * @return array An array of Twig_TokenParser instances
   */
  public function getTokenParsers() {
    return array(
        new \Yepsua\SmarTwig\Twig\TokenParser\OptionItemTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\ContentTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\HeaderTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\SubMenuTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\MenuItemTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\MenuHeaderTokenParser(),
    );
  }

  /**
   * Returns the name of the extension.
   *
   * @return string The extension name
   */
  public function getName() {
    return 'html.core';
  }
  
}