<?php include('header.php'); ?>
    <div id='content'>
        <?php main_nav("buchtour", TRUE); ?>
        <?php main_nav("buchtour", FALSE); ?>
        <div class='content-main'>

            <section>
                <h2><span class='h2-underline'>Buchtour</span></h2>
                <div class='book-tour-box'>
                    <p class='book-tour-text'>Puh! Die Buchtour war ein Wirbelwind. Danke an unsere Kollaboratör*innen Sanchita Basu, Jen Petzen, Fee Grabow, Lisa Monz, Jaya Chakravarti, Tine McCaskill, Nadija Samour, Zoya Honarmand und Farzada dafür, dass sie sie diese kollektive show von London bis Barcelona und rund durch Deutschland getragen haben.</p>
                    <img src='img/booktour-poster.jpg' />
                    <div class='clearfix'></div>
                </div>
            </section>
            <?php
            /*
            <section>
                <h2><span class='h2-underline'>Video</span></h2>
                <div class='book-tour-box'>
                    <p class='book-tour-text'>Nadia Samour & Melanie Brazzell gaben einen Workshop im conTent auf dem Fusion Festival. Sie haben den Workshop Husam Fadl gewidmet: Er kam nach Deutschland, um Schutz und Gerechtigkeit zu suchen. Stattdessen wurde er von der Polizei ermordet als diese wegen eines sexuellen Übergriff gegenüber Husams Tochter gerufen wurden. </p>
                    <!-- img here -->
                    <div class='clearfix'></div>
                </div>
            </section>

            <section>
                <h2><span class='h2-underline'>Audio</span></h2>
                <div class='book-tour-box'>
                    <!-- photo -->
                    <!-- audio clip -->
                </div>
            </section>
            */?>
            <section>
                <h2><span class='h2-underline'>Visual</span></h2>
                <div id='slider-wrap'>
                    <div id='slider-left' class='slider-arrow'>&lt;</div>
                    <div id='slider-main'>
                        <div>
                            <div class='slide active loaded' data-imgsrc='img/slideshow-3/1.jpg' data-cap-id=0><img src='img/slideshow-3/1.jpg' /></div>
                            <div class='slide loaded' data-imgsrc='img/slideshow-3/2.jpg' data-cap-id=1><img src='img/slideshow-3/2.jpg'/></div>
                            <div class='slide' data-imgsrc='img/slideshow-3/3.jpg' data-cap-id=2></div>
                            <div class='slide' data-imgsrc='img/slideshow-3/4.jpg' data-cap-id=3></div>
                            <div class='slide' data-imgsrc='img/slideshow-3/5.jpg' data-cap-id=4></div>
                            <div class='slide' data-imgsrc='img/slideshow-3/6.jpg' data-cap-id=5></div>
                            <div class='slide' data-imgsrc='img/slideshow-3/7.jpg' data-cap-id=6></div>
                            <div class='slide' data-imgsrc='img/slideshow-3/8.jpg' data-cap-id=6></div>
                            <div class='slide loaded' data-imgsrc='img/slideshow-3/9.jpg' data-cap-id=6><img src='img/slideshow-3/9.jpg'/></div>
                        </div>
                        <div id='caption-box'>
                            <p class='slide-caption active'>
                                Während der Buchtour haben wir Menschen eingeladen, kreativ ihre Sci-Fi Vorstellungen von einer Zukunft ohne Gewalt und Bestrafung auszuleben. 
                            </p>
                            <p class='slide-caption'>
                                Wir wissen, dass das, was uns normalerweise als sicher verkauft wird (Polizei, Gefängnisse, Grenzen) genau das Gegenteil bewirkt.
                            </p>
                             
                            <p class='slide-caption'>
                                Deswegen wollten wir von unserem Publikum wissen, was ihm wirklich das Gefühl von Sicherheit geben würde?
                            </p>
                            
                            <p class='slide-caption'>
                                Wie würde sich Sicherheit anfühlen, klingen, und schmecken? 
                            </p>
                            <p class='slide-caption'>
                                In unserer Gesellschaft in Deutschland, auf der Welt oder auf anderen Planeten…
                            </p>
                            <p class='slide-caption'>
                                Leute haben während der Buchpräsentation Wörter und Bilder auf Zettel geschrieben. 
                            </p>
                            <p class='slide-caption'>
                                Wir haben Fotos gemacht und auf Twitter, Instagram und Facebook mit den hashtags #WirklichSicher und #ReallySafe gepostet.
                            </p>
                        </div>
                    </div>
                    <div id='slider-right' class='slider-arrow'>&gt;</div>

                    <div class='clearfix'></div>
                </div>
                <div id='slider-control-box'>
                    <ul id='slider-control'>
                        <li><a class='slider-button active' href='#' data-slide-id=0></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=1></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=2></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=3></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=4></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=5></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=6></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=7></a></li>
                        <li><a class='slider-button' href='#' data-slide-id=8></a></li>
                    </ul>
                </div>
            </section>
            
        </div>

    </div>
    <footer style='text-align: center'>
    <p>&copy; <script type="text/javascript">document.write(new Date().getUTCFullYear() ); </script> WRMUS</p>
    </footer>

</body>

</html>