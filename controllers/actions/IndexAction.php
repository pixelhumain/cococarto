<?php
class IndexAction extends CAction
{
    public function run()
    {
    	$this->getController()->layout = "//layouts/empty";
    	
    	
	   	echo $this->getController()->render("index");
    }
}