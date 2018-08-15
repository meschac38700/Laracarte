<?php
namespace App\Helpers;

class PageUtilities
{

    public static function activePage( $route )
    {
        return \Route::is( strtolower($route) )? "active": "";
    }
}