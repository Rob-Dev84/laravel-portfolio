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
                'title' => __('portfolio.projectTitle1'),
                // 'image' => url('/img/logo.png'),
                'image' => url('https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg'),
                'link' => 'https://github.com/Rob-Dev84/FantasyCalcio',
            ],
            [
                'category' => ['PHP', 'VanillaJS'],
                'title' => __('portfolio.projectTitle2'),
                'image' => url('/img/marioBuono.png'),
                'link' => 'https://www.mariobuono.it/',
            ],
            [
                'category' => ['PHP', 'Bootstrap', 'JQuery'],
                'title' => __('portfolio.projectTitle3'),
                'image' => url('/img/wrm.png'),
                'link' => 'https://wrm.solutions/',
            ],
            [
                'category' => ['Laravel', 'Tailwind', 'AlpineJs'],
                'title' => __('portfolio.projectTitle4'),
                'image' => url('/img/wrm.png'),
                'link' => '/',
            ],
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
