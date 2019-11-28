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
    @media only screen and (max-width: 767px){
        .top_menu.navbar-default .navbar-collapse{
            position: absolute;
            top: 60px;
            left: 0;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22); 
        }
        .top_menu.navbar-default .navbar-nav > li > ul,
        .top_menu.navbar-default .navbar-nav .menu-item-has-children .sub-menu{
            display: block;
        }
        .top_menu.navbar-default .navbar-nav .menu-item-has-children > a{
            position: static;
        }
        .top_menu.navbar-default .navbar-nav .menu-item-has-children > button{
            height: 0;
            display: none;
        }
        .top_menu.navbar-default .navbar-collapse li:last-child{
            padding-bottom: 0;
        }
    }

        
       /*жесть*/ 
        @media only screen and (max-width: 767px){
            .main-menu-more .main-menu-more-toggle,
            .mobile-parent-nav-menu-item{
                display: none;
            }
            .top_menu.navbar-default .main-menu-more {
                display: block;
            }
            
            .main-menu-more .main-menu .menu-item .sub-menu {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                margin: 0;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                width: 100%;
                
            }
            .main-menu-more .main-menu .menu-item .sub-menu > li > a{
                    padding: 19px 15px;
                    font-weight: 500;
                    font-size: 18px;
                    line-height: 22px;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    text-decoration: none;
                    color: #000;
                    text-transform: uppercase;
                background-color: #f3f3f3;
            }
            .main-menu-more .main-menu .menu-item .sub-menu > li > a:hover{
                color: #fff;
                background-color: #1C819E;
                background: -webkit-gradient(linear, left top, left bottom, from(#DD0053), to(#A4164A));
                background: linear-gradient(180deg, #DD0053 0%, #A4164A 100%);
            }

            
            
            .main-menu-more .main-menu .menu-item  .sub-menu .sub-menu > li > a {
                background-color: #fff;
            }
            .main-menu-more .main-menu .menu-item .sub-menu > li > .submenu-expand{
                display: none;
            }
            .main-menu-more .main-menu .menu-item .sub-menu > li > ul a{
                    font-weight: bold;
                    font-size: 14px;
                    line-height: 17px;
                    padding: 12px 10px 11px;
                    color: #000000;
                    display: block;
                    text-transform: uppercase;
                    text-align: center;
            }
        }
        
    </style>
<?php endif; 
