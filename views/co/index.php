<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <style>
      html, body, #gogocarto
      {
        height: 100%;
        width: 100%;  
      }
      .option-name { text-transform: capitalize; }
    </style>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
			  crossorigin="anonymous"></script>
    <!-- Loading library -->
    <link rel="stylesheet" href="https://pixelhumain.github.io/GoGoCartoJs/dist/gogocarto.min.css"> 
    <script src="https://pixelhumain.github.io/GoGoCartoJs/dist/gogocarto.min.js"></script>

    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

    <!-- Examples related stuff -->    
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>     
	
    <script>
      $(document).ready(function()
      {  
      	//todo 
      	// afficher toutes les datas orga
      	// multi type 
      	// 

      	var taxonomy = {
		"name":"Catégories Principales",
		"unexpandable":true,
		"options":[
		{
		"id":10507,
		"name":"Mode & Beauté",
		"nameShort":"Mode/Beauté",
		"subcategories":[
		{
		"id":2174,
		"name":"Catégories",
		"options":[
		{
		"id":10508,
		"name":"Fripperie",
		"color":"#7e3200",
		"softColor":"#864c26",
		"icon":"icon-friperie-1"
		},
		{
		"id":10509,
		"name":"Pharamacie",
		"color":"#98a100",
		"softColor":"#8c9221",
		"icon":"icon-pharmacie-1"
		},
		{
		"id":10510,
		"name":"Coiffeur",
		"color":"#00537e",
		"softColor":"#22698e",
		"icon":"icon-001-scissors-1"
		},
		{
		"id":10511,
		"name":"Institut Beauté",
		"color":"#ab0061",
		"softColor":"#a4307c",
		"icon":"icon-beaute"
		},
		{
		"id":10512,
		"name":"Boutique",
		"subcategories":[
		{
		"id":2175,
		"name":"Produits",
		"options":[
		{
		"id":10513,
		"name":"Vêtement",
		"color":"#8e36a5",
		"softColor":"#7d398d",
		"icon":"icon-vetement-4"
		},
		{
		"id":10514,
		"name":"Accessoire",
		"color":"#8e36a5",
		"softColor":"#7d398d",
		"icon":"icon-accessoire-2"
		},
		{
		"id":10515,
		"name":"Décoration",
		"color":"#8e36a5",
		"softColor":"#7d398d",
		"icon":"icon-decoration-2"
		},
		{
		"id":10516,
		"name":"Cosmétique",
		"color":"#8e36a5",
		"softColor":"#7d398d",
		"icon":"icon-cosmetique"
		}
		],
		"enableDescription":true,
		"displayCategoryName":false
		}
		],
		"color":"#8e36a5",
		"softColor":"#7d398d",
		"icon":"",
		"useIconForMarker":false,
		"showExpanded":true
		}
		],
		"unexpandable":true
		}
		],
		"color":"#8E36A5",
		"softColor":"#7D398D",
		"icon":"icon-vetement-4"
		}
		]
		};

      	config = {
		    "data": {
		        // "taxonomy": "https://semantic-bus.org/data/api/TaxonomiePWA",
		        // "elements": "https://semantic-bus.org/data/api/PWA_Bounds",
		        // "elementsCompactApiUrl": "https://semantic-bus.org/data/api/PWA_Bounds_Compact",
		        // "elementByIdUrl": "https://semantic-bus.org/data/api/PWA_One?id={ID}",
				"taxonomy": taxonomy,
				"elements": 'http://dev.communecter.org/api/organization/get/format/gogocarto',
				"elementByIdUrl": 'http://dev.communecter.org/api/organization/get/format/gogocarto/id/',
		        "requestByBounds": true
		    },
		    "menu": {
		        "width": 350,
		        "smallWidthStyle": true
		    },
		    "map": {
		        "saveTileLayerInCookies": true
		    }
		};
		console.dir(config);
       carto = goGoCarto('#gogocarto', config	);
      });
    </script>
    
  </head>
  <body>
    <div id="gogocarto"></div>
  </body>
  
</html>