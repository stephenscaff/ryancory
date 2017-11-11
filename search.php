<?php
/**
 * The template for displaying Search results
 *
 *
 * @author    Stephen Scaff
 * @package   jumpoff/archive
 * @version   1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; 
get_header(); 
$search_query = get_search_query();
?>

<main role="main">

<!-- Search Bar -->
<section class="search-mast">
  <div class="grid-sm">
    <h1 class="search-mast__title">Search CellNetix</h1>
    <form id="searchform" role="search" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group">
        <input id="s" class="input-group__input input--search" name="s" type="text" placeholder="<?php esc_attr_e('Do another search', 'jumpoff'); ?>">
        <button id="searchsubmit" class="input-group__btn btn--submit" type="submit" aria-label="Submit" title="Submit">
            Search
        </button>
      </div>
    </form>
  </div>
</section>

<!-- Search Info -->
<section class="search-info">
  <div class="grid-sm">
    <h5 class="search-info__title"><?php _e('Search Results for', 'jumpoff'); ?>
      <span class="search-info__term"><?php echo htmlspecialchars(get_search_query()); ?></span>
    </h5>
  </div>
</section>

<!-- Search Return Cards -->
<section class="search-items">
  <div class="grid-sm">
<?php 
  while ( $wp_query->have_posts() ) : $wp_query->the_post();
    get_template_part( 'partials/content/content', 'search' );
  endwhile; 
?>  
  </div>
</section>

<!-- Pagination -->
<?php get_template_part( 'partials/partial', 'pagination' );?>

</main>

<!-- Footer --> 
<?php get_footer(); ?>