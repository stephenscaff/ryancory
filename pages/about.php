<?php
/**
 * Template Name: About
 *
 * @author    Stephen Scaff
 * @package   pages
 * @version   1.0.0
 */

get_header();

$content = get_the_content();
$email = get_field('email', 'option');
$phone = get_field('phone', 'option');
$vimeo = get_field('vimeo', 'option');
$youtube = get_field('youtube', 'option');
$instagram = get_field('instagram', 'option');
$twitter = get_field('twitter', 'option');
$facebook = get_field('facebook', 'option');

$ft_img_med = jumpoff_ft_img('medium');
$ft_img = jumpoff_ft_img('full');
?>

<style>
  .mast__bg {
    background-image: url(<?php echo $ft_img_med; ?>);
  }
  @media (min-width: 32em) {
    .mast__bg {
      background-image: url(<?php echo $ft_img; ?>);
    }
  }
</style>
<main role="main" class="has-header-offset">

<section class="mast -img">
  <figure class="mast__bg"></figure>
</section>


<section class="heading pad-t">
  <a class="heading__title" href="mailto:<?php echo $email; ?>"><?php echo $email; ?>
  <a class="heading__link" href="tel: <?php echo $phone; ?>"><?php echo $phone; ?></a>
</section>

<section class="content pad">
  <div class="grid-sm">
    <?php
    while (have_posts()) : the_post();
      the_content();
    endwhile;  ?>
  </div>
</section>

<section class="socials">
  <div class="grid">
    <nav class="socials__nav">
      <a href="<?php echo $vimeo; ?>" target="_blank" rel="external">Vimeo</a>
      <a href="<?php echo $youtube; ?>" target="_blank" rel="external">YouTube</a>
      <a href="<?php echo $instagram; ?>" target="_blank" rel="external">Instagram</a>
      <a href="<?php echo $twitter; ?>" target="_blank" rel="external">Twitter</a>
      <a href="<?php echo $facebook; ?>" target="_blank" rel="external">Facebook</a>
    </nav>
  </div>
</section>
</main>

<!-- Footer -->
<?php get_footer(); ?>
