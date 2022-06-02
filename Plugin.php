<?php namespace Goosy\Leaderboard;

use Backend;
use System\Classes\PluginBase;

/**
 * Leaderboard Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Leaderboard',
            'description' => 'No description provided yet...',
            'author'      => 'Goosy',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Goosy\Leaderboard\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'goosy.leaderboard.some_permission' => [
                'tab' => 'Leaderboard',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'leaderboard' => [
                'label'       => 'Leaderboard',
                'url'         => Backend::url('goosy/leaderboard/scores'),
                'icon'        => 'icon-signal',
                'permissions' => ['goosy.leaderboard.*'],
                'order'       => 500,
                'sideMenu' => [
                    'scores' => [
                        'label' => 'scores',
                        'icon'  => 'icon-code',
                        'url'   => Backend::url('goosy/leaderboard/scores'),
                        'permissions' => ['cptmeatball.pricetables.access_prices']
                    ],
                    'game' => [
                        'label' => 'games',
                        'icon'  => 'icon-briefcase',
                        'url'   => Backend::url('goosy/leaderboard/games'),
                        'permissions' => ['cptmeatball.pricetables.access_prices']
                    ]
                ]
            ],
        ];
    }
}
