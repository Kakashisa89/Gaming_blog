<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Computer;

class SearchComputer extends Component
{
    public $search="";
    public function render()
    {

        if(!$this->search){
            $computers =Computer::all();
        }else{
            $computers=Computer::where("model","LIKE","%".$this->search."%")
            ->orWhere("creator","LIKE","%".$this->search."%")

            ->get();

        }
        return view('livewire.search-computer', compact('computers'));
    }
}
