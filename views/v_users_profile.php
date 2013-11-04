<?php if(isset($user)): ?>
<div class="container-fluid">
	<h1 id="profileHdr">This is the profile for <?=$user->first_name?></h1>
</div>
<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>

