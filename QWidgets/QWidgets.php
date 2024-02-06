<?php
/*
Plugin Name: QWidgets
Plugin URI: https://www.wpbeginner.com
Description: A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area.
Version: 1.0
Author: Hamza
Author URI: https://www.wpbeginner.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpb-tutorial
Domain Path: QWidgets
*/

// to avoid users to access our code
if (!defined('ABSPATH')) {
    die("can't access");
}

// Register plugin activation hook
register_activation_hook(__FILE__, 'qw_activate');
add_action('admin_menu', 'qw_add_menu_page');

// Add menu page
function qw_add_menu_page()
{
    // Page title, Menu Title, capability, menu slug, callback function
    add_menu_page('Manage Preferences', 'QWidgets', 'manage_options', 'qw-settings', 'qw_features_page', 'dashicons-admin-plugins', 6);
}

function qw_activate()
{
    add_action('admin_menu', 'qw_add_menu_page');

    // add plugin to admin menu
    add_action('admin_init', 'qw_register_settings');
}

// Callback function for the menu page
function qw_features_page()
{
    echo '<h1>QWidgets Settings</h1>';
?>
    <style>
        .wrap h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .form-table {
            width: 100%;
            max-width: 600px;
            margin-bottom: 20px;
        }

        .form-table th {
            width: 200px;
            padding-right: 20px;
            text-align: left;
        }

        .form-table input[type="text"] {
            width: 300px;
        }

        .shortcode-info {
            margin-top: 20px;
        }
    </style>
    <div class="wrap">

        <h2>Weather Widget</h2>
        <form method="post" action="options.php">
            <?php settings_fields('qw-settings-group'); ?>
            <?php do_settings_sections('qw-settings'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Your Location</th>
                    <td><input type="text" name="location" value="<?php echo esc_attr(get_option('location')); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>

        <h2>Weather Option Shortcode</h2>
        <p>Shortcode: <i><b>[qw_weather]</b></i></p>
        <h2>NASA Image of the Day Shortcode</h2>
        <p>Shortcode: <i><b>[qw_nase_image]</b></i></p>
        <h2>TechCrunch Headlines Shortcode</h2>
        <p>Shortcode: <i><b>[qw_techcrunch]</b></i></p>


    </div>
    <script>
        // Define the URL with your API key and coordinates
        const apiUrl = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=2733958f56ef43dca7accf9e2ae415b5';

        // Fetch the data
        fetch(apiUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json(); // Parse the JSON data
            })
            .then(data => {
                // Log the data to the console
                console.log(data);
                // Now you can handle the data as needed
                // For example, update your webpage with this data
            })
            .catch(error => {
                console.error('There was a problem with your fetch operation:', error);
            });
    </script>
<?php
}

function qw_register_settings()
{
    register_setting('qw-settings-group', 'location');
}
add_action('admin_init', 'qw_register_settings');

// shortcode function
function qw_weather_shortcode($atts)
{
    $default = get_option('location'); // Retrieve the option value

    // If the option is empty or not set, assign a default value
    if (empty($default)) {
        $default = 'London'; // Set your default value here
    }

    $atts = shortcode_atts(
        array(
            'city' => $default, // Default city
        ),
        $atts,
        'qw_weather'
    );

    // Define the URL with your API key and coordinates
    $apiUrl = 'https://api.weatherapi.com/v1/current.json?key=0b283fe4b7b54773bc7105459240402&q=' . urlencode($atts['city']) . '&aqi=no';

    // Fetch the data
    $response = wp_remote_get($apiUrl);

    // Check for errors
    if (is_wp_error($response)) {
        return 'Error fetching weather data';
    }

    // Parse the JSON response
    $data = json_decode(wp_remote_retrieve_body($response), true);

    // Check if data is valid
    if (!$data || !isset($data['current'])) {
        return 'Invalid weather data';
    }

    // Extract required information
    $location = $data['location'];
    $current = $data['current'];
?>
    <style>
        .weather-info {
            background-color: #002D62;
            /* Blue background color */
            color: #fff;
            /* White text color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add a subtle shadow */
            width: 300px;
            /* Set a fixed width for the card */
            margin: 20px auto;
            /* Center the card horizontally and add some space around it */
            text-align: center;
            /* Center the text horizontally */
        }

        .weather-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: white;
        }

        .weather-info p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .weather-info img {
            max-width: 100px;
            /* Limit the width of the image */
            margin-top: 10px;
            /* Add some space above the image */
        }
    </style>
    <?php
    // Format the HTML output
    $output = '<div class="weather-info">';
    $output .= '<h2>' . $location['name'] . ', ' . $location['region'] . ', ' . $location['country'] . '</h2>';
    $output .= '<p>Local Time: ' . $location['localtime'] . '</p>';
    $output .= '<p>Temperature: ' . $current['temp_c'] . '°C</p>';
    $output .= '<p>Condition: ' . $current['condition']['text'] . '</p>';
    $output .= '<img src="https:' . $current['condition']['icon'] . '" alt="' . $current['condition']['text'] . '">';
    $output .= '</div>';

    echo $output;
}
add_shortcode('qw_weather', 'qw_weather_shortcode');


// widgets
class QWidgets_Weather_Widget extends WP_Widget
{
    // Constructor function
    public function __construct()
    {
        parent::__construct(
            'qw_weather_widget', // Base ID of your widget
            'QWidgets Weather Widget', // Name of the widget
            array('description' => 'Displays weather data') // Widget description
        );
    }

    // Widget frontend display
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);

        echo $args['before_widget']; // Output the HTML before the widget

        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo do_shortcode('[qw_weather city="' . esc_attr($instance['city']) . '"]');

        echo $args['after_widget']; // Output the HTML after the widget
    }

    // Widget form
    public function form($instance)
    {
        // Widget form fields
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $city = !empty($instance['city']) ? $instance['city'] : 'London';
    ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo esc_attr($city); ?>">
        </p>
    <?php
    }

    // Widget update
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['city'] = (!empty($new_instance['city'])) ? strip_tags($new_instance['city']) : 'London';

        return $instance;
    }
}

// Register the widget
function qw_register_weather_widget()
{
    register_widget('QWidgets_Weather_Widget');
}
add_action('widgets_init', 'qw_register_weather_widget');

// shortcode function
function nasa_image_shortcode()
{


    // Define the URL with your API key and coordinates
    $response = wp_remote_get('https://api.nasa.gov/planetary/apod?api_key=lbH2HB3dZFgq0t0qnox3W89Hg6KfTevIvEvGcgA8');

    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body);
    ?>
        <style>
            .nasa-image-container {
                max-width: 500px;
                margin: 0 auto;
                text-align: center;
            }

            .nasa-image-container img {
                max-width: 100%;
                height: auto;
                margin-bottom: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .nasa-image-container h4 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            .nasa-image-container p {
                font-size: 16px;
                line-height: 1.6;
            }
        </style>
        <?php
        // Display image and details
        echo "<div class='nasa-image-container'>";
        echo '<img src="' . esc_url($data->url) . '" alt="' . esc_attr($data->title) . '">';
        echo '<h4>' . esc_html($data->title) . '</h4>';
        echo '<p>' . esc_html($data->explanation) . '</p>';
        echo '</div>';
    } else {
        echo __('Failed to retrieve NASA data.', 'text_domain');
        echo '</div>';
    }
}
add_shortcode('qw_nase_image', 'nasa_image_shortcode');

// Nasa
class NASA_Image_Widget extends WP_Widget
{

    // Widget setup
    public function __construct()
    {
        parent::__construct(
            'nasa_image_widget',
            __('NASA Image of the Day', 'text_domain'),
            array('description' => __('Display NASA\'s Image of the Day', 'text_domain'),)
        );
    }

    // Display the widget
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'] . __('NASA Image of the Day', 'text_domain') . $args['after_title'];

        // Fetch data from NASA API
        // const apiUrl = 'https://api.nasa.gov/planetary/apod?api_key=lbH2HB3dZFgq0t0qnox3W89Hg6KfTevIvEvGcgA8';

        $response = wp_remote_get('https://api.nasa.gov/planetary/apod?api_key=lbH2HB3dZFgq0t0qnox3W89Hg6KfTevIvEvGcgA8');

        if (!is_wp_error($response)) {
            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body);
        ?>
            <style>
                .nasa-image-container {
                    max-width: 500px;
                    margin: 0 auto;
                    text-align: center;
                }

                .nasa-image-container img {
                    max-width: 100%;
                    height: auto;
                    margin-bottom: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .nasa-image-container h4 {
                    font-size: 24px;
                    margin-bottom: 10px;
                }

                .nasa-image-container p {
                    font-size: 16px;
                    line-height: 1.6;
                }
            </style>
            <?php
            // Display image and details
            echo "<div class='nasa-image-container'>";
            echo '<img src="' . esc_url($data->url) . '" alt="' . esc_attr($data->title) . '">';
            echo '<h4>' . esc_html($data->title) . '</h4>';
            echo '<p>' . esc_html($data->explanation) . '</p>';
            echo '</div>';
        } else {
            echo __('Failed to retrieve NASA data.', 'text_domain');
            echo '</div>';
        }

        echo $args['after_widget'];
    }
}

// Register the widget
function register_nasa_image_widget()
{
    register_widget('NASA_Image_Widget');
}
add_action('widgets_init', 'register_nasa_image_widget');

// News API
// 2733958f56ef43dca7accf9e2ae415b5
// shortcode function
function techcrunch_shortcode()
{
    // Fetch data from NASA API
    $response = wp_remote_get('https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=2733958f56ef43dca7accf9e2ae415b5');

    if (!is_wp_error($response)) {
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body);

        if (isset($data->articles) && is_array($data->articles) && count($data->articles) > 0) {
            foreach ($data->articles as $article) {
            ?>
                <style>
                    .article-container {
                        max-width: 800px;
                        margin: 0 auto;
                        padding: 20px;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        background-color: #f9f9f9;
                        margin-bottom: 20px;
                    }

                    .article-container h2 {
                        font-size: 24px;
                        margin-bottom: 10px;
                    }

                    .article-container p {
                        font-size: 16px;
                        line-height: 1.6;
                    }

                    .article-container img {
                        max-width: 100%;
                        height: auto;
                        margin-top: 10px;
                    }

                    .article-container a {
                        color: #007bff;
                        text-decoration: none;
                    }

                    .article-container a:hover {
                        text-decoration: underline;
                    }
                </style>
                <?php
                echo '<div class="article-container">';
                echo '<h2>' . $article->title . '</h2>';
                echo '<p><strong>Author:</strong> ' . $article->author . '</p>';
                echo '<p><strong>Description:</strong> ' . $article->description . '</p>';
                echo '<p><strong>Published At:</strong> ' . date('Y-m-d H:i:s', strtotime($article->publishedAt)) . '</p>';
                echo '<p><strong>URL:</strong> <a href="' . $article->url . '">' . $article->url . '</a></p>';
                echo '<img src="' . $article->urlToImage . '" alt="Article Image" style="max-width: 100%; height: auto;">';
                echo '</div><hr>';
            }
        } else {
            echo 'No articles found.';
        }
    } else {
        echo 'Error retrieving data from the API.';
    }
}
add_shortcode('qw_techcrunch', 'techcrunch_shortcode');

// Nasa
class news_Image_Widget extends WP_Widget
{

    // Widget setup
    public function __construct()
    {
        parent::__construct(
            'news_widget',
            __('TechCrunch', 'text_domain'),
            array('description' => __('Display TechCrunch Headlines', 'text_domain'),)
        );
    }

    // Display the widget
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        echo $args['before_title'] . __('Display TechCrunch Headlines', 'text_domain') . $args['after_title'];

        // Fetch data from NASA API
        $response = wp_remote_get('https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=2733958f56ef43dca7accf9e2ae415b5');

        if (!is_wp_error($response)) {
            $body = wp_remote_retrieve_body($response);
            $data = json_decode($body);

            if (isset($data->articles) && is_array($data->articles) && count($data->articles) > 0) {
                foreach ($data->articles as $article) {
                ?>
                    <style>
                        .article-container {
                            max-width: 800px;
                            margin: 0 auto;
                            padding: 20px;
                            border: 1px solid #ddd;
                            border-radius: 8px;
                            background-color: #f9f9f9;
                            margin-bottom: 20px;
                        }

                        .article-container h2 {
                            font-size: 24px;
                            margin-bottom: 10px;
                        }

                        .article-container p {
                            font-size: 16px;
                            line-height: 1.6;
                        }

                        .article-container img {
                            max-width: 100%;
                            height: auto;
                            margin-top: 10px;
                        }

                        .article-container a {
                            color: #007bff;
                            text-decoration: none;
                        }

                        .article-container a:hover {
                            text-decoration: underline;
                        }
                    </style>
<?php
                    echo '<div class="article-container">';
                    echo '<h2>' . $article->title . '</h2>';
                    echo '<p><strong>Author:</strong> ' . $article->author . '</p>';
                    echo '<p><strong>Description:</strong> ' . $article->description . '</p>';
                    echo '<p><strong>Published At:</strong> ' . date('Y-m-d H:i:s', strtotime($article->publishedAt)) . '</p>';
                    echo '<p><strong>URL:</strong> <a href="' . $article->url . '">' . $article->url . '</a></p>';
                    echo '<img src="' . $article->urlToImage . '" alt="Article Image" style="max-width: 100%; height: auto;">';
                    echo '</div><hr>';
                }
            } else {
                echo 'No articles found.';
            }
        } else {
            echo 'Error retrieving data from the API.';
        }
        echo $args['after_widget'];
    }
}

// Register the widget
function register_news_widget()
{
    register_widget('news_Image_Widget');
}
add_action('widgets_init', 'register_news_widget');

// Nasa API
// lbH2HB3dZFgq0t0qnox3W89Hg6KfTevIvEvGcgA8

// Weather API
// 0b283fe4b7b54773bc7105459240402