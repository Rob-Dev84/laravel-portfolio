<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{

    public array $navigationItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => __('navbar.About'), 'href' => '#about'],
            // ['label' => __('navbar.Education'), 'href' => '#education'],
            ['label' => __('navbar.Projects'), 'href' => '#portfolio'],
            ['label' => __('navbar.Videos'), 'href' => '#videos'],
            ['label' => __('navbar.Contacts'), 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
