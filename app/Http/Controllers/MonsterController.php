<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function index()
    {
        $monsters = Monster::all();
        return view('monsters.index', compact('monsters'));
    }

    public function show($slug)
    {
        $monster = Monster::where('slug', $slug)->with(['parts', 'drops'])->firstOrFail();
        return view('monsters.show', compact('monster'));
    }
}
