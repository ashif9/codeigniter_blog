<?php include 'public_header.php'; ?>

<div class="container">
	<h1>Search Results</h1>
	<hr>
	<table class="table">
		<thead>
			<tr>
				<th>Sl No.</th><th>Article Title</th><th>Published On</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($articles)): 
					$count = $this->uri->segment(4,0);
					foreach ($articles as $article):
			?>
			<tr>
				<td><?= ++$count; ?></td>
				<td><?= $article->title ?></td>
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
