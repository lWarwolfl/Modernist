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

            <div id="about" class="hero-box-container">
                <div class="hero-box-text-container">
                    <div class="title-border-second-color"></div>
                    <div class="hero-box-title"><span class="second-color-text">Search</span> for anything intresting! </div>
                    <div class="hero-box-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                        no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</div>
                    <form id="hero-search-bar" class="hero-search-bar">
                        <label id="hero-search-button" class="hero-search-button"><span class="material-icons-outlined">search</span></label>
                        <input id="hero-search-input" type="text" class="hero-search-input" placeholder="Search...">
                    </form>
                </div>

                <div class="hero-box-image-container"></div>
            </div>

            <div class="hero-box-stats-container">
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
                    <div class="hero-box-stats-number">1,142
                        <div class="hero-box-stats-name">Stories</div>
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

    <div id="story" class="card-box">
        <div class="screen-fix flex column center">
            <div class="card-box-text flex column left">
                <div class="title-border-first-color"></div>
                <div class="card-box-title">Explore your <span class="first-color-text">interests</span></div>
                <div class="title-description">We have everything you need right here.</div>
            </div>
            <div class="full-width">
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-recent.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Recent</div>
                        <div class="category-card-counter">48</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-art.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Art</div>
                        <div class="category-card-counter">125</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-food.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Food</div>
                        <div class="category-card-counter">81</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-health.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Health</div>
                        <div class="category-card-counter">97</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-lifestyle.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Lifestyle</div>
                        <div class="category-card-counter">142</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-travel.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Travel</div>
                        <div class="category-card-counter">32</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-sports.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Sports</div>
                        <div class="category-card-counter">67</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-technology.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Technology</div>
                        <div class="category-card-counter">56</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-gaming.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Gaming</div>
                        <div class="category-card-counter">139</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-design.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Design</div>
                        <div class="category-card-counter">27</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-music.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Music</div>
                        <div class="category-card-counter">160</div>
                    </div>
                </a>
                <a href="#" class="category-card" style="background-image: url('image/category-square-resized/category-film.jpeg')">
                    <div class="category-card-overlay">
                        <div class="category-card-name">Film</div>
                        <div class="category-card-counter">168</div>
                    </div>
                </a>
            </div>
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
                    <div class="category-tag">Game</div>
                    <div class="category-tag">Design</div>
                    <div class="category-tag">Music</div>
                    <div class="category-tag">Film</div>
                </div>
            </div>
            <div class="full-width">
                <div class="story-card">
                    <div class="tag-box">Design</div>
                    <div class="time-description">10 min read - April 5, 2021</div>
                    <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolore magna aliquyam erat.</div>
                    <div class="writer-box">
                        <div class="writer-image" style="background-image: url('image/people/people-1.jpeg')"></div>
                        <div class="writer-name">Rosaline Lowell</div><br>
                        <div class="writer-job">Writer</div>
                    </div>
                    <a href="#" class="button-tag">Read more <span class="material-icons-outlined" style="font-size: 15px">east</span></a>
                    <div class="story-image" style="background-image: url('image/story/story-1.jpeg')"></div>
                </div>
                <div class="story-card">
                    <div class="tag-box">Technology</div>
                    <div class="time-description">10 min read - April 5, 2021</div>
                    <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolore magna aliquyam erat.</div>
                    <div class="writer-box">
                        <div class="writer-image" style="background-image: url('image/people/people-2.jpeg')"></div>
                        <div class="writer-name">Colbert Michaels</div><br>
                        <div class="writer-job">Blogger</div>
                    </div>
                    <a href="#" class="button-tag">Read more <span class="material-icons-outlined" style="font-size: 15px">east</span></a>
                    <div class="story-image" style="background-image: url('image/story/story-2.jpeg')"></div>
                </div>
                <div class="story-card">
                    <div class="tag-box">Lifestyle</div>
                    <div class="time-description">10 min read - April 5, 2021</div>
                    <div class="title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr</div>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy dolore magna aliquyam erat.</div>
                    <div class="writer-box">
                        <div class="writer-image" style="background-image: url('image/people/people-3.jpeg')"></div>
                        <div class="writer-name">Delia Ashworth</div><br>
                        <div class="writer-job">SEO Specialist</div>
                    </div>
                    <a href="#" class="button-tag">Read more <span class="material-icons-outlined" style="font-size: 15px">east</span></a>
                    <div class="story-image" style="background-image: url('image/story/story-3.jpeg')"></div>
                </div>
            </div>
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
                <div class="team-card">
                    <div class="team-card-image" style="background-image: url('image/people/people-1.jpeg')"></div>
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
                    <div class="team-card-image" style="background-image: url('image/people/people-2.jpeg')"></div>
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
                    <div class="team-card-image" style="background-image: url('image/people/people-3.jpeg')"></div>
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
                    <div class="team-card-image" style="background-image: url('image/people/people-4.jpeg')"></div>
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

    <?php
    include 'components/footer.php';
    ?>
</div>
</body>
</html>

<script src="js/search-field.js"></script>
<script src="js/smooth-scroll.js"></script>