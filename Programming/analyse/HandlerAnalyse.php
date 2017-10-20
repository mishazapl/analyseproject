<?php

namespace liw\Programming\analyse;

class HandlerAnalyse
{
    public static function parseHeaderText($a)
    {
        $result =  pq($a)->text();
        return $result;
    }

    public static function parseHeaderHtml($a)
    {
        $result =  pq($a)->html();
        return $result;
    }

    public static function parseHeaderSelect($a,$attr)
    {
        $result = pq($a)->attr($attr);
        return $result;
    }

}