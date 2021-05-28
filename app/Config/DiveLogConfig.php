<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class DiveLogConfig extends BaseConfig
{
    public $siteName = 'My Great Site';
    public $siteEmail = 'webmaster@example.com';

    /**
     * number of items per page in the lists
     */
    public $max_list = 50;

    /**
     * Set to true if you want to display the profile in the dive detail
     */
    public $show_profile = true;

    /**
     * comments in RTF format?
     */
    public $dlog_comments_rtf = true;

    /**
     * specify what to show in user information
     * @todo make these option work
     */
    public $user_show = true;
    public $user_show_general = true;
    public $user_show_comments = true;
    public $user_show_photo = true;
    public $user_show_certs = true;
    public $user_show_medical = true;

    /**
     * Specify if equipment service reminders should be shown
     * and the number of days before the due date to start reminding
     * @todo make this work
     */
    public $equipment_service_reminder = true;
    public $equipment_service_warning = 30;

    /**
     * Comma separated
     * Specify if lists (like equipment used, dives at site etc.)
     * should be comma separated.
     */
    public $comma_separated = true;
    public $comma_separator = ' |';

    /**
     * Enable thumbs
     */
    public $divepics_preview = true;

    /**
     * Enable resizing of the uploaded pictures by GD
     * If set to false, full size images will be shown and the
     * thumbnails will be generated each time (cpu usage)
     */
    public $enable_resize = true;

    /**
     * Set this to true to use the new resize class from http://www.verot.net/php_class_upload.htm
     * Not fully tested, so this option is here temporarly
     */
    public $new_resize_class = true;

    /**
     * Max filesize of images which are resized, this setting is depending on your server
     * and php settings
     */
    public $max_resize_size = 1812000;

    /**
     * Set the maximum width and height of the thumbnails, which are created automaticly
     * Usually a 4:3 ratio, e.g. 100:75, 120:100
     * Width and height are set in px
     */
    public $thumb_width = 100;
    public $thumb_height = 75;

    /**
     * Set the maximum width of the pictures in the gallery
     * Width is set in px
     */
    public $pic_width = 800;

    /**
     * get exif data from the images
     */
    public $get_exif_data = true;

    /**
     * DIVE PROFILE SETTINGS
     * name of the graphic image to use as the dive profile background
     * image size is expected to be 550 x 400
     * set to "" for no background image
     * public $graph_background_image = "images/jellyfish-and-divers.jpg";
     */
    public $graph_background_image = '';

    /**
     *  Set the background color for the diveprofile and pie chart
     */
    public $background_color = '#ffffff';

    /**
     * set to 'true' to show Y scales on two sides
     * set to 'false' to show Y scale only on left side
     */
    public $graph_show_two_scales = true;

    /**
     * set to 'true' to show both metric and imperial units on chart scales
     * set to 'false' to show only the length units specified by the unit conversion value
     */
    public $graph_show_both_units = true;

    /**
     * UNIT CONVERSION
     * set values to true if you want to convert from metric units to imperial units,
     * or to false if values should be left as metric units.
     */

    /**
     * Define date format dmy- result in day-month-year
     */
    public $date_format = 'date:dmy:-';

    /**
     * metres to feet
     */
    public $length = false;

    /**
     * bar to psi
     */
    public $pressure = false;

    /**
     * kilograms (kg) to pounds (lbs)
     */
    public $weight = false;

    /**
     * Celsius to Farenheight
     */
    public $temp = false;

    /**
     * litres to cubic feet
     */
    public $volume = false;

    /**
     * Decimal separator
     */
    public $decsep = ',';

    /**
     * default O2 %
     */
    public $default_o2 = 20.9;
    public $default_maxppo2 = 1.6;

    /**
     * Lattitue and Longitude format
     * Valid values are:
     * d - degrees - ddd.dddddd
     * dm - degress & minutes - ddd mm.mmmm
     * dms - degrees, minutes & seconds - ddd mm ss.ss
     */
    public $coord_format = 'dm';
}