<?php

namespace App\View\Components;

use Illuminate\View\Component;

class largeMovieCard extends Component
{

    public $title;
    public $imgUrl;
    public $releaseDate;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $title, $imgUrl, $releaseDate)
    {
        //
        $this->id = $id;
        $this->title = $title;
        $this->imgUrl = $imgUrl;
        $this->releaseDate = $releaseDate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.large-movie-card');
    }
}
