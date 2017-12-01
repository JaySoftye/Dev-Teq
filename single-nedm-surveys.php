<?php
/**
 * Default Custom Post Type - NEDM Survey Template
 * Description: Post template with a content container.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulting Services</title>

    <link rel="stylesheet" href="../consulting-services/../consulting-services/public/css/bootstrap.css" />
    <link rel="stylesheet" href="../consulting-services/../consulting-services/public/css/main.css" />
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>

<body>

<?php
  global $wp_query;
    $postid = $wp_query->post->ID;
  wp_reset_query();
?>

<section>
  <div class="container">
    <div class="row padding-top padding-bottom">

        <div id="postContent" class="col-md">
          <?php  ?>

          <h1 class="text-center"><strong><?php the_title();?></strong></h1>
          <small class="d-block text-center">Post in <?php the_category(', ') ?> by <span class="bold"><?php the_author(); ?></span> on <?php the_time('jS F Y') ?></small>

          <?php the_content(); ?>

        </div>

    </div>
  </div>
</section>

<?php wp_footer(); ?>
</body>
</html>
