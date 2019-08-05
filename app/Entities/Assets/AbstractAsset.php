<?php

namespace Craftsman\Entities\Assets;

use Craftsman\Contracts\Assets\IAsset;

abstract class AbstractAsset implements IAsset
{
    protected $type;

    public function __construct()
    {
        $hookName = 'admin_enqueue_scripts';
        if (self::FOR_FRONT === $this->with()) {
            $hookName = 'wp_enqueue_scripts';
        }

        add_action($hookName, array($this, 'register'));
    }

    public function register()
    {
    }

    public function queues()
    {
    }

    public function with()
    {
        return in_array($this->type, [self::FOR_BACK, self::FOR_FRONT]) ? $this->type : IAsset::FOR_FRONT;
    }
}
