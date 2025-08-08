<?php

namespace TlegenBayangali\ProgressBar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TlegenBayangali\ProgressBar\ProgressBar
 */
class ProgressBar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TlegenBayangali\ProgressBar\ProgressBar::class;
    }
}
