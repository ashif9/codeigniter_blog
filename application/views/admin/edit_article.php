<?php include_once 'admin_header.php' ?>


<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <?= form_open('admin/update_article/'.$articles->id, 'class="form-horizontal"'); ?>
        <fieldset>
          <legend>Edit Articles</legend>
          <div class="form-group">
            <label for="user">Article Title</label>
            <?= form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','required'=>'', 'value'=>set_value('tilte',$articles->title)]); ?>
          </div>
          <div class="form-group">
            <label for="body">Article Body</label>
            <?= form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','required'=>'', 'value'=>set_value('body',$articles->body)]); ?>
          </div>
          <?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-warning']);
          	  echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-primary']); ?>
        </fieldset>
      </form>
    </div>
  </div>
</div>





<?php include_once 'admin_footer.php'; ?>