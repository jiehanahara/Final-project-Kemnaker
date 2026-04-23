<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Zone;

class AttractionController extends Controller
{
    public function index(Request $request)
    {
        $attractions = Attraction::with('zone')
            ->orderBy('id')
            ->paginate(5)
            ->withQueryString();

        return view('Admin.pages.attraction.index', compact('attractions'));
    }

    public function create()
    {
        $zones = Zone::all();
        return view('Admin.pages.attraction.create', compact('zones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'zone_id' => 'required|exists:zones,id',
            'name' => 'required',
            'description' => 'nullable',
            'ticket_price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $attraction = new Attraction();
        $attraction->zone_id = $request->zone_id;
        $attraction->name = $request->name;
        $attraction->description = $request->description;
        $attraction->ticket_price = $request->ticket_price;

        // ✅ Proper image upload (Laravel way)
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('attractions', 'public');
            $attraction->image = $path;
        }

        $attraction->save();

        return redirect()->route('Admin.pages.attraction.index')
            ->with('success', 'Attraction created successfully.');
    }

    public function show($id)
    {
        $attraction = Attraction::findOrFail($id);
        return view('Admin.pages.attraction.show', compact('attraction'));
    }

    public function edit($id)
    {
        $attraction = Attraction::findOrFail($id);
        $zones = Zone::all(); // ✅ needed for dropdown

        return view('Admin.pages.attraction.edit', compact('attraction', 'zones'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'zone_id' => 'required|exists:zones,id',
            'name' => 'required',
            'description' => 'nullable',
            'ticket_price' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $attraction = Attraction::findOrFail($id);
        $attraction->zone_id = $request->zone_id;
        $attraction->name = $request->name;
        $attraction->description = $request->description;
        $attraction->ticket_price = $request->ticket_price;

        // ✅ Update image if new one uploaded
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('attractions', 'public');
            $attraction->image = $path;
        }

        $attraction->save();

        return redirect()->route('Admin.pages.attraction.index')
            ->with('success', 'Attraction updated successfully.');
    }

    public function destroy($id)
    {
        $attraction = Attraction::findOrFail($id);
        $attraction->delete();

        return redirect()->route('Admin.pages.attraction.index')
            ->with('success', 'Attraction deleted successfully.');
    }
}