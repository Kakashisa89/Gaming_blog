<?php

namespace App\Http\Controllers;

use App\Models\Consol;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware("auth")->except("index", "show");
    }
    public function index()
    {
        /* $consol = Consol::all(); */
        return view("console.index", /* compact("consol") */);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $games = Game::all();
        return view("console.create", compact("games"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$request->file('logo')) {
            $img = 'default\default-image.png';
        } else {
            $img = $request->file('logo')->store('public/consol');
        }


        $console = Consol::create([

            'name' => $request->name,
            'creator' => $request->creator,
            'data' => $request->data,
            'logo' => $img,
            'info' => $request->info,
            'user_id' => Auth::user()->id,


        ]);
        $console->games()->attach($request->games);


        return redirect()->route('console.index')->with('consolCreate', "La console $console->name e stata inserita correttamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Consol $consol)
    {
        return view('console.show', compact('consol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consol $consol)
    {
        $games = Game::all();
        return view('console.edit', compact('consol', 'games'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consol $consol)
    {
      /*   if (!$request->file('logo')) {
            $img = 'default/default-img.png';
        } else {
            $img = $request->file('logo')->store('public/consol');
        }*/

        $consol->update([
            'name' => $request->name,
            'creator' => $request->creator,
            'data' => $request->data,
            'info' => $request->info,
            //metodo alternativo per salvare l'immagine corrente o sostituirla
            'logo' => $request->file('logo') ? $request->file('logo')->store('public/consol') : $consol->logo,
        ]);
       /*  if ($request->file('logo')) {
        } else {
            $consol->update([
                'name' => $request->name,
                'creator' => $request->creator,
                'data' => $request->data,
                'info' => $request->info,
            ]);
        };*/

        //attach attacca i giochi alla console
        $consol->games()->detach();
        //detach stacca i giochi dalla console
        $consol->games()->attach($request->games);


        return redirect()->route('console.index')->with('consolUpdate', "Console $consol->name modificata con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consol $consol)
    {
        $consol->games()->detach();
        $consol->delete();
        return redirect()->back()->with('consolDelete', "Console $consol->name eliminata con successo");
    }
}
