<h1>Changing the information.</h1>
<div class="container">
	<form action="<?= URL ?>client/editclientSave" method="post">
		<input type="text" name="firstname" value="<?= $client['firstname'] ?>">
		<input type="text" name="lastname" value="<?= $client['lastname'] ?>">
		<input type="submit" value="Send!">
	</form>
</div>