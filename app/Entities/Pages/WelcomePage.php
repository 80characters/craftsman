<?php

namespace Craftsman\Entities\Pages;

use Craftsman\Contracts\Pages\IWelcomePage;

class WelcomePage extends AbstractPage implements IWelcomePage
{
    public function __construct()
    {
        $this->page_title = 'Craftsman';
        $this->menu_title = 'Craftsman';
        $this->capability = 'manage_options';
        $this->menu_slug = 'craftsman-page';
        $this->icon_url = 'dashicons-image-filter';

        parent::__construct();
    }

    public function display()
    {
        
    }
}
