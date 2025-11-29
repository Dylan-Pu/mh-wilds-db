<?php

namespace App\Controllers;

use App\Models\Monster;           
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MonsterController extends Controller
{
    public function index()
    {
        $monsters = Monster::all();
        return view('monsters.index', compact('monsters'));
    }

    public function show($slug)
    {
        $monster = Monster::where('slug', $slug)
                        ->with(['drops'])
                        ->firstOrFail();
                        
        return view('monsters.show', compact('monster'));
    }
}