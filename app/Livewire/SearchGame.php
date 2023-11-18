<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;

class SearchGame extends Component
{
    public $search="";
    public function render()
    {
        if(!$this->search){
            $games =Game::all();
        }else{
            $games= Game::where("name","LIKE","%".$this->search."%")
            ->orWhere("creator","LIKE","%".$this->search."%")
            ->get();
        }

        return view('livewire.search-game', compact('games'));
    }
}
