<?php
class TestAction extends CTKAction
{
    public function run()
    {
    	//echo "access token :".$_SESSION['access_token'];
    	
    	$user = $this->userLogguedAndValid();
    	$user["token"] = $this->getCheckBearerToken();
    	echo Rest::json( $user );

    	// $this->getController()->layout = "//layouts/empty";
   		// $this->getController()->render("test");


    }
}