<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KuroE
 */

?>

<footer class="section-footer bg-dark">
   <div class="footer-test">
<div class="container">
    
  <section class="footer-main padding-y">
    <div class="row">
      <aside class="col-12 col-sm-12 col-lg-3">
        <article class="me-lg-4">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logowhitesvg.svg" class="logo-footer">
          <p class="mt-3"> Kuro © 2021</p>
        </article>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="title">Store</h6>
        <ul class="list-menu mb-4">
          <li> <a href="<?php echo get_site_url(); ?>/about-us">About us</a></li>
          <li> <a href="<?php echo get_site_url(); ?>/products">Find products</a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4 col-lg-2">
        <h6 class="title">Information</h6>
        <ul class="list-menu mb-4">
          <li> <a href="#">Help center</a></li>
          <li> <a href="#">Money refund</a></li>
          <li> <a href="#">Shipping info</a></li>
          <li> <a href="#">Refunds</a></li>
        </ul>
      </aside>
      <aside class="col-6 col-sm-4  col-lg-2">
      <h6 class="title">Store Information</h6>
      <ul class="list-menu mb-4">
          <li><p>Address: <br> Spangsbjerg Kirkevej 103, 6700 Esbjerg </p></li>
          <li><p>Phone: <br> +45 76 13 32 00 </p></li>
          <li><p>Opening hours: 08AM-03PM</li>
        </ul>
      </aside>
      <aside class="col-12 col-sm-12 col-lg-3">
      <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=Spangsbjerg%20Kirkevej%20103,%206700%20Esbjerg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:200px;width:300px;}</style><a href="https://www.embedgooglemap.net">google maps html widget</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}</style></div></div>
      </aside>
    </div> <!-- row.// -->
  </section>  <!-- footer-top.// -->

  <section class="footer-bottom d-flex justify-content-lg-between border-top">
    <div>
      <i class="fab fa-lg fa-cc-visa" style='color: white'></i>
      <i class="fab fa-lg fa-cc-mastercard" style='color: white'></i>
      <i class="fab fa-lg fa-cc-paypal" style='color: white'></i>
    </div>
    
  </section>
</div> <!-- container end.// -->
</div> <!-- container end.// -->
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
