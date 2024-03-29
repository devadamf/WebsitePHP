<?php

function import_css(){
    ?>
    <link href='css/reset.css' rel='stylesheet' type='text/css'>
    <link href='css/styles.css?v=<?php echo time(); ?>' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/not.the.skin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="circle.skin/circle.player.css?v=<?php echo time(); ?>">
    <?php
}

function import_fonts(){
    ?>
    <link href='https://fonts.googleapis.com/css?family=Overpass:400, 700&display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700&display=swap' rel='stylesheet'>
    <?php
}

function import_javascript(){
    // TODO: add parameter for pagename - certain pages do not need javascript
    ?>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='js/jquery.wrmus.js'></script>
    <script src='js/jquery.wrmus-slider.js'></script>
    <script type="text/javascript" src="js/jquery.transform2d.js"></script>
    <script type="text/javascript" src="js/jquery.grab.js"></script>
    <script type="text/javascript" src="js/jquery.jplayer.js"></script>
    <script type="text/javascript" src="js/mod.csstransforms.min.js"></script>
    <script type="text/javascript" src="js/circle.player.js"></script>
    <?php
}

function social_media(){
    ?>
    <ul id='social-media-nav'>
        <li><a href='https://www.facebook.com/transformativejusticekollektiv/' class='social-link facebook-link'></a></li>
        <li><a href='https://twitter.com/WhatMakesUsSafe' class='social-link twitter-link'></a></li>
        <li><a href='mailto:whatreallymakesussafe@riseup.net' class='social-link mail-link'></a></li>
        <li><a href='https://instagram.com/whatreallymakesussafe/' class='social-link instagram-link'></a></li>
        <li><a href='https://www.youtube.com/channel/UC-6u-6bXKoMKvlFfVBZZHkA' class='social-link youtube-link'></a></li>
    </ul>
    <?php
}

function _nav_item($class, $url, $label, $is_active){
    ?>
    <li>
        <?php
            if($is_active){
                ?>
                <a class='nav-btn <?php echo $class; ?> active' href='#' onclick="return false;">
                <?php
            }
            else{
                ?>
                <a class='nav-btn <?php echo $class; ?>' href='<?php echo $url; ?>'>
                <?php
            }
        ?>
            <div>
                <span class='nav-label'><?php echo $label; ?></span>
            </div>
        </a>
    </li>
    <?php
}

function main_nav($pagename, $top){
    ?>
    <ul class='main-nav'>
        <?php 
        if($top){
            _nav_item('projekt-btn', 'projekt.php', 'About', $pagename == "projekt");
            _nav_item('seminar-btn', 'seminar.php', 'Seminar', $pagename == "seminar");
            _nav_item('podiumdiskussion-btn', 'podiumdiskussion.php', 'Podium Discussion', $pagename == "podiumdiskussion");
            _nav_item('labor-fur-btn', 'labor-fur-alternativen.php', 'Lab for Alternatives', $pagename == "labor-fur-alternativen");
        }
        else{
            _nav_item('forschungsroundtable-btn', 'forschungsroundtable.php', 'Research Roundtable', $pagename == "forschungsroundtable");
            _nav_item('toolkit-btn', 'toolkit-buch.php', 'Toolkit Book', $pagename == "toolkit-buch");
            _nav_item('buchtour-btn', 'buchtour.php', 'Book Tour', $pagename == "buchtour");
            _nav_item('presse-btn', 'presse.php', 'Press', $pagename == "presse");
        }
        ?>
    </ul>
    <?php

}
?>