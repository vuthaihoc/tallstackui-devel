<?php

namespace TasteUi\View\Components\Base;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class Form extends Component
{
    public function render(): View
    {
        return view('taste-ui::components.input');
    }
}
