<div class="modal" id="modal_1">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 1";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_2">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 2";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_3">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 3";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_4">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 4";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_5">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 5";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_6">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 6";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_7">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 7";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_8">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 8";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_9">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 9";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_10">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 10";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_11">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 11";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_12">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 12";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_13">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 13";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_14">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 14";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_15">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 15";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_16">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 16";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_17">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 17";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_18">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 18";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_19">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 19";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_20">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 20";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_21">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 21";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_22">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 22";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_23">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 23";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_24">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 24";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_25">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 25";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_26">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 26";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_27">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 27";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_28">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 28";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_29">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 29";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_30">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 30";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_31">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 31";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_32">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 32";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_33">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 33";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_34">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 34";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_35">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 35";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_36">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 36";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_37">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 37";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_38">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 38";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_39">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 39";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_40">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 40";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_41">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 41";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_42">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 42";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_43">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 43";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_44">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 44";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_45">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 45";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_46">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 46";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_47">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 47";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_48">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 48";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_49">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 49";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_50">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 50";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_51">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 51";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_52">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 52";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_53">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 53";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_54">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 54";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_55">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 55";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_56">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 56";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_57">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 57";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_58">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 58";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_59">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 59";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_60">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 60";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_61">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 61";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_62">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 62";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_63">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 63";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_64">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 64";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_65">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 65";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_66">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 66";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_67">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 67";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_68">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 68";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_69">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 69";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_70">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 70";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_71">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 71";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_72">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 72";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_73">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 73";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_74">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 74";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_75">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 75";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_76">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 76";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_77">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 77";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_78">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 78";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_79">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 79";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_80">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 80";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_81">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 81";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_82">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 82";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_83">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 83";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_84">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 84";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_85">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 85";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_86">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 86";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_87">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 87";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_88">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 88";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_89">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 89";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_90">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 90";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_91">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 91";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_92">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 92";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_93">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 93";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_94">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 94";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_95">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 95";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_96">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 96";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_97">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 97";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_98">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 98";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_99">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 99";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_100">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 100";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_101">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 101";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_102">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 102";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_103">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 103";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_104">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 104";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_105">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 105";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_106">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 106";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_107">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 107";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_108">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 108";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_109">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 109";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_110">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 110";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_111">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 111";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_112">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 112";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_113">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 113";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_114">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 114";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_115">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 115";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_116">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 116";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_117">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 117";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_118">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 118";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_119">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 119";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_120">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 120";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_121">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 121";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_122">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 122";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_123">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 123";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_124">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 124";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_125">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 125";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_126">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 126";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_127">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 127";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_128">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 128";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_129">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 129";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_130">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 130";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_131">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 131";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_132">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 132";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_133">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 133";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_134">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 134";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_135">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 135";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_136">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 136";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_137">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 137";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_138">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 138";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_139">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 139";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_140">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 140";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_141">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 141";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_142">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 142";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_143">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 143";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_144">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 144";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_145">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 145";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_146">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 146";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_147">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 147";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_148">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 148";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_149">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 149";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_150">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 150";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_151">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 151";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_152">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 152";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_153">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 153";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_154">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 154";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_155">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 155";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_156">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 156";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_157">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 157";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_158">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 158";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_159">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 159";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_160">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 160";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_161">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 161";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_162">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 162";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_163">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 163";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_164">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 164";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_165">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 165";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_166">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 166";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_167">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 167";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_168">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 168";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_169">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 169";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_170">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 170";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_171">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 171";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_172">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 172";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_173">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 173";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_174">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 174";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_175">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 175";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_176">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 176";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_177">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 177";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_178">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 178";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_179">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 179";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_180">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 180";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_181">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 181";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_182">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 182";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_183">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 183";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_184">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 184";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_185">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 185";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_186">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 186";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_187">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 187";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_188">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 188";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_189">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 189";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_190">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 190";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_191">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 191";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_192">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 192";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_193">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 193";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_194">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 194";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_195">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 195";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_196">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 196";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_197">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 197";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_198">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 198";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_199">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 199";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_200">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 200";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_201">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 201";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_202">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 202";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_203">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 203";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_204">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 204";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_205">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 205";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_206">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 206";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_207">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 207";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_208">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 208";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_209">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 209";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_210">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 210";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_211">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 211";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_212">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 212";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_213">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 213";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_214">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 214";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_215">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 215";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_216">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 216";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_217">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 217";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_218">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 218";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_219">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 219";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_220">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 220";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_221">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 221";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_222">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 222";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_223">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 223";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_224">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 224";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_225">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 225";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_226">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 226";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_227">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 227";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_228">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 228";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_229">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 229";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_230">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 230";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_231">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 231";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_232">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 232";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_233">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 233";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_234">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 234";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_235">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 235";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_236">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 236";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_237">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 237";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_238">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 238";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_239">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 239";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_240">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 240";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_241">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 241";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_242">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 242";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_243">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 243";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_244">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 244";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_245">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 245";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_246">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 246";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_247">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 247";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_248">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 248";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_249">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 249";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_250">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 250";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_251">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 251";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_252">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 252";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_253">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 253";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_254">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 254";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_255">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 255";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_256">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 256";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_257">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 257";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_258">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 258";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_259">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 259";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_260">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 260";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_261">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 261";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_262">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 262";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_263">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 263";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_264">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 264";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_265">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 265";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_266">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 266";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_267">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 267";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_268">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 268";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_269">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 269";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_270">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 270";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_271">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 271";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_272">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 272";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_273">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 273";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_274">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 274";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_275">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 275";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_276">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 276";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_277">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 277";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_278">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 278";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_279">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 279";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_280">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 280";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_281">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 281";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_282">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 282";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_283">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 283";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_284">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 284";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_285">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 285";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_286">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 286";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_287">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 287";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_288">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 288";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_289">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 289";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_290">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 290";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_291">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 291";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_292">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 292";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_293">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 293";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_294">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 294";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_295">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 295";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_296">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 296";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_297">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 297";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_298">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 298";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_299">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 299";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_300">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 300";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_301">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 301";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_302">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 302";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_303">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 303";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_304">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 304";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_305">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 305";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_306">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 306";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_307">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 307";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_308">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 308";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_309">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 309";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_310">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 310";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_311">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 311";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_312">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 312";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_313">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 313";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_314">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 314";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_315">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 315";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_316">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 316";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_317">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 317";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_318">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 318";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_319">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 319";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_320">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 320";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_321">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 321";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_322">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 322";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_323">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 323";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_324">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 324";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_325">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 325";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_326">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 326";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_327">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 327";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_328">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 328";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_329">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 329";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_330">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 330";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_331">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 331";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_332">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 332";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_333">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 333";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_334">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 334";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_335">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 335";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_336">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 336";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_337">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 337";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_338">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 338";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_339">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 339";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_340">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 340";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_341">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 341";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_342">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 342";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_343">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 343";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_344">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 344";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_345">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 345";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_346">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 346";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_347">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 347";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_348">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 348";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_349">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 349";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_350">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 350";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_351">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 351";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_352">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 352";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_353">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 353";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_354">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 354";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_355">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 355";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_356">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 356";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_357">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 357";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_358">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 358";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_359">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 359";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_360">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 360";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_361">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 261";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_362">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 362";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_363">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 363";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_364">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 364";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_365">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 365";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_366">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 366";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_367">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 367";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_368">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 368";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_369">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 369";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_370">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 370";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_371">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 371";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_372">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 372";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_373">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 373";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_374">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 374";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_375">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 375";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_376">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 376";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_377">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 377";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_378">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 378";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_379">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 379";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_380">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 380";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_381">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 381";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_382">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 382";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_383">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 383";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_384">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 384";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_385">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 385";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_386">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 386";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_387">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 387";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_388">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 388";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_389">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 389";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_390">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 390";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_391">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 391";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_392">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 392";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_393">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 393";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_394">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 394";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_395">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 395";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_396">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 396";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_397">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 397";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_398">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 398";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_399">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 399";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_400">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 400";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_401">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 401";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_402">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 402";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_403">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 403";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_404">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 404";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_405">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 405";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_406">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 406";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_407">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 407";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_408">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 408";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_409">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 409";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_410">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 410";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_411">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 411";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_412">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 412";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_413">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 413";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_414">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 414";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_415">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 415";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_416">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 416";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_417">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 417";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_418">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 418";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_419">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 419";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_420">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 420";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_421">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 421";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_422">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 422";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_423">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 423";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_424">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 424";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_425">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 425";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_426">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 426";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_427">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 427";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_428">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 428";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_429">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 429";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_430">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 430";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_431">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 431";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_432">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 432";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_433">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 433";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_434">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 434";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_435">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 435";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_436">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 436";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_437">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 437";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_438">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 438";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_439">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 439";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_440">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 440";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_441">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 441";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_442">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 442";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_443">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 443";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_444">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 444";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_445">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 445";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_446">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 446";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_447">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 447";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_448">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 448";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_449">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 449";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_450">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 450";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_451">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 451";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_452">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 452";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_453">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 453";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_454">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 454";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_455">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 455";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_456">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 456";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_457">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 457";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_458">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 458";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_459">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 459";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_460">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 460";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_461">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 461";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_462">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 462";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_463">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 463";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_464">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 464";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_465">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 465";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_466">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 466";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_467">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 467";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_468">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 468";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_469">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 469";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_470">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 470";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_471">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 471";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_472">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 472";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_473">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 473";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_474">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 474";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_475">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 475";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_476">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 476";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_477">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 477";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_478">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 478";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_479">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 479";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_480">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 480";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_481">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 481";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_482">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 482";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_483">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 483";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_484">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 484";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_485">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 485";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_486">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 486";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_487">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 487";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_488">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 488";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_489">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 489";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_490">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 490";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_491">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 491";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_492">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 492";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_493">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 493";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_494">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 494";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_495">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 495";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_496">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 496";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_497">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 497";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_498">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 498";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_499">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 499";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_500">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 500";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_501">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 501";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_502">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 502";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_503">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 503";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_504">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 504";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_505">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 505";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_506">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 506";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_507">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 507";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_508">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 508";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_509">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 509";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_510">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 510";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_511">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 511";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_512">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 512";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_513">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 513";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_514">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 514";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_515">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 515";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_516">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 516";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_517">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 517";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_518">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 518";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_519">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 519";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_520">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 520";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_521">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 521";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_522">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 522";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_523">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 523";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_524">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 524";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_525">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 525";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_526">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 526";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_527">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 527";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_528">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 528";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_529">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 529";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_530">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 530";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_531">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 531";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_532">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 532";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_533">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 533";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_534">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 534";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_535">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 535";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_536">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 536";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_537">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 537";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_538">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 538";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_539">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 539";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_540">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 540";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_541">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 541";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_542">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 542";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_543">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 543";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_544">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 544";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_545">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 545";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_546">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 546";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_547">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 547";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_548">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 548";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_549">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 549";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_550">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 550";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
<div class="modal" id="modal_551">
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
			$sql = "SELECT image, catalogNumber, cliffNumber, taxon, bone, age, relatedFossils, visibleMeasurements, currentLocation FROM modernQuarryFossilData LIMIT 1 OFFSET 551";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			     // output data of each row
			     while($row = $result->fetch_assoc()) {
			         echo 
			         $row["image"] . "<br><br>" . 
			        "<strong>" . "Taxon: " . "</strong>" . $row["taxon"] . "<br>" . 
			        "<strong>" . "Bone: " . "</strong>" . $row["bone"] . "<br>" . 
			        "<strong>" . "Age: " .  "</strong>" . $row["age"] . "<br>" . 
			        "<strong>" . "Catalog number: " . "</strong>" . $row["catalogNumber"] . "<br>" . 
			        "<strong>" . "Cliff number: " . "</strong>" . $row["cliffNumber"] . "<br>" . 
 			        "<strong>" . "Related fossils: " . "</strong>" . $row["relatedFossils"] . "<br>" . 
			        "<strong>" . "Visible measurements: " . "</strong>" . $row["visibleMeasurements"] . "<br>" . 
			        "<strong>" . "Current location: " . "</strong>" . $row["currentLocation"] . "<br>";
			     }

			} else {
			     echo "0 results";
			}
			$conn->close();
		?>  

	</div>
</div>
