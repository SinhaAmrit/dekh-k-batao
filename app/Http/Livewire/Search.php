<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $url;

    protected $rules = [
        'url' => 'required|active_url',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        dd($this->url);
    }

    public function render()
    {
        return view('livewire.search');
    }

    public function searchURL()
    {
        $validatedData = $this->validate();
 
        URL::create($validatedData);
    }
}