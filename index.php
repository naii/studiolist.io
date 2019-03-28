<?php
	$filepath_germany_berlin = "studios/studiolist-germany-berlin.csv";
	$filepath_morocco_agadir = "studios/studiolist-morocco-agadir.csv";
	$filepath_morocco_casablanca = "studios/studiolist-morocco-casablanca.csv";
	$filepath_usa_texas_tornillo = "studios/studiolist-usa-texas-tornillo.csv";
	// require 'functions.php';
	$title = "studiolist.io - Find a voiceover studio";
	include 'header.php';#
?>


	<h2>Quick navigation</h2>
	<ul>
		<li><a href="#germany-berlin">Germany › Berlin</a></li>
		<li><a href="#morocco-agadir">Morocco › Agadir</a></li>
		<li><a href="#morocco-casablanca">Morocco › Casablanca</a></li>
		<li><a href="#usa-texas-tornillo">USA › TX › Tornillo</a></li>
	</ul>

	<p>The studios are currently listed alphabetically. Click a studio to see all contact details (soon).</p>

	<h3 id="germany-berlin">Germany, Berlin</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_germany_berlin, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_germany_berlin); ?>
	</table>

	<h3 id="morocco-agadir">Morocco, Agadir</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_morocco_agadir, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_morocco_agadir); ?>
	</table>

	<h3 id="morocco-agadir">Morocco, Casablanca</h3>
	<table sortable>
		<tr>
		 <!-- <th scope="col"><?php //getColumnName(0); ?></th> -->
		 <th scope="col"><?php getColumnName($filepath_morocco_casablanca, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_morocco_casablanca); ?>
	</table>

	<h3 id="usa-texas-tornillo">USA, TX, Tornillo</h3>
	<table>
		<tr>
		 <th scope="col"><?php  getColumnName($filepath_usa_texas_tornillo, 0); ?></th>
		</tr>
		<?php buildHTMLTable($filepath_usa_texas_tornillo); ?>
	</table>


<?php include 'footer.php'; ?>