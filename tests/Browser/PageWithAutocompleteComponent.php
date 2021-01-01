<?php

namespace LivewireAutocomplete\Tests\Browser;

use Livewire\Component;

class PageWithAutocompleteComponent extends Component
{
    public $results = [
        'bob',
        'john',
        'bill'
    ];
    public function render()
    {
        return
<<<'HTML'
<div dusk="page">
    <x-lwc::autocomplete resultsProperty="results" />
</div>
HTML;
    }
}