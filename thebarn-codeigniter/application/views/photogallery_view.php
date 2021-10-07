<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('components/header.php');?>
<div id="menu">
  <nav class="navbar nav-fill w-100 p-0">
    <a href="<?php echo base_url('index.php/homepage'); ?>" class="nav-link"> Homepage </a>
    <a href="<?php echo base_url('index.php/myblog'); ?>" class="nav-link"> My Blog </a>
    <a href="<?php echo base_url('index.php/photogallery'); ?>" class="nav-link active"> Photo Gallery </a>
    <a href="<?php echo base_url('index.php/favoritesites'); ?>" class="nav-link"> Favorite Sites </a>
    <a href="<?php echo base_url('index.php/contactus'); ?>" class="nav-link"> Contact Us </a>
  </nav>
</div>
<!-- Body -->
<div class="d-flex justify-content-center">
	<div class="row">
		<div class="col-md-4 col-sm-12 p-3 col1">
			<h2>Photo Gallery</h2>
		</div>
		<div class="col-md-8 col-sm-12 p-3 col2">
			<h2>Photo Gallery</h2>
		</div>
	</div>
</div>

<?php $this->load->view('components/footer.php');?>