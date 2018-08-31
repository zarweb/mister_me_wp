<?php /* Template Name: Book */ ?>

<?php get_header(); ?>

<section class="book">
    <div class="content">
        <h3 class="title">Book a trike for your next event</h3>

        <div class="box-content">
            <div class="box">
                <a href="#">
                    <img src="<?php echo bloginfo('template_url') ?>/images/img_1.png" alt="img">
                    <h1>Festivals</h1>
                </a>

            </div>
            <div class="box">
                <a href="#">
                    <img src="<?php echo bloginfo('template_url') ?>/images/img_2.png" alt="img">
                    <h1>Corporate</h1>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="<?php echo bloginfo('template_url') ?>/images/img_3.png" alt="img">
                    <h1>Weddings</h1>
                </a>

            </div>
            <div class="box">
                <a href="#">
                    <img src="<?php echo bloginfo('template_url') ?>/images/img_4.png" alt="img">
                    <h1>Sports</h1>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="<?php echo bloginfo('template_url') ?>/images/img_5.png" alt="img">
                    <h1>Birthdays</h1>
                </a>
            </div>
            <div class="box">
                <a href="#">
                    <img src="<?php echo bloginfo('template_url') ?>/images/img_6.png" alt="img">
                    <h1>Seminars</h1>
                </a>
            </div>
            <div class="clear"></div>
        </div>

    </div>


    <div class="content ">
        <div class="text">
            <p>
                Ready to cater for your next event.
                Our specialty coffee trikes can cater for up to 500 6 ounce
                coffees without having to refill our stock.
            </p>

            <p> ​
                We can customize our trikes to include your branding for
                the day and provide our specially trained barista.
                Event bookings are free, however we do require
                a minimum amount of coffee's to be sold to
                ensure we cover our costs.
            </p>

            <p> ​

                Bookings are made easy,
                simply fill out the form below, detailing your event
                (when and where) and the amount of expected attendee's.
                We will pass this information on to our barista who
                will contact you to arrange further details.
            </p>
        </div>

    </div>

    <div class="content">
        <div class="contact-form">
            <h2>Events booking</h2>
            <h3>Book your event in 5 simple steps</h3>

            <?php echo do_shortcode('[contact-form-7 id="82" title="Contact form 1"]'); ?>

           <p>
               <a href="https://www.powr.io?via=freewebsitetools" target="_blank">

                <span class="powrIcon icon-logo">
                    <img src="<?php echo bloginfo('template_url'); ?>/images/logo_mini.png" alt="">
                </span>
                   <span class="powrMarkText">Free website tools</span>
               </a>
           </p>

        </div>
    </div>
</section>


<?php get_footer(); ?>




