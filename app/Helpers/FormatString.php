<?php
namespace App\Helpers;

class FormatString
{
    public static function formatTitle( $title=null )
    {
        $base_title = "Laracarte - List of artisans";
        if($title)
        {
            $base_title = $title . " | ". $base_title;
        }
        return $base_title;
    }
}