<?php
require_once('includes/cmsWidget.php');
class CalculatorWidget extends CmsWidget{
    function display()
    {
      if(!empty($this->parameters['use_scientific']) and $this->parameters['use_scientific']==true)
      {
        require($this->getWidgetPath().'template/scientific.php');
      }
      else
      {
        require($this->getWidgetPath().'template/default.php');
      }
    }
}
?>
