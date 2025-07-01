<?php

namespace ConnorHowell\LaravelGitVersion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ConnorHowell\LaravelGitVersion\LaravelGitVersion
 */
class LaravelGitVersion extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ConnorHowell\LaravelGitVersion\LaravelGitVersion::class;
    }
}
