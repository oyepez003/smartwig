<?php

namespace Yepsua\SmarTwig\Twig\Extension;

class SmarTwigExtension {
  
  /**
   * Get All SmarTwig Extensions
   *
   * @return array An array of Yepsua\SmarTwig\Twig\Extension\*Extension instances
   */
  public static function getAllExtensions() {
  
	$coreExt = new UICoreExtension();
	$coreExt->setBuilders(array(
		"ui.html" => "YsHTML",
		"ui.jqueryCore"  => "YsJQuery",
		"ui.dialog"  => "YsUIDialog",
		"ui.tabs"  => "YsUITabs",
		"ui.accordion"  => "YsUIAccordion",
		"ui.progressbar"  => "YsUIProgressbar",
		"ui.slider"  => "YsUISlider",
		"ui.autocomplete"  => "YsUIAutocomplete",
		"ui.datepicker"  => "YsUIDatepicker",
		"ui.datetimepicker"  => "YsUIDateTimepicker",
		"ui.button"  => "YsUIButton",
		"ui.multiselect"  => "YsUIMultiSelect",
		"ui.picklist"  => "YsUIPickList",
		"ui.popup"  => "YsUIPopUp",
		"ui.selectmenu"  => "YsUISelectMenu",
		"ui.expander"  => "YsUIExpander",
		"ui.splitter"  => "YsUISplitter",
		"ui.dynaselect"  => "YsUIDynamicSelect",
		"ui.menu"  => "YsUIMenu",
		"ui.panel"  => "YsUIPanel",
		"ui.tooltip"  => "YsUITooltip",
		"ui.draggable"  => "YsUIDraggable",
		"ui.droppable"  => "YsUIDroppable",
		"ui.resizable"  => "YsUIResizable",
		"ui.effect"  => "YsUIEffect",
		"ui.video"  => "YsUIVideo"
	));

	$uiAddonsExt = new UIAddonsExtension();
	$uiAddonsExt->setBuilders(array(
		"ui.block" => "YsBlockUI",
		"ui.box" => "YsJQBox",
		"ui.colorpicker" => "YsJQColorPicker",
		"ui.notify" => "YsPNotify",
		"ui.hotkey" => "YsKeys",
		"ui.monitor" => "YsJQMonitor",
		"ui.keypad" => "YsJQKeypad",
		"ui.calculator" => "YsJQCalculator",
		"ui.layout" => "YsJLayout",
		"ui.mask" => "YsJQMask",
		"ui.formWizard" => "YsFormWizard",
		"ui.ajaxForm" => "YsJQForm",
		"ui.validation" => "YsJQValidate",
		"ui.booklet" => "YsJQBooklet",
		"ui.cycle" => "YsJQCycle",
		"ui.ring" => "YsJQRing",
		"ui.upload" => "YsUpload",
	));

	return array(
		new HTMLExtension(),
		new JsSintaxExtension(),
		new JQueryCoreExtension(),
		new UIWidgetExtension(),
		$coreExt,
		$uiAddonsExt
	);
  }  
}