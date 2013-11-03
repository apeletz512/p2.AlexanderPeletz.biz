<?php if(isset($user)): ?>
<div class="container-fluid">
	<h1 id="profileHdr">This is the profile for <?=$user->first_name?></h1>
	<div class="row-fluid">
		<div class="span2 offset10">
			<h3>Your usage stats</h3>
			<ul class="nav nav-tabs nav-stacked">
				<?php if(isset($loginCount)): ?>
					<li>Logins: <?php echo $loginCount ?></li>
				<?php endif; ?>
				<?php if(isset($postCount)): ?>
					<li>Posts: <?php echo $postCount ?></li>
				<?php endif; ?>
				<?php if(isset($followingCount)): ?>
					<li>Following: <?php echo $followingCount ?></li>
				<?php endif; ?>
				<?php if(isset($followedCount)): ?>
					<li>Followed by: <?php echo $followedCount ?></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>

<?php if(isset($loginCount)) {echo $loginCount;} else {echo "<br>No loginCount found.";} ?>

<?php else: ?>
    <h1>No user specified</h1>
<?php endif; ?>

