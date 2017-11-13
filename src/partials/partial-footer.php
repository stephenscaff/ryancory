<?php
/**
 * Partial: partials/partial-footer
 *
 * @author    Stephen Scaff
 * @package   partials
 * @version   1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$content = get_the_content();
$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$vimeo = get_field('vimeo', 'option');
$youtube = get_field('youtube', 'option');
$instagram = get_field('instagram', 'option');
$twitter = get_field('twitter', 'option');
$facebook = get_field('facebook', 'option');

?>

<footer class="site-footer ">
  <div class="grid-xl">
    <nav class="site-footer__nav">

      <a href="<?php echo $vimeo; ?>" target="_blank" rel="external">Vimeo</a>
        <a href="<?php echo $youtube; ?>" target="_blank" rel="external">YouTube</a>
        <a href="<?php echo $instagram; ?>" target="_blank" rel="external">Instagram</a>
        <a href="<?php echo $twitter; ?>" target="_blank" rel="external">Twitter</a>
      </nav>
  </div>
</footer>

<!-- Le javascript -->
<?php wp_footer(); ?>

</body>
</html>
