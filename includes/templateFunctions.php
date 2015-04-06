<?php
require_once('cmsBase.php');
class templateFunctions extends CmsBase{
	//fungsi pengaturan template
	var $templateName = 'default';
	var $widgetPositions=array();

	function show ()
	{
		require_once($this->getCurrentTemplatePath().'template.php');

	}

	function getCurrentTemplatePath()
	{
		return 'templates/'.$this->templateName. '/';
	}

	function setTemplate ($templateName)
	{
		$this->templateName = $templateName;
	}

	function appOutput()
{
		require_once('includes/cmsApplication.php');
		$app=new CmsApplication();
		$app->run();
}
	function widgetOutput($position='default')
	{
	if(!empty($this->widgetPositions[$position]))
	{
	$widgets=$this->widgetPositions[$position];
	foreach($widgets as $widgetObject)
	{
	$widgetName = $widgetObject->name;
	$widgetParameters = $widgetObject->parameters;
	require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
	$widgetclass=ucfirst($widgetName).'Widget';
	$widget=new $widgetclass();
	$widget->run($widgetName,$widgetParameters);
		}
	}
}
	function setWidget($position,$widgetName,$params=array())
{
	$widget=new StdClass;
	$widget->name=$widgetName;
	$widget->parameters=$params;

	if(empty($this->widgetPositions[$position])) 
	{
$this->widgetPositions[$position]=array($widget);
} else {
	array_push($this->widgetPositions[$position],$widget);
	}        
	}
	}
?>