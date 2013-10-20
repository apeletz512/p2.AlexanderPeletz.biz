<?php if(isset($user_name)): ?>
    <h1>This is the profile for <?=$user_name?></h1>
<?php elseif(isset($this->user)): ?>
	<h1>This is the profile for <?=$this->user?> found using the global '$this->user' variable!</h1>

<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>