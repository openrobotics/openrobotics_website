<?php
if (isset($_COOKIE['seen_popup'])) {
    define("seen_popup", true);
} else {
    define("seen_popup", false);
}

setcookie("seen_popup", "1", time() + 3600 * 24 * 7);

//include our library and start drawing the page
require_once("php_include/functions.php");
$page_name = "home";
print_header($page_name, false);
print_navbar();
?>

<?php
//include carousel
include("php_include/carousel.php");

//grab text from php
$text_data = start_PageDisplayText($page_name);
?>

<div class="container">

    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">

    <div class="row span_content hideme">
        <div class="col-sm-7">
            <h2 class="featurette-heading"></span><?php echo get_PageDisplayText($text_data, "first_heading"); ?></h2>
            <p class="description"><?php echo get_PageDisplayText($text_data, "first_par"); ?></p>
            <p><a class="btn btn-default" href="/contact/key_users/" role="buttons">Meet the Team</a></p>
        </div>
        <div class="col-sm-5">
            <img class="featurette-image img-responsive" src="/assets/images/about.png">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row span_content hideme">
        <div class="col-sm-5">
            <img class="featurette-image img-responsive" src="/assets/images/projects.png">
        </div>
        <div class="col-sm-7">
            <h2 class="featurette-heading"></span><?php echo get_PageDisplayText($text_data, "third_heading"); ?></h2>
            <p class="description"><?php echo get_PageDisplayText($text_data, "third_par"); ?></p>
            <p><a class="btn btn-default" href="/projects/" role="buttons">Learn More</a></p>
        </div>
    </div>

    <hr class="featurette-divider">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10414.094123168288!2d-123.2521888!3d49.2664763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1877a1f004691be!2sHennings%20Building!5e0!3m2!1sen!2sca!4v1579148162771!5m2!1sen!2sca" width="100%" height="450" frameborder="0" allowfullscreen=""></iframe>

    <hr class="featurette-divider">

    <div class="row span_content hideme">
        <div class="col-sm-12">
            <center>
                <p class="description">UBC OpenRobotics highly values inspiring and developing the next generation of engineers. If you are interested in Robotics, Engineering, or just trying something new, please don't hesitate to join our team!</p>
            </center>
            <center>
                <p><a class="btn btn-default" href="/recruitment" role="button">Join the team</a></p>
            </center>
        </div>
    </div>
    <!-- /END THE FEATURETTES -->

    <?php
    print_footnote();
    ?>

</div><!-- /.container -->

<?php
//print the footer	
print_footer();
?>