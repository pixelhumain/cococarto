<?php


//assets from ph base repo
$cssAnsScriptFilesTheme = array(
	// SHOWDOWN
	'/plugins/showdown/showdown.min.js',
	//MARKDOWN
	'/plugins/to-markdown/to-markdown.js'
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesTheme, Yii::app()->request->baseUrl);

//gettting asstes from parent module repo
$cssAnsScriptFilesModule = array( 
	'/js/dataHelpers.js',
	'/css/md.css',
);
HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, Yii::app()->getModule( Yii::app()->params["module"]["parent"] )->getAssetsUrl() );

if( $this->layout != "//layouts/empty"){
	$layoutPath = 'webroot.themes.'.Yii::app()->theme->name.'.views.layouts.';
	$this->renderPartial($layoutPath.'header',array("page"=>"ressource","layoutPath"=>$layoutPath));
}
?>

<h1 style="margin-top: 50px; text-align: center;padding:10px;border:1px solid #666;width:400px;margin:0px auto;">
	<img height=50 style="vertical-align: middle" src="<?php echo $this->module->assetsUrl?>/images/logo.png"> ressources.api
</h1>

<div id="doc"></div>

<script type="text/javascript">

$(document).ready(function() { 
	getAjax('', baseUrl+'/<?php  echo $this->module->id;?>/default/doc/md/API',
		function(data){ 
			descHtml = dataHelper.markdownToHtml(data); 
			$('#doc').html(descHtml);
			initKInterface();
		},"html");
});


</script>
<div id="result" style="border:1px solid red;color:red;"></div>
<a href="javascript:;" onclick="doit();">Test</a>
<script type="text/javascript">

function doit () { 
	alert("doing it");
	$.ajax( {
	    url  : 'http://communecter.org/ph/ressources/api/test',
	    type : 'POST',
	    data : { content: 'testing testing' },
	    beforeSend : function( xhr ) {
	       xhr.setRequestHeader( 'Authorization', 'Bearer pwwbkvv7abqzonnvztpea91ich7vprwdorbt4w4m' );
	    },
	    success: function( res ) {
	    	alert("did it success!!"+res);
	       console.dir(res);
	    },
	    error:function(xhr, status, error){
	    	$("#result").html("failed it !!");
	    },
	} );
}

</script>