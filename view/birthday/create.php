<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">
		<input type="text" name="person" placeholder="Alfred">
		<input type="text" name="dag" placeholder="21">
		<select name="maand">
			<option value="1">January</option>
			<option value="2">February</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select>
		<input type="text" name="jaar" placeholder="1234">
		<input type="submit" value="Send!">
	</form>
</div>