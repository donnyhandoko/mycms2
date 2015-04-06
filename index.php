<?php
require_once('includes/templateFunctions.php');
	$tmpl= new TemplateFunctions();
	$tmpl->setWidget('logoPosition','logo');
	$tmpl->setWidget('sidebarPosition','hello',array('hello_to'=>'MyCms'));
	$tmpl->setWidget('sidebarPosition','calculator');
	$tmpl->setWidget('sidebarPosition','calculator',array('use_scientific'=>true));
	$tmpl->show();
?>
