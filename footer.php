<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OctBeatz
 */

?>

<?php wp_footer(); ?>

<footer class="main-footer">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-1">
                    <nav class="footer__nav">
                        <ul class="flex-column list-reset">
							<li><a class="vs-dark" href="news">News</a></li>
							<li><a class="vs-dark" href="performers">Performers</a></li>
                            <li><a class="vs-dark" href="programs">Program</a></li>
                            <li><a class="vs-dark" href="media">Media</a></li>
                            <li><a class="vs-dark" href="about">About</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-3">
                    <h4 class="vs-dark">Music For Friends Helsinki</h3>
                </div>
                <div class="col-sm-3">
                    <p class="vs-dark">&copy; 2016 Shelune</p>
                </div>
            </div>
        </footer>

<!-- Core Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
