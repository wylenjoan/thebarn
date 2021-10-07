<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('components/header.php');?>
<div id="menu">
  <nav class="navbar nav-fill w-100 p-0">
    <a href="<?php echo base_url('index.php/homepage'); ?>" class="nav-link active"> Homepage </a>
    <a href="<?php echo base_url('index.php/myblog'); ?>" class="nav-link"> My Blog </a>
    <a href="<?php echo base_url('index.php/photogallery'); ?>" class="nav-link"> Photo Gallery </a>
    <a href="<?php echo base_url('index.php/favoritesites'); ?>" class="nav-link"> Favorite Sites </a>
    <a href="<?php echo base_url('index.php/contactus'); ?>" class="nav-link"> Contact Us </a>
  </nav>
</div>

<!-- Body -->
<div class="d-flex justify-content-center">
  <div class="row">
    <div class="col-md-4 col-sm-12 p-3 col1">
      <h3>Veroeros Etiam</h3>
      <ul>
        <li><a href="#">Sed accumsan congue</a></li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Nulla dignissim nec augue</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Nunc ante elit nulla</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Aliquam suscipit consequat</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Cursus sed arcu sed</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Nulla dignissim nec augue</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Sed accumsan congue</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Nulla dignissim nec augue</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Nunc ante elit nulla</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Aliquam suscipit consequat</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Cursus sed arcu sed</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Sed accumsan congue</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Nulla dignissim nec augue</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Nunc ante elit nulla</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Aliquam suscipit consequat</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Cursus sed arcu sed</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Nulla dignissim nec augue</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Sed accumsan congue</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Nulla dignissim nec augue</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Nunc ante elit nulla</a>
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8"
            >Aliquam suscipit consequat</a
          >
        </li>
        <li>
          <a href="https://youtu.be/OUjprWAg1A8">Cursus sed arcu sed</a>
        </li>
      </ul>
    </div>
    <div class="col-md-8 col-sm-12 p-3 col2">
      <div>
        <h2>WELCOME TO MY WEBSITE</h2>
        <p class="posted">
          Posted in <a href="#">Uncategorized</a> by Farmer on the
          December 6th, 2006
        </p>
        <p>
          <span style="font-weight: bold">The Barn</span>
          is a free template from
          <a href="#">Free CSS Templates</a>
          released under a
          <a href="#">Creative Commons Attribution 2.5 License</a>. The
          header photo is from
          <a href="#">PDPhoto.org.</a>
          You're free to use this template for both commercial or personal
          use. I only ask that you link back to
          <a href="#">my site</a>
          in some way.
          <br />
          <span style="font-style: italic">Enjoy! :></span>
        </p>
      </div>
      <div>
        <h2>Lorem Ipsum Dolorem</h2>
        <p class="posted">
          Posted in <a href="#">Uncategorized</a> by Farmer on the
          December 6th, 200
        </p>
        <p>
          <img
            src="<?php echo base_url('assets/images/img6.jpg'); ?>"
            alt=""
            width="102"
            height="102"
            class="img"
          />
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
</div>

<?php $this->load->view('components/footer.php');?>