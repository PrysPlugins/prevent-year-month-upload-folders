<?php
/**
 * Plugin Name: Prevent Year/Month Uploads
 * Plugin URI: https://github.com/JCPry/prevent-year-month-upload-folders
 * Description: Prevent WordPress from putting your uploads into Year/Month folders. Most helpful for Multisite, where this option generally isn't accessible.
 * Version: 1.0
 * Author: Jeremy Pry
 * Author URI: http://jeremypry.com/
 * License: GPL2
 */

add_filter( 'pre_option_uploads_use_yearmonth_folders', '__return_zero' );
