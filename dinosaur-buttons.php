<!-- JQUERY HOVERS -->
	<script>
		$(document).ready( function(){

			$('#stegosaurus').click(function(){
				$('.stegosaurus').css({"transition": "fill 0.5s ease", "fill": "#FFCC00"});
				$('.dryosaurus,.diplodocus,.camptosaurus,.camarasaurus,.apatosaurus,.allosaurus').css("fill", "#808080");
				
				$('#stegosaurus').css("background", "#FFCC00");
				$('#dryosaurus,#diplodocus,#camptosaurus,#camarasaurus,#apatosaurus,#allosaurus').css("background", "#808080");
			});
			
			
			$('#dryosaurus').click(function(){
				$('.dryosaurus').css({"transition": "fill 0.5s ease", "fill": "#FFCC00"});
				$('.stegosaurus,.diplodocus,.camptosaurus,.camarasaurus,.apatosaurus,.allosaurus').css("fill", "#808080");

				$('#dryosaurus').css("background", "#FFCC00");
				$('#stegosaurus,#diplodocus,#camptosaurus,#camarasaurus,#apatosaurus,#allosaurus').css("background", "#808080");
				
			});
		
			
			$('#diplodocus').click(function(){
				$('.diplodocus').css({"transition": "fill 0.5s ease", "fill": "#FFCC00"});
				$('.dryosaurus,.stegosaurus,.camptosaurus,.camarasaurus,.apatosaurus,.allosaurus').css("fill", "#808080");

				$('#diplodocus').css("background", "#FFCC00");
				$('#dryosaurus,#stegosaurus,#camptosaurus,#camarasaurus,#apatosaurus,#allosaurus').css("background", "#808080");
			});
			

			$('#camptosaurus').click(function(){
				$('.camptosaurus').css({"transition": "fill 0.5s ease", "fill": "#FFCC00"});
				$('.dryosaurus,.diplodocus,.stegosaurus,.camarasaurus,.apatosaurus,.allosaurus').css("fill", "#808080");

				$('#camptosaurus').css("background", "#FFCC00");
				$('#dryosaurus,#diplodocus,#stegosaurus,#camarasaurus,#apatosaurus,#allosaurus').css("background", "#808080");
			});
			
			
			$('#camarasaurus').click(function(){
				$('.camarasaurus').css({"transition": "fill 0.5s ease", "fill": "#FFCC00"});
				$('.dryosaurus,.diplodocus,.camptosaurus,.stegosaurus,.apatosaurus,.allosaurus').css("fill", "#808080");

				$('#camarasaurus').css("background", "#FFCC00");
				$('#dryosaurus,#diplodocus,#camptosaurus,#stegosaurus,#apatosaurus,#allosaurus').css("background", "#808080");
			});
			
			
			$('#apatosaurus').click(function(){
				$('.apatosaurus').css({"transition": "fill 0.5s ease", "fill": "#FFCC00"});
				$('.dryosaurus,.diplodocus,.camptosaurus,.camarasaurus,.stegosaurus,.allosaurus').css("fill", "#808080");

				$('#apatosaurus').css("background", "#FFCC00");
				$('#dryosaurus,#diplodocus,#camptosaurus,#camarasaurus,#stegosaurus,#allosaurus').css("background", "#808080");
			});
			
			
			$('#allosaurus').click(function(){
				$('.allosaurus').css({"transition": "fill 0.5s ease", "fill": "#FFCC00"});
				$('.dryosaurus,.diplodocus,.camptosaurus,.camarasaurus,.apatosaurus,.stegosaurus').css("fill", "#808080");

				$('#allosaurus').css("background", "#FFCC00");
				$('#dryosaurus,#diplodocus,#camptosaurus,#camarasaurus,#apatosaurus,#stegosaurus').css("background", "#808080");
			});
			
		});
	</script>
 


<!-- Dinosaur buttons -->
<div id="dinosaur-buttons-1">

	<button id="stegosaurus">	<p id="button-text">Stegosaurus</p></button>
	<button id="dryosaurus">	<p id="button-text">Dryosaurus</p></button>
	<button id="diplodocus">	<p id="button-text">Diplodocus</p></button>
	<button id="camptosaurus">	<p id="button-text">Camptosaurus</p></button>
	<button id="camarasaurus">	<p id="button-text">Camarasaurus</p></button>
	<button id="apatosaurus">	<p id="button-text">Apatosaurus</p></button>
	<button id="allosaurus">	<p id="button-text">Allosaurus</p></button>

</div>
