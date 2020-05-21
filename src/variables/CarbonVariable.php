<?php

namespace craftplugins\carbon\variables;

use Carbon\Carbon;
use Carbon\CarbonInterface;

/**
 * Class CarbonVariable
 *
 * @package craftplugins\carbon\variables
 */
class CarbonVariable
{
    /**
     * @param null $var
     *
     * @return \Carbon\CarbonInterface
     */
    public function getCarbon($var = null): CarbonInterface
    {
        return Carbon::make($var);
    }
}
