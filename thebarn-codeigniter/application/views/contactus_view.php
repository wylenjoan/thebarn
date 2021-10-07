<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('components/header.php');?>
<div id="menu">
  <nav class="navbar nav-fill w-100 p-0">
    <a href="<?php echo base_url('index.php/homepage'); ?>" class="nav-link"> Homepage </a>
    <a href="<?php echo base_url('index.php/myblog'); ?>" class="nav-link"> My Blog </a>
    <a href="<?php echo base_url('index.php/photogallery'); ?>" class="nav-link"> Photo Gallery </a>
    <a href="<?php echo base_url('index.php/favoritesites'); ?>" class="nav-link"> Favorite Sites </a>
    <a href="<?php echo base_url('index.php/contactus'); ?>" class="nav-link active"> Contact Us </a>
  </nav>
</div>

<!-- Body -->
<div class="d-flex justify-content-center">
  <div class="row">
    <div class="col-md-6 col-sm-12 p-3 col1 feedbacks">
    <h2>Feedbacks</h2>
      <?php foreach($contacts as $contact): ?>
        <div class="input-group input-group-sm mb-1">
            <span class="input-group-text"><?php echo $contact['name']?>:</span>
            <span class="form-control"><?php echo $contact['message']?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="col-md-6 col-sm-12 p-3 col2">
      <h2>Write Feedback</h2>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <?php echo form_open('contactus/create'); ?>
        <div class="mb-3">
          <label for="name" style="font-weight: bold">Name</label><br>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
          <label for="message" style="font-weight: bold">Message</label><br>
          <textarea type="text" name="message" class="form-control" rows="8"></textarea>
        </div>

        <input type="submit" value="Submit Feedback" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('components/footer.php');?>