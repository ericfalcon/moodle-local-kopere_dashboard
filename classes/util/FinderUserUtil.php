<?php
/**
 * User: Eduardo Kraus
 * Date: 11/07/17
 * Time: 11:12
 */

namespace local_kopere_dashboard\util;

defined('MOODLE_INTERNAL') || die();

class FinderUserUtil
{
    public static function find ( $key, $value )
    {
        global $DB;

        if ( strlen ( $value ) == 0 )
            return null;

        $user = $DB->get_record ( 'user', array( $key => $value, 'deleted' => 0 ), '*', IGNORE_MULTIPLE );

        return $user;
    }
}