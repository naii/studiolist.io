<?php
	$filepath_germany_berlin = "studiolist-aktuell/studiolist-germany-berlin.csv";
	$filepath_morocco_agadir = "studiolist-aktuell/studiolist-morocco-agadir.csv";
	$filepath_morocco_casablanca = "studiolist-aktuell/studiolist-morocco-casablanca.csv";
	$filepath_usa_texas_tornillo = "studiolist-aktuell/studiolist-usa-texas-tornillo.csv";
	// require 'functions.php';
	$title = "studiolist.io - Find a voiceover studio";
	include 'header.php';#
?>
	<!-- <h2>Book studio time in the best recording studios</h2> -->
	<!-- <h2>Book the best local recording studio for your voiceover project</h2> -->
	<h2>Book voiceover studio time <em>in no time</em></h2>
	<p>studiolist is a search engine and a <strong>live-ranking of the world’s most popular recording studios</strong>. Studios are listed by cities and rated by voiceover artists sharing real-world experiences with their real name. A better experience inside the studio means a higher ranking.</p>

	<p><strong>Book studio time in the best local recording studios for your voiceover project.</strong> Record or audition in the best studios in town so that you can get out of your home-recording studio and <em>travel the world while recording top-notch audio quality</em>. Also, studios kill empty studio time.</p>


	<h2>Quick navigation</h2>
	<ul>
		<li><a href="#germany-berlin">Germany › Berlin</a></li>
		<li><a href="#morocco-agadir">Morocco › Agadir</a></li>
		<li><a href="#morocco-casablanca">Morocco › Casablanca</a></li>
		<li><a href="#usa-texas-tornillo">USA › TX › Tornillo</a></li>
	</ul>

	<p>The studios are currently listed alphabetically. <!-- <a href="/login/"> -->Register (and log in)<!-- </a> --> to see all contact details.</p>

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