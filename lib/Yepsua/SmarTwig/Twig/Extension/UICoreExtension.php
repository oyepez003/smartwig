<?php

namespace Yepsua\SmarTwig\Twig\Extension;

class UICoreExtension extends UIWidgetExtension {
   
  /**
   * Returns the token parser instance to add to the existing list.
   *
   * @return array An array of Twig_TokenParser instances
   */
  public function getTokenParsers() {
    return array(
        new \Yepsua\SmarTwig\Twig\TokenParser\DialogTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\TabsTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\AccordionTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\ProgressbarTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\SliderTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\AutocompleteTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\DatepickerTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\ButtonTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\ButtonsetTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\MultiselectTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\PicklistTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\PopUpTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\SelectMenuTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\ExpanderTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\SplitterTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\DynamicSelectTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\MenuTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\PanelTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\TooltipTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\RCTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\DraggableTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\DroppableTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\EffectTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\ResizableTokenParser(),
        new \Yepsua\SmarTwig\Twig\TokenParser\VideoTokenParser(),
    );
  }

  /**
   * Returns the name of the extension.
   *
   * @return string The extension name
   */
  public function getName() {
    return 'ui.core';
  }
}