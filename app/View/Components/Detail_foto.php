<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Detail_foto extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;

    public function __construct($image)
    {
        $this->image = $image;
    }

    public function render()
    {
        return view('components.detail_foto');
    }
    
}
