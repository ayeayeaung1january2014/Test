<!DOCTYPE html>
<html>
<head>
	<title>Property Details</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- CSS -->
  	<link rel="stylesheet" href="/Test/assets/css/bootstrap.min.css">  
    <link rel="stylesheet" href="/Test/assets/css/common.css">  
</head>
<body>
	<div class="container">	
		<a href="/Test/" type="button" class="btn btn-default"> <<<  Properties</a>
		<h1 id="title">Property Details</h1>
		<div class="row">		
		<div class="col-md-12 property">	
			<img src="/Test/<?php echo $property->image_url ?>" class="img-rounded" alt="...">
	      	<p>Property ID (<span id="id"><?php echo $property->id ?></span>)</p>		      	
	      	<p>Property Name (<?php echo $property->property_name?>)</p>
	      	<p>ShortList Flag (<span id="shortlist_flag"><?php echo $property->shortlist_flag ?></span>)</p>	
		    <button type="button" class="btn btn-default" id="detail_button">
				<?php
					if($property->shortlist_flag == 0){
						echo "shortlist";
					}
					else{
						echo "unshortlist";
					}
				?>
		    </button>
		</div>	    			
	</div>
	<!-- Javcript -->
	<script src="/Test/assets/js/jquery.min.js"></script>
  	<script src="/Test/assets/js/bootstrap.min.js"></script>
  	<script src="/Test/assets/js/property.js"></script>
</body>
</html>


