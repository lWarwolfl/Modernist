<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--title loader-->
<title><?=$title?> - Modernist</title>
<link rel="icon" type="image/x-icon" href="image/fav-icon/fav-icon.svg">

<!--css files loader-->
<?php
if (count($load_css)){
    for ($i = 0; $i < count($load_css); $i++)
    {
        echo '<link rel="stylesheet" href="' . $load_css[$i] . '">';
    }
}
if (count($theme_css)){
    for ($i = 0; $i < count($theme_css); $i++)
    {
        echo '<link rel="stylesheet" href="' . $theme_css[$i] . '">';
    }
}
if (count($page_css)){
    for ($i = 0; $i < count($page_css); $i++)
    {
        echo '<link rel="stylesheet" href="' . $page_css[$i] . '">';
    }
}
?>

<!--google fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!--jquery cdn-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--font awesome cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
