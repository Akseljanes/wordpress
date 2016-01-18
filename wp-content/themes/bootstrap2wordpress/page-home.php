<?php
/*
    Template Name: Home Page
 */

// Custom Fields
$prelaunch_price        = get_post_meta(7, 'prelaunch_price', true);
$launch_price           = get_post_meta(7, 'launch_price', true);
$final_price            = get_post_meta(7, 'final_price', true);
$course_url             = get_post_meta(7, 'course_url', true);
$button_text            = get_post_meta(7, 'button_text', true);
$optin_text             = get_post_meta(7, 'optin_text', true);
$optin_button_text      = get_post_meta(7, 'optin_button_text', true);

// Advanced Custom Fields
$income_feature_image   = get_field('income_feature_image');
$income_section_title   = get_field('income_section_title');
$income_section_desc    = get_field('income_section_description');
$reason_1_title         = get_field('reason_1_title');
$reason_1_desc          = get_field('reason_1_description');
$reason_2_title         = get_field('reason_2_title');
$reason_2_desc          = get_field('reason_2_description');

get_header(); ?>

<!-- HERO -->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix">
            <div class="row">

                <div class="col-sm-5">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
                </div>

                <div class="col-sm-7 hero-text">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p class="lead"><?php bloginfo('description') ?></p>
                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Launch Price <small>Ends soon</small></h4>
                            <span><?php echo $prelaunch_price; ?></span>
                        </div>

                        <div class="price">
                            <h4>Launch Price <small>Coming soon</small></h4>
                            <span><?php echo $launch_price; ?></span>
                        </div>

                        <div class="price">
                            <h4>Final Price <small>Coming soon</small></h4>
                            <span><?php echo $final_price; ?></span>
                        </div>
                    </div>

                    <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text; ?></a></p>
                </div>
            </div>
        </div>
    </article>
</section>


<!-- OPT IN SECTION-->
<section id="optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="lead"><?php echo $optin_text; ?></p>
            </div>
            <div class="col-sm-4">
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    <?php echo $optin_button_text; ?>
                </button>
            </div>
        </div>
    </div>
</section>


<!-- BOOST YOUR INCOME -->
<section id="boost-income">
    <div class="container">
        <div class="section-header">

            <!-- If user uploaded an image -->
            <?php if(   !empty($income_feature_image)) : ?>

                <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">

            <?php endif; ?>

            <h2><?php echo $income_section_title; ?></h2>
        </div>

        <p class="lead"><?php echo $income_section_desc; ?></p>

        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $reason_1_title; ?></h3>
                <p><?php echo $reason_1_desc; ?></p>
            </div>
            <div class="col-sm-6">
                <h3><?php echo $reason_2_title; ?></h3>
                <p><?php echo $reason_2_desc; ?></p>
            </div>
        </div>
    </div>
</section>


<!-- WHO BENEFITS -->
<section id="who-benefits">
    <div class="container">
        <div class="section-header">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and pencil">
            <h2>Who should take this course?</h2>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <h3>Graphic &amp; Web Designers</h3>
                <p>Graphic designers are extremely talented, but ask them to code their designs and they’ll freeze up! This leaves them with no other choice but to hire a web developer. Any professional graphic designers knows web developers can be expensive.</p>
                <p>If you’re a designer, learning to code your own WordPress websites can change your business entirely! Now, not only are you a great designer, but you’re a skillful developer, too! This puts you in a position to <strong>make an extra $1,000 – $5,000 per project.</strong></p>

                <h3>Entrepreneurs</h3>
                <p>Entrepreneurs have big dreams, and in many cases, shoestring budgets. In order to survive in the cut-throat world of the Startup company, it’s a necessity to have a world-class website. However, world-class websites come with a large price tag.</p>
                <p>If you can learn how to build a high-quality startup website by yourself, then you’ve just saved yourself a lot of cash, <strong> tens of thousands of dollars in many cases.</strong></p>

                <h3>Employees</h3>
                <p>Any company knows the education & training of their employees is key to a thriving team.</p>
                <p>Depending on the type of company you work for, if you understand how to code, and can develop CMS driven websites, that gives you <strong> negotiating power for a better position, or a higher salary.</strong></p>

                <h3>Code Hobbyists</h3>
                <p>It’s fun to learn challenging new skills. Code hobbyists can add dynamic websites to their arsenal of tools to play with — you can even <strong> sell WordPress themes and plugins for cash!</strong> The possibilities are truly endless.</p>

                <h3>People Looking for a New Career</h3>
                <p>Are you out of work? Looking for a more rewarding job? Desire a career that can allow you to work almost anywhere in the world? Becoming a Web Developer might be the answer for you.</p>
                <p><strong> Web developers are paid well, anywhere from $33,000 to more than $105,000 per year.</strong> They get to work at amazing companies that are changing the world, or they enjoy the ability to start their own companies, become location-independent and work from home, from coffee shops, in an airplane, on the beach, or wherever they want!</p>
            </div>
        </div>

    </div>
</section>


<!-- COURSE FEATURES -->
<section id="course-features">
    <div class="container">
        <div class="section-header">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
            <h2>Course features</h2>
        </div>

        <div class="row">

            <div class="col-sm-2">
                <i class="ci ci-computer"></i>
                <h4>Lifetime acces to 80+ lectures</h4>
            </div>

            <div class="col-sm-2">
                <i class="ci ci-watch"></i>
                <h4>10+ hours of HD video content</h4>
            </div>

            <div class="col-sm-2">
                <i class="ci ci-calendar"></i>
                <h4>30-day money back guarantee</h4>
            </div>

            <div class="col-sm-2">
                <i class="ci ci-community"></i>
                <h4>Access to a community of like-minded students</h4>
            </div>

            <div class="col-sm-2">
                <i class="ci ci-instructor"></i>
                <h4>Direct access to the instructor</h4>
            </div>

            <div class="col-sm-2">
                <i class="ci ci-device"></i>
                <h4>Accessible content on your mobile devices</h4>
            </div>

        </div>
    </div>
</section>


<!-- PROJECT FEATURES -->
<section id="project-features">
    <div class="container">
        <h2>Final Project Features</h2>
        <p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website <strong> you </strong> are going to build? <em>You're looking at it!</em> The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>

        <div class="row">

            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
                <h3>Sexy &amp; Modern Design</h3>
                <p>You get to work with a modern, professional quality design &amp; layout.</p>
            </div>

            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
                <h3>Quality HTML5 & CSS3</h3>
                <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 &amp; CSS3.</p>
            </div>

            <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="CMS">
                <h3>Easy-to-use CMS</h3>
                <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
            </div>

        </div>
    </div>
</section>


<!-- VIDEO FEATURETTE -->
<section id="featurette">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2>Watch the Course Introduction</h2>
                <iframe width="100%" height="415" src="https://www.youtube.com/embed/0-c7kXpRVIQ" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


<!-- INSTRUCTOR -->
<section id="instructor">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Your Instructor <small>Brad Hussey</small></h2>
                    </div>
                    <div class="-col-lg-4">
                        <a href="https://twitter.com" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://facebook.com" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://plus.google.com" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>
                <div class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.</div>
                <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code. </p>
                <p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.</p>
                <p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>

                <hr>

                <h3>The Numbers <small>They Don't Lie</small></h3>

                <div class="row">
                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                41,000+ <span>students</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                568 <span>reviews</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="num">
                            <div class="num-content">
                                8 <span>courses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- TESTIMONIALS -->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2>What people are saying about Brad</h2>

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/brennan.jpg" alt="Brennan">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corporis cumque cupiditate debitis doloremque ea eligendi ipsa ipsam, maxime perferendis perspiciatis praesentium provident quis quisquam rem repellat repellendus rerum sit! <cite> &mdash; Brennan, graduate of all bra's courses</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corporis cumque cupiditate debitis doloremque ea eligendi ipsa ipsam, maxime perferendis perspiciatis praesentium provident quis quisquam rem repellat repellendus rerum sit! <cite> &mdash; Ben, graduate of all bra's courses</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="Aj">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corporis cumque cupiditate debitis doloremque ea eligendi ipsa ipsam, maxime perferendis perspiciatis praesentium provident quis quisquam rem repellat repellendus rerum sit! <cite> &mdash; Aj, graduate of all bra's courses</cite>
                        </blockquote>
                    </div>
                </div>

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corporis cumque cupiditate debitis doloremque ea eligendi ipsa ipsam, maxime perferendis perspiciatis praesentium provident quis quisquam rem repellat repellendus rerum sit! <cite> &mdash; Ernest, graduate of all bra's courses</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
