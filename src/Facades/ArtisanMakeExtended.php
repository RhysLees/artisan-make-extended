<?php

namespace RhysLees\ArtisanMakeExtended\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RhysLees\ArtisanMakeExtended\ArtisanMakeExtended
 */
class ArtisanMakeExtended extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RhysLees\ArtisanMakeExtended\ArtisanMakeExtended::class;
    }
}
