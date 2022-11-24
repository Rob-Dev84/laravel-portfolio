<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind', 'AlpineJs'],
                'title' => 'Fantasy Football - working in progress',
                // 'image' => url('/img/logo.png'),
                'image' => url('https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg'),
                'gitHub' => 'https://github.com/Rob-Dev84/FantasyCalcio',
            ],
            [
                'category' => ['PHP', 'VanillaJS'],
                'title' => 'Business showcase website',
                'image' => url('/img/marioBuono.png'),
                'gitHub' => 'https://www.mariobuono.it/',
            ],
            [
                'category' => ['PHP', 'Bootstrap', 'JQuery'],
                'title' => 'Task Management System',
                'image' => url('/img/wrm.png'),
                'gitHub' => 'https://wrm.solutions/',
            ]
        ];

        // $this->tabs = Arr::pluck($this->items, 'category');
        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
