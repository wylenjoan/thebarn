<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('components/header.php');?>
<div id="menu">
  <nav class="navbar nav-fill w-100 p-0">
    <a href="<?php echo base_url('index.php/homepage'); ?>" class="nav-link"> Homepage </a>
    <a href="<?php echo base_url('index.php/myblog'); ?>" class="nav-link active"> My Blog </a>
    <a href="<?php echo base_url('index.php/photogallery'); ?>" class="nav-link"> Photo Gallery </a>
    <a href="<?php echo base_url('index.php/favoritesites'); ?>" class="nav-link"> Favorite Sites </a>
    <a href="<?php echo base_url('index.php/contactus'); ?>" class="nav-link"> Contact Us </a>
  </nav>
</div>

<!-- Body -->
<div class="d-flex justify-content-center">
  <div class="row">
    <div class="col-md-4 col-sm-12 p-3 col1">
      <h2> Blogs </h2>
      <ul>
      <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Nulla dignissim nec augue</a
          >
        </li>
      </ul>
    </div>
    <div class="col-md-8 col-sm-12 p-3 col2">
      <h2>Blog Title</h2>
      <p class="posted">
          Posted on December 6th, 2000
        </p>
        <p>
          Sed tempus turpis vel quam molestie pulvinar. Suspendisse
          venenatis dolor semper ipsum. Quisque tempus erat ac mi. Aliquam
          semper, est nec hendrerit dignissim, ligula turpis sagittis
          purus, ut viverra velit eros at augue. Pellentesque mi nisi,
          porta eget, pharetra ac, sollicitudin sit amet, nisi. In sapien
          ligula lorem sollicitudin facilisis, sodales eget, tempus in,
          mauris. Cras risus sem, adipiscing non, convallis ac,
          consectetuer eu, dolor. In quam lorem ipsum dolor sit amet.
          Curabitur tempus aliquam nulla. Etiam eros.
        </p>
    </div>
  </div>
</div>

<?php $this->load->view('components/footer.php');?>