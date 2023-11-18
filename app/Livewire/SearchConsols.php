<?php

namespace App\Livewire;

use App\Models\Consol;
use Livewire\Component;

class SearchConsols extends Component
{
    public $search="";
    public function render()

    {
        if(!$this->search){
            $consols =Consol::all();
        }else{
            $consols= Consol::where("name","LIKE","%".$this->search."%")
            ->orWhere("creator","LIKE","%".$this->search."%")
            ->get();
        }
        return view('livewire.search-consols', compact('consols'));
    }
}
