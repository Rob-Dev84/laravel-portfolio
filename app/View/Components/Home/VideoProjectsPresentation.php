<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoProjectsPresentation extends Component
{

    public array $videoProjectsPresentation = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoProjectsPresentation = [
            [
                'videoId' => 'aL80DKQTsEA',
                'title' => 'Full stack application application with Laravel, Tailwind and AlpineJS',
                'description' => url('https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg'),
            ],
            [
                'videoId' => 'aL80DKQTsEA',
                'title' => 'Full stack application application with Laravel, Tailwind and AlpineJS',
                'description' => url('https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg'),
            ],
            [
                'videoId' => 'aL80DKQTsEA',
                'title' => 'Full stack application application with Laravel, Tailwind and AlpineJS',
                'description' => url('https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg'),
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-projects-presentation');
    }
}
