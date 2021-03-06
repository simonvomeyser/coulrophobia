<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 * 
 * @todo make testimonials optional and backend dependent  
 * @package coulrophobia
 */

?>


    </div><!-- .row -->
    </div><!-- #content container -->

    <footer id="colophon" class="site-footer container">

        <div class="row hidden-xs">
            <div class="col-lg-12">
                <h3>Die Fachpresse zu „Coulrophobia“: (<a href="<?php echo site_url() ."/shop"; ?>">Hier bestellen!</a>)</h3>
            </div>
        </div>

        <div class="row hidden-xs">

            <div class="col-lg-4 col-sm-4">
                <blockquote>
                    <i>„Ich meine wie…wow…geiler Stoff!!! Die gehen wirklich ab wie Zäpfchen, bringen Core vom Feinsten, gepaart mit Death- und Speed-Elementen mit einer enormen Power.Und gleichzeitig ist das Album ein fein geschliffenes Brett – hart aber herzlich sozusagen..“</i><br><strong>ROCK THE BOW, <a href="http://rock-the-bow.ch/16390/" target="_blank">www.rock-the-bow.ch</a></strong>
                </blockquote>
            </div>

            <div class="col-lg-4 col-sm-4">
            <blockquote>
                    <i>„Insgesamt ist Coulrophobia (was übrigens ”Angst vor Clowns” bedeutet) sehr gut produziert, durchgehend groovig, kann in Dauerschleife gehört werden und ist auch für Freunde der weniger harten Musik geeignet.“</i><br><strong>Piety, <a href="http://www.time-for-metal.eu/include.php?path=article&amp;contentid=13960" target="_blank">TIME FOR METAL</a></strong>
                </blockquote>
            </div>

            <div class="col-lg-4 col-sm-4">
                <blockquote>
                    <i>„Also erstmal muss ich die Band beglückwünschen. Da haben sie ein tolles Werk produziert. Durch die Bank weg eine Scheibe, die man durchaus mehrmals - auch hintereinander - hören kann.“</i><br><strong>DocDesastro, <a href="https://www.rockyou.fm/reviews/428-doc-hoert-cyrcus-coulrophobia" target="_blank">rockyou.fm</a></strong>
                </blockquote>
            </div>

        </div>

        <i id="iconbar">
            <ul>
                <li><a href="https://www.instagram.com/cyrcusofficial/" target="_blank"  title="CYRCUS Official Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/CyrcusOfficial" target="_blank" title="CYRCUS Official Facebook"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="https://www.youtube.com/user/BloodSweatVideos" target="_blank"  title="YouTube Videos"><i class="fa fa-youtube-square"></i></a></li>
            </ul>
        </i>

        <div class="container" id="footer">
            <div class="text-center">
                <div class="footer-copyright">
                    &copy; <?php echo date("Y", time()) ?> by CYRCUS | Webdesign: <a href="https://www.simonvomeyser.de">Simon vom Eyser</a> &amp; <a href="http://www.simon-koehler.com">Simon Köhler</a>
                </div>
                <div class="footer-legal">
                    <a href="<?php echo site_url() ?>/rechtliches/impressum">Impressum</a> | <a href="<?php echo site_url() ?>/rechtliches/agb">AGB</a> | <a href="<?php echo site_url() ?>/rechtliches/widerrufsbelehrung">Widerrufsbelehrung</a> | <a href="<?php echo site_url() ?>/rechtliches/datenschutzerklaerung">Datenschutzerklärung</a>
                </div>
            </div>
        </div>

        <div class="site-info">

        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
