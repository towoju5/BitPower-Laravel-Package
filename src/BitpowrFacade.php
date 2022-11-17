<?php

namespace Towoju5\Bitpowr;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Towoju5\Bitpowr\Skeleton\SkeletonClass
 */
class BitpowrFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bitpowr';
    }
}
