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
            <h2><span class='h2-underline'>Toolkit Buch</span></h2>
            <div class='toolkit-box'>
                <div id='toolkit-book-wrap'>
                    <img src='img/toolkit-book-cover.jpg' />
                </div>
                <p class='video-wrap-text'>
                    Wie können scheinbar „gute Ideen“, wie das Unterstützen von Personen die Opfer von Gewalt geworden
                    sind (alternativ: von Personen die von Gewalt betroffen sind if you don’t want to use the
                    victim/opfer concept), so schief laufen und rassistische Überwachung und Sicherheitsregime festigen?
                    Angesichts der Debatten um Köln, stellt das Was macht uns wirklich sicher? Toolkit das
                    Sicherheitsversprechen des Staates im Falle sexualisierter & Partner_innen Gewalt in Frage, weil
                    Techniken wie Polizei, Gefängnis und Grenzen mehr Gewalt (re)produzieren statt Gewalt zu beenden.
                    Wenn uns Polizei und Grenzen keine Sicherheit geben können, welche Alternativen haben wir in unseren
                    Zusammenhängen? Wie können wir uns selbst Sicherheit schaffen?
                    <br /><br />
                    Um Analysen und Antworten zu finden, wurde Was macht uns wirklich sicher? Ein Toolkit zu
                    intersektionaler transformativer Gerechtigkeit jenseits von Gefängnis und Polizei zusammengestellt,
                    mit vielen tollen Beiträgen, hauptsächlich von Berliner Aktivist_innen & Organisationen, wie Women
                    in Exile, LesMigraS, Hydra, Kiralina, Kampagne für Opfer rassistischer Polizeigewalt (KOP), MSO
                    Inklusiv!, Transformative Justice Kollektiv Berlin & KNAS[].
                    <br /><br />
                    Dieser Werkzeugkasten dient als Ergebnis und Dokumentation des „Was macht uns wirklich sicher?“
                    Projekts und ist von edition assemblage bestellbar. Das Buch erweitert die selbstveröffentlichte
                    Version des Toolkits, die noch immer online steht.
                </p>
            </div>
        </section>

        <section>
            <h2><span class='h2-underline'>Mit Texten von…</span></h2>
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
                        <p class='recording-caption'>Double trouble: Interviews mit Co-Autorinnen Jennifer Petzen and
                            Melanie Brazzell im freien Radio zum nachören.</p>
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
                    In ihrem Beitrag im Buch beschreiben, Farzada & Zoya aus Care/Accountability/Conflict/Awareness
                    (CACA), wie schön und schwierig transformative Gerechtigkeitsarbeit sein kann. Sie drücken es auch
                    mit Kunst aus, in dem sie auf Farsi einen Ghasel geschrieben haben.
                    <br /><br />
                    “Farzada zeigt all diese Punkte noch sehr viel wirkungsvoller in dem folgenden Ghasel, welches sich
                    von der Struktur und Logik analytischer Prosa löst und sich den Träumereien des Herzens zuwendet.
                    <br /><br />
                    Wir ziehen es vor, in der Tradition des Gedichts Zuflucht zu nehmen und uns von dem Rythmus des
                    Ghasels bezaubern zu lassen. Wikipedia zufolge enstandt diese Form des Gedichts in Nordfafrika,
                    Zentral- und Südostasien und wird typischerweise verfasst von ‘einer unglücklich verliebten
                    Person, deren Geliebte*r als unerreichbar dargestellt wird und ruft Melancholie, Liebe, Sehnsucht
                    und metaphysische Fragen hervor’.”
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
                        <!-- <p class='recording-caption'>In ihrem Beitrag im Buch beschreiben, Farzada & Zoya aus Care/Accountability/Conflict/Awareness (CACA), wie schön und schwierig transformative Gerechtigkeitsarbeit sein kann. Sie drücken es auch mit Kunst aus, in dem sie auf Farsi einen Ghasel geschrieben haben. </p> -->
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