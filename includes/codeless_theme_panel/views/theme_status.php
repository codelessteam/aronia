<?php
    /**
     * Admin View: Page - Status Report
     */

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }


    function codeless_get_support_object() {
        $obj = array();

    }

    function codeless_clean( $var ) {
        return sanitize_text_field( $var );
    }

    $sysinfo = cl_backpanel::cl_SystemStatus( false, true );

?>
<div class="wrap about-wrap codeless-status">
    <h1>
        <?php esc_html_e( 'Theme System Status', 'aronia' ); ?>
    </h1>


    <div class="updated codeless-message">
        <p>
            <?php esc_html_e( 'Please copy and paste this information in your ticket when contacting support:', 'aronia' ); ?> 
        </p>

        <p class="submit">
            <a href="#" class="button-primary debug-report">
                <?php esc_html_e( 'Get System Report', 'aronia' ); ?>
            </a>
            <a class="skip button-primary"
               href="http://docs.codelessframework.com/core/support/understanding-the-codeless-framework-system-status-report/"
               target="_blank">
                   <?php esc_html_e( 'Understanding the Status Report', 'aronia' ); ?>
            </a>
        </p>

        <div id="debug-report">
            <textarea readonly="readonly"></textarea>
            <p class="submit">
                <button id="copy-for-support" 
                        class="button-primary codeless-hint-qtip" 
                        href="#" qtip-content="<?php esc_attr_e( 'Copied!', 'aronia' ); ?>">
                    <?php esc_html_e( 'Copy for Support', 'aronia' ); ?>
                </button>
            </p>
        </div>
    </div>
   

    <br/>
   
    <table class="codeless_status_table widefat" cellspacing="0" id="status">
        <thead>
        <tr>
            <th colspan="3" data-export-label="<?php esc_attr_e( 'WordPress Environment', 'aronia') ?>">
                <?php esc_html_e( 'WordPress Environment', 'aronia' ); ?>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Home URL', 'aronia') ?>">
                <?php esc_html_e( 'Home URL', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The URL of your site\'s homepage.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td><?php echo esc_url($sysinfo['home_url']); ?></td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Site URL', 'aronia') ?>">
                <?php esc_html_e( 'Site URL', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The root URL of your site.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo esc_url($sysinfo['site_url']); ?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'codeless Version', 'aronia') ?>">
                <?php esc_html_e( 'codeless Version', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The version of codeless Framework installed on your site.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'codeless Data Directory Writable', 'aronia') ?>">
                <?php esc_html_e( 'codeless Data Directory Writable', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'codeless and its extensions write data to the <code>uploads</code> directory. This directory must be writable.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td><</td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'WP Content URL', 'aronia') ?>">
                <?php esc_html_e( 'WP Content URL', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The location of WordPress\'s content URL.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo '<code>' . esc_url($sysinfo['wp_content_url']) . '</code> '; ?>
            </td>
        </tr>        
        <tr>
            <td data-export-label="<?php esc_attr_e( 'WP Version', 'aronia') ?>">
                <?php esc_html_e( 'WP Version', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The version of WordPress installed on your site.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php bloginfo( 'version' ); ?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'WP Multisite', 'aronia') ?>">
                <?php esc_html_e( 'WP Multisite', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Whether or not you have WordPress Multisite enabled.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td><?php if ( $sysinfo['wp_multisite'] == true ) {
                    echo '&#10004;';
                } else {
                    echo '&ndash;';
                } ?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Permalink Structure', 'aronia') ?>">
                <?php esc_html_e( 'Permalink Structure', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The current permalink structure as defined in WordPress Settings->Permalinks.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo esc_html($sysinfo['permalink_structure']); ?>
            </td>
        </tr>
        <?php $sof = $sysinfo['front_page_display']; ?>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Front Page Display', 'aronia') ?>">
                <?php esc_html_e( 'Front Page Display', 'aronia' ); ?>:
            </td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The current Reading mode of WordPress.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td><?php echo esc_html($sof); ?></td>
        </tr>

        <?php
            if ( $sof == 'page' ) {
?>
                <tr>
                    <td data-export-label="<?php esc_attr_e( 'Front Page', 'aronia') ?>">
                        <?php esc_html_e( 'Front Page', 'aronia' ); ?>:
                    </td>
                    <td class="help">
                        <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The currently selected page which acts as the site\'s Front Page.', 'aronia' ) . '">[?]</a>'; ?>
                    </td>
                    <td>
                        <?php echo esc_html($sysinfo['front_page']); ?>
                    </td>
                </tr>
                <tr>
                    <td data-export-label="<?php esc_attr_e( 'Posts Page', 'aronia') ?>">
                        <?php esc_html_e( 'Posts Page', 'aronia' ); ?>:
                    </td>
                    <td class="help">
                        <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The currently selected page in where blog posts are displayed.', 'aronia' ) . '">[?]</a>'; ?>
                    </td>
                    <td>
                        <?php echo esc_html($sysinfo['posts_page']); ?>
                    </td>
                </tr>
<?php
            }
?>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'WP Memory Limit', 'aronia') ?>">
                <?php esc_html_e( 'WP Memory Limit', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The maximum amount of memory (RAM) that your site can use at one time.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
<?php
                    $memory = $sysinfo['wp_mem_limit']['raw'];

                    if ( $memory < 128000000 ) {
                        echo '<mark class="error">' . sprintf(__( '%s - We recommend setting memory to at least 128MB. See: <a href="%s" target="_blank">Increasing memory allocated to PHP</a>', 'aronia' ), esc_html($sysinfo['wp_mem_limit']['size']), 'http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP' ) . '</mark>';
                    } else {
                        echo '<mark class="yes">' . esc_html($sysinfo['wp_mem_limit']['size']) . '</mark>';
                    }
?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Database Table Prefix', 'aronia') ?>">
                <?php esc_html_e( 'Database Table Prefix', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The prefix structure of the current WordPress database.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo esc_html($sysinfo['db_table_prefix']); ?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'WP Debug Mode', 'aronia') ?>">
                <?php esc_html_e( 'WP Debug Mode', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Displays whether or not WordPress is in Debug Mode.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php if ( $sysinfo['wp_debug'] === 'true' ) {
                    echo '<mark class="yes">' . '&#10004;' . '</mark>';
                } else {
                    echo '<mark class="no">' . '&ndash;' . '</mark>';
                } ?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Language', 'aronia') ?>">
                <?php esc_html_e( 'Language', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The current language used by WordPress. Default = English', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo esc_html($sysinfo['wp_lang']); ?>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="codeless_status_table widefat" cellspacing="0" id="status">
        <thead>
        <tr>
            <th colspan="3" data-export-label="<?php esc_attr_e( 'Browser', 'aronia') ?>">
                <?php esc_html_e( 'Browser', 'aronia' ); ?>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Browser Info', 'aronia') ?>">
                <?php esc_html_e( 'Browser Info', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Information about web browser current in use.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
<?php
                foreach ( $sysinfo['browser'] as $key => $value ) {
                    echo '<strong>' . esc_html(ucfirst( $key )) . '</strong>: ' . esc_html($value) . '<br/>';
                }
?>
            </td>
        </tr>
        </tbody>
    </table>

    <table class="codeless_status_table widefat" cellspacing="0" id="status">
        <thead>
        <tr>
            <th colspan="3" data-export-label="<?php esc_attr_e( 'Server Environment', 'aronia') ?>">
                <?php esc_html_e( 'Server Environment', 'aronia' ); ?>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Server Info', 'aronia') ?>">
                <?php esc_html_e( 'Server Info', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Information about the web server that is currently hosting your site.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo esc_html($sysinfo['server_info']); ?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Localhost Environment', 'aronia') ?>">
                <?php esc_html_e( 'Localhost Environment', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Is the server running in a localhost environment.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
<?php
                if ( $sysinfo['localhost'] === 'true' ) {
                    echo '<mark class="yes">' . '&#10004;' . '</mark>';
                } else {
                    echo '<mark class="no">' . '&ndash;' . '</mark>';
                }
?>            
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'PHP Version', 'aronia') ?>">
                <?php esc_html_e( 'PHP Version', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The version of PHP installed on your hosting server.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo esc_html($sysinfo['php_ver']); ?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'ABSPATH', 'aronia') ?>">
                <?php esc_html_e( 'ABSPATH', 'aronia' ); ?>:
            </td>
            <td class="help">
                <?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The ABSPATH variable on the server.', 'aronia' ) . '">[?]</a>'; ?>
            </td>
            <td>
                <?php echo '<code>' . esc_html($sysinfo['abspath']) . '</code>'; ?>
            </td>
        </tr>
        
        <?php if ( function_exists( 'ini_get' ) ) { ?>
            <tr>
                <td data-export-label="<?php esc_attr_e( 'PHP Memory Limit', 'aronia') ?>"><?php esc_html_e( 'PHP Memory Limit', 'aronia' ); ?>:</td>
                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The largest filesize that can be contained in one post.', 'aronia' ) . '">[?]</a>'; ?></td>
                <td><?php echo esc_html($sysinfo['php_mem_limit']); ?></td>
            </tr>
            <tr>
                <td data-export-label="<?php esc_attr_e( 'PHP Post Max Size', 'aronia') ?>"><?php esc_html_e( 'PHP Post Max Size', 'aronia' ); ?>:</td>
                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The largest filesize that can be contained in one post.', 'aronia' ) . '">[?]</a>'; ?></td>
                <td><?php echo esc_html($sysinfo['php_post_max_size']); ?></td>
            </tr>
            <tr>
                <td data-export-label="<?php esc_attr_e( 'PHP Time Limit', 'aronia') ?>"><?php esc_html_e( 'PHP Time Limit', 'aronia' ); ?>:</td>
                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The amount of time (in seconds) that your site will spend on a single operation before timing out (to avoid server lockups)', 'aronia' ) . '">[?]</a>'; ?></td>
                <td>

                
                        <?php if($sysinfo['php_time_limit'] < 180){

                            echo '<mark class="error">' . sprintf(__( '%s - We recommend setting max execution time to at least 180. <br> To import classic demo content, <strong>300</strong> seconds of max execution time is required.<br>See: <a href="%s" target="_blank" rel="noopener noreferrer">Increasing max execution to PHP</a>', 'aronia' ), esc_html($sysinfo['php_time_limit']), 'http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP' ) . '</mark>';

                            }else{

                                echo '<mark class="yes">' .esc_html($sysinfo['php_time_limit']) .'</mark>';
                            }


                             ?>
                </td>
            </tr>
            <tr>
                <td data-export-label="<?php esc_attr_e( 'PHP Max Input Vars', 'aronia') ?>"><?php esc_html_e( 'PHP Max Input Vars', 'aronia' ); ?>:</td>
                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The maximum number of variables your server can use for a single function to avoid overloads.', 'aronia' ) . '">[?]</a>'; ?></td>
                <td>
                    


                        <?php if($sysinfo['php_max_input_var'] < 1700){

                            echo ' <mark class="error">' . sprintf(__( '%s - Recommended Value: 1728.
                                            Max input vars limitation will truncate POST <br> data such as menus.  <a target="_blank" rel="noopener noreferrer" href="%s">Increasing max input vars limit.</a>', 'aronia' ), esc_html($sysinfo['php_max_input_var']), 'http://sevenspark.com/docs/ubermenu-3/faqs/menu-item-limit' ) . '</mark>';


                            } else {


                                echo '<mark class="yes">' .esc_html($sysinfo['php_max_input_var']) . '</mark>';

                            }



                        ?>


                </td>
            </tr>
            <tr>
                <td data-export-label="<?php esc_attr_e( 'PHP Display Errors', 'aronia') ?>"><?php esc_html_e( 'PHP Display Errors', 'aronia' ); ?>:</td>
                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Determines if PHP will display errors within the browser.', 'aronia' ) . '">[?]</a>'; ?></td>
                <td><?php
                        if ( 'true' === $sysinfo['php_display_errors'] ) {
                            echo '<mark class="yes">' . '&#10004;' . '</mark>';
                        } else {
                            echo '<mark class="no">' . '&ndash;' . '</mark>';
                        }
                    ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'SUHOSIN Installed', 'aronia') ?>"><?php esc_html_e( 'SUHOSIN Installed', 'aronia' ); ?>:</td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Suhosin is an advanced protection system for PHP installations. It was designed to protect your servers on the one hand against a number of well known problems in PHP applications and on the other hand against potential unknown vulnerabilities within these applications or the PHP core itself.  If enabled on your server, Suhosin may need to be configured to increase its data submission limits.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td>
                <?php if ( $sysinfo['suhosin_installed'] == true ) {
                    echo '<mark class="yes">' . '&#10004;' . '</mark>';
                } else {
                    echo '<mark class="no">' . '&ndash;' . '</mark>';
                } ?>
            </td>
        </tr>

        <tr>
            <td data-export-label="<?php esc_attr_e( 'MySQL Version', 'aronia') ?>"><?php esc_html_e( 'MySQL Version', 'aronia' ); ?>:</td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The version of MySQL installed on your hosting server.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td><?php echo esc_html($sysinfo['mysql_ver']); ?></td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Max Upload Size', 'aronia') ?>"><?php esc_html_e( 'Max Upload Size', 'aronia' ); ?>:</td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The largest filesize that can be uploaded to your WordPress installation.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td>
                 

              
                <?php echo ' <mark class="yes">' . sprintf(__( '%s - Recommended Value: 10M.
                                            Max Upload Size need to be at least 10M <br> ', 'aronia' ), esc_html($sysinfo['max_upload_size']) ) . '</mark>';  ?>
                


            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Default Timezone is UTC', 'aronia') ?>">
                <?php esc_html_e( 'Default Timezone is UTC', 'aronia' ); ?>:
            </td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The default timezone for your server.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td>
<?php
                if ( $sysinfo['def_tz_is_utc'] === 'false' ) {
                    echo '<mark class="error">' . '&#10005; ' . sprintf(__( 'Default timezone is %s - it should be UTC', 'aronia' ), esc_html(date_default_timezone_get()) ) . '</mark>';
                } else {
                    echo '<mark class="yes">' . '&#10004;' . '</mark>';
                } 
?>
            </td>
        </tr>
        <?php
            $posting = array();

            // fsockopen/cURL
            $posting['fsockopen_curl']['name'] = 'fsockopen/cURL';
            $posting['fsockopen_curl']['help'] = '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Used when communicating with remote services with PHP.', 'aronia' ) . '">[?]</a>';

            if ( $sysinfo['fsockopen_curl'] === 'true' ) {
                $posting['fsockopen_curl']['success'] = true;
            } else {
                $posting['fsockopen_curl']['success'] = false;
                $posting['fsockopen_curl']['note']    = esc_html__( 'Your server does not have fsockopen or cURL enabled - cURL is used to communicate with other servers. Please contact your hosting provider.', 'aronia' ) . '</mark>';
            }

        

            // WP Remote Post Check
            $posting['wp_remote_post']['name'] = esc_html__( 'Remote Post', 'aronia' );
            $posting['wp_remote_post']['help'] = '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Used to send data to remote servers.', 'aronia' ) . '">[?]</a>';

            if ( $sysinfo['wp_remote_post'] === 'true' ) {
                $posting['wp_remote_post']['success'] = true;
            } else {
                $posting['wp_remote_post']['note'] = esc_html__( 'wp_remote_post() failed. Many advanced features may not function. Contact your hosting provider.', 'aronia' );

                if ( $sysinfo['wp_remote_post_error'] ) {
                    $posting['wp_remote_post']['note'] .= ' ' . sprintf(__( 'Error: %s', 'aronia' ), codeless_clean( $sysinfo['wp_remote_post_error'] ) );
                }

                $posting['wp_remote_post']['success'] = false;
            }

            // WP Remote Get Check
            $posting['wp_remote_get']['name'] = esc_html__( 'Remote Get', 'aronia' );
            $posting['wp_remote_get']['help'] = '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Used to grab information from remote servers for updates updates.', 'aronia' ) . '">[?]</a>';

            if ( $sysinfo['wp_remote_get'] === 'true' ) {
                $posting['wp_remote_get']['success'] = true;
            } else {
                $posting['wp_remote_get']['note'] = esc_html__( 'wp_remote_get() failed. This is needed to get information from remote servers. Contact your hosting provider.', 'aronia' );
                if ( $sysinfo['wp_remote_get_error'] ) {
                    $posting['wp_remote_get']['note'] .= ' ' . sprintf(__( 'Error: %s', 'aronia' ), codeless_clean( $sysinfo['wp_remote_get_error'] ) );
                }

                $posting['wp_remote_get']['success'] = false;
            }

            $posting = apply_filters( 'codeless_debug_posting', $posting );

            foreach ( $posting as $post ) {
                $mark = ! empty( $post['success'] ) ? 'yes' : 'error';
                ?>
                <tr>
                    <td data-export-label="<?php echo esc_attr( $post['name'] ); ?>">
                        <?php echo esc_html( $post['name'] ); ?>:
                    </td>
                    <td>
                        <?php echo isset( $post['help'] ) ? $post['help'] : ''; ?>
                    </td>
                    <td class="help">
                        <mark class="<?php echo esc_attr($mark); ?>">
                            <?php echo ! empty( $post['success'] ) ? '&#10004' : '&#10005'; ?>
                            <?php echo ! empty( $post['note'] ) ? wp_kses_data( $post['note'] ) : ''; ?>
                        </mark>
                    </td>
                </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
    <table class="codeless_status_table widefat" cellspacing="0" id="status">
        <thead>
        <tr>
            <th colspan="3" data-export-label="<?php esc_attr_e( 'Active Plugins', 'aronia' ) ?> (<?php echo esc_html(count( (array) get_option( 'active_plugins' ) ) ); ?>)">
                <?php esc_html_e( 'Active Plugins', 'aronia' ); ?> (<?php echo esc_html(count( (array) get_option( 'active_plugins' ) ) ); ?>)
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
            foreach ( $sysinfo['plugins'] as $name => $plugin_data ) {
                $version_string = '';
                $network_string = '';

                if ( ! empty( $plugin_data['Name'] ) ) {
                    // link the plugin name to the plugin url if available
                    $plugin_name = esc_html( $plugin_data['Name'] );

                    if ( ! empty( $plugin_data['PluginURI'] ) ) {
                        $plugin_name = '<a href="' . esc_url( $plugin_data['PluginURI'] ) . '" title="' . esc_attr__( 'Visit plugin homepage', 'aronia' ) . '">' . esc_html($plugin_name) . '</a>';
                    }
?>
                    <tr>
                        <td><?php echo esc_html( $plugin_name ); ?></td>
                        <td class="help">&nbsp;</td>
                        <td>
                            <?php echo sprintf( _x( 'by %s', 'by author', 'aronia' ), $plugin_data['Author'] ) . ' &ndash; ' . esc_html( $plugin_data['Version'] ) . $version_string . $network_string; ?>
                        </td>
                    </tr>
<?php
                }
            }
        ?>
        </tbody>
    </table>
    <?php
        if ( ! empty( $sysinfo['codeless_instances'] ) && is_array( $sysinfo['codeless_instances'] ) ) {
            foreach ( $sysinfo['codeless_instances'] as $inst => $data ) {
                $inst_name = ucwords( str_replace( array( '_', '-' ), ' ', $inst ) );
                $args      = $data['args'];
                ?>
                <table class="codeless_status_table widefat" cellspacing="0" id="status">
                    <thead>
                    <tr>
                        <th colspan="3" data-export-label="<?php esc_attr_e( 'codeless Instance', 'aronia' ) ?>: <?php echo esc_html($inst_name); ?>">
                            <?php esc_html_e( 'codeless Instance: ', 'aronia' );
                            echo esc_html($inst_name); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-export-label="opt_name">opt_name:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The opt_name argument for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo esc_html($args['opt_name']); ?></td>
                    </tr>
                    <?php
                        if ( isset( $args['global_variable'] ) && $args['global_variable'] != '' ) {
                            ?>
                            <tr>
                                <td data-export-label="global_variable">global_variable:</td>
                                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The global_variable argument for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                                <td><?php echo esc_html($args['global_variable']); ?></td>
                            </tr>
                        <?php
                        }
                    ?>
                    <tr>
                        <td data-export-label="dev_mode">dev_mode:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Indicates if developer mode is enabled for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo true == $args['dev_mode'] ? '<mark class="yes">' . '&#10004;' . '</mark>' : '<mark class="no">' . '&ndash;' . '</mark>'; ?></td>
                    </tr>
                    <tr>
                        <td data-export-label="ajax_save">ajax_save:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Indicates if ajax based saving is enabled for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo true == $args['ajax_save'] ? '<mark class="yes">' . '&#10004;' . '</mark>' : '<mark class="no">' . '&ndash;' . '</mark>'; ?></td>
                    </tr>
                    <tr>
                        <td data-export-label="page_slug">page_slug:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The page slug denotes the string used for the options panel page for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo esc_html($args['page_slug']); ?></td>
                    </tr>
                    <tr>
                        <td data-export-label="page_permissions">page_permissions:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The page permissions variable sets the permission level required to access the options panel for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo esc_html($args['page_permissions']); ?></td>
                    </tr>
                    <tr>
                        <td data-export-label="menu_type">menu_type:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'This variable set whether or not the menu is displayed as an admin menu item for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo esc_html($args['menu_type']); ?></td>
                    </tr>
                    <tr>
                        <td data-export-label="page_parent">page_parent:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The page parent variable sets where the options menu will be placed on the WordPress admin sidebar for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo esc_html($args['page_parent']); ?></td>
                    </tr>

                    <tr>
                        <td data-export-label="compiler">compiler:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Indicates if the compiler flag is enabled for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo true == $args['compiler'] ? '<mark class="yes">' . '&#10004;' . '</mark>' : '<mark class="no">' . '&ndash;' . '</mark>'; ?></td>
                    </tr>
                    <tr>
                        <td data-export-label="output">output:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Indicates if output flag for globally shutting off all CSS output is enabled for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo true == $args['output'] ? '<mark class="yes">' . '&#10004;' . '</mark>' : '<mark class="no">' . '&ndash;' . '</mark>'; ?></td>
                    </tr>
                    <tr>
                        <td data-export-label="output_tag">output_tag:</td>
                        <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The output_tag variable sets whether or not dynamic CSS will be generated for the customizer and Google fonts for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                        <td><?php echo true == $args['output_tag'] ? '<mark class="yes">' . '&#10004;' . '</mark>' : '<mark class="no">' . '&ndash;' . '</mark>'; ?></td>
                    </tr>

                    <?php
                        if ( isset( $args['templates_path'] ) && $args['templates_path'] != '' ) {
                            ?>
                            <tr>
                                <td data-export-label="template_path">template_path:</td>
                                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The specified template path containing custom template files for this instance of codeless.', 'aronia' ) . '">[?]</a>'; ?></td>
                                <td><?php echo '<code>' . esc_html($args['templates_path']) . '</code>'; ?></td>
                            </tr>
                            <tr>
                                <td data-export-label="<?php esc_attr_e( 'Templates', 'aronia' ) ?>"><?php esc_html_e('Templates', 'aronia' ) ?>:</td>
                                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'List of template files overriding the default codeless template files.', 'aronia' ) . '">[?]</a>'; ?></td>
<?php
                                    $found_files = $data['templates'];
                                    if ( $found_files ) {
                                        foreach ( $found_files as $plugin_name => $found_plugin_files ) {
?>
                                            <td>
                                                <?php echo implode( ', <br/>', $found_plugin_files ); ?>
                                            </td>
                                        <?php
                                        }
                                    } else {
?>
                                        <td>&ndash;</td>
<?php
                                    }
?>
                            </tr>
<?php
                        }
                        
                        $ext = $data['extensions'];
                        if ( ! empty( $ext ) && is_array( $ext ) ) {
?>
                            <tr>
                                <td data-export-label="<?php esc_attr_e( 'Extensions', 'aronia' ) ?>"><?php esc_html_e('Extensions', 'aronia' ) ?></td>
                                <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Indicates the installed codeless extensions and their version numbers.', 'aronia' ) . '">[?]</a>'; ?></td>
                                <td>
<?php
                                    foreach ( $ext as $name => $arr ) {
                                        $ver = $arr['version'];

                                        echo '<a href="http://codelessframework.com/extensions/' . str_replace( array(
                                                '_',
                                            ), '-', $name ) . '" target="blank">' . ucwords( str_replace( array(
                                                '_',
                                                '-'
                                            ), ' ', $name ) ) . '</a> - ' . esc_html($ver); ?><br/>
<?php
                                    }
?>
                                </td>
                            </tr>
<?php
                        }
?>
                    </tbody>
                </table>
<?php
            }
        }
?>
    <table class="codeless_status_table widefat" cellspacing="0" id="status">
        <thead>
        <tr>
            <th colspan="3" data-export-label="<?php esc_attr_e( 'Theme', 'aronia' ) ?>"><?php esc_html_e( 'Theme', 'aronia' ); ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Name', 'aronia' ) ?>"><?php esc_html_e( 'Name', 'aronia' ); ?>:</td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The name of the current active theme.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td><?php echo esc_html($sysinfo['theme']['name']); ?></td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Version', 'aronia' ) ?>"><?php esc_html_e( 'Version', 'aronia' ); ?>:</td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The installed version of the current active theme.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td>
<?php
                echo esc_html($sysinfo['theme']['version']);

                if ( ! empty( $theme_version_data['version'] ) && version_compare( $theme_version_data['version'], $active_theme->Version, '!=' ) ) {
                    echo ' &ndash; <strong style="color:red;">' . esc_html($theme_version_data['version']) . ' ' . esc_html__( 'is available', 'aronia' ) . '</strong>';
                }
?>
            </td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Author URL', 'aronia' ) ?>"><?php esc_html_e( 'Author URL', 'aronia' ); ?>:</td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The theme developers URL.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td><?php echo esc_url($sysinfo['theme']['author_uri']); ?></td>
        </tr>
        <tr>
            <td data-export-label="<?php esc_attr_e( 'Child Theme', 'aronia' ) ?>"><?php esc_html_e( 'Child Theme', 'aronia' ); ?>:</td>
            <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'Displays whether or not the current theme is a child theme.', 'aronia' ) . '">[?]</a>'; ?></td>
            <td>
<?php
                echo is_child_theme() ? '<mark class="yes">' . '&#10004;' . '</mark>' : '&#10005; <br /><em>' . sprintf(__( 'If you\'re modifying codeless Framework or a parent theme you didn\'t build personally, we recommend using a child theme. See: <a href="%s" target="_blank">How to create a child theme</a>', 'aronia' ), 'http://codex.wordpress.org/Child_Themes' ) . '</em>';
?>
            </td>
        </tr>
<?php
            if ( is_child_theme() ) {
?>
                <tr>
                    <td data-export-label="<?php esc_attr_e( 'Parent Theme Name', 'aronia' ) ?>"><?php esc_html_e( 'Parent Theme Name', 'aronia' ); ?>:
                    </td>
                    <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The name of the parent theme.', 'aronia' ) . '">[?]</a>'; ?></td>
                    <td><?php echo esc_html($sysinfo['theme']['parent_name']); ?></td>
                </tr>
                <tr>
                    <td data-export-label="<?php esc_attr_e( 'Parent Theme Version', 'aronia' ) ?>">
                        <?php esc_html_e( 'Parent Theme Version', 'aronia' ); ?>:
                    </td>
                    <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The installed version of the parent theme.', 'aronia' ) . '">[?]</a>'; ?></td>
                    <td><?php echo esc_html($sysinfo['theme']['parent_version']); ?></td>
                </tr>
                <tr>
                    <td data-export-label="<?php esc_attr_e( 'Parent Theme Author URL', 'aronia' ) ?>">
                        <?php esc_html_e( 'Parent Theme Author URL', 'aronia' ); ?>:
                    </td>
                    <td class="help"><?php echo '<a href="#" class="codeless-hint-qtip" qtip-content="' . esc_attr__( 'The parent theme developers URL.', 'aronia' ) . '">[?]</a>'; ?></td>
                    <td><?php echo esc_url($sysinfo['theme']['parent_author_uri']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script type="text/javascript">
        jQuery( 'a.codeless-hint-qtip' ).on( 'click',
            function() {
                return false;
            }
        );

        jQuery( 'a.debug-report' ).on( 'click',
            function() {
                var report = '';

                jQuery( '#status thead, #status tbody' ).each(
                    function() {
                        if ( jQuery( this ).is( 'thead' ) ) {
                            var label = jQuery( this ).find( 'th:eq(0)' ).data( 'export-label' ) || jQuery( this ).text();
                            report = report + "\n### " + jQuery.trim( label ) + " ###\n\n";
                        } else {
                            jQuery( 'tr', jQuery( this ) ).each(
                                function() {
                                    var label = jQuery( this ).find( 'td:eq(0)' ).data( 'export-label' ) || jQuery( this ).find( 'td:eq(0)' ).text();
                                    var the_name = jQuery.trim( label ).replace( /(<([^>]+)>)/ig, '' ); // Remove HTML
                                    var the_value = jQuery.trim( jQuery( this ).find( 'td:eq(2)' ).text() );
                                    var value_array = the_value.split( ', ' );

                                    if ( value_array.length > 1 ) {
                                        // If value have a list of plugins ','
                                        // Split to add new line
                                        var output = '';
                                        var temp_line = '';
                                        jQuery.each(
                                            value_array, function( key, line ) {
                                                temp_line = temp_line + line + '\n';
                                            }
                                        );

                                        the_value = temp_line;
                                    }

                                    report = report + '' + the_name + ': ' + the_value + "\n";
                                }
                            );
                        }
                    }
                );

                try {
                    jQuery( "#debug-report" ).slideDown();
                    jQuery( "#debug-report textarea" ).val( report ).focus().select();
                    jQuery( this ).fadeOut();

                    return false;
                } catch ( e ) {
                    console.log( e );
                }

                return false;
            }
        );

        jQuery( document ).ready(
            function( $ ) {
                $( 'body' ).on(
                    'copy', '#copy-for-support', function( e ) {
                        e.clipboardData.clearData();
                        e.clipboardData.setData( 'text/plain', $( '#debug-report textarea' ).val() );
                        e.preventDefault();
                    }
                );
            }
        );
    </script>
</div>