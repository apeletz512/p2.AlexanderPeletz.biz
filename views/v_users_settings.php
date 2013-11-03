<?php if(isset($user)): ?>
    <h1 id="profileHdr">This is the settings page for <?=$user->first_name?></h1>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>
<div class="span6">
<fieldset>
	<form method="POST" action="/users/p_settings">
		<label>Select your timezone:</label>
		<select name="timezone">
			
			<?php if(isset($user->timezone)): ?>
			<option><?=$user->timezone?></option>
			<?php endif; ?>

			<option>America/New_York</option>
			<option>America/Chicago</option>
			<option>America/Denver</option>
			<option>America/Los_Angeles</option>
			<option>America/Anchorage</option>
			<option>Pacific/Honolulu</option>
			<option>Pacific/Pago_Pago</option>
			<option>Pacific/Auckland</option>
			<option>Pacific/Noumea</option>
			<option>Australia/Sydney</option>
			<option>Asia/Tokyo</option>
			<option>Asia/Hong_Kong</option>
			<option>Asia/Bangkok</option>
			<option>Asia/Dhaka</option>
			<option>Asia/Dushanbe</option>
			<option>Asia/Dubai</option>
			<option>Asia/Aden</option>
			<option>Asia/Istanbul</option>
			<option>Africa/Kinshasa</option>
			<option>Europe/London</option>
			<option>Atlantic/Azores</option>
			<option>America/Sao_Paulo</option>
			<option>America/Santiago</option>
			<option>America/Noronha</option>
		</select>
		<input type="submit" id="saveBtn" class="btn btn-inverse" value="Save">
	</form>
</fieldset>
