<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 */
?>
<?php
$options = bigblank_get_theme_options();
$phone = $options['phone'];
$address = $options['address'];
$footer_copyright = $options['footer_copyright'];
$footer_text = $options['footer_text'];
?>
<footer id="footer" class="site-footer" role="contentinfo">
<!--
    <?php get_sidebar('footer'); ?>
    <?php bigblank_footer_menu(); ?>
    <?php
    // Social media links (social-links.php)
    get_template_part('social', 'links');
    ?>
    -->
    <div id="site-info">
    	<ul>
        <li><a href="donate">Donate</a></li>
        <li><a href="contact">Contact</a></li>
        </ul>
    </div><!-- #site-info -->
</footer><!-- #footer -->
<?php wp_footer(); ?>
<!-- @attribution: Based on Big Blank Theme for WordPress by BigEmployee.com -->
</body>
</html>