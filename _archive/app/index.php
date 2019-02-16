<?php 
	require "header.php";
?>

	<main>
		<?php 
			if (!isset($_SESSION['id'])) {
				echo '<p>You are logged out.</p>';
			}
			else if (isset($_SESSION['id'])) {
				echo '<p>You are logged in.</p>';
			}
		?>
		<!-- <p>You are logged out.</p>
		<p>You are logged in.</p> -->
	</main>

<?php
	require "footer.php";
?>