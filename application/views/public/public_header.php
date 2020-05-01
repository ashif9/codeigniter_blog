 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Article List</title>
	<?= link_tag('assets/css/bootstrap.min.css'); ?>
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?= base_url() ?>">Articles</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login');?>">Login</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li> -->
    </ul>
    <?= form_open('user/search',['class'=>'form-inline my-2 my-lg-0'])?>
      <input class="form-control mr-sm-2" type="text" placeholder="Search" name="query" required="">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    <?= form_close() ?> 
  </div>
</nav>
