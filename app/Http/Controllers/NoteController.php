<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\View\View;


class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes',[ 'notes' => $notes]);
    } 
}


