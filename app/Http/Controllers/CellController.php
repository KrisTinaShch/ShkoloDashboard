<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cell;

class CellController extends Controller
{
    public function index()
    {
        $cells = Cell::all();
        return view('cells.index', compact('cells'));
    }
    public function edit($id)
    {
        $cell = Cell::findOrFail($id);
        return view('cells.edit', compact('cell'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url',
            'color' => 'required|string',
        ]);

        $cell = Cell::findOrFail($id);
        $cell->update($validated);

        return redirect()->route('cells.index')->with('success', '');
    }

    public function deleteLink($id)
    {
        $cell = \App\Models\Cell::findOrFail($id);

        $cell->link = null;
        $cell->save();

        return redirect()->route('cells.index')->with('success', 'Link successfully removed');
    }
    public function editLink($id)
    {
        $cell = \App\Models\Cell::findOrFail($id);

        return view('cells.edit', compact('cell'));
    }
    public function updateLink(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url',
            'color' => 'nullable|string',
        ]);

        $cell = \App\Models\Cell::findOrFail($id);

        $cell->update($validated);

        return redirect()->route('cells.index')->with('success', 'Link successfully updated');
    }


}
