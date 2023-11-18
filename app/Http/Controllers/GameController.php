<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Consol;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->except("index", "show");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view("game.index", compact("games"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consol=Consol::all();
        $computer=Computer::all();

        return view("game.create", compact("consol","computer"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$request->file('logo')) {
            $img = 'default\default-image.png';
        } else {
            $img = $request->file('logo')->store('public/game');
        }

        $games = Game::create([
            "name" => $request->name,
            "creator" => $request->creator,
            "data" => $request->data,
            "logo" => $img,
            "info" => $request->info,
            "user_id" => Auth::user()->id,

        ]);
        $games->consols()->attach($request->console);
        $games->computers()->attach($request->computer );
        return redirect()->route("game.index")->with("gameCreate", "Videogioco aggiunto con successo");
    }

    /**
     * Display the specified resource.
     */
     public function show(Game $game)
    {


        return view("game.show", compact("game"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        $consol=Consol::all();
        $computer=Computer::all();

        return view("game.edit", compact("game","consol","computer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        if (!$request->file('logo')) {
            $img = 'default\default-image.png';
        } else {
            $img = $request->file('logo')->store('public/game');
        }

        if ($request->file('logo')) {
            $game->update([
                'name' => $request->name,
                'creator' => $request->creator,
                'data' => $request->data,
                'info' => $request->info,
                'logo' => $img,
            ]);
        } else {
            $game->update([
                'name' => $request->name,
                'creator' => $request->creator,
                'data' => $request->data,
                'info' => $request->info,
            ]);
        };

        $game->computers()->detach();
        $game->computers()->attach($request->computer);


        $game->consols()->detach();
        $game->consols()->attach($request->console);

        return redirect()->route('game.index')->with('gameUpdate', 'Gioco modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
            $game->computers()->detach();
            $game->consols()->detach();
            $game->delete();
            return redirect()->route('game.index')->with('gameDelete', 'Gioco eliminato con successo');
    }
}
