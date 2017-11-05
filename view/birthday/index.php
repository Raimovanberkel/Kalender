<?php
	$currentmaand = null;
	$currentDag = null;

	foreach ($birthdays as $birthday) { ?>
	<?php if ($currentmaand != $birthday['maand']) {
		echo "<h1>" . $maand[$birthday['maand']] . "</h1>";
		$currentmaand = $birthday['maand'];
		$currentdag = null;
	}
	if ($currentdag != $birthday['dag']) {
		echo "<h2>" . $birthday['dag'] . "</h2>";
		$currentdag = $birthday['dag'];
	} ?>

<p>
	<a href= " <?php echo URL . 'birthday/edit/' . $birthday['id']; ?>">
	<?php echo $birthday['person'] . " (" . $birthday['jaar'] . ")"; ?></a>
	<a href= " <?php echo URL . 'birthday/delete/' . $birthday['id']; ?>"> x </a>
</p>

<?php } ?>
<p><a href= " <?= URL ?>birthday/create"> + Toevoegen</a></p>	