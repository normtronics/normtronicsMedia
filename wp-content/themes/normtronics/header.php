<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Normtronics</title>
    <?php wp_head(); ?>
  </head>

  <body>
    <header class="main container">
      <div class="row">
        <div class="col-lg-12">
          <h1>NORMTRONICS</h1>
        </div>
      </div>
    </header>

    <?php
      wp_nav_menu(array(
          'theme_location'=>'primary',
          'container' => 'nav',
          'container_class' => 'container',
          'menu_class' => 'row'
        ));
    ?>
