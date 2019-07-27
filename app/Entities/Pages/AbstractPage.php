<?php

namespace Craftsman\Entities\Pages;

use Craftsman\Contracts\Pages\IPage;

abstract class AbstractPage implements IPage
{
    protected $page_title;
    protected $menu_title;
    protected $capability;
    protected $menu_slug;
    protected $icon_url;
    protected $position;

    public function __construct()
    {
        add_action('admin_menu', array($this, 'init'));
    }

    public function init()
    {
        add_menu_page(
            $this->page_title,
            $this->menu_title,
            $this->capability,
            $this->menu_slug,
            array($this, 'display'),
            $this->icon_url,
            $this->position
        );
    }

    public function display()
    { }
}
