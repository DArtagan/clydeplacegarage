<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="brand">
        <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      </div>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      
    </nav>
      <?php
        if (has_nav_menu('primary_navigation')) :
          if ( is_page() && $post->post_parent ) {
            $children = wp_list_pages(array('child_of' => $post->post_parent, 'echo' => 0, 'title_li' => null));
          } else {
            $children = wp_list_pages(array('child_of' => get_the_ID(), 'echo' => 0, 'title_li' => null));
          }
          if ($children) : ?>
            <nav class="collapse navbar-collapse" role="navigation">
              <ul id="menu-secondary-navigation" class="nav navbar-nav">
                <?php echo $children; ?>
              </ul>
            </nav>
          <?php endif; ?>
        <?php endif; ?>
  </div>
</header>
