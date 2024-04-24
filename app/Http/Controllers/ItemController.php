<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $items = Item::all(); // Get all items
    return view('items.index', compact('items')); // Pass items to the view
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create'); // Returns the view with the item creation form
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $item = new Item([
            'name' => $request->name,
            'site' => $request->site,
            'description' => $request->description
        ]);
        $item->save();

        return redirect()->route('items.index')->with('success', 'Item created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);
        return view('items.show', compact('item'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'site' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully!');
    }

}
