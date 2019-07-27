<?php

namespace Craftsman\Entities\Pages;

use Craftsman\Contracts\Pages\IWelcomePage;

class WelcomePage extends AbstractPage implements IWelcomePage
{
    public function __construct()
    {
        $this->page_title = 'ABC';
        $this->menu_title = 'ABC';
        $this->capability = 'manage_options';
        $this->menu_slug = 'abc';
        
        parent::__construct();
    }
}
