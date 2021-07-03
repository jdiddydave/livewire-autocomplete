<?php

namespace LivewireAutocomplete\Tests\Browser\OptionsAttributesTest;

use Laravel\Dusk\Browser;
use Livewire\Livewire;
use LivewireAutocomplete\Tests\Browser\TestCase;

class OptionsAttributesTest extends TestCase
{
    /** @test */
    public function custom_attribute_names_can_be_passed_in_via_options()
    {
        $this->browse(function (Browser $browser) {
            Livewire::visit($browser, OptionsCustomAttributesComponent::class)
                ->click('@autocomplete-input')
                ->waitForLivewire()->click('@result-1')
                ->assertSeeIn('@input-text-output', 'john')
                ->assertSeeIn('@selected-slug-output', 'B')
                ;
        });
    }
}