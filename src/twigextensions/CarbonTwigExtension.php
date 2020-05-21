<?php

namespace craftplugins\carbon\twigextensions;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Class CarbonTwigExtension
 *
 * @package craftplugins\carbon\twigextensions
 */
class CarbonTwigExtension extends AbstractExtension
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

    /**
     * @return array|\Twig\TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('carbon', [$this, 'getCarbon']),
        ];
    }

    /**
     * @return array|\Twig\TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('carbon', [$this, 'getCarbon']),
        ];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'Carbon';
    }
}
