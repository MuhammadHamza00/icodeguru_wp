<?php
ob_start();

// function wpdocs_theme_name_scripts()
// {
// }
// add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

function theme_enqueue_styles()
{
    // js
    wp_enqueue_script('index', get_template_directory_uri() . "/js/main.js", array(), '1.1', true);
    // css
    wp_enqueue_style('style.css', get_stylesheet_uri("style.css"));
    // jquery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, true);
    // Favicon
    wp_enqueue_script('counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), null, true);
    // wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoint', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), null, true);
    // Customized Bootstrap Stylesheet
    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css');


    echo '<link href="' . esc_url(get_template_directory_uri()) . '/img/favicon.ico" rel="icon">' . "\n";
    // Google Web Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap');
    // Icon Font Stylesheet (Font Awesome)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    // Icon Font Stylesheet (Bootstrap Icons)
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    wp_enqueue_style('custom-bootstrap', get_template_directory_uri() . '/scss/bootstrap.scss');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    // Libraries Stylesheets
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function enqueue_wow_js()
{
    // Enqueue WOW.js
    wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.js', array('jquery'), null, true);
    // Optional: Enqueue Animate.css if your WOW.js requires it
    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate/animate.css');
}

add_action('wp_enqueue_scripts', 'enqueue_wow_js');

// make the menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));

add_theme_support('post-thumbnails');
add_image_size('custom-size', 300, 200, true);
// Breadcrumb function
function custom_breadcrumbs()
{

    echo '<ol class="breadcrumb justify-content-center">';
    if (!is_home()) {
        echo '<li class="breadcrumb-item"><a href="' . home_url() . '"class="text-white">Home</a></li>';
        if (is_category() || is_single()) {
            echo '<li class="breadcrumb-item">';
            the_category(' </li><li class="breadcrumb-item text-white"> ');
            if (is_single()) {
                echo "</li><li class='breadcrumb-item text-white' >";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="breadcrumb-item text-white">';
            echo the_title();
            echo '</li>';
        }
    } else {
        echo '<li class="breadcrumb-item"><a href="' . home_url() . '"class="text-white">Home</a></li>';
    }
    echo '</ol>';
}
class Custom_Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->title) ? $item->title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID, $args) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}


// sidebar
function mytheme_add_admin_menu()
{
    add_menu_page(
        __('Theme Customization', 'DGital'),
        __('DGital', 'DGital'), //sidebar name
        'manage_options',
        'theme-customization',
        'mytheme_render_admin_page',
        'dashicons-admin-appearance',
        30
    );
}
add_action('admin_menu', 'mytheme_add_admin_menu');

// render page
?>

<!-- custom blocks -->
<?php

function custom_block_shortcode($atts)
{
    // Extract shortcode attributes
    $atts = shortcode_atts(array(
        // Define default attributes if needed
    ), $atts, 'custom_block');

    // Output your custom block content here
    ob_start();
?>
    <div class="my-custom-block">
        <?php echo "This is my custom block content."; ?>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('custom_block', 'custom_block_shortcode');

?>

<!-- how to allow users to customize the blocks -->

<!-- method 1 using customizer api -->
<?php
function theme_customize_register($wp_customize)
{

    // Change Navbar Color
    $wp_customize->add_section('header_section', array(
        'title' => __('Header Settings', 'DGital'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('header_background_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_background_color', array(
        'label' => __('Header Background Color', 'your-theme'),
        'section' => 'header_section',
        'settings' => 'header_background_color',
    )));

    // navbar right button
    $wp_customize->add_setting('nav_btn_text', array(
        'default' => 'Get Started',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_nav_btn_text', array(
        'label' => __('Change Button Text', 'DGital'),
        'section' => 'header_section',
        'settings' => 'nav_btn_text',
        'type' => 'text',
    )));

    $wp_customize->add_setting('nav_btn_link', array(
        'default' => 'localhost/icode',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_nav_btn_link', array(
        'label' => __('Change Button Link', 'DGital'),
        'section' => 'header_section',
        'settings' => 'nav_btn_link',
        'type' => 'text',
    )));

    // navbar right button background colors
    $wp_customize->add_setting('navbar_btn_color', array(
        'default' => '#fff',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_title_color', array(
        'label' => __('Button Background Color', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'navbar_btn_color',
        'type' => 'color',
    )));

    // Hero Settings
    // Change Hero Title
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Settings', 'DGital'),
        'priority' => 1
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'A Digital Agency Of Inteligents & Creative People',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_title', array(
        'label' => __('Change Title', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_title',
        'type' => 'text',
    )));

    // Change hero title color
    $wp_customize->add_setting('hero_title_color', array(
        'default' => '#fff',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_title_color', array(
        'label' => __('Change Title Color', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_title_color',
        'type' => 'color',
    )));

    // change hero paragraph color
    $wp_customize->add_setting('hero_para_color', array(
        'default' => '#fff',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_content_color', array(
        'label' => __('Change Content Color', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_para_color',
        'type' => 'color',
    )));

    // change Hero para
    $wp_customize->add_setting('hero_para', array(
        'default' => 'Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_para', array(
        'label' => __('Change Paragraph Content', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_para',
        'type' => 'text',
    )));

    // change the hero image
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'customize_hero_image', array(
        'label' => __('Upload Hero Image', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_image',
        'type' => 'image',
    )));



    // Change buttons text and Link
    // btn1
    $wp_customize->add_setting('hero_btn_1_text', array(
        'default' => 'Read More',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_btn_text_1', array(
        'label' => __('Change Button 1 Text', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_btn_1_text',
        'type' => 'text',
    )));

    $wp_customize->add_setting('hero_btn_1_link', array(
        'default' => 'localhost/icode',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_btn_link_1', array(
        'label' => __('Change Button 1 Link', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_btn_1_link',
        'type' => 'text',
    )));

    // btn2
    $wp_customize->add_setting('hero_btn_2_text', array(
        'default' => 'Contact Us',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_btn_text_2', array(
        'label' => __('Change Button 2 Text', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_btn_2_text',
        'type' => 'text',
    )));

    $wp_customize->add_setting('hero_btn_2_link', array(
        'default' => 'localhost/icode',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_hero_btn_link_2', array(
        'label' => __('Change Button 2 Link', 'DGital'),
        'section' => 'hero_section',
        'settings' => 'hero_btn_2_link',
        'type' => 'text',
    )));


    // features
    $wp_customize->add_section('features_section', array(
        'title' => __('Features Settings', 'DGital'),
        'priority' => 40,
    ));

    // Change card-1 title
    $wp_customize->add_setting('card_one_title', array(
        'default' => 'Digital Marketing',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'feature_card_one_title', array(
        'label' => __('Card 1 Title', 'DGital'),
        'section' => 'features_section',
        'settings' => 'card_one_title',
        'type' => 'text',

    )));

    // change card-1 content
    $wp_customize->add_setting('card_one_content', array(
        'default' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'feature_card_one_content', array(
        'label' => __('Card 1 Content', 'DGital'),
        'section' => 'features_section',
        'settings' => 'card_one_content',
        'type' => 'text',

    )));

    // Change card-2 title
    $wp_customize->add_setting('card_two_title', array(
        'default' => 'SEO & Backlinks',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'feature_card_two_title', array(
        'label' => __('Card 2 Title', 'DGital'),
        'section' => 'features_section',
        'settings' => 'card_two_title',
        'type' => 'text',
    )));

    // change card-2 content
    $wp_customize->add_setting('card_two_content', array(
        'default' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'feature_card_two_content', array(
        'label' => __('Card 2 Content', 'DGital'),
        'section' => 'features_section',
        'settings' => 'card_two_content',
        'type' => 'text',

    )));

    // Change card-3 title
    $wp_customize->add_setting('card_three_title', array(
        'default' => 'Design & Development',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'feature_card_three_title', array(
        'label' => __('Card 3 Title', 'DGital'),
        'section' => 'features_section',
        'settings' => 'card_three_title',
        'type' => 'text',
    )));

    // change card-3 content
    $wp_customize->add_setting('card_three_content', array(
        'default' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'feature_card_three_content', array(
        'label' => __('Card 3 Content', 'DGital'),
        'section' => 'features_section',
        'settings' => 'card_three_content',
        'type' => 'text',

    )));

    // About us
    $wp_customize->add_section('about_section', array(
        'title' => __('About Us Settings', 'DGital'),
        'priority' => 40,
    ));

    // Change Section title
    $wp_customize->add_setting('about_title', array(
        'default' => 'About Us',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_title', array(
        'label' => __('Section Title', 'DGital'),
        'section' => 'about_section',
        'settings' => 'about_title',
        'type' => 'text',

    )));

    // Change Heading content
    $wp_customize->add_setting('about_heading', array(
        'default' => '#1 Digital solution with 10 years of experience',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_heading', array(
        'label' => __('Heading', 'DGital'),
        'section' => 'about_section',
        'settings' => 'about_heading',
        'type' => 'text',

    )));

    // Change about paragraph content
    $wp_customize->add_setting('about_paragraph', array(
        'default' => 'Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_paragraph_content', array(
        'label' => __('Content', 'DGital'),
        'section' => 'about_section',
        'settings' => 'about_paragraph',
        'type' => 'text',

    )));

    // change image 
    $wp_customize->add_setting('about_image', array(
        'default' => '',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'customize_about_image', array(
        'label' => __('Upload Image', 'DGital'),
        'section' => 'about_section',
        'settings' => 'about_image',
        'type' => 'image',
    )));

    // Change skill 1 title
    $wp_customize->add_setting('skill_1_content', array(
        'default' => 'Digital Marketing',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_skill_1_content', array(
        'label' => __('Skill 1 Title', 'DGital'),
        'section' => 'about_section',
        'settings' => 'skill_1_content',
        'type' => 'text',

    )));

    // Change skill 1 percentage
    $wp_customize->add_setting('skill_1_percent', array(
        'default' => '85%',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_skill_1_percent', array(
        'label' => __('Skill 1 Percentage', 'DGital'),
        'section' => 'about_section',
        'settings' => 'skill_1_percent',
        'type' => 'text',

    )));


    // Change skill 2 title
    $wp_customize->add_setting('skill_2_content', array(
        'default' => 'SEO & Backlinks',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_skill_2_content', array(
        'label' => __('Skill 2 Title', 'DGital'),
        'section' => 'about_section',
        'settings' => 'skill_2_content',
        'type' => 'text',

    )));


    // Change skill 2 percentage
    $wp_customize->add_setting('skill_2_percent', array(
        'default' => '90%',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_skill_2_percent', array(
        'label' => __('Skill 2 Percentage', 'DGital'),
        'section' => 'about_section',
        'settings' => 'skill_2_percent',
        'type' => 'text',

    )));
    // Change skill 2 title
    $wp_customize->add_setting('skill_3_content', array(
        'default' => 'Design & Development',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_skill_3_content', array(
        'label' => __('Skill 3 Title', 'DGital'),
        'section' => 'about_section',
        'settings' => 'skill_3_content',
        'type' => 'text',

    )));

    // Change skill 3 percentage
    $wp_customize->add_setting('skill_3_percent', array(
        'default' => '95%',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'about_skill_3_percent', array(
        'label' => __('Skill 3 Percentage', 'DGital'),
        'section' => 'about_section',
        'settings' => 'skill_3_percent',
        'type' => 'text',

    )));

    // readmore button
    $wp_customize->add_setting('about_btn_1_text', array(
        'default' => 'Read More',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_about_btn_text_1', array(
        'label' => __('Change Button 1 Text', 'DGital'),
        'section' => 'about_section',
        'settings' => 'about_btn_1_text',
        'type' => 'text',
    )));

    $wp_customize->add_setting('about_btn_1_link', array(
        'default' => 'https://localhost/icode/?page_id=7',
        'transport' => 'refresh'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'customize_about_btn_link_1', array(
        'label' => __('Change Button 1 Link', 'DGital'),
        'section' => 'about_section',
        'settings' => 'about_btn_1_link',
        'type' => 'text',
    )));
}
add_action('customize_register', 'theme_customize_register');

function DGital_customize_css()
{
?>
    <style>
        #hero-title {
            color: <?php echo get_theme_mod('hero_title_color'); ?>;
        }

        #hero-para {
            color: <?php echo get_theme_mod('hero_para_color'); ?>;
        }
    </style>
<?php
}
add_action('wp_head', 'DGital_customize_css');
ob_end_clean();
?>