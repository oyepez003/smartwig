SmarTwig
========
Ultimate Components Extension for Twig.

You can use Twig and SmarTwig and any PHP Project.

Instalation
===========

You can install the SmarTwig in 2 different ways:

1.  Use the [Git repository](https://github.com/oyepez003/smartwig)
2.  Install it via Composer on [Packagist](https://packagist.org/packages/yepsua/smartwig)

The Assets:
-----------
All the SmarTwig Components need some .css and .js files to work.

Get the resources cloning the [Git repository](https://github.com/oyepez003/jquery4php-assets) or [ Download the Zip] (https://github.com/oyepez003/jquery4php-assets/archive/master.zip)

Put content of the repo in your app public folder.

How To Use (3 Ways)
===================

1) The Ugly Way:
----------------
Load all Extensions and the Builders Configuration step by step.

``` php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates'); 
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
	'debug' => true // Only for dev enviroment.
));

$coreExt = new Yepsua\SmarTwig\Twig\Extension\UICoreExtension();
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

$uiAddonsExt = new Yepsua\SmarTwig\Twig\Extension\UIAddonsExtension();
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

//Set all extension to Twig

$twig->setExtensions(array(
	new Yepsua\SmarTwig\Twig\Extension\HTMLExtension(),
	new Yepsua\SmarTwig\Twig\Extension\JsSintaxExtension(),
	new Yepsua\SmarTwig\Twig\Extension\JQueryCoreExtension(),
	new Yepsua\SmarTwig\Twig\Extension\UIWidgetExtension(),
	$coreExt,
	$uiAddonsExt
));
```

2) The Short Way:
-----------------
Load all Extensions and the Builders Configuration in one line of code.

``` php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates'); 
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
	'debug' => true // Only for dev enviroment.
));

$twig->setExtensions(
	Yepsua\SmarTwig\Twig\Extension\SmarTwigExtension::getAllExtensions()
);

```

3) The Pretty Way:
------------------
Load all Extensions and the Builders Configuration using The IoC Symfony Component.

You need add to your composer.json the next dependencies:

``` yml
    "require": {
		"symfony/dependency-injection": "2.3.*@dev",
		"symfony/config": "2.4.*@dev",
		"yepsua/smartwig": "1.0.*"
    } 
```

``` php
require_once 'vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

$container = new ContainerBuilder();
$loader = new XmlFileLoader($container, new FileLocator(__DIR__));
$loader->load('path/to/services.xml');

$twig = $container->get('twig');
```

Now you can write all the services configuration in the service.xml file:

``` xml
<?xml version="1.0" ?>

<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

  <parameters>
    <parameter key="html.builder.class">YsHTML</parameter>
    <parameter key="jquery.core.builder.class">YsJQuery</parameter>
    <parameter key="jquery.ui.dialog.class">YsHTML</parameter>
    <parameter key="jquery.ui.dialog.class">YsUIDialog</parameter>
    <parameter key="jquery.ui.tabs.class">YsUITabs</parameter>
    <parameter key="jquery.ui.accordion.class">YsUIAccordion</parameter>
    <parameter key="jquery.ui.progressbar.class">YsUIProgressbar</parameter>
    <parameter key="jquery.ui.slider.class">YsUISlider</parameter>
    <parameter key="jquery.ui.autocomplete.class">YsUIAutocomplete</parameter>
    <parameter key="jquery.ui.datepicker.class">YsUIDatepicker</parameter>
    <parameter key="jquery.ui.datetimepicker.class">YsUIDateTimepicker</parameter>
    <parameter key="jquery.ui.button.class">YsUIButton</parameter>
    <parameter key="jquery.ui.multiselect.class">YsUIMultiSelect</parameter>
    <parameter key="jquery.ui.picklist.class">YsUIPickList</parameter>
    <parameter key="jquery.ui.popup.class">YsUIPopUp</parameter>
    <parameter key="jquery.ui.selectmenu.class">YsUISelectMenu</parameter>
    <parameter key="jquery.ui.expander.class">YsUIExpander</parameter>
    <parameter key="jquery.ui.splitter.class">YsUISplitter</parameter>
    <parameter key="jquery.ui.dynaselect.class">YsUIDynamicSelect</parameter>
    <parameter key="jquery.ui.menu.class">YsUIMenu</parameter>
    <parameter key="jquery.ui.panel.class">YsUIPanel</parameter>
    <parameter key="jquery.ui.tooltip.class">YsUITooltip</parameter>
    <parameter key="jquery.ui.draggable.class">YsUIDraggable</parameter>
    <parameter key="jquery.ui.droppable.class">YsUIDroppable</parameter>
    <parameter key="jquery.ui.resizable.class">YsUIResizable</parameter>
    <parameter key="jquery.ui.effect.class">YsUIEffect</parameter>
    <parameter key="jquery.ui.blockUI.class">YsBlockUI</parameter>
    <parameter key="jquery.ui.box.class">YsJQBox</parameter>
    <parameter key="jquery.ui.colorpicker.class">YsJQColorPicker</parameter>
    <parameter key="jquery.ui.notify.class">YsPNotify</parameter>
    <parameter key="jquery.ui.keys.class">YsKeys</parameter>
    <parameter key="jquery.ui.monitor.class">YsJQMonitor</parameter>
    <parameter key="jquery.ui.keypad.class">YsJQKeypad</parameter>
    <parameter key="jquery.ui.calculator.class">YsJQCalculator</parameter>
    <parameter key="jquery.ui.layout.class">YsJLayout</parameter>
    <parameter key="jquery.ui.mask.class">YsJQMask</parameter>
    <parameter key="jquery.ui.formWizard.class">YsFormWizard</parameter>
    <parameter key="jquery.ui.ajaxForm.class">YsJQForm</parameter>
    <parameter key="jquery.ui.validation.class">YsJQValidate</parameter>
    <parameter key="jquery.ui.booklet.class">YsJQBooklet</parameter>
    <parameter key="jquery.ui.cycle.class">YsJQCycle</parameter>
    <parameter key="jquery.ui.ring.class">YsJQRing</parameter>
    <parameter key="jquery.ui.video.class">YsUIVideo</parameter>
    <parameter key="jquery.ui.upload.class">YsUpload</parameter>
	<parameter key="twig.loader.filesystem.location">templates</parameter>
	<parameter key="twig.config.cache">cache</parameter>
	<parameter key="twig.config.debug">true</parameter>
  </parameters>
  <services>
	<!-- TWIG CORE -->
	<service id="twig.loader" class="Twig_Loader_Filesystem">
	  <argument>%twig.loader.filesystem.location%</argument>
    </service>
	<service id="twig" class="Twig_Environment">
	  <argument type="service" id="twig.loader" />
	  <argument type="collection">
		<argument key="cache">%twig.config.cache%</argument>
		<argument key="debug">%twig.config.debug%</argument>
	  </argument>
	  <call method="setExtensions">
		<argument type="collection">
		  <argument type="service" id="smartwig.ui.core" />
		  <argument type="service" id="smartwig.ui.addons" />
		  <argument type="service" id="smartwig.sintax" />
		  <argument type="service" id="smartwig.jquery.core" />
		  <argument type="service" id="smartwig.html.tags" />
		</argument>
	  </call>
    </service>
  
    <!-- TWIG EXTENSIONS -->
    <service id="smartwig.ui.core" class="Yepsua\SmarTwig\Twig\Extension\UICoreExtension">
      <tag name="twig.extension" alias="ui.core" />
      <call method="setBuilders">
        <argument type="collection">
          <argument key="ui.html">%html.builder.class%</argument>
          <argument key="ui.jqueryCore">%jquery.core.builder.class%</argument>
          <argument key="ui.dialog">%jquery.ui.dialog.class%</argument>
          <argument key="ui.tabs">%jquery.ui.tabs.class%</argument>
          <argument key="ui.accordion">%jquery.ui.accordion.class%</argument>
          <argument key="ui.progressbar">%jquery.ui.progressbar.class%</argument>
          <argument key="ui.slider">%jquery.ui.slider.class%</argument>
          <argument key="ui.autocomplete">%jquery.ui.autocomplete.class%</argument>
          <argument key="ui.datepicker">%jquery.ui.datepicker.class%</argument>
          <argument key="ui.datetimepicker">%jquery.ui.datetimepicker.class%</argument>
          <argument key="ui.button">%jquery.ui.button.class%</argument>
          <argument key="ui.multiselect">%jquery.ui.multiselect.class%</argument>
          <argument key="ui.picklist">%jquery.ui.picklist.class%</argument>
          <argument key="ui.popup">%jquery.ui.popup.class%</argument>
          <argument key="ui.selectmenu">%jquery.ui.selectmenu.class%</argument>
          <argument key="ui.expander">%jquery.ui.expander.class%</argument>
          <argument key="ui.splitter">%jquery.ui.splitter.class%</argument>
          <argument key="ui.dynaselect">%jquery.ui.dynaselect.class%</argument>
          <argument key="ui.menu">%jquery.ui.menu.class%</argument>
          <argument key="ui.panel">%jquery.ui.panel.class%</argument>
          <argument key="ui.tooltip">%jquery.ui.tooltip.class%</argument>
          <argument key="ui.draggable">%jquery.ui.draggable.class%</argument>
          <argument key="ui.droppable">%jquery.ui.droppable.class%</argument>
          <argument key="ui.resizable">%jquery.ui.resizable.class%</argument>
          <argument key="ui.effect">%jquery.ui.effect.class%</argument>
          <argument key="ui.video">%jquery.ui.video.class%</argument>
        </argument>   
      </call>      
    </service>
    <service id="smartwig.ui.addons" class="Yepsua\SmarTwig\Twig\Extension\UIAddonsExtension">
      <tag name="twig.extension" alias="ui.addons" />
      <call method="setBuilders">
        <argument type="collection">
          <argument key="ui.block">%jquery.ui.blockui.class%</argument>
          <argument key="ui.box">%jquery.ui.box.class%</argument>
          <argument key="ui.colorpicker">%jquery.ui.colorpicker.class%</argument>
          <argument key="ui.notify">%jquery.ui.notify.class%</argument>
          <argument key="ui.hotkey">%jquery.ui.keys.class%</argument>
          <argument key="ui.monitor">%jquery.ui.monitor.class%</argument>
          <argument key="ui.keypad">%jquery.ui.keypad.class%</argument>
          <argument key="ui.calculator">%jquery.ui.calculator.class%</argument>
          <argument key="ui.layout">%jquery.ui.layout.class%</argument>
          <argument key="ui.mask">%jquery.ui.mask.class%</argument>
          <argument key="ui.formWizard">%jquery.ui.formWizard.class%</argument>
          <argument key="ui.ajaxForm">%jquery.ui.ajaxForm.class%</argument>
          <argument key="ui.validation">%jquery.ui.validation.class%</argument>
          <argument key="ui.booklet">%jquery.ui.booklet.class%</argument>
          <argument key="ui.cycle">%jquery.ui.cycle.class%</argument>
          <argument key="ui.ring">%jquery.ui.ring.class%</argument>
          <argument key="ui.upload">%jquery.ui.upload.class%</argument>
        </argument>   
      </call>      
    </service>
    <service id="smartwig.sintax" class="Yepsua\SmarTwig\Twig\Extension\JsSintaxExtension">
      <tag name="twig.extension" alias="js.sintax" />
    </service>
    <service id="smartwig.jquery.core" class="Yepsua\SmarTwig\Twig\Extension\JQueryCoreExtension">
      <tag name="twig.extension" alias="jquery.core" />
    </service>
    <service id="smartwig.html.tags" class="Yepsua\SmarTwig\Twig\Extension\HTMLExtension">
      <tag name="twig.extension" alias="html.tags" />
    </service>	
    <!-- TWIG EXTENSIONS -->
	
  </services>
</container>
```

This way is the most recommended for performance and scalability.

Basic Usage
===========

The /index.php content:

``` php
require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates'); 
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
	'debug' => true // Only for dev enviroment.
));

$twig->setExtensions(
	Yepsua\SmarTwig\Twig\Extension\SmarTwigExtension::getAllExtensions()
);

echo $twig->render('index.html', array('name' => 'Fabien'));
```

The /templates/index.html content:

``` html
<html>
<head>

{% include 'path/to/jquery4php-assets/smartwigAssets.html' %}

</head>
<body>

<div style="display:none">
	{% ui_dialog title="Hello World" %}
		The name is: <b>{{ name }}</b>
	{% end_ui_dialog %}
</div>

</body>
</html>
```

###Info:
The smartwigAssets.html is an example file for test all the SmarTwig
Components, You must edit this file for include only that you need.


![SmarTwig Showcase](http://s16.postimg.org/ol3yt679h/smartwig.png "SmarTwig Showcase")

The Sf2 Bundle
==============
If you are using Sf2 Framework we recommend the [SmarTwigBundle](https://github.com/oyepez003/YepsuaSmarTwigBundle)

Enjoy

[Showcase](http://smartwig.yepsua.com/web/)
[Twig](http://www.twig-project.org/)
[jQuery4PHP](http://jquery4php.sourceforge.net/)