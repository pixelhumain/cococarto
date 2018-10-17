<?php
class RessourcesAction extends CAction
{
    public function run()
    {
      	CO2Stat::incNbLoad("co2-ressources");
	   	echo $this->getController()->renderPartial("co2.views.app.search",array("type"=>"ressources"));
    }
}