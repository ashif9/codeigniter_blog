<?php include 'public_header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
  
      <?= form_open('login/admin_login', 'class="form-horizontal"'); ?>

        <?php  if($error = $this->session->flashdata('login_failed')): ?>
        <div class="alert alert-danger">
          <strong>Failed :</strong><?php echo $error; ?>
        </div>
        <?php endif; ?>
        
        <fieldset>
          <legend>Log In Form</legend>
          <div class="form-group">
            <label for="user">User Id</label>
            <?= form_input(['name'=>'user','class'=>'form-control','placeholder'=>'User Id','required'=>'', 'value'=>set_value('user')]); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <?php echo form_password(['name'=>'pass','class'=>'form-control','placeholder'=>'Password','required'=>'']); ?>
          </div>
          <?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-warning']);
          	  echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?>
        </fieldset>
      </form>
    </div>
  </div>
</div>

<?php include 'public_footer.php'; ?>