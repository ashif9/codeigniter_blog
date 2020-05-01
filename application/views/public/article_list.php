<?php include 'public_header.php'; ?>

<div class="container">
	<h1>All Article List</h1>
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th>Sl No.</th><th>Article Title</th><th>Published On</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($articles)): 
					$count = $this->uri->segment(3,0);
					foreach ($articles as $article):
			?>
			<tr>
				<td><?= ++$count; ?></td>
				<td><?= anchor("user/article_body/$article->id","$article->title"); ?></td>
				<td><?= $article->created; ?></td>
			</tr>
		<?php endforeach; ?>
		<?php else: ?>
		<td>No record Found</td>
		<?php endif; ?>
		</tbody>
	</table>
<?= $this->pagination->create_links(); ?>
</div>

<?php include 'public_footer.php'; ?>


	