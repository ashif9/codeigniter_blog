<?php include 'admin_header.php'; ?>

<div class="container">
	<h1>Authentication  success</h1>
	<div class="row">
		<div class="col-lg-6 offset-6">
			<?= anchor('admin/add_article','Add Article',(['class'=>'btn btn-primary float-right'])) ?>
			<!--a href="#" class="btn btn-primary float-right">Add Articles</a-->
		</div>
	</div>
	<?php 
		$feedback=$this->session->flashdata('feedback');
		$f_class = $this->session->flashdata('feedback_class');
	 ?>
	 <div class="row">
	 	<div class="col-lg-6 offset-3">
	 		<div class="<?php echo $f_class; ?>"><?php echo $feedback; ?></div>
	 	</div>
	 </div>
	<table class="table">
		<thead>
			<th>SL No.</th><th>Title</th><th>Action</th>
		</thead>
		<tbody>
			<?php
				if(count($articles)){
					$count = $this->uri->segment(3, 0);
					foreach($articles as $article){
			?>
			<tr>
				<td><?= ++$count; ?></td><td><?= $article->title; ?></td>
					<td>
						<div class="row">
							<div class="col-lg-2">
								<?= anchor("admin/edit_article/".$article->id, "Edit", (["class"=>"btn btn-success"])); ?>
							</div>
							<div class="col-lg-2">
								<?= 
									form_open('admin/delete_articles'),
									form_hidden('article_id', $article->id),
									form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
									form_close();
								?>
							</div>
						</div>
					</td>
			</tr>
			<?php 
					} 
				}
				else{
			?>
					<tr>
						<td>
							<?php  echo "No Records Found"; ?>
						</td>
					</tr>
			<?php } ?>
		</tbody>
	</table>
	<?= $this->pagination->create_links(); ?>


</div>

<?php include 'admin_footer.php'; ?>
