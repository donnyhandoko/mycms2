<?php
require_once('includes/cmsWidget.php');
class CalculatorWidget extends CmsWidget{
    function display()
    {
      if(!empty($this->parameters['use_jam']) and $this->parameters['use_jam']==true)
      {
        require($this->getWidgetPath().'template/jam.php');
      }
      else
      {
        require($this->getWidgetPath().'template/default.php');
      }
    }
}
?>
