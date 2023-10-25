<?php

namespace TallStackUi\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use TallStackUi\View\Personalizations\Contracts\Personalize;

class Hint extends Component implements Personalize
{
    public function __construct(public ?string $computed = null)
    {
        //
    }

    public function personalization(): array
    {
        return ['text' => 'mt-2 text-sm text-gray-500 dark:text-dark-400'];
    }

    public function render(): View
    {
        return view('tallstack-ui::components.form.hint');
    }
}