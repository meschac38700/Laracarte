<?php
namespace App\Helpers;

class PageUtilities
{

    public static function activePage( $page, $title )
    {
        return (strtolower($title) === strtolower($page) )? "active": "";
    }
}