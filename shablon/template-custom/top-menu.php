<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
    <nav id="site-navigation" class="main-navigation top_menu navbar navbar-default" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
       <div class="container before-after-none">
          
        <div class="navbar-header " data-toggle="collapse" data-target="#top_menu-navbar-collapse-1">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_menu-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand hidden-lg hidden-md hidden-sm" data-toggle="collapse" data-target="#top_menu-navbar-collapse-1">Меню сайта</span>
            </div>
            <div class="collapse navbar-collapse before-after-none" id="top_menu-navbar-collapse-1">
           <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_class'     => 'main-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s nav navbar-nav mr-auto before-after-none">%3$s</ul>',
                )
            );
            ?>
            </div>
       </div>
        
        
    </nav><!-- #site-navigation -->
    <style>
    .top_menu.navbar-default .navbar-nav > li.current_page_item > a{
        z-index: 1;
    }

    </style>
<?php endif; 
