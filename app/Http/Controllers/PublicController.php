<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Consol;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Composer;

class PublicController extends Controller
{
    public function __construct(){
        $this->middleware("auth")->except('home');
    }
   public function home () {
       $consols=Consol::orderBy('created_at','desc')->take('4')->get();
       $computer=Computer::orderBy('created_at','desc')->take('4')->get();
       $games=Game::orderBy('created_at','desc')->take('4')->get();
        return view('welcome', compact('consols','computer','games'));
    }

    public function index(){
        $console=Consol::all();
        $computer=Computer::all();
        $game=Game::all();
        
        return view('profile.index',Compact('console','computer','game'));
    }
}
