<?php
/**
 * Search Results Template
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header();
get_template_part( 'navigation', 'default' ); ?>

</nav>
<main><section class="container">

  <div class="row padding-top">
    <div class="col-md">
      <h4><?php echo 'Search results for <em>"' . get_search_query() . '"</em>' ?></h4>
    </div>
    <div class="col-md form-row flex-md-middle">
      <div class="form-group col-md-6">
        <h4 class="text-right"><small>Filter Results by:</small></h4>
      </div>
      <div class="form-group col-md-6">
        <form>
          <select id="filter" class="form-control">
            <option selected disabled>Choose...</option>
            <option value="status-publish">Any</option>
            <option value="type-page">Pages Only</option>
            <option value="type-post">Posts Only</option>
            <option value="type-teq-tips">Teq Tips Only</option>
          </select>
        </form>
      </div>
    </div>
  </div>
  <hr />
  <div class="row padding-bottom">
    <div class="col-md">

  <?php if (have_posts()) :
    while (have_posts()) : the_post();
      $post_type = get_post_type(); ?>

  <div <?php post_class(); ?>>
    <div class="row">
      <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
      <div class="col-md">
        <h4><?php the_title();?></h4>
          <p><small class="meta">Created: <em><?php the_date(); ?></em> | Type: <strong><?php echo $post_type; ?></strong></small></p>
      </div>
      </a>
    </div>
  </div>

  <?php endwhile; ?>
    <?php else : ?>
      <div class="row">
        <h2 class="cloudgenixRed bold"><?php _e('No Results Found for: ' . get_search_query() ); ?></h2>
        <p class="lead"><?php _e( 'Sorry, it seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps you should try again with a different search term.'); ?></p>
      </div>
  <?php endif;?>

    </div>
  </div>

</section></main>

<script type="text/javascript">
/** DISPLAY ONLY SELECTED:OPTION ON THE RESULTS OF SEARCH TERM **/
  $(document).ready(function(){
    $('select#filter').on('change', function() {
      var value = '.' + $(this).val();
      $('div.status-publish').show().not(value).hide();
    });
  });
</script>

	<?php get_footer(); ?>
