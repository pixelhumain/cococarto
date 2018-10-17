<?php
/**
 * DefaultController.php
 *
 * OneScreenApp for Communecting people
 *
 * @author: Tibor Katelbach <tibor@pixelhumain.com>
 * Date: 14/03/2014
 */
class DefaultController extends CommunecterController {


  protected function beforeAction($action)
	{
    //parent::initPage();
	  return parent::beforeAction($action);
	}

	public function actionIndex() 
	{
    /*if( @Yii::app()->params["module"]["parent"] && !@Yii::app()->params["module"]["overwrite"][Yii::app()->controller->id][ Yii::app()->controller->action->id ] ){
      $this->redirect(Yii::app()->createUrl( "/".Yii::app()->params["module"]["parent"]."/".Yii::app()->controller->id."/".Yii::app()->controller->action->id ));
    }*/
    
    	if(Yii::app()->request->isAjaxRequest)
        echo $this->renderPartial("index");
      else
      {
        $this->layout = "//layouts/empty";
        $this->render("index");
      }
  }

  public function actionDoc($md="README") 
  {
      echo file_get_contents('../../modules/'.$this->module->id.'/'.$md.'.md');
  }

}
