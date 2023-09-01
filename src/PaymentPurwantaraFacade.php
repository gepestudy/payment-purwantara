<?php

namespace Gepe\PaymentPurwantara;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gepe\PaymentPurwantara\Skeleton\SkeletonClass
 */
class PaymentPurwantaraFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'payment-purwantara';
    }
}
