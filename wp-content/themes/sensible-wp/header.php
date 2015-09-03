<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sensible-wp 
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"> 
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>


        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'sensible-wp'); ?></a>

            <header id="masthead" class="site-header" role="banner">
                <div class="grid head-overflow">
                    <div class="site-branding">


                    </div><!-- site-branding -->
                    <div id="header-logo"></div>
                    <div class="search-form">
                        <label> Busca </label>
                        <?php $search_text = "Search"; ?> 
                        <form method="get" id="searchform"  
                              action="<?php bloginfo('home'); ?>/"> 
                            <input type="text" value="Exp: Hotel em São Paulo"  
                                   name="s" id="s"  
                                   onblur="if (this.value == '')
                                           {
                                               this.value = '<?php echo $search_text; ?>';
                                           }"  
                                   onfocus="if (this.value == '<?php echo $search_text; ?>')
                                           {
                                               this.value = '';
                                           }" /> 
                            <input type="hidden" id="searchsubmit" /> 
                        </form>
                    </div>
                    <form id="form-header">
                        <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
         <option onclick="Select()" value="http://www.firmasp.com.br/">Região</option>
        <option onclick="Select()" value="saopaulo">São Paulo</option>
       </select>
                    </form>
                    <script type="text/javascript">
    function Select(){
        location.href=document.getElementById("selectbox").value;
    }       
</script>
                    <div class="navigation-container">
                       <!-- <nav id="site-navigation" class="main-navigation" role="navigation">

                            <button class="menu-toggle toggle-menu menu-right push-body"><?php _e('<i class="fa fa-bars"></i> Menu', 'sensible-wp'); ?></button>
<?php wp_nav_menu(array('theme_location' => 'primary')); ?> 

                        </nav>--><!-- #site-navigation -->
                    </div><!-- navigation-container -->

                </div><!-- grid -->
            </header><!-- #masthead -->

            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right">
                <h3><?php _e('Menu', 'sensible-wp'); ?></h3> 
<?php wp_nav_menu(array('theme_location' => 'primary')); ?> 
            </nav>

            <section id="content" class="site-content">
