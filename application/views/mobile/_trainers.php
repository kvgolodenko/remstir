<?php
?>
<main id="trainers">
	<?php
		foreach ($trainer_teasers as $i => $t) {
				echo View::factory('mobile/_trainer_teaser', array('t' => $t));
		}
	?>
</main>