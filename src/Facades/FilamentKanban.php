<?php

namespace Solutionforest\FilamentKanban\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Solutionforest\FilamentKanban\FilamentKanban
 */
class FilamentKanban extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Solutionforest\FilamentKanban\FilamentKanban::class;
    }
}
