<?php include_once 'public_header.php'; ?>

<div class="container">
	<h1><?= $articles->title; ?></h1>
	<div class="row">
		<div class="col-md-4">
			<?php if(!is_null($articles->image_path)): ?>
					<img src="<?= $articles->image_path; ?>" class="img-fluid">
			<?php endif; ?>
		</div>
		<div class="col-md-8">
			<p><?= $articles->body; ?></p>
		</div>
	</div>
</div>

<?php include_once('public_footer.php'); ?>