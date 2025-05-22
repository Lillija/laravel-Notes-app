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
            'content' => $request['content'],
        ]);
        return redirect('/notes');
    }

    public function show($id)
    {
        return view("show", ["notes" => Note::findOrFail($id)]);
    }

    public function destroy($id)
    {
        $notes = Note::find($id);
        $notes->delete();
        return redirect("/notes");
    }
    public function edit($id)
    {
        $notes = Note::find($id);
        return view("edit", ["note" => Note::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $notes = Note::find($id);
        $notes->title = $request->title;
        $notes->content = $request->content;
        $notes->save();
        return redirect("/notes");
    }
}
