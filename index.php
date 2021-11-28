<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $title = "Home";
    include 'components/head.php';
    ?>
</head>
<body>
<div class="main">
    <div class="hero-box">
        <div class="screen-fix flex column center">
            <?php
            include 'components/header.php';
            ?>

            <div id="about" class="hero-box-container flex row center">
                <div class="hero-box-text-container">
                    <div class="title-border-second-color"></div>
                    <div class="hero-box-title"><span class="second-color-text">Search</span> for anything intresting! </div>
                    <div class="hero-box-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</div>
                    <form id="hero-search-bar" class="hero-search-bar">
                        <label id="hero-search-button" class="hero-search-button"><span class="material-icons-outlined">search</span></label>
                        <input id="hero-search-input" type="text" class="hero-search-input" placeholder="Search...">
                    </form>
                </div>

                <div class="hero-box-image-container"></div>
            </div>

            <div class="hero-box-stats-container flex row center">
                <div class="hero-box-stats">
                    <div class="hero-box-stats-icon-container">
                        <span class="material-icons-round">visibility</span>
                    </div>
                    <div class="hero-box-stats-number">12689
                        <div class="hero-box-stats-name">Visits</div>
                    </div>
                </div>

                <div class="hero-box-stats">
                    <div class="hero-box-stats-icon-container">
                        <span class="material-icons-round">article</span>
                    </div>
                    <div class="hero-box-stats-number">675
                        <div class="hero-box-stats-name">Articles</div>
                    </div>
                </div>

                <div class="hero-box-stats">
                    <div class="hero-box-stats-icon-container">
                        <span class="material-icons-round">edit</span>
                    </div>
                    <div class="hero-box-stats-number">5
                        <div class="hero-box-stats-name">Authors</div>
                    </div>
                </div>

                <div class="hero-box-stats">
                    <div class="hero-box-stats-icon-container">
                        <span class="material-icons-round">group</span>
                    </div>
                    <div class="hero-box-stats-number">250
                        <div class="hero-box-stats-name">Users</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="article" class="card-box article">
        <div class="card-box-circle"></div>
        <div class="card-box-circle-2"></div>
        <div class="screen-fix flex column center">
            <div class="card-box-text flex column left">
                <div class="title-border-first-color"></div>
                <div class="card-box-title">Popular <span class="first-color-text">articles</span></div>
                <div class="title-description">Popular articles based on user view come up in this section. for more articles click on see more.</div>
            </div>
            <div class="flex row center full-width">
                <div class="article-card">
                    <div class="tag-box">Design</div>
                    <div class="time-description">10 min read - April 5, 2021</div>
                    <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolore magna aliquyam erat.</div>
                    <div class="writer-box">
                        <div class="writer-image" style="background-image: url('image/people-1.jpeg')"></div>
                        <div class="writer-name">Rosaline Lowell</div><br>
                        <div class="writer-job">Writer</div>
                    </div>
                    <a href="#" class="button-tag">Read more <span class="material-icons-outlined" style="font-size: 15px">east</span></a>
                    <div class="article-image" style="background-image: url('image/article-1.jpeg')"></div>
                </div>
                <div class="article-card">
                    <div class="tag-box">Technology</div>
                    <div class="time-description">10 min read - April 5, 2021</div>
                    <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolore magna aliquyam erat.</div>
                    <div class="writer-box">
                        <div class="writer-image" style="background-image: url('image/people-2.jpeg')"></div>
                        <div class="writer-name">Colbert Michaels</div><br>
                        <div class="writer-job">Blogger</div>
                    </div>
                    <a href="#" class="button-tag">Read more <span class="material-icons-outlined" style="font-size: 15px">east</span></a>
                    <div class="article-image" style="background-image: url('image/article-2.jpeg')"></div>
                </div>
                <div class="article-card">
                    <div class="tag-box">Life Style</div>
                    <div class="time-description">10 min read - April 5, 2021</div>
                    <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolore magna aliquyam erat.</div>
                    <div class="writer-box">
                        <div class="writer-image" style="background-image: url('image/people-3.jpeg')"></div>
                        <div class="writer-name">Delia Ashworth</div><br>
                        <div class="writer-job">SEO Specialist</div>
                    </div>
                    <a href="#" class="button-tag">Read more <span class="material-icons-outlined" style="font-size: 15px">east</span></a>
                    <div class="article-image" style="background-image: url('image/article-3.jpeg')"></div>
                </div>
            </div>
            <a href="#" class="button card-box-button">SEE MORE</a>
        </div>
    </div>

    <div id="team" class="card-box team">
        <div class="card-box-circle-2 team"></div>
        <div class="screen-fix flex column center">
            <div class="card-box-text flex column left">
                <div class="title-border-first-color"></div>
                <div class="card-box-title">Our awesome <span class="first-color-text">team</span></div>
                <div class="title-description">Popular articles based on user view come up in this section. for more articles click on see more.</div>
            </div>

            <div class="flex row center margin-20 full-width">
                <div class="team-card">
                    <div class="team-card-image" style="background-image: url('image/people-1.jpeg')"></div>
                    <div class="team-card-description">Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore …</div>
                    <div class="team-card-name">Rosaline Lowell</div>
                    <div class="team-card-job">Writer</div>
                    <div class="team-card-stars">
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-card-image" style="background-image: url('image/people-2.jpeg')"></div>
                    <div class="team-card-description">Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore …</div>
                    <div class="team-card-name">Colbert Michaels</div>
                    <div class="team-card-job">Blogger</div>
                    <div class="team-card-stars">
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-card-image" style="background-image: url('image/people-3.jpeg')"></div>
                    <div class="team-card-description">Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore …</div>
                    <div class="team-card-name">Delia Ashworth</div>
                    <div class="team-card-job">SEO Specialist</div>
                    <div class="team-card-stars">
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-card-image" style="background-image: url('image/people-4.jpeg')"></div>
                    <div class="team-card-description">Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore …</div>
                    <div class="team-card-name">Earl Pryor</div>
                    <div class="team-card-job">Programmer</div>
                    <div class="team-card-stars">
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                        <span class="material-icons-round">grade</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="footer-box">
        <div class="screen-fix flex column center">
            <div class="full-width flex row center">
                <div class="footer-part">
                    <div class="footer-part-title">Contact us</div>
                    <div class="footer-part-border"></div>
                    <div class="footer-link-container">
                        <div class="footer-link">+12 345 678 910</div>
                        <div class="footer-link">mail@mail.com</div>
                    </div>
                </div>
                <div class="footer-part">
                    <div class="footer-part-title">Services</div>
                    <div class="footer-part-border"></div>
                    <div class="footer-link-container">
                        <a href="" class="footer-link">Support</a>
                        <a href="" class="footer-link">FAQ</a>
                        <a href="" class="footer-link">Report an issue</a>
                    </div>
                </div>
                <div class="footer-part">
                    <div class="footer-part-title">Information</div>
                    <div class="footer-part-border"></div>
                    <div class="footer-link-container">
                        <a href="#about" class="footer-link">About us</a>
                        <a href="" class="footer-link">Terms of use</a>
                        <a href="" class="footer-link">Privacy policy</a>
                    </div>
                </div>
                <div class="footer-part">
                    <div class="footer-title">Stay in touch and join our <span class="first-color-text">newsletter</span></div>
                    <form class="footer-submit-bar">
                        <label class="footer-submit-button">SUBMIT</label>
                        <input type="text" class="footer-submit-input" placeholder="Enter email...">
                    </form>
                </div>
            </div>

            <div class="full-width flex column center margin-20">
                <a href="#" class="logo-box flex row right">
                    <div class="logo-animator"></div>
                    <div class="logo-name">Modernist</div>
                </a>
                <div class="share-links">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-telegram"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                    <a href=""><i class="fab fa-reddit"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-rights">Copyright @ Modernist 2021</div>
</div>
</body>
</html>

<script src="js/search-field.js"></script>
<script src="js/smooth-scroll.js"></script>