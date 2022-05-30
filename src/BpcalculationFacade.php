<?php

namespace Devpac\Bpcalculation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devpac\Bpcalculation\Skeleton\SkeletonClass
 */
class BpcalculationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bpcalculation';
    }
}
