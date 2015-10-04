<head>
	<meta charset="utf-8">
	<title>The Digital Quarry | Dinosaur National Monument</title>
	<link rel="stylesheet" href="http://www.carnegiequarry.com/modern-quarry/style.css">
	<title>Carnegie Quarry</title>
<!-- google font -->
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<!-- modal stuff -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.carnegiequarry.com/modern-quarry/jquery.leanModal.min.js"></script>
<script type="text/javascript">
	$(function() {
		$('a[rel*=leanModal]').leanModal({ top : 200, closeButton: ".modal_close" });		
	});
</script>

</head>

<!-- anchor -->
<div id="anchor">
	<a href="#anchor">anchor</a>
</div>

<!-- intro -->
<div id="intro">	
	<h4><strong>The Digital Quarry</strong>	
		<br>Swipe or use the arrow keys to navigate. 
		<br>Click on a fossil to learn more about it.   
	</h4>
	<button type="button"><a href="http://www.carnegiequarry.com/">HOME</a></button>	
	<!-- ?php include 'http://carnegiequarry.com/modern-quarry/dinosaur-buttons.php' ? -->
</div>

<!-- Fossils SVG -->
<div id="bones">
	<?php include 'http://carnegiequarry.com/modern-quarry/modern-quarry.php' ?>
</div> 

<!-- modals -->
<?php include 'http://carnegiequarry.com/modern-quarry/modal.php' ?>

