# digitalquarryproject

The Digital Quarry Project is an effort to bring the fossils of Dinosaur
National Monument's Carnegie Quarry online for researchers and the public.

## Background

First, visit the [Digital Quarry](http://www.carnegiequarry.com/modern-quarry
/digital-quarry-all-modern-fossils.php#anchor) and play around with it to see
what it does. This is an interactive tool for researchers and the public to
explore the fossils of Carnegie Quarry. The fossil illustrations represent the
fossils that are found in the quarry today, in the exact positions where they
were deposited in a riverbed 150 million years ago.

(If you're curious, check out [the main
website](http://www.carnegiequarry.com/). We use WordPress and have volunteers
at Dinosaur National Monument working on content. Poke around and you'll learn
a bit about Dinosaur National Monument and the fossil quarry it was founded
for.)

Right now the Digital Quarry has very basic functionality and only includes
551 of the fossils that are currently visible to visitors at the Quarry
Exhibit Hall in Utah. However, roughly 5000 fossils have been documented from
Carnegie Quarry--most of them were excavated and sent to museums like the
Smithsonian, the AMNH and of course the Carnegie Museum.

Our goal is to eventually include all of those 5000 fossils in a rich,
interactive online tool that is about three times larger on the page than the
current Digital Quarry, and allows users to toggle fossils by taxa, current
location, maybe even bone type and year exacavated. The ability to search any
of these fields and highlight bones that match would also be very useful.

Check out the [issues labeled "help
wanted"](https://github.com/carnegiequarry/digitalquarryproject/issues) for
mini-projects you can do now that will make a huge difference.

We're open to other ideas and suggestions of how to make the Digital Quarry
more engaging, useful and fun.

## Setting up the Digital Quarry on your own server

Add the following files to a folder called "modern-quarry":

  * digital-quarry-all-modern-fossils.php   
(this is the index file)

  * modern-quarry.php   
(includes all the SVG fossil illustrations)

  * modal.php   
(modals for each fossil--these are what open when you click on a bone
illustration)

  * modernQuarryFossilData   
(the data for all the fossils that populates the modal fields. You may prefer
the [original spreadsheet on Google
Drive](https://docs.google.com/spreadsheets/d/1MFP6
-KFfPjgZyjHZhh4ChBJgrdSiMtSN94tORUp-eug/edit?usp=sharing).)

  * style.css   
(the stylesheet)

Create a database table for the data. In phpMyAdmin, create a table in the
database of your choice named "modernQuarryFossilData" and columns to match
each column in the spreadsheet. Then import the spreadsheet file into the
table. We've had the best luck with using a CSV file format for the
spreadsheet, which you can select from the "File > Download as" menu in Google
Drive.

Once your table is created, you will have to replace the "xxxxxxxxxxxx" fields
in modal.php with the login info for your database.

## Our Update Process

The Digital Quarry is updated as needed by a Dinosaur National Monument
volunteer. Changes submitted here are reviewed and implemented weekly.

## The Digital Quarry Project is made possible by

Dinosaur National Monument

The National Park Service (Part of the United States Department of Interior)

The Geological Society of America

Mosaics in Science

The Geocorps America/Geoscientists-in-the-Parks Program

The Intermountain Natural History Association

## Code Acknowledgements

LeanModal

W3 Schools

