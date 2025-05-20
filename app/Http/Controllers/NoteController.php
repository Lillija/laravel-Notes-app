<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\View\View;


class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes', ['notes' => $notes]);
    }

    public function create()
    {
        return view("create");
    }
    public function store(Request $request)
    {
        $notes = Note::create([
            'title' => $request['title'],
            'content' => $request['title'],
        ]);
        return redirect('/notes');
    }
}
