
<?php foreach($posts as $post): ?>

<div style="text-align: left; background-color: #EEE; margin-bottom: 15px;">
	<div>
		<article>
		    <time>
		        <?=Time::display($post['created'],"",$user->timezone)?>
		    </time>
		    <h4><?=$post['first_name']?> <?=$post['last_name']?> posted:</h4>

		    <div style="margin: 5px; background-color: grey;">
		    	<h2><?=$post['content']?></h2>
			</div>
		</article>
	</div>
</div>

<?php endforeach; ?>
