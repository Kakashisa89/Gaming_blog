<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComputerController extends Controller
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
        $computer = Computer::all();
        return view("computer.index", compact("computer"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $games= Game::all();
        return view("computer.create", compact("games"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!$request->file("logo")) {
            $img = "'default\default-image.png'";
        } else {
            $img = $request->file("logo")->store("public/computer");
        }

        $computer = Computer::create([
            "model" => $request->model,
            "creator" => $request->creator,
            "data" => $request->data,
            "info" => $request->info,
            "logo" => $img,
            "user_id" => Auth::user()->id
        ]);

        $computer->games()->attach($request->games);


        return redirect()->route("computer.index")->with("ComputerCreate", "Computer $computer->model è stato aggiunto con successo");
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        return view("computer.show", compact("computer"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computer $computer)
    {
        $games= Game::all();
        return view("computer.edit", compact("computer","games"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        if (!$request->file('logo')) {
            $img = 'default/default-image.png';
        } else {
            $img = $request->file('logo')->store('public/computer');
        };


        if ($request->file("logo")) {
            $computer->update([
                "model" => $request->model,
                "creator" => $request->creator,
                "data" => $request->data,
                "info" => $request->info,
                "logo" => $img,
            ]);
        } else {
            $computer->update([
                "model" => $request->model,
                "creator" => $request->creator,
                "data" => $request->data,
                "info" => $request->info,


            ]);
        }

        $computer->games()->detach();
        $computer->games()->attach($request->games);
        return redirect(route("computer.index"))->with("computerUpdate", "Computer $computer->model è stato modificato con successo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        $computer->games()->detach();
        $computer->delete();
        return redirect()->back()->with("computerDelete","Computer $computer->model è stato eliminato con successo");
    }
}
