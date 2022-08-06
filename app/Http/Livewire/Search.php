<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Dusterio\LinkPreview\Client;

class Search extends Component
{
    public $url;
    public $result;
    protected $rules = [
        'url' => 'required|active_url',
    ];

    public function resetValues()
    {
        $this->reset(['url', 'result']);
    }

    public function updated($url)
    {
        $this->validateOnly($url);
    }
    
    public function searchURL()
    {
        $validatedData = $this->validate();
        $previewClient = new Client($this->url);
        // Get previews from all available parsers
        // If there is a network error (DNS, connect, etc), throw ConnectionErrorException
        try
        {
            $previews = $previewClient->getPreviews();
        } 
        catch (\Dusterio\LinkPreview\Exceptions\ConnectionErrorException $e)
        {
            session()->flash('message', 'Oh no! Something went wrong');
            return view('livewire.search');
        }
        $preview = $previewClient->getPreview('general');
        // Convert output to array
        $this->result = $preview->toArray();
    }

    public function render()
    {
        return view('livewire.search',['data' => $this->result]);
    }
}