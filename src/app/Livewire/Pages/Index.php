<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.index')
            ->layout('components.layouts.app', [
                'title' => 'welcome page | showcase application',
                'description' => 'This is a showcase application built with Laravel and Livewire.',
                'keywords' => 'laravel, livewire, showcase, application',
                'canonical' => url('/'),
                'author' => 'emeka',
            ]);
    }
}