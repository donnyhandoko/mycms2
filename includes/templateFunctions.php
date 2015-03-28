<?php
require_once('cmsBase.php');
class templateFunctions extends cmsBase{
	//fungsi pengaturan template
	var $templateName = 'default';

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

	function show ()
	{
		require_once($this->getCurrentTemplatePath().'template.php');
	}
}

?>