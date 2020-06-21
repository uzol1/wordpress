<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #page div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */

?>
<section class="footer">
    <footer>
        <div class="footer-content-inner row mx-0">
            <div class="col-md-4 col-xs-12 footer-left ml-md-auto"> <?php
                    if( is_active_sidebar( 'sidebar-footer1' ) ):
                             dynamic_sidebar( 'sidebar-footer1' );
                   endif; ?>
                   <!--  <div class="footer-logo">
                        <h2>Rita<span>Decor </span></h2>
                    </div>
                    <b>Kathmandu Plaza, Kamaladi Rd,Kathmandu</b>
                    <div class="contact-email">
                       <span class="icon">
                       </span>
                       <a href="mailto:">ritadecor@gmail.com</a>
                     </div>
                    <div class="contact-phone">
                         <span class="icon">
                         </span>
                         <a href="tel:1300318718">1300 318 718</a>
                     </div> -->
            </div>          
            <div class="col-md-4 col-xs-12 px-0">
                <?php
                    if( is_active_sidebar( 'sidebar-footer2' ) ):
                             dynamic_sidebar( 'sidebar-footer2' );
                   endif; ?>
            </div>

            <div class="col-md-4 col-xs-12 mr-md-auto footer-right">
                <div class="row">
                    <div class="col-6">
                        <h5>About Us</h5>
                        <div class="menu-about-us-container">
                        <ul id="menu-about-us" class="menu">
                            <li id="menu-item-900" class="menu-item">
                                <a href="https://webodesigns.com.au/dev/emprise-global/about/">Why Rita Decor?</a></li>
                                    <li id="menu-item-901" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-901">
                                        <a href="https://webodesigns.com.au/dev/emprise-global/about/#our_story">Our Story</a></li>
                            </ul>
                        </div>           
                    </div>
                    <div class="col-6">
                        <h5>Contact</h5>
                        <div class="menu-contact-container">
                            <ul id="menu-contact" class="menu">
                                <li id="menu-item-904" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-904">
                                    <a href="#subscription-section">Subscribe</a></li>
                            </ul>
                        </div>            
                    </div>       
                </div>                 
            </div>
        </div>
    </footer>
</section>

</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>