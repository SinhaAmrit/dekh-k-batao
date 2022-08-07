<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Search extends Component
{
    public $url;
    public $preview;
    public $result;
    protected $rules = [
        'url' => 'required|active_url',
    ];

    public function resetValues()
    {
        $this->reset(['url', 'preview']);
    }

    public function updated($url)
    {
        $this->validateOnly($url);
    }
    
    public function searchURL()
    {
        $validatedData = $this->validate();
        $api_url = 'https://api.peekalink.io/';
        $response = Http::withHeaders([
            'X-API-Key' => '6879c893-666c-4568-b8a3-351d21d6b3b6'
        ])->post($api_url, [ 'link' => $this->url, ]);
        $this->preview = json_decode($response->getBody(), true);
        // dd($this->preview);
        // return $this->preview['url'];
        // $this->preview = $preview->toArray();
    }

    public function render()
    {
        return view('livewire.search',['data' => $this->preview]);
    }
}