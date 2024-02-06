 <!-- Footer Start -->
 <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
     <div class="container py-5 px-lg-5">
         <div class="row g-5">
             <div class="col-md-6 col-lg-3">
                 <p class="section-title text-white h5 mb-4">Address<span></span></p>
                 <p><i class="fa fa-map-marker-alt me-3"></i><?php echo get_field('address'); ?></p>
                 <p><i class="fa fa-phone-alt me-3"></i><?php echo get_field('phone'); ?></p>
                 <p><i class="fa fa-envelope me-3"></i><?php echo get_field('email'); ?></p>
                 <div class="d-flex pt-2">
                     <a class="btn btn-outline-light btn-social" href="<?php echo get_field('footer_X'); ?>"><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-outline-light btn-social" href="<?php echo get_field('footer_fb'); ?>"><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-outline-light btn-social" href="<?php echo get_field('footer_Insta'); ?>"><i class="fab fa-instagram"></i></a>
                     <a class="btn btn-outline-light btn-social" href="<?php echo get_field('footer_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3 main-footer">
                 <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                 <?php
                    $args = array(
                        'theme_location' => 'footer',
                        'menu_class'      => 'btn btn-link',  // Add class to the <div>

                    );
                    ?>
                 <?php wp_nav_menu($args) ?>

             </div>
             <div class="col-md-6 col-lg-3">
                 <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                 <div class="row g-2">
                     <div class="col-4">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-1.jpg" alt="Image">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-2.jpg" alt="Image">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-3.jpg" alt="Image">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-4.jpg" alt="Image">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-5.jpg" alt="Image">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-6.jpg" alt="Image">
                     </div>
                 </div>
             </div>
             <div class="col-md-6 col-lg-3">
                 <p class="section-title text-white h5 mb-4"><?php echo get_field('news_title'); ?><span></span></p>
                 <p><?php echo get_field('news_content'); ?></p>
                 <div class="position-relative w-100 mt-3">
                     <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="<?php echo get_field('news_field_placeholder'); ?>" style="height: 48px;">
                     <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                 </div>
             </div>

         </div>
     </div>
     <div class="container px-lg-5">
         <div class="copyright">
             <div class="row">
                 <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                     <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                 </div>
                 <div class="col-md-6 text-center text-md-end">
                     <div class="footer-menu">
                         <a href=""><?php echo get_field('footer_down_home'); ?></a>
                         <a href=""><?php echo get_field('footer_down_cookies'); ?></a>
                         <a href=""><?php echo get_field('footer_down_help'); ?></a>
                         <a href=""><?php echo get_field('footer_down_FQA'); ?></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Footer End -->
 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 </div>
 <!-- JavaScript Libraries -->
 <?php wp_footer(); ?>
 </body>

 </html>