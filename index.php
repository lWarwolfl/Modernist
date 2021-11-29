<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $load_css = array('css/loading/loading.css','css/loading/loading-ball-3.css');
    $theme_css = array('css/theme/root-light.css');
    $page_css = array('css/all/main.css','css/all/top-nav.css','css/all/footer.css', 'css/home-page/hero-box.css','css/home-page/card-box.css',
        'css/home-page/story-card.css','css/home-page/team-card.css','css/home-page/category-card.css');

    $title = "Home";
    include 'components/head.php';
    ?>
</head>
<body>
<div class="loading-screen">
    <div class="loading-container ball-3">
        <div class="loading-ball ball1"></div>
        <div class="loading-ball ball2"></div><br>
        <div class="loading-ball ball3"></div>
    </div>
</div>

<div class="main">
    <?php
    include 'components/home-header.php';
    ?>

    <div id="story" class="card-box">
        <div class="screen-fix flex column center">
            <div class="card-box-text flex column left">
                <div class="title-border-first-color"></div>
                <div class="card-box-title">Explore your <span class="first-color-text">interests</span></div>
                <div class="title-description">We have everything you need right here.</div>
            </div>

            <?php
            include 'components/category-cards.php';
            ?>
        </div>
    </div>

    <div id="popular" class="card-box">
        <div class="screen-fix flex column center margin-20">
            <div class="card-box-text">
                <div class="card-box-text-separator flex column left">
                    <div class="title-border-first-color"></div>
                    <div class="card-box-title">Popular <span class="first-color-text">stories</span></div>
                    <div class="title-description">Popular stories based on user view come up in this section. for more stories click on see more.</div>
                </div>

                <div class="category-box">
                    <div class="category-tag active">All</div>
                    <div class="category-tag">Art</div>
                    <div class="category-tag">Food</div>
                    <div class="category-tag">Health</div>
                    <div class="category-tag">Lifestyle</div>
                    <div class="category-tag">Travel</div>
                    <div class="category-tag">Sports</div>
                    <div class="category-tag">Technology</div>
                    <div class="category-tag">Gaming</div>
                    <div class="category-tag">Design</div>
                    <div class="category-tag">Music</div>
                    <div class="category-tag">Movie</div>
                </div>
            </div>

            <?php
            include 'components/story-cards.php';
            ?>

            <a href="#" class="button card-box-button">SEE MORE</a>
        </div>
    </div>

    <div id="team" class="card-box">
        <div class="screen-fix flex column center">
            <div class="card-box-text flex column left">
                <div class="title-border-first-color"></div>
                <div class="card-box-title">Our awesome <span class="first-color-text">team</span></div>
                <div class="title-description">Our team is made of professionals who will provide you with great stories and cool tips and tricks!</div>
            </div>

            <div class="margin-50 full-width">
                <?php
                include 'components/team-cards.php';
                ?>
            </div>
        </div>
    </div>


            <?php
            include 'components/footer.php';
            ?>

</div>

<?php
if (!$_SESSION['loaded']){
    echo '<script src="js/loading.js"></script>';
    $_SESSION['loaded'] = true;
}
else{
    echo '<script src="js/close-loading.js"></script>';
}
?>

<script src="js/search-field.js"></script>
<script src="js/smooth-scroll.js"></script>
<script src="js/show-tag.js"></script>

</body>
</html>