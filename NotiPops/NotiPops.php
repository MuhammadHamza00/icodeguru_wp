<?php
/*
Plugin Name: NotiPops
Plugin URI: https://www.wpbeginner.com
Description: A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area.
Version: 1.0
Author: Hamza
Author URI: https://www.wpbeginner.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wpb-tutorial
Domain Path: NotiPops
*/

// to aviod users to access our code
if (!defined('ABSPATH')) {
    die("can't access");
}

register_activation_hook(__FILE__, 'notipops_activate');

add_action('admin_menu', 'wporg_options_page');
function wporg_options_page()
{
    // Page title                                 Menu Title    capability          menu slug             callback function
    add_menu_page('Manage your Notifications with NotiPops', 'NotiPops', 'manage_options', 'notipops-settings', 'notipops_features_page', 'dashicons-admin-plugins', 5);

    // Add submenus
    add_submenu_page('notipops-settings', 'Add New Notification', 'Add New Notification', 'manage_options', 'notipops-add-new-notification', 'notipops_add_new_notification_page');
    add_submenu_page('notipops-settings', 'All Notifications', 'All Notifications', 'manage_options', 'notipops-all-notifications', 'notipops_all_notifications_page');
    // add_submenu_page('notipops-settings', 'Settings', 'Settings', 'manage_options', 'notipops-settings', 'notipops_settings_page');
}

// Settings and menu
function notipops_activate()
{
    // add plugin to admin menu
    add_action('admin_menu', 'wporg_options_page');

    // register plugin settings api and give it to options api
    add_action('admin_init', 'notipops_register_settings');
}

// user input from settings api at 27 is saved using option api
// Settings Pages: Developers can create settings pages within the WordPress admin interface where users can configure various options.
// Settings Sections: Settings pages can be divided into sections to organize related options.
// Settings Fields: Fields are used to input and display data, such as text fields, checkboxes, radio buttons, and dropdown menus.
function notipops_register_settings()
{
    // Register plugin settings
    // parameter in register_setting() == settings_fields()
    // registering option groups
    register_setting('notipops-settings-post-group', 'text_end_of_post');
    register_setting('notipops-settings-post-group', 'text_start_of_post');

    register_setting('notipops-settings-buttons-group', 'button_end_of_post_link');
    register_setting('notipops-settings-buttons-group', 'button_end_of_post_text');
    register_setting('notipops-settings-buttons-group', 'button_end_of_active');
    register_setting('notipops-settings-buttons-group', 'button_start_of_post_link');
    register_setting('notipops-settings-buttons-group', 'button_start_of_post_text');
    register_setting('notipops-settings-buttons-group', 'button_start_of_active');
}
add_action('admin_init', 'notipops_register_settings');

// add forms
function notipops_features_page()
{
    echo '<h1>NotiPops Settings</h1>';
?>
    <div class="wrap">
        <form method="post" action="options.php">
            <?php settings_fields('notipops-settings-post-group'); ?>
            <?php do_settings_sections('notipops-settings'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Text at the end of Post</th>
                    <td><input type="text" name="text_end_of_post" value="<?php echo esc_attr(get_option('text_end_of_post')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Text at the Start of Post</th>
                    <td><input type="text" name="text_start_of_post" value="<?php echo esc_attr(get_option('text_start_of_post')); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php settings_fields('notipops-settings-buttons-group'); ?>
            <?php do_settings_sections('notipops-settings'); ?>
            <table class="form-table">

                <tr valign="top">
                    <th scope="row">Url:</th>
                   
                    <td><input type="text" name="button_end_of_post_link" value="<?php echo esc_attr(get_option('button_end_of_post_link')); ?>" /></td>


                    <th scope="row">Text:</th>
                    <td><input type="text" name="button_end_of_post_text" value="<?php echo esc_attr(get_option('button_end_of_post_text')); ?>" /></td>

                    <th scope="row">Active:</th>
                    <td>
                        <?php
                        // Get the current value of the checkbox option
                        $active_value_end = get_option('button_end_of_active');
                        ?>
                        <input type="checkbox" name="button_end_of_active" value="1" <?php checked($active_value_end, '1'); ?> />
                        <!-- Add a hidden input field to store the unchecked value -->
                        <input type="hidden" name="button_end_of_active_hidden" value="0" />
                    </td>
                </tr>

                <tr valign="top">
                    <th scope="row">Url:</th>
                
                    <td><input type="text" name="button_start_of_post_link" value="<?php echo esc_attr(get_option('button_start_of_post_link')); ?>" /></td>


                    <th scope="row">Text:</th>
                    <td><input type="text" name="button_start_of_post_text" value="<?php echo esc_attr(get_option('button_start_of_post_text')); ?>" /></td>

                    <th scope="row">Active:</th>
                    <td>
                        <?php
                        // Get the current value of the checkbox option
                        $active_value_start = get_option('button_start_of_active');
                        ?>
                        <input type="checkbox" name="button_start_of_active" value="1" <?php checked($active_value_start, '1'); ?> />
                        <!-- Add a hidden input field to store the unchecked value -->
                        <input type="hidden" name="button_start_of_active_hidden" value="0" />
                    </td>
                </tr>

            </table>
            <?php submit_button(); ?>
        </form>
    </div>
  
        <style>.wrap form {
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-table {
            width: 100%;
        }

        .form-table th {
            font-weight: bold;
            
        }

        tr{
            margin: 5px;
        }
        input[type="text"],
        input[type="checkbox"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="checkbox"] {
            width: auto;
        }

        .submit-button {
            background-color: #0073aa;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-button:hover {
            background-color: #005580;
        }

        h4 {
            margin-top: 20px;
        }
    </style>

<?php
}

// Display notification text at the end of each post
function notipops_display_notification($content)
{
    if (is_single()) {

        if (get_option('button_start_of_active') == '1') {
            $button_upper = '<button><a href="' . esc_attr(get_option('button_start_of_post_link')) . '">' . esc_html(get_option('button_start_of_post_text')) . '</a></button>';
            $content = $button_upper . $content;
        }
        // Get notification text from plugin settings
        $notification_text_at_end = get_option('text_end_of_post');
        $notification_text_at_start = get_option('text_start_of_post');
        // Append notification text to post content
        $content = '<div class="notipops-notification">' . $notification_text_at_start . '</div>' . $content;
        $content .=  '<div class="notipops-notification">' . $notification_text_at_end . '</div>';

        if (get_option('button_end_of_active') == '1') {
            $content .= '<button><a href="' . esc_attr(get_option('button_end_of_post_link')) . '">' . esc_html(get_option('button_end_of_post_text')) . '</a></button>';
        }
    }
    return $content;
}

add_filter('the_content', 'notipops_display_notification');

// follow us notification
function wpb_follow_us($content)
{
    // Only do this when a single post is displayed
    if (is_single()) {
        // Message you want to display after the post
        // Add URLs to your own Twitter and Facebook profiles
        $content .= '<p class="follow-us">If you liked this article, then please follow us on <a href="http://twitter.com/wpbeginner" title="WPBeginner on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/wpbeginner" title="WPBeginner on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>';
    }
    return $content;
}
add_filter('the_content', 'wpb_follow_us');

// custom post type
function custom_notifications_post_type()
{
    $args = array(
        'public' => true,
        'label'  => 'Notifications',
        'supports' => array(
            'title', // for the title
            'custom-fields', // for custom fields
        ),
        'show_in_rest' => true,
        'rewrite' => array('slug' => 'notifications'),
        'has_archive' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'exclude_from_search' => false,
        'rewrite' => true,
        'query_var' => true,
    );
    register_post_type('notifications', $args);
}
add_action('init', 'custom_notifications_post_type');

function add_custom_notifications_meta_boxes()
{
    add_meta_box(
        'notification_event',
        'Event',
        'render_notification_event_meta_box',
        'notifications',
        'normal',
        'default'
    );

    add_meta_box(
        'notification_status',
        'Status',
        'render_notification_status_meta_box',
        'notifications',
        'side',
        'default'
    );
}

function render_notification_event_meta_box($post)
{
    $event = get_post_meta($post->ID, '_notification_event', true);
?>
    <label for="notification_event">Event:</label>
    <select id="notification_event" name="notification_event">
        <option value="">Select Event</option>
        <option value="auto-draft" <?php selected($event, 'auto-draft'); ?>>Post added</option>
        <!-- <option value="publish">Post published</option>
        <option value="Trash" >Post trashed</option> -->
        <option value="inherit" <?php selected($event, 'inherit'); ?>>Post Updated</option>
    </select>
<?php
}


function render_notification_status_meta_box($post)
{
    $status = get_post_meta($post->ID, '_notification_status', true);
?>
    <label for="notification_status">Status:</label>
    <input type="checkbox" id="notification_status" name="notification_status" <?php checked($status, 'on'); ?>>
    <?php
}

function save_custom_notifications_meta($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if ($post_id && isset($_POST['notification_event'])) {
        update_post_meta($post_id, '_notification_event', sanitize_text_field($_POST['notification_event']));
    }

    if ($post_id && isset($_POST['notification_status'])) {
        update_post_meta($post_id, '_notification_status', 'on');
    } else {
        update_post_meta($post_id, '_notification_status', 'off');
    }
}

add_action('add_meta_boxes', 'add_custom_notifications_meta_boxes');
add_action('save_post_notifications', 'save_custom_notifications_meta');


// Manage Notifications Page

function notipops_all_notifications_page()
{
    $args = array(
        'post_type' => 'notifications', // Fetch notifications posts
        'posts_per_page' => 10, // Fetch up to 10 notifications per page
        'post_status' => 'any', // Fetch notifications with any status
    );

    // Query the notifications
    $notifications_query = new WP_Query($args);

    // Check if there are any notifications

    if ($notifications_query->have_posts()) {
    ?>

        <div class="wrap">
            <h2>All Notifications</h2>
            <table class="wp-list-table widefat fixed striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Trigger</th>
                        <th>Date</th>
                        <th>Actions</th> <!-- New column for actions -->
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($notifications_query->have_posts()) : $notifications_query->the_post(); ?>
                        <tr>
                            <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                            <td><?php echo get_post_meta(get_the_ID(), '_notification_status', true); ?></td>
                            <td><?php echo get_post_meta(get_the_ID(), '_notification_event', true); ?></td>
                            <td><?php the_date(); ?></td>
                            <td>
                                <a href="<?php echo get_edit_post_link(); ?>">Edit</a> | <!-- Edit link -->
                                <a href="<?php echo get_delete_post_link(); ?>">Delete</a> <!-- Delete link -->
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <style>
            /* Style for the wrap */
            .wrap {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Style for the table */
            .wp-list-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            .wp-list-table th,
            .wp-list-table td {
                padding: 12px 15px;
                border-bottom: 1px solid #ddd;
                text-align: left;
            }

            .wp-list-table th {
                background-color: #f2f2f2;
            }

            .wp-list-table tbody tr:hover {
                background-color: #f5f5f5;
            }

            /* Style for the actions column */
            .wp-list-table td:last-child {
                white-space: nowrap;
            }

            /* Style for action links */
            .wp-list-table a {
                text-decoration: none;
                color: #0073aa;
                margin-right: 10px;
            }

            .wp-list-table a:hover {
                color: #004266;
            }
        </style>
    <?php
        // Restore original post data
        wp_reset_postdata();
    } else {
        echo 'No notifications found.';
    }
}

// settings
function notipops_settings_page()
{
    // Add your code here for the settings page
}

function notipops_add_new_notification_page()
{
    if (isset($_POST['submit_notification'])) {
        // Handle form submission
        $notification_title = sanitize_text_field($_POST['notification_title']);
        $notification_event = sanitize_text_field($_POST['notification_event']);
        $notification_status = isset($_POST['notification_status']) ? 'on' : 'off';

        // Create new post
        $new_notification = array(
            'post_title' => $notification_title,
            'post_type' => 'notifications',
            'post_status' => 'publish'
        );

        // Insert the post into the database
        $notification_id = wp_insert_post($new_notification);

        if ($notification_id) {
            // Now, we need to save the custom fields
            update_post_meta($notification_id, '_notification_event', $notification_event);
            update_post_meta($notification_id, '_notification_status', $notification_status);

            echo '<div class="updated"><p>Notification added successfully!</p></div>';
        } else {
            echo '<div class="error"><p>Error adding notification. Please try again.</p></div>';
        }
    }
    ?>

    <div class="wrap">
        <h2>Add New Notification</h2>
        <form method="post" action="">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="notification_title">Title:</label></th>
                    <td><input type="text" id="notification_title" name="notification_title" required></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="notification_status">Status:</label></th>
                    <td>
                        <input type="checkbox" id="notification_status" name="notification_status">
                        <label for="notification_status">Active</label>
                    </td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="notification_event">Trigger:</label></th>
                    <td>
                        <select id="notification_event" name="notification_event">
                            <option value="">Select Event</option>
                            <option value="auto-draft">Post added</option>
                            <!-- <option value="publish">Post Publish</option> -->
                            <option value="inherit">Post updated</option>
                            <!-- <option value="Trash">Post trashed</option> -->
                        </select>
                    </td>
                </tr>
            </table>
            <p class="submit"><input type="submit" name="submit_notification" class="button-primary" value="Add Notification"></p>
        </form>
    </div>
    <style>
        /* Style for the wrap */
        .wrap {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for the form */
        .form-table {
            width: 100%;
            border-collapse: collapse;
        }

        .form-table th,
        .form-table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .form-table th {
            text-align: left;
            width: 30%;
        }

        .form-table td {
            width: 70%;
        }

        /* Style for labels */
        label {
            font-weight: bold;
        }

        /* Style for input fields */
        input[type="text"],
        input[type="checkbox"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            margin-top: 4px;
        }

        /* Style for submit button */
        .submit {
            text-align: center;
            margin-top: 20px;
        }

        .submit input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
<?php

}

function display_custom_notifications($post_id, $post)
{
    $post_status = $post->post_status;
    // echo $post_status;
    // Query the 'notifications' custom post type based on the post status
    $args = array(
        'post_type' => 'notifications',
        'posts_per_page' => -1, // Get all notifications
        'meta_query' => array(
            array(
                'key' => '_notification_event',
                'value' => $post_status,
                'compare' => 'LIKE',
            ),
        ),
    );

    $notifications_query = new WP_Query($args);

    // Display notifications if found
    if ($notifications_query->have_posts()) {
        while ($notifications_query->have_posts()) {
            $notifications_query->the_post();
            $notification_title = get_the_title();
            $notification_content = get_the_content();

            // Display the notification as an admin notice
            $notice_content = '<strong>New Notification:</strong> ' . esc_html($notification_title) . '<br>' . esc_html($notification_content);
            $notice_id = 'custom_notification_' . $post_id;

            add_action('admin_notices', function () use ($notice_id, $notice_content) {
                echo '<div id="' . esc_attr($notice_id) . '" class="notice notice-success is-dismissible"><p>' . $notice_content . '</p></div>';
            });
        }
    }

    // Reset post data
    wp_reset_postdata();
}

// Hook into post actions
add_action('save_post', 'display_custom_notifications', 10, 2); // For post creation and update
add_action('trash_post', 'display_custom_notifications', 10, 2); // For post trashing
add_action('before_delete_post', 'display_custom_notifications', 10, 2);
