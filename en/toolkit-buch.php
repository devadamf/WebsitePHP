<?php include('header.php'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        var playerOne = new CirclePlayer("#jquery_jplayer_1", {
            m4a: "https://www.freie-radios.net/mp3/20180831-solidarischg-90747.mp3"
        }, {
            cssSelectorAncestor: "#cp_container_1"
        });

        var playerTwo = new CirclePlayer("#jquery_jplayer_2", {
            m4a: "https://www.freie-radios.net/mp3/20180831-solidarischg-90746.mp3"
        }, {
            cssSelectorAncestor: "#cp_container_2"
        });

        var playerThree = new CirclePlayer("#jquery_jplayer_3", {
            m4a: "http://www.whatreallymakesussafe.com/de/mp3s/caca_ghazal.mp3"
        }, {
            cssSelectorAncestor: "#cp_container_3"
        });
    });
</script>
<div id='content'>
    <?php main_nav("toolkit-buch", TRUE); ?>
    <?php main_nav("toolkit-buch", FALSE); ?>

    <div class='content-main'>
        <section>
            <h2><span class='h2-underline'>Toolkit Book</span></h2>
            <div class='toolkit-box'>
                <div id='toolkit-book-wrap'>
                    <img src='img/toolkit-book-cover.jpg' />
                </div>
                <p class='video-wrap-text'>
                    How can seemingly good ideas like supporting survivors of violence go so wrong by supporting racist
                    surveillance and security regimes? In light of the debates around the sexual assaults and racial
                    profiling at New Years for the last two years in Cologne, the Was macht uns wirklich sicher? Toolkit
                    critiques the State’s so-called “protection” in cases of sexual and intimate partner violence.
                    Strategies like the police, prisons, and borders re_produce violence rather than end it. If the
                    police and borders cannot give us safety, what alternatives do we have in our own communities? How
                    can we make ourselves safe?
                    <br /><br />
                    To sharpen our analysis and find answers, we created this toolkit. It brings together contributions
                    from many Berlin-based activists and organizations (see below).
                    <br /><br />
                    The toolkit is the culmination and documentation of the What Really Makes Us Safe? Project, and is
                    available in German from edition assemblage. It is an expanded version of the self-published
                    toolkit, which is still available online.
                </p>
            </div>
        </section>

        <section>
            <h2><span class='h2-underline'>Contributors</span></h2>
            <ul id='contributor-list'>
                <li><a href='https://incite-national.org/' target='_blank'><img class='contributor-logo' src='img/contributors/incite.jpg'></a>
                </li>
                <li><a href='https://www.women-in-exile.net/' target='_blank'><img class='contributor-logo' src='img/contributors/women-in-exile.jpg'></a>
                </li>
                <li><a href='https://entknastung.org/' target='_blank'><img class='contributor-logo' src='img/contributors/entknastung.jpg'></a>
                </li>
                <li><a href='http://www.mso-inklusiv.de/' target='_blank'><img class='contributor-logo' src='img/contributors/mso.jpg'></a></li>
                <li><a href='http://www.hydra-berlin.de/startseite/' target='_blank'><img class='contributor-logo' src='img/contributors/hydra.jpg'></a>
                </li>
                <li><a href='https://www.fluechtlingsrat-brandenburg.de/' target='_blank'><img class='contributor-logo' src='img/contributors/fluchtlingsrat.jpg'></a>
                </li>
                <li><a href='https://lesbenberatung-berlin.de/Willkommen.html' target='_blank'><img class='contributor-logo' src='img/contributors/lesbenberatung.jpg'></a></li>
                <li><a href='http://www.lesmigras.de/' target='_blank'><img class='contributor-logo' src='img/contributors/les-migras.jpg'></a>
                </li>
                <li><a href='https://www.reachoutberlin.de/' target='_blank'><img class='contributor-logo' src='img/contributors/reach-out.jpg'></a>
                </li>
                <li><a href='https://www.kop-berlin.de/' target='_blank'><img class='contributor-logo' src='img/contributors/kop.jpg'></a></li>
            </ul>
        </section>

        <section>
            <h2><span class='h2-underline'>Interview</span></h2>
            <div class='toolkit-box'>
                <div class='recording-wrap'>
                <img class='recording-img' style="padding-top: 36px;" src='img/toolkit-interview.jpg' />
                    <div class='recording-box'>
                        <div id="jquery_jplayer_1" class="cp-jplayer"></div>
                        <div class="prototype-wrapper">
                            <div id="cp_container_1" class="cp-container">
                                <div class="cp-buffer-holder">
                                    <div class="cp-buffer-1"></div>
                                    <div class="cp-buffer-2"></div>
                                </div>
                                <div class="cp-progress-holder">
                                    <div class="cp-progress-1"></div>
                                    <div class="cp-progress-2"></div>
                                </div>
                                <div class="cp-circle-control"></div>
                                <ul class="cp-controls">
                                    <li><a class="cp-play" tabindex="1">play</a></li>
                                    <li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li>
                                </ul>
                            </div>

                        </div>
                        <p class='recording-caption'>Double trouble: Two interviews with co-authors Jennifer Petzen and Melanie Brazzell on German free radio.</p>
                        <div id="jquery_jplayer_2" class="cp-jplayer"></div>
                        <div class="prototype-wrapper">
                            <div id="cp_container_2" class="cp-container">
                                <div class="cp-buffer-holder">
                                    <div class="cp-buffer-1"></div>
                                    <div class="cp-buffer-2"></div>
                                </div>
                                <div class="cp-progress-holder">
                                    <div class="cp-progress-1"></div>
                                    <div class="cp-progress-2"></div>
                                </div>
                                <div class="cp-circle-control"></div>
                                <ul class="cp-controls">
                                    <li><a class="cp-play" tabindex="1">play</a></li>
                                    <li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class='clearfix'></div>
                </div>
            </div>
        </section>
        <style>
        </style>

        <section>
            <h2><span class='h2-underline'>Ghazal</span></h2>
            <div class='toolkit-box'>
                <p class='video-wrap-text' style='margin-bottom:20px;'>
                    Listen to Farzada reading her and Zoya’s poetic contribution to the book.
                    In their contribution to the book, Farzada and Zoya from Care/Acountability/Conflict/Awareness
                    (CACA) describe the beauty and weariness of transformative justice work. They chose to express their
                    feelings towards the work creatively, in the form of a Ghazal in Farsi.
                    <br /><br />
                    “Still, we’re not hopeful of reaching safehood or coming to any solutions. But we’re glad to do the
                    work while we can, out of a true love for those around us, for as long our capacities allow. Farzada
                    touches on all of these points much more effectively in the ghazal, moving away from the structure
                    and logic of analytic prose, toward the musings of the heart.
                    <br /><br />
                    We prefer to give recourse to the tradition of poetry and allow the rhythm of ghazal to work its
                    magic. According to Wikipedia, this form of poetry originated in North Africa, central and
                    south-east Asia, and is usually written by an ‘unrequited lover whose beloved is portrayed as
                    unattainable, […] invoking melancholy, love, longing and metaphysical questions."
                </p>
                <div class='recording-wrap' style="padding-top: 24px">
                    <img class='recording-img' src='img/toolkit-farsi.jpg' />
                    <div class='recording-box'>
                        <div id="jquery_jplayer_3" class="cp-jplayer"></div>
                        <div class="prototype-wrapper">
                            <div id="cp_container_3" class="cp-container">
                                <div class="cp-buffer-holder">
                                    <div class="cp-buffer-1"></div>
                                    <div class="cp-buffer-2"></div>
                                </div>
                                <div class="cp-progress-holder">
                                    <div class="cp-progress-1"></div>
                                    <div class="cp-progress-2"></div>
                                </div>
                                <div class="cp-circle-control"></div>
                                <ul class="cp-controls">
                                    <li><a class="cp-play" tabindex="1">play</a></li>
                                    <li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- <p class='recording-caption'>Listen to Farzada reading her and Zoya’s poetic contribution to the book. In their contribution to the book, Farzada and Zoya from Care/Acountability/Conflict/Awareness (CACA) describe the beauty and weariness of transformative justice work. They chose to express their feelings towards the work creatively, in the form of a Ghazal in Farsi.
                        </p> -->
                    </div>
                </div>
            </div>
    </div>
    </section>
</div>

</div>
<footer style='text-align: center'>
<p>&copy; <script type="text/javascript">document.write(new Date().getUTCFullYear() ); </script> WRMUS</p>
</footer>

</body>

</html>