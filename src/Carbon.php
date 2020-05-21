<?php

namespace craftplugins\carbon;

use Craft;
use craft\base\Plugin;
use craft\web\twig\variables\CraftVariable;
use craftplugins\carbon\twigextensions\CarbonTwigExtension;
use craftplugins\carbon\variables\CarbonVariable;
use yii\base\Event;

/**
 * Class Carbon
 *
 * @package craftplugins\carbon
 */
class Carbon extends Plugin
{
    /**
     * @var Carbon
     */
    public static $plugin;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var string
     */
    public $schemaVersion = '0.1.0';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new CarbonTwigExtension());

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            static function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('carbon', CarbonVariable::class);
            }
        );
    }
}
