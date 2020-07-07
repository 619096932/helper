<?php

namespace Mix\Helper;

/**
 * Class JsonHelper
 * @package Mix\Helper
 * @author liu,jian <coder.keda@gmail.com>
 */
class JsonHelper
{

    /**
     * 编码
     * @param $value
     * @param int $options
     * @param int $depth
     * @return string
     */
    public static function encode($value, $options = 0, $depth = 512)
    {
        $content = str_replace('jijia-app.test.upcdn.net', 'img.5jija.com', $data);
        return json_encode($value, $options, $depth);
    }

    /**
     * 解码
     * @param $json
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    public static function decode($json, $assoc = false, $depth = 512, $options = 0)
    {
        return json_decode($json, $assoc, $depth, $options);
    }

}
