<?php
require_once('cmsBase.php');
class cmsWidget extends cmsBase{
	//semua kode yang ada disini dapat diakses melalui fungsi widget dalam CMS
	
	var $widgetPath='';
	var $widgetName='';
	
	function setWidgetPath($widgetName)
	{
	$this->widgetPath = 'widgets/' . $widgetName . '/';
	$this->widgetName = $widgetName;
	
	}
	function getWidgetPath()
	{
	return $this->widgetPath;
		}
		function display()
		{	
		echo 'Di sini akan ditmapilkan output widget';
		}
		
		function run($widgetName)    {
		$this->setWidgetPath($widgetName);
		$this->display();
    }
	
}

?>