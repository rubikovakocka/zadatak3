<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php include 'views/css/style.css'; ?>
	</style>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<div style="padding-left: 25px">
		<h1 id="home">Home Page</h1>
		<?php if($_SESSION['user_id']) : ?>
			<a href="logout">Log out</a>
		<?php else : ?>
		<a href="loginForm">Log in</a>	
		<a href="registerForm">Register</a> <br><br><br>
		<?php endif; ?>
	</div>

	<h1 id="home">NEWS</h1>
    <?php foreach ($news as $new) : ?>
	    	<h2> <?= $new->title; ?> </h2>
	    	<span> <?= $new->body; ?> </span>
	    	
	    	<?php if($_SESSION['user_id'] == 1) : ?>
				<form action="deleteNew" method="post">
					<input type="hidden" name="new_id" value="<?= $new->id ?>">
					<button type="submit">Delete this news</button>
				</form>
			<?php endif; ?>

			<h3 style="text-align: left;">Comments</h3>
	    	<div>
	    		<?php foreach ($comments->allFor($new->id) as $comment) : ?>
	    			<h4><?= $comment->body ?></h4>
	    			<?php if($_SESSION['user_id'] == 1 || $_SESSION['user_id'] == $comment->b14.user_id) : ?>
						<form action="deleteComment" method="post">
	    					<input type="hidden" name="comment_id" value="<?= $comment->id ?>">
	    					<button type="submit">Delete Comment</button>
	    				</form>
					<?php endif; ?>
	    		<?php endforeach; ?>
	    	</div>

	    	<form action="comment" method="post">
	    		<textarea name="comment_body" placeholder="Write comment here"></textarea>
	    		<input type="hidden" name="news_id" value="<?= $new->id ?>">
	    		<button type="submit">Comment</button>
	    	</form>
    <?php endforeach; ?>

</body>
</html>