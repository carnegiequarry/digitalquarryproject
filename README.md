# digitalquarryproject
<p>The Digital Quarry Project is an effort to bring the fossils of Dinosaur National Monument's Carnegie Quarry online for researchers and the public.</p>

<strong>Background</strong><br>
<p>First, check out <a href="http://www.carnegiequarry.com/">the main website</a>. 
We use WordPress and have volunteers at Dinosaur National Monument working on content. Poke around and you'll learn a bit about Dinosaur National Monument and the fossil quarry it was founded for.</p>

<p>The code-y fun part of the project is the <a href="http://www.carnegiequarry.com/modern-quarry/digital-quarry-all-modern-fossils.php#anchor">Digital Quarry</a>. 
This is an interactive tool for researchers and the public to explore the fossils of Carnegie Quarry. The fossil illustrations represent the fossils that are found in the quarry today, in the exact positions where they were deposited in a riverbed 150 million years ago.</p>

<p>Right now it has very basic functionality and only includes 551 of the fossils that are currently visible to visitors at the Quarry Exhibit Hall in Utah. However, roughly 5000 fossils have been documented from Carnegie Quarry--most of them were excavated and sent to museums like the Smithsonian, the AMNH and of course the Carnegie Museum. </p>

<p>Our goal is to eventually include all of those 5000 fossils in a rich, interactive online tool that is about three times larger on the page than the current Digital Quarry, and allows users to toggle fossils by taxa, current location, maybe even bone type and year exacavated. The ability to search any of these fields and highlight bones that match would also be very useful. </p>

<p>We're open to other ideas and suggestions of how to make the Digital Quarry more engaging, useful and fun.</p>

<strong>Setting up the Digital Quarry</strong><br>
<p>Get the following files:</p>
<ul>
<li> digital-quarry-all-modern-fossils.php <br>(this is more or less the index)
<li> modern-quarry.php <br>(includes all the SVG fossil illustrations)
<li> modal.php <br>(modals for each fossil--these are what open when you click on a bone illustration)
<li> modernQuarryFossilData <br>(the data for all the fossils that populates the modal fields)
<li> style.css <br>(the stylesheet)

<p>Create a database table for the data. We use phpMyadmin, which involves creating a table and columns, then uploading the csv file of the spreadsheet.</p>

<p>Once your table is created, you will have to replace the "xxxxxxxxxxxx" fields in modal.php with the login info for your database.</p>

<strong>Our Update Process</strong>
<p>The Digital Quarry is updated as needed by a Dinosaur National Monument volunteer. Changes submitted here are reviewed and implemented weekly.</p>

<strong>The Digital Quarry Project is made possible by</strong><br>
Dinosaur National Monument<br>
The National Park Service (Part of the United States Department of Interior)<br>
The Geological Society of America<br>
Mosaics in Science<br>
The Geocorps America/Geoscientists-in-the-Parks Program<br>

<strong>Code Acknowledgements</strong><br>
LeanModal<br>
W3 Schools<br>
