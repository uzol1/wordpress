<?php 

// Template Name: Contact
get_header() ?>
<section class="resources-banner" id="resources-banner" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(<?php echo  bloginfo('template_directory'); ?>/img/page-header.png);">
    <div class="banner-text">
        <h3>Contact</h3>
        <p>Home  <span>  >  </span> Contact</p>
    </div>
</section>
<section class="enquire-form-here">
		<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <p>Fill Out The Following Form So We Can Reach Out To You</p>
                    </div>
                    <div class="form-is-here">
                        <?php echo do_shortcode('[contact-form-7 id="91" title="Contact"]'); ?>
                    </div>
                </div>
        
                <div class="col-md-6">
                    <div class="map">
                        <div class="content">
                        <p>Visit Us In The Following Location</p>
                    </div>
                        <iframe style="border: 0;" tabindex="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.274890579407!2d85.31965511490145!3d27.70879768279133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1927e2111ec5%3A0x8609f5f36f27a2a7!2sRita%20Decor!5e0!3m2!1sen!2snp!4v1591860053381!5m2!1sen!2snp" width="350" height="250" frameborder="0" allowfullscreen="" aria-hidden="false"></iframe>                    </div>
                    <div class="contact-row">
                        <div class="column">
                            <p class="number">014168663 , 9851040957</p>
                        </div>
                        <div class="column-contact">
                            <p class="contact">info@chromeguard.com</p>
                        </div>
                    </div>
                    
                </div>
            </div>
		</div>
    </section>
    
    <?php get_footer(); ?>