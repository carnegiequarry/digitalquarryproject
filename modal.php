<a id="modallinkylink" rel="leanModal" href="#modal">modal</a>

<div id="modal">
	<div id="modalcontent">
		<?php
			$servername = "localhost";
			$username = "carnegj7";
			$password = "Dino2580!";
			$dbname = "carnegj7_fossils";
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
			$sql = "SELECT catalogNumber, cliffNumber, image, bone, taxon, visibleMeasurements, currentLocation FROM demoFossilDatawithImages LIMIT 1 OFFSET 19";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br>" . 
			         "<br>" . "catalog number: " . $row["catalogNumber"] . "<br>" . 
			         "cliff number: " . $row["cliffNumber"] . "<br>" . 
			         "bone: " . $row["bone"] . "<br>" . 
			         "taxon: " . $row["taxon"] . "<br>" . 
			         "visible measurements: " . $row["visibleMeasurements"] . "<br>" . 
			         "current location: " . $row["currentLocation"] . "<br><br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  


<!-- find id -->
		<?php
			
			echo "fossilid";
		?>

	</div>
</div>
