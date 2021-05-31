<?php

namespace App\Libraries;

/**
 * Class UrlHelper
 *
 * @package App\Libraries
 */
class UrlHelper
{
    /**
     * Class properties go here.
     * -------------------------------------------------------------------
     * public, private, protected, static and const.
     */

    // -------------------------------------------------------------------

    public static function detail_url($detail_view, $ID, $url_title)
    {
        if (!empty($ID) && !empty($url_title) && !empty($detail_view)) {
            return anchor($detail_view . '/view/' . $ID, $url_title, 'title="' . $url_title . '"');
        } elseif (empty($ID) && !empty($url_title)) {
            return $url_title;
        } else {
            return '-';
        }
    }

    /**
     * __construct ()
     * -------------------------------------------------------------------
     *
     * Class    Constructor
     *
     * NOTE: Not needed if not setting values or extending a Class.
     *
     */
    public function __construct()
    {
    }

    // -------------------------------------------------------------------
} // End of Name Library Class.

/**
 * -----------------------------------------------------------------------
 * Filename: ExampleLibrary.php
 * Location: ./app/Libraries/ExampleLibrary.php
 * -----------------------------------------------------------------------
 */