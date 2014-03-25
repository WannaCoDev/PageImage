<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: maskas
 * Date: 3/25/14
 * Time: 10:14 AM
 */

namespace Plugin\PageImage;


class Event {


    public static function ipPageUpdated($data)
    {
        $pageId = $data['pageId'];
        if (empty($data['pageImage']) || !is_array($data['pageImage'])) {
            $data['pageImage'] = array();
        }
        Model::updatePageImages($pageId, $data['pageImage']);
    }


    public static function ipPageRemoved($data)
    {
        $pageId = $data['pageId'];
        Model::unbindImages($pageId);
    }

}
