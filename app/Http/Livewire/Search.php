<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Dusterio\LinkPreview\Client;

class Search extends Component
{
    public $url;
    public $result;
    // public $result;
    protected $rules = [
        'url' => 'required|active_url',
    ];

    public function updated($url)
    {
        $this->validateOnly($url);
        // dd($this->url);
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
            echo "Oh no!";
        }
        $preview = $previewClient->getPreview('general');
        // Convert output to array
        $this->result = $preview->toArray();
        // dd($result);
        $this->url = "";
    }

    public function render()
    {
        // dd($this->result);
        return view('livewire.search',['data' => $this->result]);
    }
}