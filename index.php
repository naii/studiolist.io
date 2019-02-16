<?php
	$filepath_germany_berlin = "studiolist-aktuell/studiolist-germany-berlin.csv";
	$filepath_usa_texas_tornillo = "studiolist-aktuell/studiolist-usa-texas-tornillo.csv";
	require 'functions.php';
	$title = "studiolist.io - best recording studios for voice artists";
	include 'header.php';#
?>
	<h2>Book studio time in the best recording studios</h2>
	<p>Record or audition in the best studios in town, rated by artists. Studios kill idle times.

	<h2>Quick navigation</h2>
	<ul>
		<li><a href="#germany-berlin">Berlin, Germany</a></li>
		<li><a href="#usa-texas-tornillo">Tornillo, TX, USA</a></li>
	</ul>

	<h3 id="germany-berlin">Berlin, Germany</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_germany_berlin, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_germany_berlin); ?>
	</table>

	<h3 id="usa-texas-tornillo">Tornillo, TX, USA</h3>
	<table>
		<tr>
		 <th scope="col"><?php  getColumnName($filepath_usa_texas_tornillo, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_usa_texas_tornillo); ?>
	</table>


<?php include 'footer.php'; ?>