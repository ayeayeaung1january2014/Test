<!DOCTYPE html>
<html>
<head>
	<title>Property ShortList</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS -->
	<link rel="stylesheet" href="/Test/assets/css/bootstrap.min.css">  
	<link rel="stylesheet" href="/Test/assets/css/common.css">  
</head>
<body>
	<div class="container">
		<nav class="navbar">
			<div class="container-fluid">       
				<ul class="nav navbar-nav">
					<li><a href="/Test/">Home</a></li>
					<li><a href="/Test/shortlist">Shortlist</a></li>
				</ul>
			</div>
		</nav>
		<h1 id="title">Property ShortList</h1>
		<div class="row">
			<?php if(is_array($properties)) { ?>
			<?php foreach ($properties as $property) { ?>
			<div class="col-md-4 property">					
				<img src="/Test/<?php echo $property['image_url'] ?>" class="img-rounded" alt="...">
				<p>Property ID (<?php echo $property['id'] ?>)</p>		      	
				<p>Property Name (<?php echo $property['property_name'] ?>)</p>
				<p>ShortList Flag (<?php echo $property['shortlist_flag'] ?>)</p>		   	      		
				<button type="button" class="btn btn-default remove_button" id="remove_button" property_id="<?php echo $property['id']; ?>" property_shortlist_flag="<?php echo $property['shortlist_flag']; ?>">Remove</button>
			</div>
			<?php } ?>		 
			<?php } ?>
		</div>
	</div>
	<!-- Javcript -->
	<script src="/Test/assets/js/jquery.min.js"></script>
	<script src="/Test/assets/js/bootstrap.min.js"></script>
	<script src="/Test/assets/js/property.js"></script>
</body>
</html>