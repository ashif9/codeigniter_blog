<?php include_once 'admin_header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <?= form_open_multipart('admin/store_article', 'class="form-horizontal"'); ?>
      <?= form_hidden('user_id', $this->session->userdata['id']); ?>
      <?= form_hidden('created', date('Y-m-d H-i-s')); ?>
        <fieldset>
          <legend>Add Articles</legend>
          <div class="form-group">
            <label for="user">Article Title</label>
            <?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','required'=>'', 'value'=>set_value('title')]); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Article Body</label>
            <?= form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','required'=>'', 'value'=>set_value('body')]); ?>
          </div>
          <div class="form-group">
            <label for="image">Select Image</label>
            <?php echo form_upload(['name'=>'userfile','class'=>'form-control']); ?>
            <?php if(isset($upload_error)) echo $upload_error; ?>
          </div>

          <?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-warning']);
          	  echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?>
        </fieldset>
      <?= form_close() ?>
    </div>
  </div>
</div>

<?php include_once 'admin_footer.php'; ?>